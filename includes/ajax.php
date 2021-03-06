<?php 

$_POST['action']='save_quote';

require_once "config.php";
require_once "connect.php";
require_once "models/product.model.php";
require_once "models/client.model.php";

if ($_POST['action']=='save_quote') {
	
	$car 			= $_POST['car'];
	$cliente	 	= $_POST['cliente'];
	$a 				= explode('-',$_POST['fecha_evento']);
	$fecha_evento 	= $a[2].'-'.$a[1].'-'.$a[0];
	$result 		= '';
	$id_presupuesto = '';

	

	$arrClient = Client::getClient($cliente);


	if (empty($arrClient[0])) {
		(Client::insertClient($cliente));
	}


	if (!empty($car)) {
			
		$fecha 			= date('Y-m-d');

		$id_presupuesto = (Product::insertQuote($cliente,$fecha_evento,$fecha));

		foreach ($car as $key => $value) {
			if(empty($value['color_id'])){
				$color = 0;
			}else{
				$color = $value['color_id'];
			}

			$id_producto	= $value['id']; 
			$id_color		= $color;
			$cantidad		= $value['cantidad'];
			$precio_total	= $value['preciototal'];
			//$nrofact		= $value[''];		

			(Product::insertDetail($id_presupuesto,$id_producto,$id_color,$cantidad,$precio_total,$nrofact,$fecha));
			(Product::updateStockProduc($id_producto, $cantidad));
		}

		if (!empty($id_presupuesto)) {
			$result = 'Ok';
		}
	}

	echo (json_encode ( array('result'=> $result,'id'=> $id_presupuesto) ));
}

?>