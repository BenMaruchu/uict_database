<?php
    require_once('./includes/services/Loader.php');
    $loader = new Loader();
    try{
       
       $loader->service('Template.php');
       $loader->service('CurrentPage.php');
       
       
       $template = new Template();
       
       CurrentPage::$currentPage = "events";
       
    }catch(Exception $e){
       echo "Message: ".$e->getMessage();
    }
    
    
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
                   }catch(Exception $e){
                       echo "Message: ". $e->getMessage();
                   }
               ?>
              </div><!-- end header -->
              <div class="u_events">  
                 <div class="container">
                    <div class="row">
                       <div class="container">
                         <div class="col-md-12 header_events">
                           <h3>Events</h3>
                         </div><!-- end col-md-12 -->
                       </div><!-- end container -->
                    </div><!-- end row page header -->
                    <div class="row u_row">
                      <div class="col-md-4">
                         <div class="row search_events">
                             <input type="text" id="search_by_start_date" placeholder="Search by title"/> 
                         </div><!-- end row search_events -->
                      </div><!-- end col-md-4 -->
                      <div class="col-md-8">
                        <div class="row search_events">
                           <form name="search_events">
                             <input type="text" id="search_by_start_date" placeholder="Search by start date"/>
                             <input type="text" id="search_by_end_date" placeholder="Search by end date"/>
                             <input type="submit" id="submit" value="Search"/>
                           </form><!-- end search_event -->
                        </div><!-- end row for search boxes-->
                        <div class="row">
                          <?php
                             if(isset($events) && is_array($events)){
                               foreach($events as $event){
                                   echo '<div class="event">';
                                      echo '<span class="event_tag"></span><span class="event_title">'.$event['title'].'</span>';
                                      //echo '<span class="event_title">'.$event['category'].'</span>';
                                      echo '<span class="event_tag">Description </span><span class="event_description">'.$event['description'].'</span>';
                                      echo '<span class="event_more"><a href="#">Read more</a></span>';
                                      echo '<span class="event_tag">Date & Time </span><span class="event_time">'.$event['date'].'</span>';
                                      echo '<span class="event_tag">Posted By </span><span class="event_publisher">Faith Assenga - Communication Director</span>';
                                   echo '</div>';
                                }
                             }
                          ?>      
                        </div><!-- end row for events list -->
                      </div><!-- end col-md-8 -->
                   </div><!-- end row -->
                 </div><!-- end container -->
              </div><!-- end u_events -->

                      <!-- content -->
                      <div class="content">
                      <?php
                   try{
                       $template->render('footer.php');
                   }catch(Exception $e){
                       echo "Message: ". $e->getMessage();
                   }
               ?>
                    </div>
                
            </div>
        </body>
    </html>
