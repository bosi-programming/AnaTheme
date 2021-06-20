<?php

get_header();
wp_enqueue_style('single');

$hero = get_field('foto_hero');
?>
<?php if (get_the_post_thumbnail() !== '') : ?>

  <a href="<?php the_permalink(); ?>">
    <img class="single-img" src="<?php echo esc_url($hero['url']); ?>" alt="<?php echo esc_attr($hero['alt']); ?>" />
  </a>

<?php endif; ?>

<div class="content">
  <h1 class="single-title"><?= get_the_title(); ?></h1>
</div>

<div class="single-content">
  <?php the_content(); ?>
</div>

<?php wp_footer(); ?>
</body>
