<?php
class marvel_controller_class extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
		session_start();
	} 
	
	
	
	public function main_page_function(){
        
		$xml['reply'] = simplexml_load_file("app/view/marvel/chat/data.xml");
		$model_object = $this->page_model_validation_object_array->model_load_function("marvel_db_model_class");
		
		$this->page_model_validation_object_array->page_load_function("marvel/index", $xml);
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
	
	public function insert_message_function(){
		$modelname = $this->page_model_validation_object_array->model_load_function("marvel_db_model_class");
		$insert_data_array = array(
			'name' => $_POST['name'],
			'email' => $_POST['email'],
			'message' => $_POST['message']
		);
		$modelname->insert_model("contact_table", $insert_data_array);
		header("location:".BASE_URL."marvel_controller_class/");
	}
	
}
?>