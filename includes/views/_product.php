<?php  $colores=Product::getColorsByProduct($product->id_producto); ?> 
<li class="product">
<img src="assets/img/<?php echo $product->id_producto ?>.jpg" alt="<?php echo $product->nombre ?>" />
<?php echo $product->nombre ?> <i><?php echo $product->stock?></i> <b>$<?php echo $product->precio_unitario?></b>
<label for="number-pattern">Cantidad</label>
<input  name="number" id="number-pattern" min="1" value="" type="number">
<label for="colores"></label>
<select name="colores" id="colores" data-mini="true" data-inline="true">
 <?php foreach ($colores as $key => $value):
 echo '<option value='.$key.'>'. $value. '</option>';
 endforeach; ?>
</select>


</li>