<?php

/* This controller renders the category pages */

class DetailController{

	public function handleRequest(){
		if (isset($_GET['detail_quote'])) {
			$view  = '_detail';
			$title = 'Detalle de pedido';
		}elseif (isset($_GET['send_quote'])) {
			$view  = '_send_quote';
			$title = 'Envio de pedido';	
		}
		 
		render('detail',array(
			'title'	=> $title,
			'view'	=> $view
		));
	}
}


?>