<?php

/*
 * Demo widget
 */
class navigation_admin extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array(
				'./' => array('label'=>'Home', 'status'=>'inactive'),
				'locations' => array('label'=>'Locations', 'status'=>'inactive'),
				'permissions' => array('label'=>'Permissions', 'status'=>'inactive'),
				'blog' => array('label'=>'Blogs', 'status'=>'inactive'),
				'members' => array('label'=>'Members', 'status'=>'inactive'),
//				'analytics' => array('label'=>'Analytics', 'status'=>'inactive'),
//				'queue' => array('label'=>'Queue', 'status'=>'inactive'),
//				'advertisers' => array('label'=>'Advertisers', 'status'=>'inactive'),
//				'tools' => array('label'=>'Tools', 'status'=>'inactive'),
				'leads' => array('label'=>'Leads', 'status'=>'inactive'),
//				'builds' => array('label'=>'Builds', 'status'=>'inactive'),


//            	'orders' 	 => array('label'=>'Orders <span class="badge">42</span>', 'status'=>'inactive'),
//            	'settings' 	 => array('label'=>'Settings', 'status'=>'inactive')
            );
        }

        $this->view('widgets/navigation_admin', $data);
    }
    
}