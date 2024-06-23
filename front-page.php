<?php

/**
 * Template Name: Front page
 */
get_header();

$fon = get_field('fon');
$background = $fon['background'];
?>

<?php get_template_part('template-parts/home/home-intro'); ?>
<div class="fon">
  <img class="fon__img" src="<?php echo $background ?>" alt="">
  <div class="container">
    <?php get_template_part('template-parts/home/adventure'); ?>
    <?php get_template_part('template-parts/home/about'); ?>
  </div>
</div>


<?php get_footer(); ?>