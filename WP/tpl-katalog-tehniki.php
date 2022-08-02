<? /* Template Name: Каталог техники */ ?>
<?php
get_header();
$cta_1 = get_field('cta_1');
$cta_2 = get_field('cta_2');
$catalog_1 = get_field('catalog_1');
$catalog_2 = get_field('catalog_2');
$catalog_3 = get_field('catalog_3');
?>
  <main class="content">
    <div class="container">
      <h1 class="wow fadeInDown" data-wow-duration="1s"><?php echo $catalog_1['header']; ?></h1>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $catalog_1['subheader']; ?></p>
      <p class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $catalog_1['text']; ?></p>
      <h2 class="wow fadeInDown" data-wow-duration="1s"><?php echo $catalog_2['header']; ?></h2>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $catalog_2['subheader']; ?></p>
      <div class="catalog-items">
        <?php echo do_shortcode('[pods name="catalog_main" template="catalog_main" limit="12" orderby="post_date ASC"]'); ?>
      </div>
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
      <h2 class="wow fadeInDown" data-wow-duration="1s"><?php echo $catalog_3['header']; ?></h2>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $catalog_3['subheader']; ?></p>
      <div class="three-items items">
        <div class="item">
          <p class="header"><strong><?php echo $catalog_3['items_1']['header']; ?></strong></p>
          <p><?php echo $catalog_3['items_1']['text']; ?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $catalog_3['items_2']['header']; ?></strong></p>
          <p><?php echo $catalog_3['items_2']['text']; ?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $catalog_3['items_3']['header']; ?></strong></p>
          <p><?php echo $catalog_3['items_3']['text']; ?></p>
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
    </div>
  </main>
<?php get_footer(); ?>
