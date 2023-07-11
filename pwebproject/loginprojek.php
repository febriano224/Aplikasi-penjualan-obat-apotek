<!DOCTYPE html>
<html lang="en" dir="ltr">
   <head>
      <meta charset="utf-8">
      <title>Login Form</title>
      <link rel="stylesheet" href="login-regist.css">
      <link rel="stylesheet" href="login.css">
   </head>
   <body>
   <section class="login-register">
      <div class="container">
        <div class="login-block" >
          <a href="#login" style="color: #fff">LOGIN</a>
        </div>
        <div class="regist-block">
          <a href="#regist"style="color: #fff" >REGIST</a>
        </div>
        <div class="overlay" id="login">
          <div class="wrapper">
            <h2 style="color: #fff">Log In</h2>
            <a href="#" class="close">&times;</a>
            <div class="content">
              <div class="container">
                <form action="loginCode.php" method="POST">
    <label style="color: darkorange;" >Username </label>
    <input type="text" name="username" placeholder="Enter your name..." />
    <label style="color: skyblue;">Password</label>
    <input type="password" name="password" placeholder="Enter your password..." />
    <center>
    <input type="submit" name="login" value="Log In" />
    <div class="register">
        <br>
        <p style="color: black;">
            Don't have an account? Create one!
        </p>
    </br>
    </div>
    </center>
</form>
</div>
</div>
</div>
</div>
<div class="overlay" id="regist">
    <div class="wrapper">
        <h2 style="color:#fff ">Register</h2>
        <a href="#" class="close">&times;</a>
        <div class="content">
            <div class="container">
                <form action="loginCode.php" method="POST">
                    <label style="color: red">Username</label>
                    <input type="text" name="username" placeholder="Enter your name..." />
                    <label style="color: #9eb4b5;">Password</label>
                    <input type="password" name="password" placeholder="Enter your password..."  />
                    <center>
                        <br>
                    <div class="policy">
                        <input type="checkbox">
                        <h3>I accept all terms & condition</h3>
                    </div>
                </br>
                    <input type="submit" name="register" value="Register" />
                    
      
                    </center>
                </form>
            </div>
        </div>
    </div>
</div>
    </section>
   </body>
</html>
