<?php
    require_once('../../includes/services/loader.php');
    require_once('../../includes/services/Template.php');
    require_once('../../includes/model/project.php');
    $community_project = $project->get_all();
    /*
    try{
       $load->model('project.php');
       $load->service('Template.php');
       
       $community_project = $project->get_projects();
    }catch(Exception $e){
       echo "Message: ".$e->getMessage();
    }
    */
    
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
            <link rel="stylesheet" type="text/css" href="../css/events.css"/>
            
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
                    <div class="row u_row search">
                      <div class="col-md-4">
                         <div class="row search_events">
                             <form role="form" name="search_events" action="#" method="post">
                               <label for="search_by_title">Search by title</label>
                               <input type="text" class="form-control" id="search_by_title" placeholder="Project title"/> 
                               <input type="submit" value="Search" class="btn btn-default submit"/>
                             </form><!-- end search_event -->
                         </div><!-- end row search_events -->
                         <div class="row other">
                              <!-- content not yet defined -->
                         </div><!-- end row other -->
                      </div><!-- end col-md-4 -->
                      <div class="col-md-8">
                        <div class="row search_events">
                           <form role="form" name="search_events" action="#" method="post">
                             <div class="col-md-6">
                               <label for="search_by_begin_date">Search by begin date</label>
                               <input type="date" id="search_by_begin_date" placeholder="Begin date" class="form-control"/>
                             </div><!-- end of col -->
                             <div  class="col-md-6">
                               <label for="search_by_end_date">Search by end date</label>
                               <input type="date" id="search_by_end_date" placeholder="End date" class="form-control"/>
                               <input type="submit" value="Search" class="btn btn-default submit"/>
                             </div>
                           </form><!-- end search_event -->
                        </div><!-- end row for search boxes-->
                        <div class="row">
                          <?php
                             if(isset($community_project) && is_array($community_project)){
                               foreach($community_project as $project){
                                   echo '<div class="event">';
                                      echo '<div class="event-wrapper">';
                                      echo '<span class="event_tag"></span><span class="event_title">'.$project['title'].'</span>';
                                      //echo '<span class="event_title">'.$event['category'].'</span>';
                                      echo '<span class="event_tag">Description </span><span class="event_description">'.$project['description'].'</span>';
                                      echo '<span class="event_more"><a href="#">Read more</a></span>';
                                      echo '<span class="event_tag">Begin Date </span><span class="event_time">'.$project['begin_date'].'</span>';
                                      echo '<span class="event_tag">Initiated By </span><span class="event_publisher">';
                                      echo $project['first_name'].' '.$project['last_name'].'</span>';
                                      echo '</div>';
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
