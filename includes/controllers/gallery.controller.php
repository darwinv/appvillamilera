<?php

/* This controller renders the home page */

class GalleryController{
	public function handleRequest(){
		
		// Select all the categories:
		//$content = Category::find();
		
		
		render('galeria',array(
			'title'		=> 'Galeria de Eventos',
			'content'	=> 'nada'
		));
	}
}

?>