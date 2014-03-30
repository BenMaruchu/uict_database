<?php
 require ('./includes/model/Project.php');
 require ('./includes/services/Loader.php');

class ProjectController extends Controller {
    protected $loader;
    
    public function __construct(){
        $this->loader = new Loader();
    }
    
    public function index(){
        
        
    }
    public function allProjects(){
        echo 'Entered all projects';
        
        $projects = new Project();
        $projects = $projects -> get_projects();
        
        try{
          $this->loader->view('projects.php',$projects);
        }catch(Exception $e){
          echo 'Message: '. $e->getMessage();
        }
    }
   
}


?>