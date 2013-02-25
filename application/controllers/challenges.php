<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Challenges extends CI_Controller{
	public function __construct(){
	  parent::__construct();
	  //load the model for the database usage
	  $this->load->model('user_model');
	  $this->load->model('challenge_model');
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $this->load->library('session');
	}

 function index()
 {
 	/*If statement checks if a there is a session.  If there is no session
 	run the login function, if there is a session load the dashboard view. */
 	if(!($this->session->userdata('logged_in'))){
 	  	$this->login();
	}else{
		//Check to see where the data is coming from
	   if($this->input->post('form_type')=="new_challenge1"){
	   		//Form validation check
	   		$this->form_validation->set_rules('nc_title', 'Title', 'trim|required|xss_clean');
	   		$this->form_validation->set_rules('nc_desc', 'Description', 'trim|required|xss_clean|');
	   		
	   		//Check the form values
	   		if($this->form_validation->run() == FALSE)
	   		{
				//If field validation fails, send back to the new challenges page
				$this->load->view('new_challenge');

			}
			else{
				$this->create_challenge();		   	
			}
	   	
	   		
	}

 }
 }
 
 function newchallenge(){
 	$this->load->view('new_challenge');
 }
 
 function create_challenge(){
	 if(!($this->session->userdata('logged_in'))){
 	  	$this->login();
	}else{
		//If the forms are valid, then insert into the database
	
		   		//If the forms are valid, then insert into the database
				$title = $this->input->get_post('nc_title', TRUE);
				$desc = $this->input->get_post('nc_desc', TRUE);
				$reg_data = array(
		     	'challenger_id' => '1' ,
			   'challengee_id' => '1',
			   'challenge_name'=> $title,
			   'challenge_desc'=>$desc
			  );
			  $this->challenge_model->new_challenge($reg_data);
		   	  $this->load->view('dashboard');
		
	}
 }
 

  

}
?>
