<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Jump extends CI_Controller {

	public function __construct(){
		parent::__construct();
//		$this->lang->load('page_NAMEOFPAGE');
	}

	public function index(){
//		$hash = $this->url_shortener->decode($this->uri->segment(1));
		$hash = $this->uri->segment(1);
		
		redirect('http://travelsite.com/jump/'.$hash);
	}
	
}

/* End of file .php */
/* Location: ./application/controllers/.php */