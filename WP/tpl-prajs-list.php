<? /* Template Name: Прайс-лист */ ?>
<?php
get_header();
$cta_1 = get_field('cta_1');
$cta_2 = get_field('cta_2');
$price_1 = get_field('price_1');
$price_2 = get_field('price_2');
?>
  <main class="content">
    <div class="container">
      <h1 class="wow fadeInDown" data-wow-duration="1s"><?php echo $price_1['header']; ?></h1>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $price_1['subheader']; ?></p>
      <div class="about__text wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $price_1['text']; ?></div>
    </div>
    <div class="cta">
      <div class="container">
        <h2 class="cta__header wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $cta_1['header']; ?></h2>
        <p class="cta__subheader subheader wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $cta_1['subheader']; ?></p>
        <a class="cta__button btn btn_yellow wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $cta_1['button']['href']; ?>"><span><?php echo $cta_1['button']['text']; ?></span></a>
        <img class="cta__image wow fadeInDown" src="<?php echo $cta_1['image']; ?>" alt="" data-wow-duration="1s">
      </div>
    </div>
    <div class="container">
      <h2 class="wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $price_2['header']; ?></h2>
      <!--noindex--><?php echo $price_2['table']; ?><!--/noindex-->
      <div class="two-items items">
        <div class="item">
          <p class="header"><strong><?php echo $price_2['items_1']['header']; ?></strong></p>
          <p><?php echo $price_2['items_1']['text']; ?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $price_2['items_2']['header']; ?></strong></p>
          <p><?php echo $price_2['items_2']['text']; ?></p>
        </div>
      </div>
    </div>
    <div class="cta">
      <div class="container">
        <h2 class="cta__header wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $cta_2['header']; ?></h2>
        <p class="cta__subheader subheader wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $cta_2['subheader']; ?></p>
        <a class="cta__button btn btn_yellow wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $cta_2['button']['href']; ?>"><span><?php echo $cta_2['button']['text']; ?></span></a>
        <img class="cta__image wow fadeInDown" src="<?php echo $cta_2['image']; ?>" alt="" data-wow-duration="1s">
      </div>
  </main>
<?php get_footer(); ?>
