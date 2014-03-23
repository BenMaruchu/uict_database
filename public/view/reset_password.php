<?php //require_once('../includes/helper/initialize.php'); 
        require_once('../includes/helper/functions.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login|UICT Community</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="css/custom.css" type="text/css" rel="stylesheet">
</head>
<body>
   <section id="login_section">
     <div class="login_header"><img src="img/uict.jpg"></div>
     <div class="message">
        <?php
           if($_GET){
              echo output_message(urldecode($_GET['message']));
           }
        ?>
     </div>
     <form name="reset_password" action="../includes/controller/reset_pass.php" method="post">
       <label for="email_address">Enter your email to reset password</label>
       <input type="text" name="reg_number" id="email_address" required placeholder="Email address">
       <label for="reset_pass"></label>
       <input type="submit" value="Reset Password" id="reset_pass" class="btn btn-info">
       <span><a href="login.php"><< Back</a></span>
     </form>
   </section>
   <script src="js/jquery_min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>