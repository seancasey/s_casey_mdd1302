<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
	class Ajax_model extends CI_Model {

		public function __construct(){
	  		parent::__construct();
	 	}

	 //Login Function : Checks the db for email and password
	 function delp($cid)
	 { 
	 	$this->db->where('challenge_id', $cid);
		return json_encode((bool)$this->db->delete('challenges')); 
	 }
	 function acc($cid)
	 { 
	 	$data = array(
               'challenge_accepted' => 1
               
            );

		$this->db->where('challenge_id', $cid);
		$this->db->update('challenges', $data); 
		return $this->db->affected_rows(); 
	 }
	 function ccc($cid)
	 { 
	 	$data = array(
               'challenge_accepted' => 2
               
            );

		$this->db->where('challenge_id', $cid);
		$this->db->update('challenges', $data); 
		return $this->db->affected_rows(); 
	 }

	 
}
?>
