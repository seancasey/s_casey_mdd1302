<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct(){
	  parent::__construct();
	  //load the model for the database usage
	  $this->load->model('user_model');
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
		var_dump($this->session->userdata('logged_in'));
		echo 'title';
	   $this->load->view('dashboard');		
	}

 }
 
 function register(){
 	$this->load->view('registration');
 }
 
 /*The login function will check to see whether the form input is from the login form
 or the registration form.  It checks the form validations, then depending on the form it will either
 log the user in, or register the user, then log them in. */
 function login(){
 
 	/*If the user input comes from the registrtion page*/
 	if($this->input->post('form_type')=="register"){
 		//Set up form validation for the registration page
 		$this->form_validation->set_rules('reg_email', 'Email', 'trim|required|valid_email|is_unique[users.email]');
	 	$this->form_validation->set_rules('reg_fname', 'First Name', 'trim|required|xss_clean');
		$this->form_validation->set_rules('reg_lname', 'Last Name', 'trim|required|xss_clean|');
		$this->form_validation->set_rules('reg_pass', 'Password', 'trim|required|matches[reg_pass_confirm]|min_length[5]|max_length[12]|md5');
		$this->form_validation->set_rules('reg_pass_confirm', 'Confirm', 'trim|required|xss_clean');
		
		//Check to see if the form fields are valid
		if($this->form_validation->run() == FALSE)
		{
			//If field validation fails, send back to the registration page
	     	$this->load->view('registration');

	    }
	    else
	    {
	    	//If the forms are valid load the user into the db and take them to the dashboard
	    	 $fname = $this->input->get_post('reg_fname', TRUE);
		     $lname = $this->input->get_post('reg_lname', TRUE);
		     $pass = $this->input->get_post('reg_pass', TRUE);
		     $email = $this->input->get_post('reg_email', TRUE);
		     
		     $reg_data = array(
		     	'fname' => $fname ,
			   'lname' => $lname,
			   'email'=> $email,
			   'password'=>$pass,
			  );
			  $this->user_model->register($reg_data);
			  $uid = $this->db->insert_id();
			  $sess_array = array(
			  	'id' => $uid,
		         'username' => $email,
		         'fname' => $fname
		         
		      );
		       $this->session->set_userdata('logged_in', $sess_array);
		       $this->index();
		       var_dump($uid);
	    
	    }

		
 	}
 	/*If the form data came from the login page*/
 	else{
       //Set rules for the login form
 	   $this->form_validation->set_rules('si_email', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('si_pass', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed. User redirected to login page
	     
	     $this->load->view('home_view');
	    
	   }
	   else
	   {
	     /* If form validation went through we can a session has been started and we can send
	        them to the dashboard view.
	     */
	     
	     $this->load->view('dashboard');
	     
	     
	    
	   }
		}
  }
  
  public function logout(){
      $this->session->unset_userdata('logged_in');
      session_destroy();
      $this->index();
      
   }
   



 function check_database($password){
   //Field validation succeeded Validate against database
   $username = $this->input->post('si_email');

   //query the database
   $result = $this->user_model->login($username,$password);
   

   if($result)
   {
   	$sess_array = array();
     foreach($result as $row)
     {
       $sess_array = array(
         'id' => $row->user_id,
         'username' => $row->email
       );
       $this->session->set_userdata('logged_in', $sess_array);
       var_dump($sess_array);
     }
     return TRUE;

   
   }
   else
   {
     $this->form_validation->set_message('check_database', 'Invalid username or password');
     return false;
   }
 }

}
?>
