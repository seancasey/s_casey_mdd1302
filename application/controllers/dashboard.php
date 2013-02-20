<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
session_start(); //we need to call PHP's session object to access it through CI
class Dashboard extends CI_Controller {

 function __construct()
 {
   parent::__construct();
   $this->load->model('user','',TRUE);
   if(!($this->session->userdata('logged_in')))
   {
   
   	 //If no session, redirect to login page
     redirect('home');
   }
   
 }
 
 function index()
 {
 	var_dump($this->session->userdata('logged_in'));
 	$this->load->view('test_view');
 	
		
 }
}
?>