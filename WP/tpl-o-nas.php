<? /* Template Name: О нас */ ?>
<?php
get_header();
$about_1 = get_field('about_1');
$about_2 = get_field('about_2');
$about_3 = get_field('about_3');
$about_4 = get_field('about_4');
$cta = get_field('cta');
?>
  <main class="content">
    <div class="container">
      <h1 class="wow fadeInDown" data-wow-duration="1s"><?php echo $about_1['header'];?></h1>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $about_1['subheader'];?></p>
      <p class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $about_1['text'];?></p>
      <div class="four-items items">
        <div class="item">
          <p class="header"><strong><?php echo $about_1['items_1']['header'];?></strong></p>
          <p><?php echo $about_1['items_1']['text'];?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $about_1['items_2']['header'];?></strong></p>
          <p><?php echo $about_1['items_2']['text'];?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $about_1['items_3']['header'];?></strong></p>
          <p><?php echo $about_1['items_3']['text'];?></p>
        </div>
        <div class="item">
          <p class="header"><strong><?php echo $about_1['items_4']['header'];?></strong></p>
          <p><?php echo $about_1['items_4']['text'];?></p>
        </div>
      </div>
      <div class="one-item reversed">
        <div class="item">
          <div class="item__image"><img src="<?php echo $about_1['items_5']['image'];?>" alt=""></div>
          <div class="item__text"><?php echo $about_1['items_5']['text'];?></div>
        </div>
        <div class="item">
        <div class="item__image"><img src="<?php echo $about_1['items_6']['image'];?>" alt=""></div>
          <div class="item__text">
            <p><?php echo $about_1['items_6']['text'];?></p>
            <div class="projects__bottom">
              <div class="bottom_link"><a class="projects__link" href="<?php echo $about_1['items_6']['link']['href'];?>"><?php echo $about_1['items_6']['link']['text'];?></a></div>
            </div>
          </div>
        </div>
      </div>
      <h2 class="wow fadeInDown" data-wow-duration="1s" style="margin-top:50px;"><?php echo $about_2['header'];?></h2>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $about_2['subheader'];?></p>
      <p class="wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $about_2['text'];?></p>
      <a class="btn btn_green btn_custom wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $about_2['button']['href'];?>"><span><?php echo $about_2['button']['text'];?></span></a>
      <h2 class="wow fadeInDown" data-wow-duration="1s" style="margin-top:30px;"><?php echo $about_3['header'];?></h2>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $about_3['subheader'];?></p>
      <div class="clients-items">
        <?php echo do_shortcode('[pods name="nashi-klienty" template="clients" limit="12" orderby="post_date ASC"]'); ?>
      </div>
      <h2 class="wow fadeInDown" data-wow-duration="1s" style="margin:50px 0 30px;"><?php echo $about_4['header'];?></h2>
      <div class="projects-items">
        <?php echo do_shortcode('[pods name="portfolio" template="projects" limit="3" orderby="post_date ASC"]'); ?>
      </div>
    </div>
    <div class="cta">
      <div class="container">
        <h2 class="cta__header wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $cta['header'];?></h2>
        <p class="cta__subheader subheader wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $cta['subheader'];?></p>
        <a class="cta__button btn btn_yellow wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $cta['button']['href']; ?>"><span><?php echo $cta['button']['text']; ?></span></a>
        <img class="cta__image wow fadeInDown" src="<?php echo $cta['image']; ?>" alt="" data-wow-duration="1s">
      </div>
    </div>
  </main>
<?php get_footer(); ?>
