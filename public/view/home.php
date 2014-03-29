<?php 
  /*
   require_once('../includes/model/session.php');
   require_once('../includes/helper/functions.php');

   if($session->is_logged_in == false){
       redirect('login.php');
   }
   */
?>
<?php

 include('../../includes/services/Template.php');

$template = new Template();

// variable to detect the index page

$currentPage = "home";

?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home | UICT Community</title>

<meta name="viewport" content="width=device-widht, initial-scale=1.0">
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
<link rel="stylesheet" type="text/css" href="../css/main.css"/>

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
	      <div class="container">
		     <div class="row u_row">
			    <div class="col-lg-6">
				   <div class="row ">
					  
					  <div class="col-lg-3">
						 <img class="img img-thumbnail" src="../img/profile_photo.jpg" />
					  <a href="profile.php" title="Checkout Profile" >Samweli Twesa</a>
					  </div>
					  <div class="col-lg-6 col-md-offset-3">
						 <form action="../controller/search.php" method="get">
							<div class="input-group">
							<input type="text" class="form-control-min" size="40" placeholder="Search a colleague"  />
							<span class="input-group-btn">
						        <input type="submit" class="btn btn-primary" value="Search" />
							</span>
							</div>
						 </form>
						 
					  </div>
					  <div class="container">
					<div class="col-lg-3 pull-right recent">
						 <div class="recent_activity">
						  <h3>Recent Activities</h3> 
						 </div>
						 <ul class="nav">
							<li class="activity_li">Today: <a>Shared OOP book</a></li>
							<li class="activity_li">Yesterday: <a>Joined Project Logo</a></li>
							<li class="activity_li">Yesterday: <a>Commented on Charity Event</a></li>
							<li class="activity_li">Last Week: <a>Leaved Project Together</a></li>
							
						 </ul>
					  </div>
					</div>
					
				   </div>
				   <div class="row u_row lower_row">
					<div class="col-lg-6">
					  <ul class="nav navigation-menu" >
						 <li  class="active-menu list-menu"><a><i class="diff glyphicon glyphicon-pushpin"></i> Enrolled Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-book"></i> OnGoing Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-map-marker"></i> Enrolled Projects</a></li>
						 <li  class="list-menu"><a><i class="diff glyphicon glyphicon-bookmark"></i> Enrolled Projects</a></li>
					  </ul>
					</div>
					<div class="col-md-offset-6">
					  <div class="main_content">
						 <div class="a_content">
					            
						   <h3><span><img src="../img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
						   <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
						   </p>
						   <ul class="nav navbar-nav">
							<li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
							<li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
							<li class="links_project pull-right"><a> Read More</a></li>
						   </ul>
						  
						 </div>
	                                  
						 <div class="a_content">
					            
						   <h3><span><img src="../img/jack.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
						   <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
						   </p>
						   <ul class="nav navbar-nav">
							<li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
							<li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
							<li class="links_project pull-right"><a> Read More</a></li>
						   </ul>
						  
						 </div>
	                                  
						 <div class="a_content">
					            
						   <h3><span><img src="../img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
						   <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
						   </p>
						   <ul class="nav navbar-nav">
							<li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
							<li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
							<li class="links_project pull-right"><a> Read More</a></li>
						   </ul>
						  
						 </div>
	                                  
						 <div class="a_content">
					            
						   <h3><span><img src="../img/jack.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
						   <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
						   </p>
						   <ul class="nav navbar-nav">
							<li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
							<li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
							<li class="links_project pull-right"><a> Read More</a></li>
						   </ul>
						  
						 </div>
	                                
						 <div class="a_content">
					            
						   <h3><span><img src="../img/leader.jpg" class="img col-sm-2" title="Project Leader"/></span>Project heading</h3>
						   <p>As a response to the inherent need for plore technological challenges embedded with innovation opportunities, UICT Community serves as a pla, University Information and Communication Technologies Community.The community engages in various
						   </p>
						   <ul class="nav navbar-nav">
							<li class="links_project"><a href="../controller/information.php" ><i class=" diff glyphicon glyphicon-envelope"> </i>  Inform a friend</a></li>
							<li class="links_project"><a ><i class="diff glyphicon glyphicon-trash"></i>  Leave Project</a></li>
							<li class="links_project pull-right"><a> Read More</a></li>
						   </ul>
						  
						 </div>
	                                  </div>
					  </div>
					  <!-- end u_main_content -->
					</div>
				   </div>
			    </div>
		     </div>
	      </div>
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
	      </div>
       </body>