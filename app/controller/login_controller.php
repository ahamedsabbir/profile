<?php
class login_controller extends main_controller_class{
	
	public function __construct(){
		parent::__construct();
        session::init();
        if(session::get('login') == true){
            header("Location:".BASE_URL."admin_controller_class");
        }
	}
	public function main_page_function(){
		$this->page_model_validation_object_array->page_load_function("admin/login");
	}
	
	public function login_authention_function(){
        $email = $_POST['email'];
        $password = md5($_POST['password']);        
        $modelname = $this->page_model_validation_object_array->model_load_function("admin_db_model_class");
        $count = $modelname->get_row_by_email_password("admin_controller_table", $email, $password);
        if($count > 0){
            $result = $modelname->get_user_data_by_password_email("admin_controller_table", $email, $password);
            session::init();
            session::set('login', true);
            session::set('name', $result[0]['name']);
            session::set('email', $result[0]['email']);
            session::set('id', $result[0]['id']);
            session::set('level', $result[0]['level']);
            header("Location:".BASE_URL."admin_controller_class");
        }else{
            header("Location:".BASE_URL."login_controller");
        }
	}
	
	
	public function logOut(){
        session::init();
        session::destroy();
        header("Location:".BASE_URL."admin_controller_class");
    }
}