function start_pedido(){
	
	var cedula = document.querySelector("#cedula").value;
	var fecha = document.querySelector("#fecha").value;

sessionStorage.setItem('cedula',cedula);
sessionStorage.setItem('fecha',fecha);

window.location.href="?category=1";

}