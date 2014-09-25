<section class="contact">
<a id="<?php echo html($data->title()) ?>"></a>

  <article>
    <h1><?php echo html($data->title()) ?></h1>
    <?php echo kirbytext($data->text()) ?>
    <span class="address"><?php echo kirbytext($data->address()) ?></span>
  </article>

</section>