<?php

/* This controller renders the home page */

class HomeController{
	public function handleRequest(){
		
		// Select all the categories:
		//$content = Category::find();
		
		
		render('home',array(
			'title'		=> 'Villa Milera',
			'content'	=> $content
		));
	}
}

?>