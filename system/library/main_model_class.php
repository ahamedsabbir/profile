<?php
/**
* database টা এখানে load করা হবে।
* Database এর একটা Object তৈরি করা হবে।
* models গুলো এটাকে  extends করে কাজ করবে।
*/
class main_model_class{
	protected $db_array = array();
	
	public function __construct(){
		$dsn = 'mysql:dbname='.DB_NAME.';host='.DB_HOST;
		$user_name = DB_USER;
		$password = DB_PASSWORD;
		$this->db_array = new database_class($dsn, $user_name, $password);
	}
}


























?>