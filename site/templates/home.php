<?php snippet('header') ?>

<section class="home">

  <article>
    <img src="/1251/assets/images/logo.png" /><!--remove /1251 when not in subfolder-->
    <?php snippet('menu') ?>
  </article>

</section>

<?php 

foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php snippet('footer') ?>