<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class User extends CI_Controller{
	public function __construct(){
	  parent::__construct();
	  //load the model for the database usage
	  $this->load->model('user_model');
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	}

 function index()
 {
 	
 	if(($this->session->userdata('email')!="")){
 	   
 	   $this->load->view('template/home_header_view');
	   $this->load->view('dashboard');
	   $this->load->view('template/home_footer_view');
	}else{
 		$this->load->view('template/home_header_view');
	  	$this->load->view('home_view');
	  	$this->load->view('template/home_footer_view');
	
	}

 }
 
 function login(){
       //Set rules for the login form
 	   $this->form_validation->set_rules('si_email', 'Username', 'trim|required|xss_clean');
	   $this->form_validation->set_rules('si_pass', 'Password', 'trim|required|xss_clean|callback_check_database');
	
	   if($this->form_validation->run() == FALSE)
	   {
	     //Field validation failed. User redirected to login page
	     $this->load->view('template/home_header_view');
	     $this->load->view('home_view');
	     $this->load->view('template/home_footer_view');
	   }
	   else
	   {
	     /* If form validation went through we can a session has been started and we can send
	        them to the dashboard view.
	     */
	     $this->load->view('template/home_header_view');
	     $this->load->view('dashboard');
	     $this->load->view('template/home_footer_view');
	     
	    
    }
  }
  
  public function logout(){
      //set everything to blank
      $newdata = array(
      'user_id'   =>'',
      'email'     => '',
      'logged_in' => FALSE,
      );
      //delete the session and send the user back to the register page
      $this->session->unset_userdata($newdata);
      $this->session->sess_destroy();
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
         'username' => $row->email,
         'fname' => $row->fname
               
       );
       
     }
     $this->session->set_userdata('logged_in', $sess_array);
    
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
