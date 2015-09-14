<? if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends Public_Controller {

	public function __construct(){
		parent::__construct();
		$this->lang->load('page_NAMEOFPAGE');
	}

	public function index(){
		redirect('/');
	}
	
	public function funct(){
		// title
		$this->template->title = 'Welcome!';
		
		// css stylesheet
		$this->template->stylesheet->add('http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/css/bootstrap.min.css');
		
		// javascript
		$this->template->javascript->add('http://netdna.bootstrapcdn.com/bootstrap/3.0.0-rc1/js/bootstrap.min.js');
		
		// Load a view in the content partial
		$this->template->content->view('hero', array('title' => 'Hello, world!'));
		
//		$this->params['name'] = 'value';
//		$this->params['name'] = 'value';
//		$this->params['name'] = 'value';

		$this->template->content->view('name_of_template', $this->params);
		
		// Set a partial's content
		$this->template->footer = 'Made with Twitter Bootstrap';
		
		// Publish the template
		$this->template->publish('template-'.$this->uri->segment(1));
	}
}

/* End of file .php */
/* Location: ./application/controllers/.php */