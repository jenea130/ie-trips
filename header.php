<!doctype html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <div class="wrapper">
    <?php
    $header = get_field('header', 'option');
    $logo = $header['logo'];
    $button_search = $header['button_search'];
    $button_text = $header['button_text'];
    ?>
    <header class="main-header">
      <div class="container">
        <div class="main-header__wrap">
          <div class="logo">
            <?php echo $logo ?>
          </div>
          <nav class="menu">
            <ul class="menu__list">
              <li class="menu__item"><a href="#about" class="menu__link">Обо мне</a></li>
              <li class="menu__item"><a href="#portfolio" class="menu__link">Портфолио</a></li>
              <li class="menu__item"><a href="#reviews" class="menu__link">Отзывы</a></li>
              <li class="menu__item"><a href="#contacts" class="menu__link">Контакты</a></li>
              <li class="menu__item"><a href="#subscribe" class="menu__link">Подпишись :)</a></li>
            </ul>
          </nav>
          <button class="search" type="button">
            <?php echo $button_search ?>
          </button>
          <button class="main-header__btn btn" type="button"><?php echo $button_text ?></button>
        </div>

      </div>
    </header>