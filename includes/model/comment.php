<?php
    /* Comment Object should:-
     * 1. Add comment
     * 2. Edit comment
     * 3. Delete comment
     */

    require_once('database.php');

    class Comment{
    	public $category;
    	public $source_id;
    	public $comment;

    	public function add_commment(){
          if(!(isset($this->comment) &&  isset($this->category) && isset($this->user_id) && isset($this->source_id))){
             $sql = "INSERT INTO comments (comment,date_time,user_id,category,comment_source_id) VALUES ('".$this->comment."',";
             $sql .= "'".time()."','".$this->user_id."','".$this->category."','".$this->source_id."')";
             global $db;
             if($db->db_query($sql)){
                return $db->db_last_insert_id();
             }
          }
   	    }

   	    public function edit_comment(){
   	    	if(!(isset($this->comment) &&  isset($this->category) && isset($this->user_id) && isset($this->source_id))){
   	    		$sql = "UPDATE comments SET comment = '".$this->comment."', date_time = ".time().", WHERE user_id = ".$this->user_id;
   	    		global $db;
                if($db->db_query($sql)){
                  return $db->db_affected_rows();
                }
   	    	}
   	    }

   	    public function delete_comment($comment_id = ""){
          if(!empty($comment_id)){
            $sql = "DELETE FROM comments WHERE id = ".$comment_id;
            global $db;
            if($db->db_query($sql)){
               return $db->db_affected_rows();
            }
          }

          public function get_comments(){
          	if(!isset($this->source_id)){
          		$sql = "SELECT * FROM comments WHERE comment_source_id = ".$this->source_id;
          		global $db;
          		if($comments = $db->db_query($sql)){
                     return $db->db_fetch_array($comments);
          		}
          	}
          }
   	    }
    }

    $comment = new Comment();
?>