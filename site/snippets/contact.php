<section class="contact">
<a id="<?php echo html($data->title()) ?>"></a>

  <article>
    <h1><?php echo html($data->title()) ?></h1>
    <?php echo kirbytext($data->text()) ?>
    <div class="address"><?php echo kirbytext($data->address()) ?></div>
    <span class="email"><?php echo kirbytext($data->email()) ?></span>
    <div class="small copyr"><?php echo kirbytext($site->copyright()) ?></div>
  </article>

</section>