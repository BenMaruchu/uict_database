<?php
   /* Event Object should:-
    * 1. Add event
    * 2. Edit event
    * 3. Delete event
    */

   require_once('database.php');

   class Event{
       
       public function get_all(){
       	  $sql = "SELECT events.id,events.title,events.description,events.date,events.publisher_id,users.first_name,users.last_name";
          $sql .= " FROM events JOIN users ON events.publisher_id = users.id ORDER BY events.id DESC";
       	  global $db;
       	  if($result = $db->db_query($sql)){
             $events = $db->db_fetch_array($result);
             return $events;
       	  }
       }

       public function get_event($id=""){
          if(!empty($id)){
            $sql = "SELECT events.id,events.title,events.description,events.date,events.publisher_id,";
            $sql .= "users.first_name,users.last_name,users.profile_picture,events.cover_image";
            $sql .= " FROM events JOIN users ON events.publisher_id = users.id WHERE events.id = ".$id;
            global $db;
            if($result = $db->db_query($sql)){
               $event = $db->db_first_row($result);
               return $event;
            }else{
               return $db->last_query;
            }
          }
       }
   }

   $event = new Event();
   
?>