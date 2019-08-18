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

if(!function_exists("set_active_route")){
	function set_active_route($route){
		return Route::is($route) ? 'active' : '';
	}
}