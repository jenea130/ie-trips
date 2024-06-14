<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$subtitle = $home_intro['subtitle'];
$text = $home_intro['text'];
$image = $home_intro['image'];
?>

<div class="home-intro">
  <img src="<?php echo $image ?>" alt="">
  <div class="contaner">
    <div class="home-intro__content">
      <h1 class="home-intro__title"><?php echo $title ?></h1>
      <h4 class="home-intro__subtitle"><?php echo $subtitle ?></h4>
      <div class="home-intro__text"><?php echo $text ?></div>
    </div>
  </div>

</div>