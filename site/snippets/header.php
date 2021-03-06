<!DOCTYPE html>
<html lang="en">
<head>
  
  <title><?php echo html($site->title()) ?> - <?php echo html($page->title()) ?></title>
  <meta charset="utf-8" />
  <meta name="description" content="<?php echo html($site->description()) ?>" />
  <meta name="keywords" content="<?php echo html($site->keywords()) ?>" />
  <meta name="robots" content="index, follow" />
  <meta name="viewport" content="initial-scale=1" />
  
  <link rel="icon" type="image/png" href="/assets/images/favicon.png">

  <?php echo css('assets/styles/styles.css') ?>
  <?php echo css('assets/styles/responsive-styles.css') ?>
  <?php echo css('assets/webfonts/webfonts.css') ?>


  <!--include jquery library-->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

</head>

<body>

  <header>
    <h1><a href="<?php echo url() ?>">1251 CAPITAL GROUP</a></h1> 

    <img src="/assets/images/hamburger.png" class="mobile hamburger"/>
    <nav class="menu">


      <ul>
        <?php foreach($pages->visible() AS $p): ?>
        <li><a<?php echo ($p->isOpen()) ? ' class="active"' : '' ?> href="#<?php echo $p->title() ?>"><?php echo html($p->title()) ?></a></li>
        <?php endforeach ?>
      </ul>
    </nav>
  </header>