<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewProject extends CI_Controller{
	
	public function index(){
		$data['title'] = 'Hello Codeigniter';
		$data['content'] = 'My first codeigniter application';
		
		$array = array(
			
			"name" => "name_cookie",
			"value"=> "Ali Can Kuştemur",
			"expire"=> 20
			
		);
		$this->input->set_cookie($array);
		
		//$this->input->set_cookie("name_cookie","Ali Can Kuştemur","");
		
		$this->load->view("new_project_view",$data);
		
	
	}
	
	public function members(){
		$this->load->model("new_project_model");
		$this->new_project_model->members();
	}
	
	public function control(){
		if($_POST){
			
			$data = $this->input->post("word");
			echo $data;
			
		}else{
			die("Not access");
		}
	}
	
}


?>