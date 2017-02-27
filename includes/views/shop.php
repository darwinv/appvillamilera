<?php render('_header',array('title'=>$title))?>

	<h2>Ingrese sus datos</h2>

     <label for="cedula">Ingrese Cedula:</label>
     <input name="cedula" id="cedula" value="" type="text">
  	<label for="fecha">  Fecha del Pedido: </label>
	<input name="fecha"   id="fecha" value=""  type="text"/>
	
<label for="submit-2"></label>
<button class="ui-shadow ui-btn ui-corner-all" onclick="start_pedido();" type="submit" id="submit-2">Proceder</button>


<?php render('_footer')?>