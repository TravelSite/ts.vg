<?php

class bottom_navigation_destinations extends Widget {

    public function display($data) {
        
        if (!isset($data['items'])) {

			$current_page = $this->uri->segment(2);
			echo $current_page;
			
			$data['grid'] = 'd';
			$data['locale_id'] = 123;

            $data['items'] = array(
            	'places' => array('label'=>'Places', 'icon_src'=>'places', 'status'=>($current_page == 'places' ? 'active' : 'inactive')),
            	'tours' => array('label'=>'Tours', 'icon_src'=>'tours', 'status'=>($current_page == 'tours' ? 'active' : 'inactive')),
            	'events' => array('label'=>'Events', 'icon_src'=>'events', 'status'=>($current_page == 'events' ? 'active' : 'inactive')),
            	'food' => array('label'=>'Food', 'icon_src'=>'food', 'status'=>($current_page == 'food' ? 'active' : 'inactive')),
            	'accommodations' => array('label'=>'Hotels', 'icon_src'=>'accommodations', 'status'=>($current_page == 'accommodations' ? 'active' : 'inactive'))
            );
        }

        $this->view('widgets/bottom_navigation_destinations', $data);
    }
    
}