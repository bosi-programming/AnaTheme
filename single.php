<?php

get_header();
wp_enqueue_style('single');

$hero = get_field('foto_hero');
$overview = get_field('overview');
$ano = get_field('ano');
$plataforma = get_field('plataforma');
$papel = get_field('papel');
?>
<?php if (get_the_post_thumbnail() !== '') : ?>

  <a href="<?php the_permalink(); ?>">
    <img class="single-img" src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>" />
  </a>

<?php endif; ?>

<div class="content">
  <h1 class="single-title"><?= get_the_title(); ?></h1>

  <div class="single-flex">
    <div class="single-overview mobile-hide">
      <h1 class="single-overview-title">Overview</h1>
      <p class="single-overview-text"><?= $overview; ?></p>
    </div>
    <div class="single-details">
      <div class="single-details-content">
        <h3 class="single-details-title">Ano</h3>
        <p class="single-details-text"><?= $ano; ?></p>
      </div>
      <div class="single-details-content">
        <h3 class="single-details-title">Plataforma</h3>
        <p class="single-details-text"><?= $plataforma; ?></p>
      </div>
      <div class="single-details-content mobile-hide">
        <h3 class="single-details-title">Papel</h3>
        <p class="single-details-text"><?= $papel; ?></p>
      </div>
    </div>
  </div>
</div>

<div class="single-content">
  <h1><?= get_the_title(); ?></h1>
  <?php the_content(); ?>
</div>

<?php wp_footer(); ?>
</body>
