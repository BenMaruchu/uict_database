<?php
   /* Event Object should:-
    * 1. Add event
    * 2. Edit event
    * 3. Delete
    */

   require_once('database.php');

   class Event{
       
       public function get_events(){
       	  $sql = "SELECT * FROM events ORDER BY id DESC";
       	  global $db;
       	  if($result = $db->db_query($sql)){
             $events = $db->db_fetch_array($result);
             return $events;
       	  }
       }
   }

   $event = new Event();
?>