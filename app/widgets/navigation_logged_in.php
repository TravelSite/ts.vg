<?php

/*
 * Demo widget
 */
class navigation_logged_in extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array(
            	'/' 	 => array('icon'=>'home', 'label'=>'Home', 'status'=>'inactive'),
            	'destinations' => array('icon'=>'location', 'label'=>'Destinations', 'status'=>'inactive'),
            	'itineraries' => array('icon'=>'bullets', 'label'=>'Itineraries', 'status'=>'inactive'),
            	'friends' 	 => array('icon'=>'user', 'label'=>'Friends <span class="badge">1,234</span>', 'status'=>'inactive'),
            	'messages' 	 => array('icon'=>'mail', 'label'=>'Messages <span class="badge">123</span>', 'status'=>'inactive'),
            	'account/logout' => array('icon'=>'minus', 'label'=>'Sign Out', 'status'=>'inactive'),
//            	'settings' 	 => array('icon'=>'<span class="ui-icon-home ui-btn-icon-left"></span>', 'label'=>'Settings', 'status'=>'inactive')
            );
        }

        $this->view('widgets/navigation_logged_in', $data);
    }
    
}