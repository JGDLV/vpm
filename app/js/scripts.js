// let headerHeight = $('.header').innerHeight();

// function footerFix() {
// headerHeight = $('.header').innerHeight();
// let footerHeight = $('.footer').innerHeight();
// $('body').css('padding-bottom', footerHeight + 'px');
// }

// $(window).on('load resize', footerFix);

$(document).ready(function () {

  $('form').each(function () {
    const form = $(this);
    const fileLabel = form.find('label[class*="file"]');
    const fileInput = fileLabel.find('input[type="file"]');
    const fileName = fileLabel.find('.name');
    const fileDelete = fileLabel.next('.delete');
    const phone = $(this).find('input[name*="phone"]');
    const privacyLabel = $(this).find('label[class*="privacy"]');
    const privacyInput = privacyLabel.find('input');

    // Для чекбоксов и радио

    privacyLabel.on('click', function () {
      if (privacyInput.attr('type') == 'checkbox') {
        privacyInput.is(':checked')
          ? privacyLabel.addClass('active')
          : privacyLabel.removeClass('active');
      } else if (privacyInput.attr('type') == 'radio') {
        privacyInput.is(':checked')
          ? (privacyLabel.siblings().removeClass('active'), privacyLabel.addClass('active'))
          : privacyLabel.removeClass('active');
      }
    });

    // Для телефонов

    phone.each(function () {
      $(this).inputmask("+7 (999) 999-99-99");
    });

    // Для файла

    function onFileDelete() {
      fileInput.val('');
      fileName.text(fileLabel.data('name'));
      fileDelete.css('display', 'none');
    }

    function onFileChange() {
      const fileVal = $(this).val().replace(/.+[\\\/]/, '');
      if (fileVal !== '') {
        fileName.text(fileVal);
        fileDelete.css('display', 'block');
      } else onFileDelete
    }

    fileName.text(fileLabel.data('name'));
    fileDelete.css('display', 'none');

    fileInput.on('change', onFileChange);
    fileDelete.on('click', onFileDelete);

    // По отправке формы

    form.on('submit', function () {
      privacyLabel.removeClass('active');
    });
  });

  $(window).on('scroll load', function () {
    $(this).scrollTop() > 600
      ? $('#top').addClass('active')
      : $('#top').removeClass('active');
  });

  $('#top').click(function () {
    $('body, html').animate({ scrollTop: 0 }, 500);
  });

  $(document).on("submit", "form", function () {
    let formData = new FormData(this);
    let xhr = new XMLHttpRequest();
    xhr.open("POST", "/send.php");
    xhr.onreadystatechange = function () {
      if (xhr.readyState == 4) {
        if (xhr.status == 200) {
          data = xhr.responseText
          if (data) {
            $.magnificPopup.close();
            $.magnificPopup.open({
              items: {
                src: '<div class="modal modal_thanks">' + data + '</div>'
              },
              type: 'inline',
            }, 0);
          }
        }
      }
    }
    xhr.send(formData);
    $(this)[0].reset();
    return false;
  });

  $('.menu-toggle .icon-toggle').click(function () {
    $(this).toggleClass('active');
    $('.header-mobile__bottom').slideToggle();
    return false;
  });

  $('a[href="#callback"], a[href="#consult"]').magnificPopup({
    type: 'inline',
  });

  $('image').magnificPopup({
    type: 'image',
    closeOnContentClick: true,
    mainClass: 'mfp-img-mobile',
    image: { verticalFit: true }
  });

  $('.section_gallery').each(function () {
    $(this).magnificPopup({
      delegate: 'a',
      type: 'image',
      gallery: { enabled: true }
    });
  });

  $(document).on('click', '.goto', function (event) {
    event.preventDefault();
    let id = $(this).attr('href');
    let top = $(id).offset().top;
    $('body,html').animate({ scrollTop: top }, 500);
  });

  $(".tabs").each(function () {
    let tabs = $(this);
    let tabsControls = tabs.find('.tabs__control');
    let tabsContents = tabs.find('.tabs__content');
    $(tabsContents).not(tabsContents[0]).css('display', 'none');
    $(tabsControls[0]).addClass('active');
    $(tabsControls).click(function (event) {
      event.preventDefault();
      tabsControls.removeClass('active');
      $(this).addClass('active');
      let index = $(this).index();
      tabsContents.css('display', 'none');
      tabsContents.eq(index).fadeIn(400);
    });
  });

  // $('.dropdown').each(function () {
  //   const dropdownBlock = $(this);
  //   const dropdownCurrent = dropdownBlock.find('div[class*="__current"]');
  //   const dropdownItems = dropdownBlock.find('ul');
  //   const dropdownItem = dropdownBlock.find('li');
  //   const inputVal = dropdownBlock.find('input');

  //   dropdownBlock.on('click', function () {
  //     dropdownItems.slideToggle(200);
  //     dropdownBlock.toggleClass('active');
  //   });

  //   dropdownItem.on('click', function () {
  //     const html = $(this).html();
  //     const text = $(this).text();
  //     dropdownCurrent.html(html);
  //     inputVal.val(text);
  //   });
  // });

  // $('.accordion').each(function () {
  //   const $this = $(this);
  //   const head = $this.find('*[class*="head"]');
  //   const body = $this.find('*[class*="body"]');

  //   head.on('click', function () {
  //     if ($(this).hasClass('active')) {
  //       $(this).removeClass('active');
  //       $(this).next(body).slideUp(200);
  //     } else {
  //       head.removeClass('active');
  //       body.slideUp(200);
  //       $(this).addClass('active');
  //       $(this).next(body).slideDown(200);
  //     }
  //   });
  // });

  // $('.menu').append('<div class="menu__hover"></div>');

  // $('.menu__item').on('mouseover', function () {
  //   let pseudoWidth = $(this).innerWidth();
  //   let pseudoHeight = $(this).innerHeight();
  //   let pseudoOffsetLeft = $(this).position().left;
  //   let pseudoOffsetTop = $(this).position().top;
  //   $('.menu__hover').css({
  //     'width': pseudoWidth + 'px',
  //     'height': pseudoHeight + 'px',
  //     'left': pseudoOffsetLeft + 'px',
  //     'top': pseudoOffsetTop + 'px',
  //     'opacity': 1,
  //   });
  // });

  // $('.menu__item').on('mouseout', function () {
  //   $('.menu__hover').css('opacity', '0');
  // });

  // $('slider').slick({
  //   infinite: true,
  //   slidesToShow: 2,
  //   slidesToScroll: 1,
  //   prevArrow: '<button class="slick-prev"><i class="arrow-left"></i></button>',
  //   nextArrow: '<button class="slick-next"><i class="arrow-right"></i></button>',
  //   prevArrow: '<button class="slick-prev fas fa-chevron-left"></button>',
  //   nextArrow: '<button class="slick-next fas fa-chevron-right"></button>',
  //   responsive: [
  //     {
  //       breakpoint: 1100,
  //       settings: {
  //         slidesToShow: 1,
  //         slidesToScroll: 1
  //       }
  //     }
  //   ]
  // });

  // $('slider').owlCarousel({
  //   loop: true,
  //   margin: 30,
  //   nav: true,
  //   navText: ["<i class='fas fa-chevron-left'>", "<i class='fas fa-chevron-right'>"],
  //   dots: false,
  //   items: 2,
  //   responsive: {
  //     0: {
  //       items: 1,
  //     },
  //     880: {
  //       items: 2,
  //     }
  //   }
  // });

  $('.mobile-menu').each(function () {
    const toggler = 'sm__toggle'; // Имя класса переключателя
    const menu = $(this);
    const menuItems = menu.children('li');

    menu.on('click', function (event) {
      if (event.target.classList.contains(toggler)) {
        $(event.target).siblings('ul').slideToggle();
        $(event.target).hasClass('active')
          ? $(event.target).removeClass('active')
          : $(event.target).addClass('active');
      }
    });

    $(window).on('load resize', function () {
      if ($(window).width() <= 1200) {
        $('body').addClass('mobile');
        menuItems.each(function () {
          const menuItem = $(this);
          if (menuItem.find('ul').length && menuItem.find('.' + toggler).length === 0) {
            menuItem.append('<span class="' + toggler + '"></span>');
          }
        });
      } else {
        $('body').removeClass('mobile');
        $('.menu > li ul').removeAttr('style');
        $('.' + toggler).remove();
      }
    });
  });

  // $(window).scroll(function () {
  //   $(this).scrollTop() > headerHeight
  //     ? ($('.main-header').addClass('stickytop'), $('body').css('padding-top', headerHeight + 'px'))
  //     : ($('.main-header').removeClass('stickytop'), $('body').css('padding-top', '0'));
  // });

  let x = 0.1;
  function setDelay(a) {
    $(a).each(function () {
      $(this).children().each(function () {
        let index = $(this).index() + 1;
        let delay = x * index;
        $(this).addClass('wow fadeInDown').attr('data-wow-delay', delay + 's').attr('data-wow-duration', '1s')
      });
    });
  }

  setDelay('.projects-items');
  setDelay('.benefits-items');
  setDelay('.catalog-items');
  setDelay('.scheme-items');
  setDelay('.advantages-items');
  setDelay('.clients-items');
  setDelay('.items');
  setDelay('.contacts-items');
  setDelay('.one-item');

  wow = new WOW(
    {
      boxClass: 'wow',
      animateClass: 'animated',
      offset: 0,
      mobile: true,
      live: true
    }
  );
  wow.init();

  var s = skrollr.init({ forceHeight: false });

});
