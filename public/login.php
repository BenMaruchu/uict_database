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
     <form name="login" action="../includes/controller/process_login.php" method="post" >
	 <fieldset>
       <label for="reg_number"></label>
       <input type="text" name="reg_number" id="reg_number" required placeholder="Registration number" size="24"> <!--the size of the box is altered here!-->
       <label for="password"></label>
       <input type="password" name="password" id="password" required placeholder="Password" size ="24"> <!--the size of the box is changed here-->
       <label for="login"></label>
       <input type="submit" value="Login" id="login" class="btn btn-info">
       <span><a href="reset_password.php">Forgot password?</a></span>
	   </fieldset>
     </form>
   </section>

   <script src="js/jquery_min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>