<?php
   /* Session Object should:-
    * 1. Log in user
    * 2. Log out user
    * 3. Check if user is logged in
    * 4. Set session message
    */

   require_once('database.php');

   class Session{
       public $logged_in = false;

       public function __construct(){
       	  session_start();
       }

       public function login($user = NULL){
          if(($user != NULL) && is_object($user)){
          	 $this->logged_in = true;
             $_SESSION['logged_in'] = $this->logged_in;
             $_SESSION['user_id'] = $user->id;
             $_SESSION['first_name'] = $user->first_name;
             $_SESSION['last_name'] = $user->last_name;
          }
       }

       public function logout($logout=false){
       		if($logout == true){
       			$this->logged_in = false;
       			unset($_SESSION['logged_in']);
       			unset($_SESSION['user_id']);
       			unset($_SESSION['first_name']);
       			unset($_SESSION['last_name']);
       			session_destroy();
       		}
       }

       public function is_logged_in(){
       	 if($this->logged_in == true){
       	 	return true;
       	 }else{
       	 	return false;
       	 }
       }
   }

   $session = new Session();
?>