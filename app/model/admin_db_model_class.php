<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class admin_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
    function select_all_model($table){
        $sql = "SELECT * FROM $table";
		return $this->db_array->all_view($sql);
    }
  
    function delete_model($table, $id){
        return $this->db_array->delete($table, $id);
	}
	function get_row_by_email_password($table, $email, $password){
        $sql = "SELECT * FROM $table WHERE email=:email AND password=:password";
        $data = array(":email" => $email, ":password" => $password);
		return $this->db_array->affectedRows($sql, $data);
	}
    public function get_user_data_by_password_email($table, $email, $password){
        $sql = "SELECT * FROM $table WHERE email=:email AND password=:password";
        $data = array(":email" => $email, ":password" => $password);
		return $this->db_array->selectUser($sql, $data);
    }
  
  
  
  
  
  
  
  
  
  
}
?>