function start_pedido(){
	
	var cedula 	= document.querySelector("#cedula").value;
	var fecha 	= document.querySelector("#date-input").value;

	sessionStorage.setItem('cedula',cedula);
	sessionStorage.setItem('fecha',fecha);

	window.location.href="?category=1";

}





$(document).ready(function(){
	var carrito = [];

	$(document).on('change','.check_pedido',function(){
	  
		
		var id = $(this).data("id");

		var preciounitario = $('#product_'+id).data("price");		

		var cantidad = $('#number-pattern_'+id).val();

		var color_id = $('#colores_'+id).val();
		var color = $('#colores_'+id).find(":selected").text();

		var preciototal = preciounitario * cantidad;

		var name = $('#name_'+id).html();
		
		if ($(this).is(':checked')){

			carrito.push({"id":id,"color":color,"color_id":color_id,"cantidad":cantidad,"preciototal":preciototal,"name":name});		
			$('#colores_'+id).prop('disabled', true);
			$('#number-pattern_'+id).prop('disabled', true);
		}else{			
			carrito.splice(carrito.indexOf('id'),id);
			$('#colores_'+id).prop('disabled', false);
			$('#number-pattern_'+id).prop('disabled', false);
		}

		// body...
	});
 


	//al momento de cargar una pagina con jquery mobile
	$(document).on("pagecreate",function(kk){
		if($("#cont-detail-view").length != 0) { //si existe el ID
		  	create_detail(carrito);
		}

	});

	$(document).on('click','#submit-3',function(){
	  sendData(carrito);
	 });

});

function sendData(car){
	var url 			= 'includes/ajax.php'
	var fecha_evento	= sessionStorage.getItem('fecha');
	var cliente			= sessionStorage.getItem('cedula');
	

	$.ajax({
	  type: 'POST',
	  url: url,
	  data: {action: 'save_quote', car:car, fecha_evento:fecha_evento, cliente:cliente},
	  dataType: "json",
	  success: function(data)
      {
      	if (data.result == 'Ok') {
      		window.location.href="?send_quote&status=successful&id="+data.id;
      	}else{
      		window.location.href="?send_quote&status=fail";
      	}

      }
	});
}


function create_detail(car){
	var html = '';
	var classes = 'ui-first-child';
	var total = 0;

	car.forEach(function(entry) {
		html += '<div class="ui-btn ui-corner-all ui-btn-inherit '+classes+'"><div class="col-xs-10">';
		html += entry.name+' Color '+entry.color+' x'+entry.cantidad;
		html +=	'</div><div class="col-xs-2">$'+entry.preciototal+'</div></div>';

		total += parseFloat(entry.preciototal);

		// entry.id

		classes = '';
	});

	html += '<div class="ui-btn ui-corner-all ui-btn-inherit ui-last-child"><div class="col-xs-10 text-right">Total: &nbsp;</div><div class="col-xs-2 " id="total_quote">$'+total+'</div></div>';

	$("#cont-detail-view").append(html);

}

function maxValue(input,max){
	if (parseFloat(input.value) > parseFloat(max)) {
		input.value = max;
	}
}