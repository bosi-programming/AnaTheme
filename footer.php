<?php wp_footer(); ?>
<footer class="footer">
  <div>
    <p class="footer-sign">Ana Clara Bianchi</p>
    <p class="footer-text">Direitos autorais © 2021 Todos os direitos reservados</p>
    <p class="footer-text">Desenvolvido por Felipe Azevedo Bosi</p>
  </div>
  <div class="footer-social">
    <p class="footer-nav">
      <?php $menu_items = wp_get_nav_menu_items('Top menu') ?>
      <? if($menu_items): ?>
      <?php foreach ($menu_items as $item) : ?>
        <a class="footer-nav-item" href="<?= $item->url; ?>">
          <?= $item->title; ?>
        </a>
      <?php endforeach; ?>
      <? endif; ?>
    </p>
    <i class="fab fa-linkedin icon"></i>
    <i class="fab fa-medium icon"></i>
  </div>
</footer>
</body>
