<?php //require_once('../includes/helper/initialize.php'); 
  
require_once('./includes/services/Loader.php');
    $loader = new Loader();
    try{
       
       $loader->service('Template.php');
       $loader->service('CurrentPage.php');
       $loader->service('functions.php');
       
       
       $template = new Template();
       
       CurrentPage::$currentPage = "signin";
       
    }catch(Exception $e){
       echo "Message: ".$e->getMessage();
    }
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login | UICT Community</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php
	    
	    $cssFiles = array("bootstrap.min.css","bootstrap-theme.css","main.css","custom.css");
	    
	    foreach($cssFiles as $file){
	    echo '<link rel="stylesheet" type="text/css" href="../public/css/'.$file.'" />';
	    }
	    
	    ?>

</head>
<body>
	<div id="page">
                <div id="header">
		    <?php
		      try{
			$template->render('header.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
		    </div>

   <section id="login_section">
     <div class="login_header">   <!--the small uict logo was here before, it is replaced with login message now!-->
	 
	      <h3>Sign in</h3>
	 </div>    
     <div class="message">
	
     </div>
	 <div class="ui_form">
     <form name="login" action="<?php echo URL; ?>user/index" method="post">
       <label for="reg_number"></label>
       <input type="text" name="reg_number" id="reg_number" required placeholder="Registration number" class="form-control">
       <label for="password"></label>
       <input type="password" name="password" id="password" required placeholder="Password" class="form-control">
       <label for="login"></label>
       <input type="submit" value="Login" id="login" class="btn btn-info">
       <span><a href="reset-password.php">Forgot password?</a></span>
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
		
      </div><!-- end of content -->
  </div>
  </div>
</body>
</html>
