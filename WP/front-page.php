<?php get_header(); ?>
<?php
  $intro = get_field('intro');
  $catalog = get_field('catalog');
  $complex = get_field('complex');
  $scheme = get_field('scheme');
  $projects = get_field('projects');
  $about = get_field('about');
  $clients = get_field('clients');
  $cta = get_field('cta', 2);
?>
<main class="content">
  <div class="intro" id="intro">
    <div class="container">
      <div class="intro__parallax parallax" data-top="transform: translateY(0%);" data-bottom="transform: translateY(50%);"></div>
      <h1 class="intro__header wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $intro['header']; ?></h1>
      <p class="intro__text wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $intro['text']; ?></p>
      <div class="intro__bottom flex aic wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s"><a class="intro__button btn btn_yellow" href="<?php echo $intro['button']['href']; ?>"><span><?php echo $intro['button']['text']; ?></span></a>
        <p class="intro__bottom-text"><?php echo $intro['button']['text_right']; ?></p>
      </div>
      <img class="intro__image" src="<?php echo $intro['image']; ?>" alt="">
    </div>
  </div>
  <div class="benefits" id="benefits">
    <div class="container">
      <div class="benefits__parallax parallax skrollable skrollable-between" data-top="transform: translateY(-30%);" data-bottom="transform: translateY(0%);"></div>
      <div class="benefits-items">
        <?php echo do_shortcode('[pods name="benefits" template="benefits" limit="4" orderby="post_date ASC"]'); ?>
      </div>
    </div>
  </div>
  <div class="catalog" id="catalog">
    <div class="container">
      <h2 class="catalog__header wow fadeInDown" data-wow-duration="1s"><?php echo $catalog['header']; ?></h2>
      <p class="catalog__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $catalog['subheader']; ?></p>
      <div class="catalog-items">
        <?php echo do_shortcode('[pods name="catalog_main" template="catalog_main" limit="12" orderby="post_date ASC"]'); ?>
      </div>
    </div>
  </div>
  <div class="complex" id="complex">
    <div class="container">
      <h2 class="complex__header wow fadeInDown" data-wow-duration="1s"><?php echo $complex['header']; ?></h2>
      <p class="complex__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $complex['subheader']; ?></p>
      <div class="section_gallery">
        <img src="<?php echo $complex['images']['first']; ?>" alt="">
        <img src="<?php echo $complex['images']['second']; ?>" alt="">
      </div>
      <div class="complex__inner">
        <div class="complex__text wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $complex['text']; ?></div>
        <a class="complex__button btn btn_green wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $complex['button']['href']; ?>"><?php echo $complex['button']['text']; ?></a>
      </div>
      <div class="complex__parallax parallax skrollable skrollable-between" data-top="transform: translateY(-30%);" data-bottom="transform: translateY(0%);"></div>
      <div class="complex__parallax2 parallax skrollable skrollable-between" data-top="transform: translateY(30%);" data-bottom="transform: translateY(-30%);"></div>
    </div>
  </div>
  <div class="scheme" id="scheme">
    <div class="container">
      <h2 class="scheme__header wow fadeInDown" data-wow-duration="1s"><?php echo $scheme['header']; ?></h2>
      <p class="scheme__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $scheme['subheader']; ?></p>
      <div class="scheme-items">
        <?php echo do_shortcode('[pods name="scheme" template="scheme" limit="5" orderby="post_date ASC"]'); ?>
      </div>
    </div>
  </div>
  <div class="advantages" id="advantages">
    <div class="container">
      <div class="advantages-items">
        <?php echo do_shortcode('[pods name="advantages" template="advantages" limit="4" orderby="post_date ASC"]'); ?>
      </div>
    </div>
  </div>
  <div class="projects" id="projects">
    <div class="container">
      <h2 class="projects__header wow fadeInDown" data-wow-duration="1s"><?php echo $projects['header']; ?></h2>
      <p class="projects__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $projects['subheader']; ?></p>
      <div class="projects-items">
        <?php echo do_shortcode('[pods name="portfolio" template="projects" limit="3" orderby="post_date ASC"]'); ?>
      </div>
      <div class="projects__bottom wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s">
        <div class="bottom_link"><a class="projects__link" href="<?php echo $projects['link']['href']; ?>"><?php echo $projects['link']['text']; ?></a></div>
      </div>
      <div class="projects__parallax parallax skrollable skrollable-between" data-top="transform: translateY(-30%);" data-bottom="transform: translateY(0%);"></div>
    </div>
  </div>
  <div class="about" id="about">
    <div class="container">
      <h2 class="about__header wow fadeInDown" data-wow-duration="1s"><?php echo $about['header']; ?></h2>
      <p class="about__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $about['subheader']; ?></p>
      <div class="section_gallery">
        <img src="<?php echo $about['images']['first']; ?>" alt="">
        <img src="<?php echo $about['images']['second']; ?>" alt="">
      </div>
      <div class="about__inner">
        <div class="about__text wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $about['text']; ?></div>
        <div class="bottom_link wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s"><a class="about__link" href="<?php echo $about['link']['href']; ?>"><?php echo $about['link']['text']; ?></a></div>
      </div>
      <div class="about__parallax parallax skrollable skrollable-between" data-top="transform: translateY(0%);" data-bottom="transform: translateY(-30%);"></div>
    </div>
  </div>
  <div class="clients" id="clients">
    <div class="container">
      <h2 class="clients__header wow fadeInDown" data-wow-duration="1s"><?php echo $clients['header']; ?></h2>
      <p class="clients__subheader subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $clients['subheader']; ?></p>
      <div class="clients-items">
        <?php echo do_shortcode('[pods name="nashi-klienty" template="clients" limit="12" orderby="post_date ASC"]'); ?>
      </div>
      <div class="clients__bottom">
        <div class="bottom_link wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s"><a class="clients__link" href="<?php echo $clients['link']['href']; ?>"><?php echo $clients['link']['text']; ?></a></div>
      </div>
    </div>
  </div>
  <div class="cta" id="cta">
    <div class="container">
      <h2 class="cta__header wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $cta['header']; ?></h2>
      <p class="cta__subheader subheader wow fadeInDown" data-wow-delay="1s" data-wow-duration="1s"><?php echo $cta['subheader']; ?></p>
      <a class="cta__button btn btn_yellow wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s" href="<?php echo $cta['button']['href']; ?>"><span><?php echo $cta['button']['text']; ?></span></a>
      <img class="cta__image" src="<?php echo $cta['image']; ?>" alt="">
    </div>
  </div>
</main>
<?php get_footer(); ?>
