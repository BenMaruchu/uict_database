<?php

require_once('./includes/services/Loader.php');
    $loader = new Loader();
    try{
       
       $loader->service('Template.php');
       $loader->service('CurrentPage.php');
       
       
       $template = new Template();
       
       CurrentPage::$currentPage = "about";
       
    }catch(Exception $e){
       echo "Message: ".$e->getMessage();
    }
    


// variable to detect the index page

?>

<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>UICT COMMUNITY</title>
            <?php
	    
	    $cssFiles = array("bootstrap.min.css","bootstrap-theme.css","style.css","main.css","events.css");
	    
	    foreach($cssFiles as $file){
	    echo '<link rel="stylesheet" type="text/css" href="../public/css/'.$file.'" />';
	    }
	    
	    ?>

            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
           
            
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
                            <h2>Commmunity Background</h2>
                            </div>
                            <p>
                              Formed in 2012/2013 academic year by first year students in the College of
			      Information and Communication Technologies (CoICT) of the University of Dar
			      es salaam, UICT Community is a dedicated group of ICT students aiming at
			      learning and developing skills towards solving different problems in the society
			      by means of ICT.
			    </p>
			    <p>
                              As a response to the inherent need for awareness and motivation among Tanzanian
			      university students to explore technological challenges embedded with innovation
			      opportunities, UICT Community serves as a platform of connecting students’ efforts
			      and providing collaborative environment within the University community.
			    </p>
			    <p>
                              UICT Community comprises of its members as first degree seekers in fields of
			      Computer Engineering and Information Technology, Computer Science,
			      Telecommunications Engineering and Electronics and Communications Engineering.
			    </p>
			    <p>
			      These together form the basis of UICT Community initials as University Information
			      and Communication Technologies Community.
			      </p>
			    <p>
                              The community engages in various activities such as team projects, trainings and
			      workshops, industrial study tours, technological demonstrations and collaboration
			      with other communities in the university.
			     </p>
			    <p>
			      Also the community participates in extra-curricular activities such as charity,
			      sports and volunteering activities such as environmental conservation and mentoring
			      programs for Tanzanian secondary students.
			      Learning being the key objective of the community, UICT Community accommodates all CoICT students interested with community initiatives from 2012 academic year onwards.
 
                            </p>
                            <div class="u_heading">
                            <h2>Aims</h2>
                            </div>
                            <p>
                            1.  To learn, to develop and to use ICT skills in solving problems in our society.<br>
                            2.  To identify and to analyze problems in our society which need and can be solved through ICT intervention.<br>
                            3.  To elicit internal drive and motivation, cooperation, coordination and collaboration among community members in solving problems identified in our society.<br>
                            4.  To build productively working teams for learning through projects.<br>
                            5.  To identify and to utilize opportunities for enhancing and facilitating community initiatives such as incubation, technical and financial support.<br>
                            6.  To address and to initiate solutions for problems which can be solved by means of ICT integration.<br>
                            7.  To encourage, to nurture and to discover potentials in suggested ideas within the community as the vital part in all initiatives.<br>

                            </p>

                            <div class="u_heading">
                            <h2>Values</h2>
                            </div>
                            <p>
                            1.  Team work.<br>
                            2.  Knowledge.<br>
                            3.  Skills development.<br>
                            4.  Responsibility.<br>
                            5.  Performance.<br>
                            6.  Excellence.<br>

                            </p>

                            <div class="u_heading">
                            <h2>Guidelines</h2>
                            </div>
                            <p>
                            1.  UICT Community is found on ambition, willingness and volunteering of its members to learn and to develop ICT skills through projects so as initiate solutions to various problems in the society by means of ICT.<br>
                            2.  Every initiative in the community must aim at elevating knowledge and skills of all its members.<br>
                            3.  The community must respect and value the presence and contribution of each member in every aspect of its mission.<br>
                            4.  The community must identify and critically analyze problems in the society which can be solved by ICT starting with the university.<br>
                            5.  The community must initiate solutions to problems by suggesting, discussing and implementing productive ideas.<br>
                            6.  Every community member interested in carrying out any initiative must work in cooperative environment within the community.<br>
                            7.  Every community member has the right to share his or her idea, opinion or concern within the community.<br>
                            8.  The community determines its members valid depending on their attendance and participation in community meetings, projects and other initiatives.<br>


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
                              <?php echo (CurrentPage::$currentPage == "home")?'<img  src="./public/img/projects.jpg" alt="project image"  width="225" height="150"/>':
			                 '<img  src="../public/img/projects.jpg" alt="project image"  width="225" height="150"/>';
			      ?>
                              <p>Share and develop your skills with us by joining project execution teams </p>
                              <a href="about-projects.php">Read More</a>
                            </div>
                        
                           <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
                              <?php echo (CurrentPage::$currentPage == "home")?'<img  src="./public/img/sports.jpg" alt="sports image"  width="225" height="150"/>':
			                 '<img  src="../public/img/sports.jpg" alt="sports image"  width="225" height="150"/>';
			       ?>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                        <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Charity</h4>
                            </div>
			      <?php echo (CurrentPage::$currentPage == "home")?'<img  src="./public/img/charity.png" alt="charity image"  width="225" height="150"/>':
			               '<img  src="../public/img/charity.png" alt="charity image"  width="225" height="150"/>';
                              ?>
                              <p>Become part of others solution by joining hands with us to serve the outside society </p>
                              <a href="#more_on_uict">Read More</a>
                            </div>
                        
                         <div class="col-md-3">
                              <div class="u_heading">
                            <h4>Sport and Socialization</h4>
                            </div>
			    <?php echo (CurrentPage::$currentPage == "home")?'<img  src="./public/img/sports.jpg" alt="sports image"  width="225" height="150"/>':
			                 '<img  src="../public/img/sports.jpg" alt="sports image"  width="225" height="150"/>';
			       ?>
                              <p>Have fun and grow your network outside class by joining in our sports bonanza </p>
                              <a href="#more_on_uict">Read More</a>
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
    

