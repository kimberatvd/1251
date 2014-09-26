<?php snippet('header') ?>

<section class="home">

  <article>
    <div class="logo">
    	<img src="/1251/assets/images/logo.png" /><!--remove /1251 when not in subfolder-->
    </div>

    <?php snippet('menu') ?>
  </article>

</section>

<?php 

foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php snippet('footer') ?>