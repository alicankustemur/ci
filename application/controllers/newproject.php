<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class NewProject extends CI_Controller{
	
	public function index(){
		$data['title'] = 'Hello Codeigniter';
		$data['content'] = 'My first codeigniter application';
		$this->load->view("new_project_view",$data);
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