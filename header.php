<!DOCTYPE html>
<html lang="en">

<?php

function removeAcents($string)
{
  return preg_replace(array("/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/", "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/", "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/", "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/", "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/", "/(ñ)/", "/(Ñ)/"), explode(" ", "a A e E i I o O u U n N"), $string);
}

$full_url = home_url($wp->request);
$current_url = end(explode('/', $full_url));

?>

<head <?php do_action('add_head_attributes'); ?>>
  <?php $home = get_template_directory_uri(); ?>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php bloginfo('name'); ?>
  </title>

  <link rel="icon" href="data:image/svg+xml,<svg xmlns=%22http://www.w3.org/2000/svg%22 viewBox=%220 0 100 100%22><text y=%22.9em%22 font-size=%2290%22>🗒️</text></svg>">

  <link rel="manifest" href="/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">

  <?php wp_head(); ?>
</head>
<header id="header" class="header">
  <a class="logo" href="<?= get_site_url(); ?>">
    <h3 class="logo-content logo-content-title"><strong>ANACLARA</strong> BIANCHI</h3>
    <p class="logo-content logo-content-text">UX Writer & Content Strategist</p>
  </a>
  <div id="menu_toggle">
    <input id="menu_toggle__input" type="checkbox" class="desktop-hide">

    <span></span>
    <span></span>
    <span></span>

    <nav class="header-nav top-menu">

      <ul class="header-nav-list">
        <?php $menu_items = wp_get_nav_menu_items('Top menu') ?>
        <? if($menu_items): ?>
        <?php foreach ($menu_items as $item) : ?>

          <li class="header-nav-item menu-item <?= removeAcents(strtolower($item->title)); ?> <?= basename(get_permalink()) === strtolower($item->title) ? 'active' : ''; ?>">
            <a class="header-nav-item" href="<?= $item->url; ?>">
              <h3 class="header-nav-item"><?= $item->title; ?></h3>
            </a>
          </li>
        <?php endforeach; ?>
        <? endif; ?>
      </ul>
    </nav>
  </div>
</header>

<body>
