<?php

 include('../../includes/services/Template.php');
 

$template = new Template();

// variable to detect the index page

?>

<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>Registration</title>
            <link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
            <link href="../css/bootstrap-theme.css" type="text/css" rel="stylesheet"> 

            <link rel="stylesheet" type="text/css" href="../css/style.css" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
            <link rel="stylesheet" type="text/css" href="../css/main.css"/>
            
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
			<div class="container">
			<div class="row ">
                    <!-- u_header -->
                      <div id="bannerForRegistration">
                            <div class="message">
                                <span>Registration Form </span>
                            </div>
                            
                        </div>
			</div>
                        <!-- banner -->
                      <!-- header -->
                     <div class="row u_row">
			<div class="col-lg-6 u_row">
				<form action="" class="form-horizontal u_row" role="form">
				    
				    <legend>Personal information:</legend>
				    <div class="form-group">
				    <label class="col-sm-2 control-label" >FirstName:</label>
				    
				    <div class="col-sm-6">
					<input name="firstname" type="text" class="form-control" />
				    </div>
				    </div>
				    
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >LastName:</label>
				      <div class="col-sm-6">
					<input name="lastname" type="text" class="form-control" />
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >Degree Program:</label>
				      <div class="col-sm-6">
					<input name="degree_program" type="text" class="form-control" />
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >Sex:</label>
				      <div class="col-sm-3">
					<input name="male" type="checkbox" class="form-control" /> Male
				      </div>
				      <div class="col-sm-3">
					<input name="female" type="checkbox" class="form-control" /> Female
				      </div>
				    </div>
				    <div class="form-group">
				      <label class="col-sm-2 control-label" >Marital status:</label>
				      <div class="col-sm-3">
					<input name="single" type="checkbox" class="form-control" /> Single
				      </div>
				      <div class="col-sm-3">
					<input name="married" type="checkbox" class="form-control" /> Married
				      </div>
				    </div>
				
					
					
                    <div class="col-lg-6 u_row">
	
			
			    
			    <legend>Contacts:</legend>
			    
		               <div class="form-group">
				  <label class="col-sm-2 control-label" >Mailing Address:</label>
				  <div class="col-sm-6">
				    <input name="mailing_address" type="text" class="form-control" />
				  </div>
				</div>
			       <div class="form-group">
				  <label class="col-sm-2 control-label" >E-mail:</label>
				  <div class="col-sm-6">
				    <input name="email" type="text" class="form-control" />
				  </div>
				</div>
			       <div class="form-group">
				  <label class="col-sm-2 control-label" >Cell phone:</label>
				  <div class="col-sm-6">
				    <input name="phonenumber" type="text" class="form-control" />
				  </div>
				</div>
				
			</form>
			</div>
		    
			</div>
					
					<div class="row u_row" >
                     <div class="col-lg-6">      
                    <form action="">
						<fieldset>
							<legend>Personal Profile:</legend>
							<h4>skills</h4>:<textarea rows="3" cols="60"></textarea>
									<h4>Hobbies & Interests</h4>:<textarea rows="3" cols="60"></textarea>
						</fieldset>

					</form>
                           
                   <input type="submit" value="Submit">
                      <!-- content -->
                      
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
                        <div class="container">
                        <div class="nav pull-right">
                            <p>&copy;2014 UICT Community</p>
                        </div>
                        </div>
                        
                      </div>
                    </div>
            </div>
        </body>
    </html>