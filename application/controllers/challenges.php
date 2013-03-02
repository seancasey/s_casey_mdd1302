<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Challenges extends CI_Controller{
	public function __construct(){
	  parent::__construct();
	  //load the model for the database usage
	  $this->load->model('user_model');
	  $this->load->model('challenge_model');
	   $this->load->model('ajax_model');
	   //This method will have the credentials validation
	   $this->load->library('form_validation');
	   $this->load->library('session');
	   $this->load->library('email');
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
	   		$this->form_validation->set_rules('nc_friend_id', 'Friend', 'trim|required|xss_clean');
	   		$this->form_validation->set_rules('nc_title', 'Title', 'trim|required|xss_clean');
	   		$this->form_validation->set_rules('nc_desc', 'Description', 'trim|required|xss_clean|');
	   		
	   		//Check the form values
	   		if($this->form_validation->run() == FALSE)
	   		{
	   			$session_data = $this->session->userdata('logged_in');
	   			$user = $session_data['id'];
	   			
				//If field validation fails, send back to the new challenges page
				$this->newchallenge();

			}else{
				$this->create_challenge();		   	
			}
	   	
	   		
		}elseif($this->input->post('form_type')=="challenge2"){
			if(!($this->session->userdata('logged_in'))){
				$this->login();
 	  		}else{
 	  			$this->mychallenges();
			}
		}elseif($this->input->post('form_type')=="add_comment2"){
			$this-> add_comment2();
		}
		else{
			if(!($this->session->userdata('logged_in'))){
				$this->login();
 	  		}else{
 	  			$this->mychallenges();
			}
		}

	}
 }
 function delpending(){
	 $delpend = $this->ajax_model->delp($_POST['cid1']);
	 echo $delpend;
	 
 }
 
 function acchallenge(){
	 $ac = $this->ajax_model->acc($_POST['cid1']);
	 echo $ac;
	 
 }
 
  function cchallenge(){
	 $ac = $this->ajax_model->ccc($_POST['cid1']);
	 echo $ac;
	 
 }
 
 function add_comment(){
 	$this->form_validation->set_rules('nc_desc', 'Description', 'trim|required|xss_clean|');
	   		
	   		
			 	$ccid = $this->input->post('cid');
			 	$chData = $this->challenge_model->get_one_challenge($ccid);
				$session_data = $this->session->userdata('logged_in');
				$uid = $session_data['id'];
				
				$data = array('user'=>$uid,
				'uc' =>$chData);	
				var_dump($data);


				$this->load->view('add_comment',$data);
			
	 
 }
 function add_comment2(){
 	$this->form_validation->set_rules('nc_desc', 'Comment Field', 'trim|required|xss_clean|');
	   		
	   		//Check the form values
	   		if($this->form_validation->run() == FALSE)
	   		{
	   			$this->mychallenges();
	   		}else{
			 	

				
				$this->mychallenges();
			}
	 
 }


 function mychallenges(){
 		$session_data = $this->session->userdata('logged_in');
		$userdata = array('uid'=>$session_data['id'],
		'email'=>$session_data['username'],
		'fname'=>$session_data['fname']
		);
		$chData = $this->challenge_model->get_all_challenges($userdata['uid']);
		$mchData = $this->challenge_model->get_all_my_challenges($userdata['uid']);
		var_dump($mchData);
		$data = array('user'=>$userdata,
		'uc' =>$chData,
		'muc'=>$mchData);

	 	$this->load->view('my_challenges',$data);
 }
		



 function newchallenge(){
 	if(!($this->session->userdata('logged_in'))){
 	  	$this->login();
	}else{
		
		
				//If the forms are valid, then insert into the database
		$session_data = $this->session->userdata('logged_in');
		$user = $session_data['id'];
		$data['id'] = $session_data['id'];
		$cdata = $this->user_model->retrieve_friends($user);
		$frc = array('userData'=>$data,
		'friendData' => $cdata);
		$this->load->view('new_challenge',$frc);
 	}
 }
  
 function create_challenge(){
	 if(!($this->session->userdata('logged_in'))){
 	  	$this->login();
	}else{
		//If the forms are valid, then insert into the database
	
		   		//If the forms are valid, then insert into the database
		   		$session_data = $this->session->userdata('logged_in');
		   		$opponent = $this->input->get_post('nc_friend_id', TRUE);
				$title = $this->input->get_post('nc_title', TRUE);
				$desc = $this->input->get_post('nc_desc', TRUE);
				$reg_data = array(
		     	'challenger_id' => $session_data['id'],
			   'opponent_id' => $opponent,
			   'challenge_name'=> $title,
			   'challenge_desc'=>$desc
			  );
			  //Load the new challenge into the db
			  $ncr = $this->challenge_model->new_challenge($reg_data);
			  //If the returned value is greater than 0, the insert was successful
			  if($ncr > 0){
			  	 
			  	  $userEmail = $session_data['username'];
			  	  var_dump($ncr);
				 
				  
				  $newcData = $this->challenge_model->get_one_challenge($ncr);
				  
				  var_dump($newcData[0]->cfname);
				  $challenge_fname = $newcData[0]->cfname;
				  $challenge_lname = $newcData[0]->clname;
				  $op_fname = $newcData[0]->fname;
				   $op_lname = $newcData[0]->lname;
				   $op_email = $newcData[0]->email;
				   $challenge_name = $newcData[0]->challenge_name;
				  
				  //Send an email to the user that the challenge was created successfully.
				  $this->email->from('challange.accepted.web@gmail.com');
				  $this->email->to($userEmail);
				  $this->email->subject('Your Challenge has been Created!');
				  $this->email->message('Your Challenge, ' . $challenge_name . ' has been created and ' . $op_fname . ' ' . $op_lname . ' has been notified! You will be notified when the challenge has been accepted.');
				  $this->email->send();
				  
				   //Send an email to the opponent that the challenge was created and instruct them on their next steps.
				   $this->email->from('challange.accepted.web@gmail.com');
				  $this->email->to($op_email);
				  $this->email->subject('You Have a New Challenge!');
				  $this->email->message('Hey ' . $op_fname . ' <br /> ' . $challenge_fname . ' has challenged you to the challenge: ' . $challenge_name . '.<br /><br />Go to http://challengeaccepted.com and log in to view the full details of the challenge!');
				  $this->email->send();

			
				  $this->load->view('dashboard');
				  
			  }else{
				  
			  }
			  
		
	}
 }
 

  

}
?>
