<?php
/**
* models সাধারনত database এর data গুলোকে নিয়ে  arry আকারে return করে থাকে।
*  
*/
class marvel_db_model_class extends main_model_class{
	function __construct(){
		parent::__construct();
	}
	function insert_model($data_table_name, $insert_data){
		return $this->db_array->insert($data_table_name, $insert_data);
    }
}
?>