<?php snippet('header') ?>

<section class="home">

  <article>
    <img src="/assets/images/logo.png" />
    <?php snippet('menu') ?>
  </article>

</section>

<?php 

foreach($pages->visible() as $section) {
  snippet($section->uid(), array('data' => $section));
}

?>

<?php snippet('footer') ?>