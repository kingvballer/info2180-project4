<?php include "save.php";
?>
<!DOCTYPE html>
<!-- saved from url=(0041)https://getbootstrap.com/examples/signin/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="https://getbootstrap.com/favicon.ico">

    <title>CheapoMail - Add New User</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
  </head>

  <body>

    <div class="container">
      <form class="center" role="form" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>">
        <h2 class="form-adduser-heading">CheapoMail - Add New User</h2>
        <label for="inputFname" class="sr-only">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="First Name" value="<?php echo $firstname;?>" class="form-control">
                     <span class="error"><?php echo $firstnameErr;?></span>
        <label for="inputLname" class="sr-only">Last Name</label>
       <input type="text" id="lastname" name="lastname" placeholder="Last Name" value="<?php echo $lastname;?>" class="form-control">
                     <span class="error"><?php echo $lastnameErr;?></span>
        <br>
         <label for="inputUsername" class="sr-only">Username</label>
        <input type="text" id="username" name="username" placeholder="Username" value="<?php echo $username;?>" class="form-control">
                     <span class="error"><?php echo $usernameErr;?></span>
         <br>
        <label for="inputEmail" class="sr-only">Email</label>
        <input type="text" id="email" name="email" placeholder="E-mail" value="<?php echo $email;?>" class="form-control">
                     <span class="error"><?php echo $emailErr;?></span>
        <br>
        <label for="inputPassword" class="sr-only">Password</label>
         <input type="password" id="password" name="password" placeholder="Password" value="<?php echo $password;?>" class="form-control">
                        <span class="error"><?php echo $passwordErr;?></span>
        <br>
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input type="password" id="password_confirm" name="password_confirm" placeholder="Password (Confirm)" value="<?php echo $password_confirm;?>" class="form-control">
                        <span class="error"><?php echo $password_confirmErr;?></span>
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Register</button>
        <button onclick="window.location.href='index.php'"class="btn btn-lg btn-primary btn-block" type="submit">Back</button>
      </form>
    </div>    
</body>
</html>