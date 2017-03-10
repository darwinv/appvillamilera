<?php  $colores=Product::getColorsByProduct($product->id_producto); ?> 
<li class="product" id="product_<?php echo $product->id_producto; ?>" data-price="<?php echo $product->precio_unitario;?>">
<img src="assets/img/<?php echo $product->id_producto ?>.jpg" alt="<?php echo $product->nombre ?>" />
<?php echo $product->nombre ?> <b>$<?php echo $product->precio_unitario?></b>

<input data-inline="true" name="number" id="number-pattern_<?php echo $product->id_producto; ?>" min="1" value="" placeholder="Cantidad" data-mini="true" type="number">
<label for="colores"></label>
<select name="colores" id="colores_<?php echo $product->id_producto; ?>" data-mini="true" data-inline="true">
 <?php foreach ($colores as $key => $value):
 echo '<option value='.$key.'>'. $value. '</option>';
 endforeach; ?>
</select>

	
<input data-id="<?php echo $product->id_producto; ?>" type="checkbox" id="favorito_<?php echo $product->id_producto; ?>" class="check_pedido"  name="favorito_<?php echo $product->id_producto;?>" data-mini="true">
    <label for="favorito_<?php echo $product->id_producto; ?>">Pedido</label>
</li>

