<?php
$adventure = get_field('adventure');
$title = $adventure['title'];
$text = $adventure['text'];
$items = $adventure['items'];
$button_text = $adventure['button_text'];
$home_intro = get_field('home_intro');
$socials = $home_intro['items'];
?>

<div class="adventure">
  <div class="adventure__header">
    <h2 class="adventure__title title"><?php echo $title ?></h2>
    <div class="adventure__close">
      <?php get_template_part('template-parts/icons/icon-close'); ?>
    </div>
    <div class="adventure__text"><?php echo $text ?></div>
  </div>
  <div class="adventure__tabs">
    <?php foreach ($items as $item) : ?>
      <?php
      $tab = $item['tab'];
      ?>
      <div class="adventure__tab"><?php echo $tab ?></div>
    <?php endforeach; ?>
  </div>
  <div class="adventure__content">
    <?php foreach ($items as $item) : ?>
      <?php
      $title = $item['title'];
      $text = $item['text'];
      $gallery = $item['gallery'];
      ?>

      <div class="adventure__item">
        <div class="adventure__flex">
          <div class="adventure__wrap">
            <div class="adventure__img">
              <?php foreach ($gallery as $item) : ?>
                <?php
                $image = $item['image'];
                ?>
                <img src="<?php echo $image ?>" alt="">
              <?php endforeach; ?>
            </div>
          </div>
          <div class="adventure__body">
            <h3 class="adventure__subtitle"><?php echo $title ?></h3>
            <div class="text">
              <?php echo $text ?>
            </div>
            <a href="#" class="btn adventure__btn"><?php echo $button_text ?></a>
          </div>
        </div>
        <div class="adventure__dotted">
          <?php get_template_part('template-parts/icons/dotted-adventure'); ?>
        </div>
        <div class="adventure__socials socials">
          <h4 class="socials__label">Share it:</h4>
          <div class="socials__items">
            <?php foreach ($socials as $item) : ?>
              <?php
              $icon = $item['icon'];
              $url = $item['url'];
              ?>
              <li>
                <a href="<?php echo $url ?>" target="_blank"><?php echo $icon ?></a>
              </li>
            <?php endforeach; ?>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>