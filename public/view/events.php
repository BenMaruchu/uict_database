<?php 
  /*
   require_once('../includes/model/session.php');
   require_once('../includes/helper/functions.php');

   if($session->is_logged_in == false){
       redirect('login.php');
   }
   */

   require_once('../../includes/model/event.php');
   $events = $event->get_events();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Home|UICT Community</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="../css/bootstrap.min.css" type="text/css" rel="stylesheet">
<link href="../css/u_home.css" type="text/css" rel="stylesheet">
<style type="text/css">

</style>
</head>
<body>
   
      <header>
        <img src="img/uict.jpg">
      </header><!-- end header -->

      <div class="u_content">
	      <nav role="u_navigation">
	        <ul>
	           <li><a href="home.php">Home</a></li>
	           <li><a href="projects.php">Projects</a></li>
	           <li><a href="events.php">Events</a></li>
	           <li><a href="../includes/controller/process_logout.php?logout=<?php echo urlencode(true);?>">Logout</a></li>
	        </ul>
	      </nav><!-- end u_navigation -->
	      <div class="u_main_content">
           <?php
               if(isset($events) && is_array($events)){
                 foreach($events as $event){
                     echo '<div class="event">';
                        echo '<span class="event_title">'.$event['title'].'</span>';
                        echo '<span class="event_title">'.$event['category'].'</span>';
                        //echo '<span class="event_venue">'.$event['venue'].'</span>';
                        echo '<span class="event_time">'.$event['date'].'</span>';
                        echo '<span class="event_description">'.$event['description'].'</span>';
                     echo '</div>';
                 }
             }
           ?>
	      </div><!-- end u_main_content -->
	      <aside>
	         <img src="img/graduated.png">
	         <button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">Amos Nzaga  <span class="glyphicon glyphicon-globe"></span></button>
           <ul class="dropdown-menu" role="menu">
             <li><a href="">Profile</a></li>
             <li><a href="">Logout</a></li>
           </ul>
	      </aside><!-- end aside -->
      </div><!-- end u_content -->
  
      <footer>
         <div class="quick_links">
            <ul>
               <li><a href="">About</a></li>
               <li><a href="">Terms</a></li>
               <li><a href="">Privacy</a></li>
            </ul>
            <ul>
               <li><a href="">Projects</a></li>
               <li><a href="">Events</a></li>
               <li><a href="">Contacts</a></li>
            </ul>
            <ul>
               <li><a href=""><img src="img/fb-icon.jpg"></a></li>
               <li><a href=""><img src="img/twitter-icon.jpg"></a></li>
               <li><a href=""><img src="img/Google-Plus-icon.png"></a></li>
            </ul>
         </div><!-- end of quick links -->
         <div class="copyright">
            <p>&copy; 2014 UICT Community</p>
         </div><!-- end of copyright -->
         <!--
         <div class="social_icons">
            <ul>
               <li><a href=""><img src="img/fb-icon.jpg"></a></li>
               <li><a href=""><img src="img/twitter-icon.jpg"></a></li>
               <li><a href=""><img src="img/Google-Plus-icon.png"></a></li>
            </ul>
         </div><!-- end of social_icons -->
      </footer><!-- end footer -->
  
<script src="js/jquery_min.js"></script>
<script src="js/bootstrap.min.js"></script>
</body>
</html>
