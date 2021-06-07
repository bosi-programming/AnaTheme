<?php

get_header();
wp_enqueue_style('index');
?>

<main id="main" class="site-main">
  <div class="posts-wrapper">
    <?php
    if (have_posts()) : while (have_posts()) : the_post();
    ?>
        <article class="post-card">
          <a class="card-content" href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>">
            <?php the_post_thumbnail('full', ['class' => 'post__image post__thumbnail', 'alt' =>  get_the_title()]); ?>
            <h3 class="post-title"><?= the_title() ?></h3>
          </a>
        </article>
    <?php
      endwhile;
    endif;
    ?>
  </div>
</main>
<?php wp_footer(); ?>
</body>
