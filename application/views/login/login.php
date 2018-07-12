<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
form {border: 100px solid #f1f1f1;}

input[type=text] {
    width: 30%;
    padding: 12px 20px;
    margin-right: 300px;
    /*display: inline-block;*/
    border: 1px solid #ccc;
    box-sizing: border-box;
}
 input[type=password]{
  width: 30%;
    padding: 12px 20px;
    margin: 8px 0;
    /*display: inline-block;*/
    border: 1px solid #ccc;
    box-sizing: border-box;
 }

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 58px;
    /*margin: 8px 0;*/
    margin-left:310px;
    border: none;
    cursor: pointer;
    width: 10%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 48px 0 27px 0;
}

img.avatar {
    width: 20%;
    border-radius: 50%;
}

.container {
    padding: 16px;
    height: 180px;
    padding-right: 250px;
    padding-left: 374px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: auto;
       padding: 10px 18px;
    }
}
</style>
</head>
<body>
  <div style="justify-content: left;
    margin-left: 25px;
    font-size: 25px;
    padding-top: 0px;
    color:rgb(245, 157, 41);
    font-weight:bold;">
        Enterprise Stackoverflow
    <img src="https://d30y9cdsu7xlg0.cloudfront.net/png/16846-200.png" 
    width="5%" height="5%" alt="image not available">
    </div>

<!-- <h2>Login Form</h2> -->

<form action="user.php" style="border-width-top:70px">
  <div class="imgcontainer" style="margin-top:0px; margin-bottom:8px">
    <img src="images/user.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
    <label for="uname" style="margin-left:79px;"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="uname" required>

    <label for="psw" style="margin-left:81px"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit" style="margin-left:214px;margin-right:3px;padding-left:21px;padding-bottom:10px;padding-top:10px">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  <!-- </div> -->

  <!-- <div class="container" style="background-color:#f1f1f1;height:59px;padding-top:10px"> -->
    <!-- <button type="button " class="cancelbtn" style="margin-left:0px;">Cancel</button> -->
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

</body>
</html>