<?php
   /* Event Object should:-
    * 1. Add event
    * 2. Edit event
    * 3. Delete event
    */

   require_once('database.php');

   class Event{
       
       public function get_all(){
       	  $sql = "SELECT * FROM events ORDER BY id DESC";
       	  global $db;
       	  if($result = $db->db_query($sql)){
             $events = $db->db_fetch_array($result);
             return $events;
       	  }
       }

       public function get_event($id=""){
          if(!empty($id)){
            $sql = "SELECT * FROM events WHERE id=".$id;
            global $db;
            if($result = $db->db_query($sql)){
               $event = $db->db_first_row($result);
               return $event;
            }
          }
       }
   }

   $event = new Event();
?>