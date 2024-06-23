<?php
$about = get_field('about');
$title = $about['title'];
$text = $about['text'];
$items = $about['items'];
$button_text = $about['button_text'];
?>

<div class="about">
  <div class="about__wrap">
    <div class="about__content">
      <h2 class="about__title title"><?php echo $title ?></h2>
      <div class="text">
        <?php echo $text ?>
      </div>
      <a href="#!" class="about__btn btn"><?php echo $button_text ?></a>

    </div>
    <div class="about__flex">
      <?php foreach ($items as $item) : ?>
        <?php
        $image = $item['image'];
        $title = $item['title'];
        ?>
        <div class="about__img">
          <img src="<?php echo $image ?>" alt="">
          <a href="#!" class="about__name">
            <?php echo $title ?>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
    <div class="about__dotted">
      <?php get_template_part('template-parts/icons/dotted-about'); ?>
    </div>
  </div>
</div>