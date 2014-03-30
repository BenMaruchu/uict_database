<?php

 include('../../includes/services/Template.php');

// variable to detect the index page

?>

<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>UICT COMMUNITY</title>
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
                
                      
                      <!-- header -->
                      </div>
                <!-- container -->
                      <div class="container">
                      <div class="content">
                        <div class="description" >
                            <div class="u_heading">
                            <h2>Projects Based Learning</h2>
                            </div>
                            <p>
                              We raise ideas and bring technical challenges in various ICT issues to the community concern and 
                              encourage members to work on solutions. We explore different options to solve a particular challenge at
                               hand with either software or hardware based approach. This process require the members to brainstorm 
                               and search for more knowledge on the issue which enables the community to carry out step by step solution 
                               in all community projects. 
                            </p>
                            
                           
                         </div>
                        </div>
                        <!-- description -->
                        <div class="container">
                        
                        <div class="u_row" >
                            <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Project Based Learning</h4>
                            </div>
                              <img  src="../img/projects.jpg" alt="project image"  width="225" height="150"/> 
                              <p>Share and develop your skills with us by joining project execution teams </p>
                              <a href="about-projects.php">Read More</a>
                            </div>
                        
                           <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
                              <img  src="../img/sports.jpg" alt="sports image"  width="225" height="150"/>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="about-sports.php">Read More</a>
                            </div>
                        <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Charity</h4>
                            </div>
                              <img  src="../img/charity.png" alt="charity image"  width="225" height="150"/>
                              <p>Become part of others solution by joining hands with us to serve the outside society </p>
                              <a href="about-charity.php">Read More</a>
                            </div>
                        
                         <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
                              <img  src="../img/sports.jpg" alt="sports image"  width="225" height="150"/>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="about-sports.php">Read More</a>
                            </div>
                      </div>
                        <!-- u_row -->
                      
                      </div>
                        <!-- container -->
                      </div>
                      <!-- content -->
                      <div class="content">
                      <?php
		      try{
			$template->render('footer.php');
		      }
		      catch(Exception $e){
			echo 'Message: '. $e->getMessage();
		      }
		    
		    ?>
                    </div>
                
            </div>
        </body>
    </html>
    

