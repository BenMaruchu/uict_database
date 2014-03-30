<?php
  /* Database Object should:- 
   * 1. Connect to database
   * 2. Select database
   * 3. Run slq query
   * 4. Return insert id insert query 
   * 5. Return affected rows on update and delete query
   * 6. Fetch database retrieved rows
   * 7. Close database connection
   */

  require_once('./config/config.php');

  class Database{
     private $connection;
     public $last_query;

     public function  __construct(){
     		$this->db_connect(DB_SERVER,DB_USER,DB_PASS);
     		$this->db_select(DB_NAME);
     }

     private function db_connect($DB_SERVER="",$DB_USER="",$DB_PASS=""){
        if(!(empty($DB_SERVER) && empty($DB_USER) && empty($DB_PASS))){
            if($this->connection = mysql_connect($DB_SERVER,$DB_USER,$DB_PASS)){
                return true;
            }else{
            	 die("Unable to connect to database: ".mysql_error());
            }
        }
            
     }

     private function db_select($DB_NAME=""){
         if(!(empty($DB_NAME) && isset($this->connection))){
            if(mysql_select_db($DB_NAME, $this->connection)){
            	  return true;
            }else{
            	die("Unable to select database: ".mysql_error());
            }
         }
     }

     public function db_query($sql=""){
        if(!empty($sql)){
           if($result = mysql_query($sql)){
              return $result;
           }else{
           	$this->last_query = "Last Query Perfomed: ".$sql." ".mysql_error();
           	return false;
           }
        }
     }

     public function db_escape_values($value=""){
       if(!empty($value)){
          $magic_quotes_active = get_magic_quotes_gpc();
          // Check for PHP version 4.3.0 and above 
          if(function_exists("mysql_real_escape_string")){
            if($magic_quotes_active){ $value = stripslashes($value); }
            $value = mysql_real_escape_string($value);
          }else{
            // Check for PHP version below 4.3.0
            if(!$magic_quotes_active){ $value = addslashes($value); }
             $value = addslashes($value);
          }
       }
          return $value;
     }

     public function db_fetch_array($result=""){
     		if(!empty($result)){
          $result_array = array();
     			while($row = mysql_fetch_array($result)){
     				$result_array[] = $row;
     			}
          return $result_array;
     		}
     }
     
     public function db_first_row($result = ""){
        if(!empty($result)){
          foreach($this->db_fetch_array($result) as $member){
            return $member;
          }
        }
      }

     public function db_last_insert_id(){
     		return mysql_insert_id();
     }

     public function db_affected_rows(){
     	return mysql_affected_rows();
     }

     public function db_close(){
     	  if(isset($this->connection)){
     	  	 mysql_close($this->connection);
     	  }
     }

  }

  $db = new Database();

?>