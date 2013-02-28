<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Challenge_model extends CI_Model {

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
	 
	 function new_challenge($data)
	 {
		 $test = (bool)$this->db->insert('challenges', $data); 
		 if($test>0){
			return $this->db->insert_id();
		 }else{
			 return 0;
		 }
		 
		 
	 }
	 
	 function get_all_challenges($id){
	   $this -> db -> select('c.challenge_id, c.challenge_desc, c.challenge_name, c.challenge_accepted, c.challenge_completed,c.created_date,c.completed_date,c.opponent_id, o.fname as cofname,o.lname colname,o.email');
	   $this -> db -> from('challenges as c');
	   $this -> db -> JOIN('users as o', 'o.user_id = c.opponent_id');
	   $this -> db -> where('challenger_id = ' . "'" . $id . "'");
	   $query = $this -> db -> get();
	   if($query -> num_rows() < 1)
	   {
	     return false;
	   }
	   else
	   {
	     return $query->result();
	   }

	 }
	 function get_one_challenge($id){
	 	$this -> db -> select('c.opponent_id,c.`challenge_id`,c.opponent_id,c.challenge_name,c.challenge_desc,u.email, u.fname,u.lname, i.fname as cfname,i.lname as clname');
	 	$this -> db -> from('challenges as c');
		$this -> db -> JOIN('users as u', 'c.opponent_id = u.user_id');
		$this -> db -> JOIN('users as i', 'c.challenger_id = i.user_id');
		$this -> db -> where('c.challenge_id = ' . "'" . $id . "'");
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

 

}
?>