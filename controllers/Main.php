<?php
session_start();
/**
 * Main controller 
 */

require __DIR__.'./../include/Database.php';
require __DIR__.'./../models/User.php';

class Main extends Database
{
	public $base_url;
	public $url;
	public $user;
	
	function __construct($url,$base_url)
	{
		$this->base_url = $base_url;
		$this->url = $url;
		$this->controller_name = 'login';
		$this->method_name = 'index';
		$url_arr = explode("/", $this->url);
		if($url == $base_url){
			$url_arr = [];
		}

		if(count($url_arr)==1){
			$this->controller_name = "login";
			$this->method_name = "index";
			$this->getParam = [];

		}else if (count($url_arr)==2) {
			$this->controller_name = "login";
			if ($url_arr[1] != "") {
				$this->controller_name = $url_arr[1] ;	
			}
			$this->method_name = "index";
			$this->getParam = [];
		}else{
			$this->controller_name = $url_arr[1];
			$this->method_name = $url_arr[2];
						unset($url_arr[1]);
			unset($url_arr[0]);
			unset($url_arr[1]);
			unset($url_arr[2]);
			$this->getParam = $url_arr;
		}


		$this->user = new User('test_users');

		$this->callMethod();
		
	}

	public function getUrlSegement(){
		return explode("/", $this->url);
		
	}

	public function callMethod(){


		if ($this->controller_name == 'login') {
			if(isset($_SESSION['id'])){
				$this->redirect('profile');
			}else{
				$this->view('login');
			}
			
		}

		else if ($this->controller_name == 'register') {
			$this->view('register');
		}

		else if ($this->controller_name == 'profile') {
			if(isset($_SESSION['id'])){
				$id = $_SESSION['id'];
				$data = $this->user->getProfileData($id)[0];
				$this->view('profile',$data);
			}else{
				$this->redirect('login');
			}

		}

		else if ($this->controller_name == 'submit-register') {
			$data = $_POST;
			$data['password'] = md5($data['password']);
			$data['created_at'] = Date("Y-m-d h:m:s",time());
			if($this->user->userExist($data['email']) == 1){
				if($this->user->registerUser($data) == 1){
					$_SESSION['success'] = "Account created successfully";
					$this->redirect('login');
				}else{
					$_SESSION['error'] = "Error to add data";
					$this->redirect('register');
				}
			}else{
				$_SESSION['error'] = "User already exists";
				$this->redirect('register');
			}

		}

		else if ($this->controller_name == 'submit-login') {
			$data = $_POST;
			$data['password'] = md5($data['password']);
			if($this->user->userExist($data['email']) == 1){
				$_SESSION['error'] = "Can't find your account";
				$this->redirect('login');
			}else{
				$tmp = $this->user->loginUser($data);
				if($tmp == 0 || $tmp == array()){
					$_SESSION['error'] = "Incorrect Credential";
					$this->redirect('login');

				}else{
					$u = $this->user->loginUser($data);
					$_SESSION['id'] = $u[0]['id'];
					$_SESSION['success'] = "Logged in successfully";
					$this->redirect('profile');
				}
			}

			
		}

		else if ($this->controller_name == 'logout') {
			$redirect = "login";
			$this->logout($redirect);
		}

		else{
			$this->view('404',$this->base_url."/login");
		}
	}


	public function view($page,$data=null){
		$_SESSION['data'] = $data;
		require __DIR__.'./../include/view/session_start.php';
		require __DIR__.'./../views/'.$page.'.php';
		require __DIR__.'./../include/view/session_end.php';
	}


	public function logout($redirect){
		$url = $this->base_url."/".$redirect;
		session_destroy();
		header('Location: '.$url);
	}

	public function redirect($redirect){
		$url = $this->base_url."/".$redirect;
		header('Location: '.$url);
	}

	public function session_check(){
		if(isset($_SESSION['id'])){
			return 1;
		}else{
			return 0;
		}
	}



}

?>
