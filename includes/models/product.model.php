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


	public static function getColorsByProduct($id){
			global $db;
		

		$st = $db->prepare("SELECT c.id_color as id, c.detalle as color FROM color_producto cp 
			INNER JOIN colores c ON c.id_color = cp.id_color WHERE cp.id_producto = :id");
			$st->execute(array(':id' => $id));
			$colores=$st->fetchAll(PDO::FETCH_KEY_PAIR);			
			return $colores;
			

	}
}

?>