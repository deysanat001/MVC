<!DOCTYPE html>  
<html>  
<head>  
    <title>Profile</title>  
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
width: 50%;
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
padding-left: 10%;
}
.control-group {
margin-bottom: 10px;
margin: 5px auto;
width: 80%;
text-align: left;
}

input {
text-align: left;
background-color: #ECF0F1;
border: 2px solid transparent;
border-radius: 3px;
font-size: 16px;
font-weight: 200;
padding: 10px 0;
width: 90%;
transition: border .5s;
padding: 5px;
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

    @media(max-width:700px){
        .login {
        margin: 20px auto;
        width: 300px;
        }
    }
</style>
<body>
  <div class="login">
    <div class="login-screen">
      <div class="app-title">
        <h1>Register</h1>
      </div>

      <div class="login-form">
    <form method="post" action="submit-register">
        <div class="control-group">
            User Id : <?= $data['id'] ?>
        </div>
        <div class="control-group">
            Name : <?= $data['name'] ?>
        </div>
        <div class="control-group">
            Email : <?= $data['email'] ?>
        </div>
        <div class="control-group">
            Phone No : <?= $data['phone'] ?>
        </div>
        <div class="control-group">
            Address : <?= $data['address'] ?>
        </div>
        <div class="control-group">
            City : <?= $data['city'] ?>
        </div>
        <div class="control-group">
            State : <?= $data['state'] ?>
        </div>
        <div class="control-group">
            Country : <?= $data['country'] ?>
        </div>
        <div class="control-group">
            Zip : <?= $data['zip'] ?>
        </div>


        <a type="submit" class="btn btn-danger btn-large btn-block" style="background: red;" href="logout">Logout</a>
    </form>
      </div>
    </div>
  </div>
 </body>  
</html>  