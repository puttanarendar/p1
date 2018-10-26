<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Registermodel extends CI_model{
	public function __construct(){
		parent::__construct();
			 
			
		}
   //to insert data in table
   public function save($username,$email,$password,$file){
      $data=array('username'=>$username,'email'=>$email,'password'=>$password,'file'=>$file);
      $this->db->insert('user',$data);
}
    //to check whether email and password are same or not
  public function login($email,$password){
	  $this->db->select('*');
	  $this->db->where('email',$email);
	  $this->db->where('password',$password);
	  $this->db->where('status',1);
	  $q=$this->db->get('user');
	  if($q->num_rows()>0){
		 return $q->row()->id;
		  }
	  else{
		  return false;
		  }
	  }
	  //to get the details of user
public function getdetails($id)
  {
	$this->db->select('*');
	$this->db->where('id',$id);
	$this->db->from('user');
	$q=$this->db->get();
	return $q->result_array();
	}
	
	//to display all records 
public function display()
   {
	 $this->db->select('*');
     $this->db->from('user');
     $this->db->where('status',1);
     $query = $this->db->get();
     return $query->result();
	}
	//to delete the user
public function delete($id)
   {
	 $this->db->where('id', $id);
	 $this->db->set('status',0 );
	 $this->db->update('user');
   }
	//to get value of user using id....
public function update1($id)
   {
	$this->db->select('*');
	$this->db->where('id',$id);
    $this->db->from('user');
    $query=$this->db->get();
    return $query->row();
	}
	//to update the values .....
public function update2($id,$data)
   {
	 $this->db->where('id', $id);
     $this->db->update('user', $data);
	if ($this->db->affected_rows() > 0)
      return TRUE;
    else
      return FALSE;
	}
}
?>
