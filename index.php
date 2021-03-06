<?php

/*
	This is the index file of our simple website.
	It routes requets to the appropriate controllers
*/

require_once "includes/main.php";

try {

	if(isset($_GET['gallery'])){
		$c = new GalleryController();
	}else if(isset($_GET['category'])){
    	$c = new CategoryController();
	}else if(isset($_GET['detail_quote']) || isset($_GET['send_quote'])){
    	$c = new DetailController();
	}else if(isset($_GET['shop'])){
		$c = new ShopController();
	}
	else if(isset($_GET['social'])){
		$c = new SocialController();
	}
	else if(empty($_GET)){
		$c = new HomeController();
	}
	else throw new Exception('Wrong page!');
	
	$c->handleRequest();
}
catch(Exception $e) {
	// Display the error page using the "render()" helper function:
	render('error',array('message'=>$e->getMessage()));
}

?>