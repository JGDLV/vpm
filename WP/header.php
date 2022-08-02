<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="utf-8">
  <title>Аренда спецтехники в Самаре и других городах – более 100 машин, Волгопродмонтаж</title>
  <meta name="description" content="Удобная аренда спецтехники и Самаре и других городах на любой срок. Предлагаем услуги спецтехники в Самаре и Самарской области юридическим и физическим лицам. Цены на аренду строительной техники в Самаре от 1 000 руб. в час. Волгопродмонтаж">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <?php wp_head(); ?>
</head>

<?php
  $header = get_field('header', 2);
  $symbols = [' ', '(', ')', '-'];
?>

<body <?php if(is_front_page()) { echo ''; } else { echo 'class="inner"'; } ?>>
  <header class="header">
    <div class="header__top">
      <div class="container">
        <div class="header__top-inner flex jcsb aic">
          <div class="logo">
            <a class="logo__link" href="/">
              <img class="logo__image" src="<?php echo $header['logo'];?>" alt="">
            </a>
          </div>
          <div class="tagline"><?php echo $header['tagline'];?></div>
          <div class="header__contacts header__contacts_1">
            <p class="address"><?php echo $header['address'];?></p>
            <a class="email" href="mailto:<?php echo $header['email'];?>"><?php echo $header['email'];?></a>
          </div>
          <div class="header__contacts header__contacts_2">
            <a class="phone" href="tel:<?php echo str_replace($symbols, '', $header['phone']); ?>"><?php echo $header['phone'];?></a>
            <p class="header__whours whours"><?php echo $header['whours'];?></p>
          </div>
          <a class="header__button btn btn_stroke" href="<?php echo $header['button']['href'];?>"><span><?php echo $header['button']['text'];?></span></a>
        </div>
      </div>
    </div>
    <div class="header__bottom">
      <div class="container">
        <div class="menu">
          <?php wp_nav_menu( [
            'theme_location'  => 'top',
            'container'       => false,
            'menu_class'      => 'menu',
            'menu_id'         => 'menu',
            'echo'            => true,
            'items_wrap'      => '<ul class="menu-items mobile-menu">%3$s</ul>',
            'depth'           => 0,
          ] ); ?>
        </div>
      </div>
    </div>
  </header>
  <div class="header-mobile">
    <div class="header-mobile__top">
      <div class="menu-toggle"><i class="icon-toggle"><span></span><span></span><span></span></i></div>
      <div class="logo"><a class="logo__link" href="/"> <img class="logo__image" src="<?php echo $header['logo'];?>" alt=""></a></div>
      <div class="tagline"><?php echo $header['tagline'];?></div>
      <div class="header__contacts">
        <a class="phone" href="tel:<?php echo str_replace($symbols, '', $header['phone']); ?>"><?php echo $header['phone'];?></a>
        <a class="email" href="mailto:<?php echo $header['email'];?>"><?php echo $header['email'];?></a>
      </div>
    </div>
    <div class="header-mobile__bottom">
      <div class="menu">
        <?php wp_nav_menu( [
          'theme_location'  => 'top',
          'container'       => false,
          'menu_class'      => 'menu',
          'menu_id'         => 'menu',
          'echo'            => true,
          'items_wrap'      => '<ul class="menu-items mobile-menu">%3$s</ul>',
          'depth'           => 0,
        ] ); ?>
      </div><a class="header__button btn btn_stroke" href="<?php echo $header['button']['href'];?>"><span><?php echo $header['button']['text'];?></span></a>
    </div>
  </div>
<?php if (!is_front_page()): ?>
  <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <div class="container"><?php if(function_exists('bcn_display')) { bcn_display(); }?></div>
  </div>
<?php endif; ?>
