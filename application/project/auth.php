# p1
project1 admin
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Auth extends CI_Controller{
	public function __construct()
	{
		parent::__construct();
			 $this->load->model('Registermodel');
			
	}

//for loading inital page....
		
 public function index()
 {
    $this->load->view('Users/admin');
 }
 //for validating the fields.....
  public function save1()
   {	
	   $this->load->view('Users/admin');
	   $this->form_validation->set_rules('username','Username','required|trim|in_length[5]');
      $this->form_validation->set_rules('email','Email','required|valid_email|is_unique[user.username]');
      $this->form_validation->set_rules('password','Password','required');
      $this->form_validation->set_rules('cpassword','Confirmpassword','required|matches[password]');
      $this->form_validation->set_rules('file','File','required');
    
    // opening - if condition -  
           $username=$this->input->post('username');
           $email=$this->input->post('email');
           $password=$this->input->post('password');
           $config['upload_path'] = './uploads/';
           $config['allowed_types'] = 'gif|jpg|png|jpeg';
           $config['max_size'] = '100';
           $config['max_width'] = '1024';
           $config['max_height'] = '768';
            $config['encrypt_name'] = TRUE;
            $this->load->library('upload', $config);
           if($this->upload->do_upload('file'))
           {
			    $image_path=$this->upload->data();
			}
			else
			{
			    $image_path=$this->upload->display_errors();
		    }
           $file=$image_path['file_name'];
           $this->load->model('Registermodel');
           $v=$this->Registermodel->save($username,$email,$password,$file);
             return redirect('auth/display'); 
               
    //closing if condition - 
   //$this->load->view('Users/admin');
  }
  // for login .....
  
  
public function login()

  {
      $this->load->view('Users/adminlogin');
      $this->form_validation->set_rules('email','Email','required|valid_email');
      $this->form_validation->set_rules('password','Password','required');
      //if condition opening
      
   if ($this->form_validation->run() == TRUE)
     {
		 $email=$this->input->post('email');
		  $password=$this->input->post('password');
		   $login_id= $this->Registermodel->login($email,$password);
		   if($login_id)
		   {
			   $id=$this->session->set_userdata('id',$login_id);
		       $this->session->userdata('id');
		       return redirect('auth/display');
			}
			
			else
			{
				return redirect('auth/login');
			}
		   
	 }
	 
	 //if condition become false then else condition will executes....
	 else
		{
		   //$this->load->view('Users/adminlogin');
		    return false;
		}
		//closing the if condition....
}

//to get the records from database.....
public function display()

  {
	$this->session->userdata('id');
	$data['results']=$this->Registermodel->display();
	$this->load->view('Users/adminview',$data);
  }
  
  //to destroy the session....
public function logout()

    {
	   $this->session->unset_userdata('id');
	   $this->session->sess_destroy();
	   return redirect('auth/login');
	 } 
	
	//to delete the user from database..... 
public function deleteuser()

  {
	$this->session->userdata('id');
	$id =$this->input->get('id');
	$this->Registermodel->delete($id);
	$data['results']=$this->Registermodel->display();
	$this->load->view('Users/adminview',$data);
	}  
	
	//to edit the user....
public function edit()

  {
	$id =$this->input->get('id');
	$data['results']=$this->Registermodel->update1($id);
	$this->load->view('Users/update',$data);
	 //return redirect('auth/display');
	}
	
	//to update the user details....
public function update($id)
  {
	  //echo $id;
	  //exit;
	$username=$this->input->post('username');
	$email=$this->input->post('email');
	$password=$this->input->post('password');
	$config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png|jpeg';
    $config['max_size'] = '100';
    $config['max_width'] = '1024';
    $config['max_height'] = '768';
    $config['encrypt_name'] = TRUE;
    $this->load->library('upload', $config);
      if($this->upload->do_upload('file1'))
           {
			    $image_path=$this->upload->data();
		   }
	 else
		{
			    $image_path=$this->upload->display_errors();
		 }
    $file=$image_path['file_name'];
	$data=array('username'=>$username,'email'=>$email,'password'=>$password,'file'=>$file);
    $this->Registermodel->update2($id,$data);
    return redirect('auth/display');
	}
	  
}
?>
