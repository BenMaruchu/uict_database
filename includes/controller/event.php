<?php
include('./includes/services/Loader.php');
include('./includes/model/event.php');

class EventController extends Controller{
    protected $loader;
    
    public function __construct(){
        $this->loader = new Loader();
    }
    public function allEvents(){
       $event = new Event();
       
       $events = $event->get_all();
        try{
          $this->loader->view('events.php',$events);
        }catch(Exception $e){
          echo 'Message: '. $e->getMessage();
        }
        
    }
    
}


?>