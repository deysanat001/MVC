<!DOCTYPE html>  
<html>  
<head>  
    <title>Login</title>  
</head>  
<style type="text/css">
    * {
box-sizing: border-box;
}

*:focus {
  outline: none;
}
body {
font-family: Arial;
background-color: #3498DB;
padding: 50px;
}
.login {
margin: 20px auto;
width: 300px;
}
.login-screen {
background-color: #FFF;
padding: 20px;
border-radius: 5px
}

.app-title {
text-align: center;
color: #777;
}

.login-form {
text-align: center;
}
.control-group {
margin-bottom: 10px;
}

input {
text-align: center;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 250px;
transition: border .5s;
}

input:focus {
border: 2px solid #3498DB;
box-shadow: none;
}

.btn {
  border: 2px solid transparent;
  background: #3498DB;
  color: #ffffff;
  font-size: 16px;
  line-height: 25px;
  padding: 10px 0;
  text-decoration: none;
  text-shadow: none;
  border-radius: 3px;
  box-shadow: none;
  transition: 0.25s;
  display: block;
  width: 250px;
  margin: 0 auto;
}

.btn:hover {
  background-color: #2980B9;
}

.login-link {
  font-size: 12px;
  color: #444;
  display: block;
  margin-top: 12px;

}

.alert {
  text-align: center;
  padding: 5px;
  background-color: #FF6347;
  color: white;
  margin-bottom: 10px;
   border-radius: 5px;

}

.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 12px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
  border-radius: 10px;
}

.closebtn:hover {
  color: black;
}

</style>
<body>
  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Login</h1>
      </div>

      <div class="login-form">
        <?php if(isset($_SESSION['error'])){ ?>
          <div class="alert">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
           <?= $_SESSION['error'] ?>
          </div>
        <?php unset($_SESSION['error']);} ?>
        <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert" style="background: lightgreen;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
           <?= $_SESSION['success'] ?>
          </div>
        <?php unset($_SESSION['success']); } ?>
      <form method="post" action="submit-login">
        <div class="control-group">
        <input type="email" class="login-field" placeholder="Email" name="email" id="login-email" required>
        <label class="login-field-icon fui-user" for="login-email"></label>
        </div>

        <div class="control-group">
        <input type="password" class="login-field" placeholder="password" name="password" id="login-password" required>
        <label class="login-field-icon fui-lock" for="login-password"></label>
        </div>

        <button type="submit" class="btn btn-primary btn-large btn-block" >login</button>
      </form>
        <a class="login-link" href="register">Not a memeber?Click here</a>
      </div>
    </div>
  </div>
 </body>  
</html>  