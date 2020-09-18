<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{
		public function index()
		{
			$this->load->view('login');
		}
	    public function post_login()
 		{
    			$this->form_validation->set_rules('username', 'Email', 'required');
			    $this->form_validation->set_rules('password', 'Password', 'required');
			   // $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
			    $this->form_validation->set_message('required', 'Enter %s');
			    $this->form_validation->set_message('required', 'Enter %s');
			    if ($this->form_validation->run() == FALSE)
    			{  
        			$this->load->view('login');
			    }
    			else{
      				$username=$this->input->post('username');
   					$password=$this->input->post('password');
				    $this->load->model('IDModel');
				    $list= new IDModel;
				    $login_id=$list->get_dataadmin($username,$password);
				    // print_r($login_id);
				    if($login_id){
					if(($login_id->email=='admin@admin.com') && ($login_id->password=='admin') ){
  				    	return redirect(base_url('AdminC'));
     				}}
     				else{$data['msg']='Only Administratiors are allowed to Login in!';
      				//return redirect(base_url('Login'));
      				$this->load->view('login',$data);
     				}
   				}
		}
}
?>