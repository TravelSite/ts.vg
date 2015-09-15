<?php

	// prints everything in a nice box
	if (function_exists('print_r_pre') === false){
		function print_r_pre($array = array()){
			echo '<pre>';
			print_r($array);
			echo '</pre>';	
		}
	}

?>