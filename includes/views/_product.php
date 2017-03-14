<?php  
	$colores 	= Product::getColorsByProduct($product->id_producto); 
	$cantidad 	= $product->stock?:0;
?> 
<li class="product" id="product_<?php echo $product->id_producto; ?>" data-price="<?php echo $product->precio_unitario;?>">
	<img src="assets/img/<?php echo $product->id_producto ?>.jpg" alt="<?php echo $product->nombre ?>" />
	<label id="name_<?php echo $product->id_producto; ?>"> <?php echo $product->nombre ?> </label>
	<b>$<?php echo $product->precio_unitario?></b>

	<input onchange="maxValue(this,'<?php echo $cantidad;?>')" data-inline="true" name="number" id="number-pattern_<?php echo $product->id_producto; ?>" min="1" value="" placeholder="Cantidad hasta <?php echo $cantidad;?>" data-mini="true" type="number" max="<?php echo $cantidad;?>" >
	<label for="colores"></label>
	<select name="colores" id="colores_<?php echo $product->id_producto; ?>" data-mini="true" data-inline="true">
		<?php foreach ($colores as $key => $value):
			echo '<option value='.$key.'>'. $value. '</option>';
		endforeach; ?>
	</select>
		
	<input data-id="<?php echo $product->id_producto; ?>" type="checkbox" id="favorito_<?php echo $product->id_producto; ?>" class="check_pedido"  name="favorito_<?php echo $product->id_producto;?>" data-mini="true">
    <label for="favorito_<?php echo $product->id_producto; ?>">Pedido</label>
</li>

