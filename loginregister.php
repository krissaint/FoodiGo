
<html>

<head>
<title>Login and Register</title>

    <link  href="css/loginstyle1.css" type="text/css" rel="stylesheet">
</head>
<body>
<div class ="background">
  <div class ="form-box">
    <div class = "login-box">
      <div id="bt"></div>
        <button type="button" class="switch" onclick="register()">Register</button>
      <button type="button" class="switch" onclick="login()" >Login</button>


      </div>
      <div class="media-icon">
        <h2 style="margin-bottom: -15px;">Welcome To FoodiGo</h2>

        </div>
        <form  action = "logincheck.php" method="POST" id="register" class= "input">
          <?php if (isset($_GET['error'])) { ?>
                  <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
          <input type ="text" name="userid" id="userid" class="input-field" placeholder="Username" required>

            <input type ="password" class="input-field" name="password" id="password" placeholder="Enter Your Password" required>
            <input type="checkbox" class="check-box"<span>Remember Your Password</span>
            <button type="submit" class="submit-button">Login</button>
          </form>
              <form id="login" action = "registercheck.php" method="POST" class= "input">

                <?php if (isset($_GET['error'])) { ?>
                        <p class="error"><?php echo $_GET['error']; ?></p>
                      <?php } ?>

                      <?php if (isset($_GET['success'])) { ?>
                           <p class="success"><?php echo $_GET['success']; ?></p>
                      <?php } ?>

                          <?php if (isset($_GET['userid'])) { ?>
                                        <input type="text"
                                               name="userid"
                                               class="input-field"
                                               placeholder="Username"
                                               value="<?php echo $_GET['userid']; ?>">
                                   <?php }else{ ?>
                                        <input type="text"
                                               name="userid"
                                               class="input-field"
                                               placeholder="Username">
                                   <?php }?>


                                   <?php if (isset($_GET['username'])) { ?>
                                                 <input type="text"
                                                        name="username"
                                                        class="input-field"
                                                        placeholder="Full Name"
                                                        value="<?php echo $_GET['username']; ?>">
                                            <?php }else{ ?>
                                                 <input type="text"
                                                        name="username"
                                                        class="input-field"
                                                        placeholder="Full Name">
                                            <?php }?>


          <input type ="email"  name="email" id="email" class="input-field" placeholder="Email Address" >

            <input type ="password" name="password" id="password" class="input-field" placeholder="Enter Your Password" >
            <?php
            $password = isset($_POST['password']);
            $uppercase = preg_match('@[A-Z]@', $password);
            $lowercase = preg_match('@[a-z]@', $password);
            $number    = preg_match('@[0-9]@', $password);
            $specialChars = preg_match('@[^\w]@', $password);

            if(!$uppercase || !$lowercase || !$number || !$specialChars || strlen($password) < 8){
              echo 'Password should be at least 8 characters in length and should include at least one upper case letter, number, and special character';

            }else{
              echo 'Strong password.';
            } ?>
              <input type ="password" name="re_password" id="re_password" class="input-field" placeholder="Confirm Your Password">
            <input type="checkbox" required class="check-box"<span>I agree to the terms of serivice</span>
            <button type="submit" class="submit-button">Register</button>

            </form>

    </div>


    </div>

<script>
  var x = document.getElementById("login");
  var y = document.getElementById("register");
  var z = document.getElementById("bt");
  function login(){
    x.style.left="-400px"
    y.style.left= "50px";
    z.style.left= "110px";
  } function register(){
    x.style.left="50px"
    y.style.left= "450px";
    z.style.left= "0px";
  }
</script>


</body>
</html>
