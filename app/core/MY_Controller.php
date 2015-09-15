<?php if(!defined('BASEPATH')) exit('No direct script access allowed');
/*
* Base Controller Extension
* 
* If cookie to bypass IS NOT set, redirects user to a different location. 
* If cookie to bypass IS set, ignores redirection attemps and loads as expected.
* 
* @copyright     Copyright (c) 2013 Concepts Group, Inc.
* @version       1.0
* 
*/



class MY_Controller extends CI_Controller {

	function __construct(){
		parent::__construct();
	}
}