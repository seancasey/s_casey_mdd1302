<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class User_model extends CI_Model {

		public function __construct(){
	  		parent::__construct();
	 	}

	 //Login Function : Checks the db for email and password
	 function login($username, $password)
	 { 
	   $this -> db -> select('*');
	   $this -> db -> from('users');
	   $this -> db -> where('email = ' . "'" . $username . "'");
	   $this -> db -> where('password = ' . "'" . MD5($password) . "'");
	   $this -> db -> limit(1);
	
	   $query = $this -> db -> get();
	
	   if($query -> num_rows() == 1)
	   {
	     return $query->result();
	   }
	   else
	   {
	     return false;
	   }
	 }
	 
	 function updatefriends($code){
	 	$session_data = $this->session->userdata('logged_in');
		$uid = $session_data['id'];
		 $data = array(
               'confirmed' => 1,
               'fid' => $uid
               
            );

		$this->db->where('link_code', $code);
		$this->db->update('friend_list', $data); 
		return $this->db->affected_rows(); 
	 }
	 function register($data)
	 {
		 $this->db->insert('users', $data); 
	 }
	 
	 
	 function retrieve_friends($id){
		 $this -> db -> select('*');
		 $this -> db -> from('users as u');
		 $this -> db -> JOIN('relations as r', 'r.friend_id = u.user_id');
		 
		 $query = $this -> db -> get();

		 if($query -> num_rows() > 0){
	     	return $query->result();
	     }
	     else
	     {
	     	return false;
	     }
	
	}

 

}
?>
