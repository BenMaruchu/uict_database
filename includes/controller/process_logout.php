<?php
   if(urldecode($_GET['logout']) == true){
      require_once('../model/session.php');
      require_once('../helper/functions.php');
      $session->logout(true);
      redirect('../../public/login.php');
   }
?>