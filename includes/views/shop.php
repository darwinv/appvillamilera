<?php render('_header',array('title'=>$title))?>

	<h2>Ingrese sus datos</h2>

     <label for="cedula">Ingrese Cédula:</label>
     <input name="cedula" id="cedula" value="" type="text">
  	<label for="date-input">  Fecha del Pedido: </label>
	<input type="text" id="date-input" data-date-format="dd-mm-yy" data-inline="true" data-role="date">
	
<label for="submit-2"></label>
<button class="ui-shadow ui-btn ui-corner-all" onclick="start_pedido();" type="submit" id="submit-2">Proceder</button>


<?php render('_footer')?>