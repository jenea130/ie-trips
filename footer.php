<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ar-starter
 */

?>

<?php
$footer = get_field('footer', 'option');
$email = $footer['email'];
$phone_number = $footer['phone_number'];
$phone_number_2 = $footer['phone_number_2'];

$title_1 = get_field('title_1', 'option');
$title_2 = get_field('title_2', 'option');
$title_3 = get_field('title_3', 'option');
$title_4 = get_field('title_4', 'option');
$title_5 = get_field('title_5', 'option');
$copyright = get_field('copyright', 'option');
$home_intro = get_field('home_intro');
$items = $home_intro['items'];
$header = get_field('header', 'option');
$logo = $header['logo'];
?>

<footer class="main-footer">
  <div class="container">
    <div class="main-footer__wrap">
      <div class="main-footer__col">
        <h4 class="main-footer__title">
          <?php echo $title_1 ?>
          <div class="main-footer__arrow">
            <?php get_template_part('template-parts/icons/icon-footer'); ?>
          </div>
        </h4>
        <?php wp_nav_menu([
          'theme_location'  => 'footer-1',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__col">
        <h4 class="main-footer__title">
          <?php echo $title_2 ?>
          <div class="main-footer__arrow">
            <?php get_template_part('template-parts/icons/icon-footer'); ?>
          </div>
        </h4>
        <?php wp_nav_menu([
          'theme_location'  => 'footer-2',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__col">
        <h4 class="main-footer__title">
          <?php echo $title_3 ?>
          <div class="main-footer__arrow">
            <?php get_template_part('template-parts/icons/icon-footer'); ?>
          </div>
        </h4>
        <?php wp_nav_menu([
          'theme_location'  => 'footer-3',
          'menu'            => '',
          'container'       => '',
          'container_class' => '',
          'container_id'    => '',
          'menu_class'      => 'main-footer__list',
          'menu_id'         => '',
          'echo'            => true,
          'fallback_cb'     => 'wp_page_menu',
          'before'          => '',
          'after'           => '',
          'link_before'     => '',
          'link_after'      => '',
          'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
          'depth'           => 0,
          'walker'          => '',
        ]); ?>
      </div>
      <div class="main-footer__col">
        <h4 class="main-footer__title">
          <?php echo $title_4 ?>
          <div class="main-footer__arrow">
            <?php get_template_part('template-parts/icons/icon-footer'); ?>
          </div>
        </h4>
        <div class="main-footer__list">
          <li>
            <a href="mailto:<?php echo $email ?>" target="_blank"><?php echo $email; ?></a>
          </li>
          <li>
            
            <a href="tel:<?php echo clear_phone($phone_number) ?>" target="_blank"><?php echo $phone_number ?></a>
          </li>
          <li>
            <a href="tel:<?php echo clear_phone($phone_number_2) ?>" target="_blank"><?php echo $phone_number_2 ?></a>
          </li>
        </div>
      </div>
      <div class="main-footer__col">
        <h4 class="main-footer__title">
          <?php echo $title_5 ?>
          <div class="main-footer__arrow">
            <?php get_template_part('template-parts/icons/icon-footer'); ?>
          </div>
        </h4>
        <ul class="main-footer__socials">
          <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            $url = $item['url'];
            ?>
            <li>
              <a href="<?php echo $url ?>" target="_blank"><?php echo $icon ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </div>
    </div>
    <div class="main-footer__copyright">
      <span>Copyright &copy; Night Trips <?php echo date('Y'); ?>. All rights reserved.</span>
    </div>

    <div class="logo">
      <?php echo $logo ?>
    </div>
  </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>