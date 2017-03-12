<?php

/* This controller renders the home page */

class SocialController{
	public function handleRequest(){
		
		// Select all the categories:
		//$content = Category::find();
		
		
		render('social',array(
			'title'		=> 'Información',
			'content'	=> 'nada'
		));
	}
}

?>