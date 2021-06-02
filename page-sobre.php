<?php

get_header();
wp_enqueue_style('sobre');

$email = get_field('email');
$telefone = get_field('telefone');
$experiencia = get_field('experiencia');
?>
<?php if (get_the_post_thumbnail() !== '') : ?>

  <a href="<?php the_permalink(); ?>">
    <?php the_post_thumbnail('full', ['class' => 'sobre-img', 'alt' =>  get_the_title()]); ?>
  </a>

<?php endif; ?>

<div class="sobre-content">
  <div class="sobre-pessoal">
    <h1 class="sobre-title">Sobre mim</h1>
    <p class="sobre-item"><i class="fas fa-envelope icon icon-sobre"></i><?= $email; ?></p>
    <p class="sobre-item"><i class="fas fa-phone icon icon-sobre"></i><?= $telefone; ?></p>
    <p class="sobre-item"><i class="fas fa-graduation-cap icon icon-sobre"></i><?= $experiencia; ?></p>
  </div>
  <div class="sobre-page-content">
    <?php the_content(); ?>
  </div>
</div>
<?php wp_footer(); ?>
</body>
