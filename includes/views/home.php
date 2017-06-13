<?php render('_header',array('title'=>$title))?>

<div class="ui-grid-b">
    <div class="ui-block-a">
      <div class="img-home"> <img src="assets/imgs/globos.png" alt=""> </div>
    
    </div>
    <div class="ui-block-b"  style="margin-bottom: 8%;">
       <!-- <div class="ui-bar ui-bar-b" style="height:200px">  -->
        <h2>Villa Milera</h2>
            <div class="img-home"> <img src="assets/imgs/coop.png" alt=""> </div>
        <!--  </div>-->
        </div>
    <div class="ui-block-c"> 
        <div class="img-home">
        <img src="assets/imgs/lights.png" alt=""> 
        </div>
    </div>
</div>


<div class="ui-grid-b opciones">
    <div class="ui-block-a">
        <div class="ui-bar ui-bar-b" > 
        <a href="?shop"><img src="assets/imgs/purchase-bag.png"> </a> 
         <p><a href="?shop" class="ui-btn ui-corner-all">Pedidos </a></p> </div>
    
    </div>
    <div class="ui-block-b">
        <div class="ui-bar ui-bar-b" > 
          <a href="?gallery"><img src="assets/imgs/photos.png"></a>  
        <p><a href="?gallery" class="ui-btn ui-corner-all">Galer&iacute;a</a></p>
        </div>
    </div>
    <div class="ui-block-c">
        <div class="ui-bar ui-bar-b" > 
        <a href="?social"><img src="assets/imgs/info.png"></a>
             <p><a href="?social" class="ui-btn ui-corner-all">Informaci&oacute;n </a></p>
        </div>
    </div>
</div>

<!--
<ul data-role="listview" data-inset="true" data-theme="c" data-dividertheme="b">
    <li data-role="list-divider">Choose a product category</li>
    <?php render($content) ?>
</ul> -->

<?php render('_footer')?>