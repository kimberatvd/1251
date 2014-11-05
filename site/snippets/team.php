<section class="team">
<a id="<?php echo html($data->title()) ?>"></a>

  <article>
  	<h1><?php echo html($data->title()) ?></h1>

		<?php $x = 1;?> <!-- initiate x counter variable -->

  	<?php foreach($data->children()->visible() as $team): ?> <!--for each of the team subpages echo out the following code -->

	  	<div class="bio <?php if (($x % 2) == 0) {?> last-in-row <?php } ?>"  > <!--every other bio div should have a class of 'last in row' to remove right margin -->
  		<?php if($team->hasImages()): ?><img src="<?php echo $team->images()->first()->url() ?>"/><?php endif ?>
    	<h2><?php echo html($team->name()) ?></h2>
    	<?php echo kirbytext($team->bio()) ?>

	  	</div>

      <?php if (($x % 2) == 0) {?> 
      <div class="clear"></div>
      <?php } ?>

	  <?php $x++; ?> <!-- add one to the counter -->

  	<?php endforeach ?>

  <div class="clear"></div>

  </article>

</section>