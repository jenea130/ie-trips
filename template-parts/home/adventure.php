<?php
$adventure = get_field('adventure');
$title = $adventure['title'];
$text = $adventure['text'];
$items = $adventure['items'];
?>

<div class="adventure">
  <div class="container">
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
        $tab = $item['tabs'];
        ?>
        <div class="adventure__tab"><?php echo $tab ?></div>
      <?php endforeach; ?>
    </div>
    <div class="adventure__content">
      <div class="adventure__item">
        <h2>Lorem ipsum dolor sit amet.</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
      </div>
      <div class="adventure__item">
        <h2>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis similique non repellendus error voluptatem, omnis fuga dicta nihil aliquid. Dicta.</h2>
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
      </div>
      <div class="adventure__item">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
      </div>
      <div class="adventure__item">
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
        Lorem ipsum dolor sit amet consectetur adipisicing elit. Nam, ut!
      </div>
    </div>
  </div>
</div>