<?php 


if(!function_exists("pages_title")){
	function pages_title($title){
		
		$base_tile = "Laracarte - List of artisans";

		if($title === ''){
			return $base_tile;
		}else{
			return $title . ' | '.$base_tile;
		}

	}
}