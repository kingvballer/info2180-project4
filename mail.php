<?php session_start(); 
include "message.php";?>
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

    <title>CheapoMail - Create New Message</title>

    <!-- Bootstrap core CSS -->
    <link href="bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="login.css" rel="stylesheet">
  </head>

  <body>
    <div class="container">
      <form class="form-adduser">
        <h2 class="form-adduser-heading">CheapoMail - Create Email</h2>
        <label for="To" class="sr-only">To</label>
        <input type="text" id="To" class="form-control" placeholder="To: " required="" autofocus="">
        <br>
        <label for="Subject" class="sr-only">Subject</label>
        <input type="text" id="subject" class="form-control" placeholder="Subject: " required="" autofocus="">
        <br>
         <label for="Message" class="sr-only">Message</label>
        <input type="textarea" id="message" class="form-control" placeholder="Message: " required="" autofocus="">
        <br>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Send</button>
        <button onclick="window.location.href='index.php'"class="btn btn-lg btn-primary btn-block" type="submit">Back</button>
    </div>    
</body>
</html>
