<?php
 require ('../model/Project.php');
 require ('../services/Loader.php')

class ProjectController {
    protected $loader;
    
    public function __construct(){
        this->loader = new Loader();
    }
    
    public function index(){
        
        
    }
    public function allProjects(){
        $projects = new Project() -> get_projects();
        this->loader->view('projects.php',$projects);
        
    }
   
}


?>