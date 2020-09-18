<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminC extends CI_Controller 
{
		public function _construct()
		{
			parent::_construct();
		}
		public function index()
		{
			$this->load->model('IDModel');
			$list= new IDModel;
			$data['data']=$list->get_admit();
			$this->load->view('Loginadmin',$data);
		}
		public function viewid($id)
		{
			$this->load->model('IDModel');
			$list= new IDModel;
			$q=$list->get_data($id);
			$data['id']=$q->id;
			$data['name']=$q->name;
			$data['mobile']=$q->mob;
			$data['pic']=$q->pic;
			$data['address']=$q->address;
			$this->load->view('viewidcardadmin',$data);		
		}
 	public function create()
    {
      $this->load->model('IDModel');
      $this->load->view('register');
        $this->load->library('form_validation');
      $this->form_validation->set_error_delimiters('<div class="error">', '</div>');
      $this->form_validation->set_message('rule', 'Error Message');
        if( $this->input->post('save')){
      $this->form_validation->set_rules('name', 'Username', 'required',array('required' => 'Error Message on rule2 for this name'));
      $this->form_validation->set_rules('password', 'Password', 'required');
      $this->form_validation->set_message('required', '{password} must have at least {param} characters.');
      $this->form_validation->set_rules('email', 'Email', 'required','is_unique(user.email)');
      if ($this->form_validation->run() == FALSE)
      {
        echo "valdation is not working";
      }
      else
      {
        $name=     $this->input->post('name');  
        $password= $this->input->post('password');
          $address=  $this->input->post('address');  
          $dob=      $this->input->post('dob') ;
          $pic =     $this->input->post('pic') ;
          $email =   $this->input->post('email');
          $mob =     $this->input->post('mob');                  
          $course =  $this->input->post('course');
          $sem=      $this->input->post('sem') ; 
          $flag=0;
          $query=$this->db->query('Select *from user');
          if($query->num_rows()==0)
          {
            $id=1;
          } 
          else
          {
            $id=($query->num_rows());
          }
            $p= $this->IDModel->saverecords($id,$name,$password,$address,$dob,$pic,$email,$mob,$course,$sem,$flag)  ;
            if($p)
              {  
          $this->load->model('IDModel/saverecords');
                echo "Records Saved Successfully <br>";
            }
           else {      //$this->load->view('register.php');
               
               return redirect (base_url().'AdminC/succes_msg/'.$id);
              }
         echo " not able to go to login paage";
       // return redirect('login/post_login');
       // $this->load->view('login');
      }
    }
    }
		public function succes_msg($id)
		{
			$this->load->view('smsg',$id);
		} 
}
?>