<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Landing extends CI_Controller {
	public function index(){
		$this->load->view('index');	
	}
	public function view($id)
	{
	 		$this->load->model('IDModel');
			$list= new IDModel;
			$q=$list->get_data($id);
			if($q){
			if($q->id!=0){
			$data['id']=$q->id;
			$data['name']=$q->name;
			$data['mobile']=$q->mob;
			$data['pic']=$q->pic;
			$data['address']=$q->address;
			$this->load->view('viewidcard',$data);}
			else{
				$data['msg']="No Such UID exists. Please contact ur Administrator for Further info.";
			$this->load->view('index',$data);
			}
			}
			else{
			$data['msg']="No Such UID exists. Please contact ur Administrator for Further info.";
			$this->load->view('index',$data);
			}
	}
	
}
?>