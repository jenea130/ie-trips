<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$subtitle = $home_intro['subtitle'];
$text = $home_intro['text'];
$image = $home_intro['image'];
$items = $home_intro['items'];
?>

<div class="home-intro">
  <img src="<?php echo $image ?>" alt="">
  <div class="container">
    <div class="home-intro__body">
      <div class="home-intro__content">
        <h1 class="home-intro__title"><?php echo $title ?></h1>
        <h4 class="home-intro__subtitle"><?php echo $subtitle ?></h4>
        <div class="home-intro__text"><?php echo $text ?></div>
      </div>
      <div class="home-intro__scroll">Scroll</div>
      <ul class="home-intro__socials">
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

</div>