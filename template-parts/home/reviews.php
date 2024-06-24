<?php
$reviews = get_field('reviews');
$title = $reviews['title'];
$subtitle = $reviews['subtitle'];
$items = $reviews['items'];
$title_end = $reviews['title_end'];
$text_end = $reviews['text_end'];
?>

<div class="reviews">
  <div class="reviews__header">
    <h2 class="reviews__title title"><?php echo $title ?></h2>
    <h4 class="reviews__subtitle"><?php echo $subtitle ?></h4>
  </div>
  <div class="reviews__wrap">
    <?php foreach ($items as $item) : ?>
      <?php
      $text = $item['text'];
      $avatar = $item['image'];
      $name = $item['name'];
      $job = $item['job'];
      ?>
      <div class="reviews__item">
        <div class="reviews__text">
          <?php echo $text ?>
          <div class="reviews__cite">
            <?php get_template_part('template-parts/icons/icon-cite'); ?>
          </div>
        </div>

        <div class="reviews__flex">
          <div class="reviews__ava">
            <img src="<?php echo $avatar ?>" alt="">
          </div>
          <div class="reviews__body">
            <div class="reviews__name">
              <?php echo $name ?>
            </div>
            <span class="reviews__job"><?php echo $job ?></span>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
  <div class="reviews__footer">
    <h2 class="reviews__title-end title"><?php echo $title_end ?></h2>
    <h4 class="reviews__desc"><?php echo $text_end ?></h4>
  </div>
</div>