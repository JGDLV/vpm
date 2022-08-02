<? /* Template Name: Контакты */ ?>
<?php
get_header();
$cta_1 = get_field('cta_1');
$contacts = get_field('header', 2);
$intro = get_field('intro', 2);
$contacts2 = get_field('contacts');
?>
  <main class="content content_padding">
    <div class="container">
      <h1 class="wow fadeInDown" data-wow-duration="1s"><?php echo $contacts2['header']; ?></h1>
      <p class="subheader wow fadeInDown" data-wow-delay=".5s" data-wow-duration="1s"><?php echo $contacts2['subheader']; ?></p>
      <div class="two-items items contacts">
        <div class="item"><?php echo $contacts2['map']; ?></div>
        <div class="item">
          <div class="contacts-items">
            <div class="contacts__item contacts__item_address">
              <p class="header"><strong>Адрес офиса</strong></p>
              <p><?php echo $contacts['address']; ?></p>
            </div>
            <div class="contacts__item contacts__item_phone">
              <p class="header"><strong>Номер телефона</strong></p>
              <p><?php echo $contacts['phone']; ?></p>
            </div>
            <div class="contacts__item contacts__item_email">
              <p class="header"><strong>Email</strong></p>
              <p><?php echo $contacts['email']; ?></p>
            </div>
            <div class="contacts__item contacts__item_whours">
              <p class="header"><strong>Режим работы</strong></p>
              <p><?php echo $contacts['whours']; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div class="intro__bottom flex aic wow fadeInDown" data-wow-delay="1.5s" data-wow-duration="1s"><a class="intro__button btn btn_yellow" href="<?php echo $intro['button']['href']; ?>"><span><?php echo $intro['button']['text']; ?></span></a>
        <p class="intro__bottom-text"><?php echo $intro['button']['text_right']; ?></p>
      </div>
    </div>
  </main>
<?php get_footer(); ?>
