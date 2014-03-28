<?php //require_once('../includes/helper/initialize.php'); 
        require_once('../../includes/helper/functions.php');
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
              <div class="container">
                 <div class="navbar-header">
     
                 <a href="/index.php" class="navbar-brand"><img class="logo img col-sm-4" width="60" src="../img/uict.jpg" alt="uict logo"/></a>   	
                </div>
            <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
               
                     <ul class="nav navbar-nav navbar-right">
                            <li class="active" ><a href="#home">Home</a></li>
                            <li class="list"><a href="#projects">Projects</a></li>
                            <li class="list"><a href="#events">Events</a></li>
                            <li class="list"><a href="#about">About</a></li>
                            <li class="list"><a href="login.php">Sign In</a></li>
                            <li ><a><i  title="click to search" data-toggle="dropdown"
				class="dropdown-toggle glyphicon glyphicon-search"></i>
                                </a>
                            </li>
                     </ul>
                </nav>
               </div>
         <div class="for_search">
                       <div class="container">
                         <div class="btn-group pull-right" >
                        <div id="search">
                            <form action="search.php" method="get">
                                <ul class="nav dropdown-menu" role="menu">
                                <li><input class="text_"type="text" name="searchQuery" alt="forSearch" id="searchQuery"  
				     placeholder="search"/></li>
                                <li><input class="btn " type="submit" name="submit" id="submit" value="submit" /></li>
				</ul>
                            </form>
                        </div>
                        </div>
			</div>
                    </div>
            </header>


   <section id="login_section">
     <div class="login_header">   <!--the small uict logo was here before, it is replaced with login message now!-->
	 
	 <p>Sign in to UICT!</p>
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
       <label for="reg_number"></label>
       <input type="text" name="reg_number" id="reg_number" required placeholder="Registration number">
       <label for="password"></label>
       <input type="password" name="password" id="password" required placeholder="Password">
       <label for="login"></label>
       <input type="submit" value="Login" id="login" class="btn btn-info">
       <span><a href="reset_password.php">Forgot password?</a></span>
     </form>
	 </div>
   </section>
   <script src="../js/jquery_min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   
      <div class="content">
                      <div class="u_footer">
                        <div class="footer_content">
                        <div class="u_social">
                            <ul class=" nav u_footer_nav">
                                <li><a href="www.facebook.com/uict" > <img src="../img/fb-icon.jpg" alt="facebook logo" width="20" height="20" /> Facebook </a></li>
                                 <li><a href="www.twitter.com/uict" ><img src="../img/twitter-icon.jpg" alt="twitter logo" width="20" height="20" /> Twitter </a></li>
                                  <li><a href="www.google+.com/uict" ><img src="../img/google.jpg" alt="google+ logo"  width="20" height="20"/> Google+ </a></li>
                            </ul>
                        </div>
                        <div class="container">
                        <div class="u_links">
                            <ul class="nav u_footer_nav">
                                <li><a href="#about" >About</a></li>
                                <li><a href="#terms" >Terms</a></li>
                                <li><a href="#privacy">Privacy</a></li>
                            </ul>
                        </div>
                        <div class="u_links">
                            <ul class="nav u_footer_nav">
                                <li><a href="#events" >Events</a></li>
                                <li><a href="#projects" >Project</a></li>
                                <li><a href="#contacts" >Contacts</a></li>
                            </ul>
                        </div>
                        </div>
                        </div>
			<div class="copyright">
                        <div class="container">
                        <div class="nav pull-right ">
                            <p id="copyText" >&copy;2014 UICT Community</p>
                        </div>
			</div>
                        </div>
                        
                      </div>
                    </div>
  
</body>
</html>
