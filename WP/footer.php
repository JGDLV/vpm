<?php
  $header = get_field('header', 2);
  $footer = get_field('footer', 2);
  $symbols = [' ', '(', ')', '-'];
?>
<footer class="footer">
  <div class="container">
    <div class="footer__inner">
      <div class="footer__left"><a class="footer__link" href="<?php echo $footer['privacy']; ?>">Политика конфиденциальности</a>
        <p class="copyright"><?php echo $footer['copyright']; ?></p>
        <p class="developer">Разработано: <a class="footer__link" href="https://1ps.ru/">1PS.RU</a></p>
      </div>
      <div class="footer__middle">
        <div class="social">
          <p class="social__header">Мы в соцсетях:</p>
          <div class="social-items flex jcc"><a class="social__item" href="<?php echo $footer['instagram']; ?>">
              <svg class="social__item-image">
                <use xlink:href="/wp-content/themes/1PS/assets/img/sprite.svg#instagram"></use>
              </svg></a><a class="social__item" href="<?php echo $footer['vkonrakte']; ?>">
              <svg class="social__item-image">
                <use xlink:href="/wp-content/themes/1PS/assets/img/sprite.svg#vk"></use>
              </svg></a>
          </div>
        </div>
      </div>
      <div class="footer__right">
        <a class="phone" href="tel:<?php echo str_replace($symbols, '', $header['phone']); ?>"><?php echo $header['phone']; ?></a>
        <p class="header__whours whours"><?php echo $header['whours']; ?></p>
        <p class="address"><?php echo $header['address']; ?></p>
        <a class="email" href="mailto:<?php echo $header['email']; ?>"><?php echo $header['email']; ?></a>
      </div>
    </div>
  </div>
</footer>
  <div class="modal mfp-hide" id="callback">
    <h2 class="modal__header">Обратный звонок</h2>
    <p class="modal__subheader">Оставьте заявку – перезвоним вам.</p>
    <form class="modal-form">
      <input type="hidden" name="act" value="callback">
      <input class="modal-form__input modal-form__name" type="text" name="name" placeholder="Имя">
      <input class="modal-form__input modal-form__phone" type="text" name="phone" placeholder="Телефон *" required>
      <label class="modal-form__privacy">
        <input type="checkbox" required><span>Разрешить обработку <a href="#">персональных данных</a></span>
      </label>
      <button class="modal-form__button btn btn_green" type="submit">Перезвоните мне</button>
    </form>
  </div>
  <div class="modal mfp-hide" id="consult">
    <h2 class="modal__header">Помощь с выбором спецтехники</h2>
    <p class="modal__subheader">Оставьте заявку – перезвоним вам, уточним задачу и порекомендуем оптимальную спецтехнику для ее решения.</p>
    <form class="modal-form">
      <input type="hidden" name="act" value="consult">
      <input class="modal-form__input modal-form__name" type="text" name="name" placeholder="Имя">
      <input class="modal-form__input modal-form__phone" type="text" name="phone" placeholder="Телефон *" required>
      <textarea class="modal-form__textarea modal-form__comment" name="comment" placeholder="Комментарий"></textarea>
      <label class="modal-form__privacy">
        <input type="checkbox" required><span>Разрешить обработку <a href="#">персональных данных</a></span>
      </label>
      <button class="modal-form__button btn btn_green" type="submit">Перезвоните мне</button>
    </form>
  </div>
  <div id="top"></div>
  <?php wp_footer(); ?>
</body>

</html>
