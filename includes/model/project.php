<?php
   /* ProjectDirector Object should:-
    * 1. Add project
    * 2. Edit project
    * 3. Delete project
    * 4. Add project plan
    * 5. Edit project plan
    * 6. Delete project plan
    */

   require_once('database.php');

   class Project{
       private $title;
       private $descriptiion;
       private $begin_date;
       private $initiator_id;

       public function add_project(){
          $sql = "INSERT INTO projects (title,description,initiator_id,begin_date) VALUES('".$this->title."',";
          $sql = "'".$this->description."','".$this->begin_date."','".$this->initiator_id."'";
          global $db;
          if($db->db_query($sql)){
              return $db->db_insert_id;
          }
       }

       public function get_all(){
          $sql = "SELECT projects.id,projects.title,projects.description,users.first_name,users.last_name,projects.begin_date FROM ";
          $sql .= "projects JOIN users ON projects.initiator_id = users.id";
          $sql .= " ORDER BY projects.id DESC";
          global $db;
          if($result = $db->db_query($sql)){
             $projects = $db->db_fetch_array($result);
             return $projects;
          }
       }

       public function get_project($id=""){
          if(!empty($id)){
            $sql = "SELECT * FROM projects WHERE id=".$id;
            global $db;
            if($result = $db->db_query($sql)){
               $project = $db->db_fetch_array($result);
               return $project;
            }
          }
       }

   }

   $project = new Project();

?>