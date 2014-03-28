<?php
   /* User object should:-
    * 1. Add user (Full registration)
    * 2. Edit user 
    * 3. Delete user
    * 4. Activate user
    * 5. Deactivate user
    * 6. Retrieve all users
    * 7. Retrieve single user
    */
   require_once('database.php');

   class User{
   	  public $id;
   	  public $first_name;
   	  public $last_name;
   	  public $reg_number;
   	  public $grad_year;
   	  public $program_id;
   	  public $year_of_study;
   	  public $active_status;
   	  public $gender;
   	  public $email_address;
   	  public $phone_number;
   	  public $role;
   	  public $status;
   	  private $password;

   	  public function set_password($pass = ""){
         if(!empty($pass)){
            $this->password = $pass;
         }
   	  }

      public function authenticate($reg_number="",$pass=""){
          if(!(empty($reg_number) && empty($pass))){
              $sql = "SELECT * FROM users WHERE reg_number = '".$reg_number."' AND password = '".sha1($pass)."' LIMIT 1"; 
              global $db;
              if($user = $db->db_query($sql)){
                  return $db->db_first_row($user);
              }
          }
      }

   	  public function add_user(){
   	  	 $sql = "INSERT INTO users (first_name,last_name,reg_number,grad_year,program_id,year_of_study,";
   	  	 $sql .= "gender,email_address,phone_number,role,status,password) VALUES('".$this->first_name."',";
   	  	 $sql .= "'".$this->last_name."','".$this->reg_number."','".$this->grad_year."','".$this->program_id."',";
   	  	 $sql .= "'".$this->year_of_study."','".$this->gender."','".$this->email_address."','".$this->phone_number."',";
   	  	 $sql .= "'".$this->role."','".$this->status."','".sha1($this->password)."')";
         global $db;
         if($db->db_query($sql)){
             return $db->db_last_insert_id();
         }
   	  }

   	  public function edit_user($user_id = ""){
   	  	 if(!empty($user_id)){
	   	  	 $sql = "UPDATE users SET first_name = '".$this->first_name."',last_name = '".$this->last_name."',";
	   	  	 $sql .=" reg_number = '".$this->reg_number."',grad_year = '".$this->grad_year."',program_id = '".$this->program_id."',";
	   	  	 $sql .= "year_of_study = '".$this->year_of_study."',gender = '".$this->gender."',email_address = '".$this->email_address."',";
	   	  	 $sql .= "phone_number = '".$this->phone_number."',role = '".$this->role."',status = '".$this->status."' WHERE id ='".$user_id."'";
	  	 	 global $db;
	  	 	 if($db->db_query($sql)){
	  	 		return $db->db_affected_rows();
	  	 	 }
  	 	}
   	  }	

   	  public function delete_user($user_id = ""){
         if(!empty($user_id)){
            $sql = "DELETE FROM users WHERE id = ".$user_id;
            global $db;
            if($db->db_query($sql)){
               return $db->db_affected_rows();
            }
         }
   	  }	

   	  public function get_all_users(){
   	  	  $sql = "SELECT * FROM users";
   	  	  global $db;
          if($results = $db->db_query($sql)){
              $result_users = $db->db_fetch_array($results);
              return $result_users;
          }
   	  }

   	  public function get_user($user_id = ""){
          if(!empty($user_id)){
             $sql = "SELECT * FROM users WHERE id = ".$user_id." LIMIT 1";
             global $db;
             if($user = $db->db_query($sql)){
                 return $db->db_first_row($user);
             }
          }
   	  }

   }

   $user = new User();

?>