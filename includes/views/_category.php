<li <?php echo ($active == $category->id_categoria ? 'data-theme="a"' : '') ?>>
<a href="?category=<?php echo $category->id_categoria?>" data-transition="fade">
	<?php echo $category->nombre ?>
  <!--  <span class="ui-li-count"><?php echo $category->contains?></span> --> </a>
</li>