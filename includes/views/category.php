<?php render('_header',array('title'=>$title))?>

<div class="rightColumn">
	<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="c">
        <?php render($products) ?>
    </ul>
</div>

<div class="leftColumn">
    <ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
        <li data-role="list-divider">Categories</li>
        <?php render($categories,array('active'=>$_GET['category'])) ?>
    </ul>
</div>
<a href="?detail_quote=1" class="ui-shadow ui-btn ui-corner-all show_detail" type="submit" id="submit-2">Continuar</a>
<?php render('_footer')?>