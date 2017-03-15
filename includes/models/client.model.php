<?php

class Client{
	public static function getClient($id_cliente=null){
		global $db;
		$sql = "SELECT * FROM clientes WHERE 1";

		if (!empty($id_cliente)) {
			$sql .=" and clientes.id_cliente = $id_cliente";
		}

		//var_dump($sql);
		$sta = $db->prepare($sql);
		
		
		$sta->execute($arr);
		
		return $sta->fetchAll(PDO::FETCH_CLASS, "Client");
	}
	public static function insertClient($id_cliente, $nombrecliente=null,$apellidocliente=null,$dircliente=null,$telefcliente=null){
		global $db;

		$status	= 1;

		
		try {
			$st = $db->prepare("INSERT INTO `clientes` (`id_cliente`, `nombrecliente`, `apellidocliente`, `dircliente`, `telefcliente`) VALUES ('$id_cliente', '$nombrecliente', '$apellidocliente', '$dircliente', '$telefcliente')");
			
			$st->execute();
			$result = $db->lastInsertId();
		}
		catch(PDOException $e) {
			$result = $e->getMessage();
		}

		return $result;	

	}






}

?>