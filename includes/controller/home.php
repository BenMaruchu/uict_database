<?php

class HomeController extends Controller{
    
    public function index(){
        require ('./public/view/index.php');
    }
    public function about(){
        require('./public/view/about.php');
    }
    public function login(){
        require ('./public/view/login.php');
    }
    public function registration(){
        require('./public/view/registration.php');
    }
    public function register(){
        require('./includes/model/user.php');
        
        $user = new User();
        $user->first_name= $_POST['firstname'];
        
        $user->last_name = $_POST['lastname'];
        //$user-> = $_POST['degree_program'];
        $user->gender = $_POST['gender'];
        $user->status = $_POST['maritial_status'];
        //$user-> = $_POST['mailing_address'];
        $user->email_address = $_POST['email'];
        $user->phone_number = $_POST['phonenumber'];
        $skill = $_POST['skills'];
        $hobbies = $_POST['hobbies'];
       // $user->password = $_POST['password'];
        $repeatPassword = $_POST['repeatedPassword'];

        $last_id = $user->add_user();


    }
}


?>