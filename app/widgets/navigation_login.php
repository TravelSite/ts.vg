<?php

/*
 * Demo widget
 */
class navigation_login extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {
            $data['items'] = array(
            	'users' 	 => array('label'=>'Users', 'status'=>'inactive'),
            	'collateral' => array('label'=>'Collateral', 'status'=>'active'),
            	'orders' 	 => array('label'=>'Orders <span class="badge">42</span>', 'status'=>'inactive'),
//            	'settings' 	 => array('label'=>'Settings', 'status'=>'inactive')
            );
        }

        $this->view('widgets/navigation_login', $data);
    }
    
}