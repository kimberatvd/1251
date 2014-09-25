<div class="menu">
	<p>
    <?php foreach($pages->visible() AS $p): ?>
    <a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="#<?php echo $p->title() ?>"><?php echo html($p->title()) ?></a>
    <?php endforeach ?>
  </p>
</div>