<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Public_Controller extends MY_Controller {

    function __construct(){
        parent::__construct();
        
        if($this->config->item('online') === FALSE){
            show_error('Sorry the site is shut for now.');
        }

		// if we're not in the login screen AND we have no array data...
		$uri_segments = $this->uri->segment_array();
		if ((isset($uri_segments[1]) && $uri_segments[1] != 'account' || isset($uri_segments[2]) && in_array($uri_segments[2], array('login','logout','signup','confirm','password_reset', 'superlogout')) == false) && isset($this->data['account']->id) == false){
			// set url to one we need to redirect back to
//			$this->session->set_flashdata('redirect_url', uri_string());
//			redirect('account/login');
//			exit;
		}
    }
}