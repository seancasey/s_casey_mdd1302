<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	$fb_config = array(
            'appId'  => '477386972284105',
            'secret' => 'd8b92ab4cadf582da311298c3dd59387',
        );

        $this->load->library('facebook', $fb_config);

        $user = $this->facebook->getUser();

        if ($user) {
            try {
                $data['user_profile'] = $this->facebook->api('/me');
                $data['user_friends'] = $this->facebook->api('/me/friends');
            } catch (FacebookApiException $e) {
                $user = null;
            }
        }
        
        $uid = "681451718"; //User's Facebook ID, set the value as "me" if publishing on logged in user's wall
$ufname = "Brad Cerny"; // User's Full name on Facebook

        if ($user) {
            $data['logout_url'] = $this->facebook->getLogoutUrl();
        } else {
            $data['login_url'] = $this->facebook->getLoginUrl();
        }

        $wall_post = array('message' => 'this is my message @['.$uid.':1:'.$ufname.']',
                'name' => 'Trying to use Oauth with Facebook',
                'caption' => "Brad and simon haven't figured it out yet",
                'link' => 'http://mylink.com',
                'description' => 'this is a description',
                'picture' => 'http://i2.kym-cdn.com/photos/images/newsfeed/000/406/325/b31.jpg',
                'actions' => array(array('name' => 'Get Search',
                                  'link' => 'http://www.google.com'))
                );    
$result = $this->facebook->api('/me/feed/', 'post', $wall_post);
		$this->load->view('welcome_message', $data);
	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */