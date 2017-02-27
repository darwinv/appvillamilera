<?php

/* This controller renders the home page */

class ShopController{
	public function handleRequest(){
		
		// Select all the categories:
		//$content = Category::find();
		
		
		render('shop',array(
			'title'		=> 'Haz tu pedido',
			'content'	=> 'nada'
		));
	}
}

?>