function start_pedido(){
	
	var cedula = document.querySelector("#cedula").value;
	var fecha = document.querySelector("#date-input").value;

sessionStorage.setItem('cedula',cedula);
sessionStorage.setItem('fecha',fecha);

window.location.href="?category=1";

}

$(document).ready(function(){
var carrito = [];
	$('.check_pedido').change(function() {
		//$(this).data("id")
		var id = $(this).data("id");

		var preciounitario = $('#product_'+id).data("price");		

		var cantidad = $('#number-pattern_'+id).val();
		var color = $('#colores_'+id).val();

		var preciototal = preciounitario * cantidad;
		
		if ($(this).is(':checked')){

			carrito.push({"id":id,"color":color,"cantidad":cantidad,"preciototal":preciototal});		
		
		}else{
			
		}

		

		// body...
	});
});
