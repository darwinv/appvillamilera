<?php

class Product{
	
	// The find static method returns an array
	// with Product objects from the database.
	
	public static function find($arr){
		global $db;
		
		if($arr['id']){
			$sta = $db->prepare("SELECT * FROM productos WHERE id_producto=:id");
		}
		else if($arr['category']){

			$sta = $db->prepare("SELECT * FROM productos WHERE id_categoria = :category");
		}
		else{
			throw new Exception("Unsupported property!");
		}
		
		$sta->execute($arr);
		
		return $sta->fetchAll(PDO::FETCH_CLASS, "Product");
	}

	

	public static function getLastPresupuesto(){
		global $db;
		
		$sta = $db->prepare("select max(id_presupuesto) as last_id from presupuesto");
		
		
		$sta->execute($arr);
		
		return $sta->fetchAll(PDO::FETCH_CLASS, "Product");
	}
	public static function getColorsByProduct($id){
			global $db;
		

		$st = $db->prepare("SELECT c.id_color as id, c.detalle as color FROM color_producto cp 
			INNER JOIN colores c ON c.id_color = cp.id_color WHERE cp.id_producto = :id");
			$st->execute(array(':id' => $id));
			$colores=$st->fetchAll(PDO::FETCH_KEY_PAIR);			
			return $colores;
			

	}

	public static function replaceAcents($texto1) {

//Rememplazamos caracteres especiales latinos minusculas
$find = array('á', 'é', 'í', 'ó', 'ú', 'ñ');
$repl = array('&aacute;', '&eacute;', '&iacute;', '&oacute;', '&uacute;', '&ntilde;');
$texto1 = str_replace ($find, $repl, $texto1);


//Rememplazamos caracteres especiales latinos mayusculas
$find = array('Á', 'É', 'Í', 'Ó', 'Ú', 'Ñ');
$repl = array('&Aacute;', '&Eacute;', '&Iacute;', '&Oacute;', '&Uacute;', '&Ntilde;');
$texto1 = str_replace ($find, $repl, $texto1);

return $texto1;

}  


	public static function insertQuote($id_cliente, $fecha_evento,$fecha_emision){
		global $db;

		$status	= 1;

		
		try {
			$st = $db->prepare("INSERT INTO `presupuesto` (`id_cliente`, `fecha_emision`, `status`, `fecha_evento`) VALUES ('$id_cliente', '$fecha_emision', '$status', '$fecha_evento')");
			
			$st->execute();
			$result = $db->lastInsertId();
		}
		catch(PDOException $e) {
			
			$result = '';
		}

		return $result;	

	}


	public static function insertDetail($id_presupuesto,$id_producto,$id_color,$cantidad,$precio_total,$nrofact,$fecha){
		global $db;

		try {
			$st = $db->prepare("INSERT INTO `detalles` ( `id_presupuesto`, `id_producto`, `id_color`, `cantidad`, `precio_total`, `nrofact`, `fecha`) VALUES ( '$id_presupuesto','$id_producto','$id_color','$cantidad','$precio_total','$nrofact','$fecha')");
			
			$st->execute();
			$result = $db->lastInsertId();
		}
		catch(PDOException $e) {
			var_dump($e->getMessage());
			$result = '';
		}

		return $result;			

	}






	public static function updateStockProduc($id_producto, $cantidad){
		global $db;

		$st = $db->prepare("UPDATE `productos` SET `stock`=stock-$cantidad WHERE (`id_producto`='$id_producto')");
		return $st->execute();			

	}


}

?>