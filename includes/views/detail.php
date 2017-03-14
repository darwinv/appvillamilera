<?php render('_header',array('title'=>$title))?>

<div class="rightColumn">
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="c">
        <?php render($view) ?>
    </ul>
</div>
<?php if (isset($_GET['detail_quote'])) { ?>
	<a  class="ui-shadow ui-btn ui-corner-all" type="submit" id="submit-3">Hacer pedido</a>
<?php  } ?>


<?php render('_footer')?>