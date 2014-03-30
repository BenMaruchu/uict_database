<?php //require_once('../includes/helper/initialize.php'); 
        require_once('../../includes/services/functions.php');
        require_once('../../includes/services/Template.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | UICT Community</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../css/custom.css" type="text/css" rel="stylesheet">
<link href="../css/main.css" type="text/css" rel="stylesheet">
</head>
<body>

    <header class="navbar navbar-static-top bs-docs-nav u_header" id="top" role="banner">
          <?php
             try{
                 $template->render('header.php');
             }catch(Exception $e){
                 echo "Message: ". $e->getMessage();
             }
          ?>
    </header>


   <section id="login_section">
     <div class="login_header">   <!--the small uict logo was here before, it is replaced with login message now!-->
	 
	      <h3>Reset Password</h3>
	 </div>    
     <div class="message">
        <?php
           if($_GET){
              echo output_message(urldecode($_GET['message']));
           }
        ?>
     </div>
	 <div class="ui_form">
     <form name="login" action="../../includes/controller/process_login.php" method="post">
       <label for="email">Enter your email to reset password </label>
       <input type="email" name="email" id="email" required placeholder="Email" class="form-control">
       <label for="reset-password"></label>
       <input type="submit" value="Reset Password" id="reset-password" class="btn btn-info">
       <span><a href="login.php"><< Back</a></span>
     </form>
	 </div>
   </section>
   <script src="../js/jquery_min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
      <div class="content">
            <?php
                try{
                   $template->render('footer.php');
                }catch(Exception $e){
                   echo "Message: ".$e->getMessage();
                }
            ?>
            </div>
      </div>
  
</body>
</html>
