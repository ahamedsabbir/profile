<?php
class admin_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::init();
        if(session::get('login') == false){
           header("Location:".BASE_URL."login_controller");
        }
	} 
	
	
	
	public function main_page_function(){
        
		$xml['reply'] = simplexml_load_file("app/view/marvel/chat/data.xml");
		$model_object = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		
		$this->page_model_validation_object_array->page_load_function("admin/index", $xml);
	}
	
	
	
	public function reply_chat_function(){
		$xml = simplexml_load_file("app/view/marvel/chat/data.xml");
		$session = session_id();
		$text = $_POST['text'];
		$chat = $xml->addChild("chat");
    	$chat->addChild("session",$session);		
    	$chat->addChild("text",$text);		
		file_put_contents("app/view/marvel/chat/data.xml", $xml->asXML());
		header("location:".BASE_URL."marvel_controller_class/");
	}
	
	public function inbox_page_function(){
		$send_data_array_to_page = array();
        $model_name = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		
		$send_data_array_to_page['select_all'] = $model_name->select_all_model("contact_table");
		$this->page_model_validation_object_array->page_load_function("admin/inbox", $send_data_array_to_page);
	}
	
	
	
	public function delete_function($id){
        $data_array = array();
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
		$modelname->delete_model("contact_table",$id);
        header("location:".BASE_URL."admin_controller_class");    
	} 
	
	
	
	

}
?>