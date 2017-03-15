<li id="message-detail-view">
	<?php if ($_GET['status']=='successful') { ?>
		<div class="alert alert-success fade in alert-dismissable" >    
		    <strong>Exitoso!</strong> Informacion enviada correctamente.</br>
		    <?php if (isset($_GET['id']) && !empty($_GET['id']) ) {
		    	echo 'El codigo de su presupuesto es <strong>'.$_GET['id'].'</strong>';
		     } ?>
		</div>
	<?php }else{ ?>
		<div class="alert alert-danger fade in alert-dismissable" >    
			<strong>Error!</strong> Un error ha ocurrido en el proceso de envio.
		</div>

	<?php }?>
</li>
