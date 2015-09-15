<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Landing extends CI_Controller {

	public function __construct(){
		parent::__construct();
	}

	public function index(){
		echo time();
	}
}

/* End of file .php */
/* Location: ./application/controllers/.php */