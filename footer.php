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

<!--</?php $addTitle = get_field('main_footer', 'option')['address_title'] ?>
</?php $address =  get_field('full_address', 'option') ?>
</?php $phone = get_field('phone_number', 'option') ?>
</?php $email = get_field('email', 'option') ?>
</?php $fullName =  get_field('full_company_name', 'option') ?>
</?php $shortName =  get_field('short_company_name', 'option') ?>
</?php $vat = get_field('vat', 'option') ?>
</?php $partnerUrl = get_field('partner_url', 'option') ?>
</?php $partnerLogo = get_field('parnter_logo', 'option') ?>-->
<?php
$title_1 = get_field('title_1', 'option');
$title_2 = get_field('title_2', 'option');
$title_3 = get_field('title_3', 'option');
$title_4 = get_field('title_4', 'option');
$title_5 = get_field('title_5', 'option');
$email = get_field('email', 'option');
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
            <a href="#">hello@example.com</a>
          </li>
          <li>
            <a href="#">(405) 555-0128</a>
          </li>
          <li>
            <a href="#">(252) 555-0126</a>
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
      <span>Copyright &copy; Night Trips 2019. All rights reserved.</span>
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