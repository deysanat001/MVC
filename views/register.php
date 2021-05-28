<!DOCTYPE html>  
<html>  
<head>  
    <title>Register</title>  
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
}
.control-group {
margin-bottom: 10px;
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
.alert {
  text-align: center;
  padding: 5px;
  background-color: #f44336;
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
        <?php if(isset($_SESSION['error'])){ ?>
          <div class="alert">
            <span class="closebtn" style="background: #FF6347;" onclick="this.parentElement.style.display='none';">&times;</span> 
           <?= $_SESSION['error'] ?>
          </div>
        <?php unset($_SESSION['error']);} ?>
        <?php if(isset($_SESSION['success'])){ ?>
          <div class="alert" style="background: lightgreen;">
            <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span> 
           <?= $_SESSION['success'] ?>
          </div>
        <?php unset($_SESSION['success']); } ?>
    <form method="post" action="submit-register">
        <div class="control-group">
        <input type="text" class="login-field" minlength="2" maxlength="255" placeholder="Name" name="name" id="login-name" required>
        <label class="login-field-icon fui-user" for="login-name"></label>
        </div>
        <div class="control-group">
        <input type="email" class="login-field"  placeholder="Email" name="email" id="login-email" required>
        <label class="login-field-icon fui-user" for="login-email"></label>
        </div>
        <div class="control-group">
        <input type="number" class="login-field" minlength="5" maxlength="10"  placeholder="Phone No" name="phone" id="login-phone" required>
        <label class="login-field-icon fui-user" for="login-phone"></label>
        </div>
        <div class="control-group">
        <input type="text" class="login-field" minlength="2" maxlength="600"  placeholder="Address" name="address" id="login-address" required>
        <label class="login-field-icon fui-user" for="login-address"></label>
        </div>
        <div class="control-group">
        <input type="text" class="login-field" minlength="2" maxlength="255" placeholder="City" name="city" id="login-city" required>
        <label class="login-field-icon fui-user" for="login-city"></label>
        </div>
        <div class="control-group">
        <input type="text" class="login-field" minlength="2" maxlength="255" placeholder="State" name="state" id="login-state" required>
        <label class="login-field-icon fui-user" for="login-state"></label>
        </div>
        <div class="control-group">
        <input type="text" class="login-field" minlength="2" maxlength="255" placeholder="Country" name="country" id="login-country" required>
        <label class="login-field-icon fui-user" for="login-country"></label>
        </div>
        <div class="control-group">
        <input type="number" class="login-field" minlength="4" maxlength="6" placeholder="Zip Code" name="zip" id="login-zip" required>
        <label class="login-field-icon fui-user" for="login-zip"></label>
        </div>
        <div class="control-group">
        <input type="password" class="login-field" minlength="6" maxlength="16" placeholder="password" name="password" id="login-password" required>
        <label class="login-field-icon fui-lock" for="login-password"></label>
        </div>

        <button type="submit" class="btn btn-primary btn-large btn-block" href="#">Register</button>
    </form>
        <a class="login-link" href="login">Already a memeber ?Click here</a>
      </div>
    </div>
  </div>
 <?php print_r($data); ?>
 </body>  
</html>  