<?php
   //require_once('../helper/initialize.php');
   require_once('../services/functions.php');
   require_once('../model/user.php');
   require_once('../model/database.php');
   require_once('../model/session.php');

   if(!(empty($_POST['reg_number']) || empty($_POST['password']))){
   	   $reg_number = $db->db_escape_values($_POST['reg_number']);
   	   $password = $db->db_escape_values($_POST['password']);

       if($member = $user->authenticate($reg_number,$password)){
       	   $session->login($user);
           //echo "Welcome :".$member['first_name'];
           redirect('../../public/view/home.php');
       }else{
       	  $message = "Invalid registration number or password. Please try again!";
   	      redirect('../../public/view/login.php?message='.urlencode($message));
       }
   }else{
   	  $message = "Invalid registration number or password. Please try again!";
   	  redirect('../../public/view/login.php?message='.urlencode($message));
   }
?>