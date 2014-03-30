<?php
    require_once('./includes/services/Loader.php');
    $loader = new Loader();
    try{
       
       $loader->service('Template.php');
       $community_project = $data;
       
       $template = new Template();
       
    }catch(Exception $e){
       echo "Message: ".$e->getMessage();
    }
    
    
?>
<!DOCTYPE html>
    <html lang='en'>
        <head>
            <meta charset="utf-8" />
            <title>UICT COMMUNITY</title>
            <link href="./public/css/bootstrap.min.css" type="text/css" rel="stylesheet"> 
            <link href="./public/css/bootstrap-theme.css" type="text/css" rel="stylesheet"> 

            <link rel="stylesheet" type="text/css" href="./public/css/style.css" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine" />
            <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Gafata" />
            <link rel="stylesheet" type="text/css" href="./public/css/main.css"/>
            <link rel="stylesheet" type="text/css" href="./public/css/events.css"/>
            
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
                           <h3>Projects</h3>
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
                             if(isset($community_project) && is_array($community_project)){
                               foreach($community_project as $project){
                                   echo '<div class="event">';
                                      echo '<span class="event_tag"></span><span class="event_title">'.$project['title'].'</span>';
                                      //echo '<span class="event_title">'.$event['category'].'</span>';
                                      echo '<span class="event_tag">Description </span><span class="event_description">'.$project['description'].'</span>';
                                      echo '<span class="event_more"><a href="#">Read more</a></span>';
                                      echo '<span class="event_tag">Begin Date </span><span class="event_time">'.$project['begin_date'].'</span>';
                                      echo '<span class="event_tag">Initiated By </span><span class="event_publisher">Amos Nzaga</span>';
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
                             echo "Message: ".$e->getMessage();
                          }
                      ?>
                    </div><!-- end of content -->
                
            </div>
        </body>
    </html>
