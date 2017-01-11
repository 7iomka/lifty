jQuery(document).ready(function($) {
  /**
   * Lazy previews for youtube (Reviews videos) with enabled controls
  */
  $('.reviewYT').lazyYT('AIzaSyDTvkd_fXoqr3v0T4ad4EyV4s6vgKJmqYM', {
      youtube_parameters: 'rel=0&controls=1&showinfo=0',
  });
  var $window = $(window),
      $body = $('body'),
      isLessThen768 = false;
      isLessThen960 = false;


          //init TimelineMax
          var tl = new TimelineMax();
          // Init Controller of ScrollMagic
          var scrollMagicController = new ScrollMagic.Controller({
              // addIndicators: true
          });

          // Modernizr max-width
          function maxWidthCss(max) {
              return Modernizr.mq('(max-width: ' + max + 'px)');
          }



          // ------------------------------------------------------------------
          // All resize events
          // ------------------------------------------------------------------

          $window.on('resize', $.throttle(250, checkWidth)).trigger('resize');
          $window.on('orientationchange', checkWidth);
          function checkWidth() {
            if (maxWidthCss(767)) {
              isLessThen768 = true;
            }
            else {
              isLessThen768 = false;
            }
            if (maxWidthCss(959)) {
              isLessThen960 = true;
            }
            else {
              isLessThen960 = false;
            }

          }



          // ------------------------------------------------------------------
          // Wawes material effect initialization to all buttons
          // ------------------------------------------------------------------
          Waves.attach('.btn', ['waves-circle', 'waves-float']);
          Waves.init();

          // ------------------------------------------------------------------
          // Convert all the links with the progress-button class to
          // actual buttons with progress meters.
          // ------------------------------------------------------------------
          $('.progress-button').progressInitialize();

          // ----------------------------------------------------------------------------
          // Menu
          // ----------------------------------------------------------------------------
          // On click show menu on small screen

            $('body').addClass('js');
              var $menu = $('#menu'),
                $nav = $("#header-nav"),
                $menuHamburger = $('.hamburger'),
                $menuLink = $('.menu__item a', $menu);

              // toggle hamburger
              $menuHamburger.click(function() {
                $menuHamburger.toggleClass('active');
                $menu.toggleClass('active');
                return false;
              });

              // // goToTarget
              // $menuLink.on('click', function (e) {
              //   e.preventDefault();
              //   if($menuHamburger.hasClass('active')) {
              //     $menuHamburger.add($menu).removeClass('active');
              //   }
              //   goToTarget($(this).attr('href'));
              // })
              //
              // function goToTarget(target) {
              //     var target = target || "#home";
              //
              //     var offset = isLessThen960 ? 60 : 43;
              //     console.log(offset);
              //
              //     if (isMobile.apple.device || is_android_default_bro) {
              //         $('html, body').animate({
              //             scrollTop: $(target).offset().top - offset
              //         }, 400);
              //         return;
              //
              //     }
              //     TweenMax.to(window, 1.5, {
              //         scrollTo: {
              //             y: target,
              //             offsetY: offset
              //         },
              //         ease: Expo.easeInOut
              //     })
              // }




          // ------------------------------------------------------------------
          // SETTINGS FOR ALL FORMS INSIDE REMODAL && INLINE
          // ------------------------------------------------------------------

          //  >>> SEPARATE SETTINGS FOR ORDER TARIFS <<<
          var $orderRemodalContainer = $('.remodal--order'),
              $orderRemodalInstance = $orderRemodalContainer.remodal({hashTracking: false}),
              $orderBtn = $('.assortiment .image-block__link, .install-types .image-block__link');

              $orderBtn.on('click', function (e) {
                e.preventDefault();
                $orderRemodalContainer.find('.site-form__header').text($(this).data('order-name'));
                $orderRemodalContainer.find('.remodal__order-gallery-img').attr('src',$(this).find('.image-block__img').attr('src'));
                // $orderRemodalContainer.find('#selected_tarif-title').text($(this).data('order-title'));
                $orderRemodalInstance.open();
              })


          $('.remodal--action, .inline--action').each(function() {
              var $context = $(this),
                  $form = $(this).find('form'),
                  task = $context.find('.form_task').val();

                  $form.submit(function(e) {
                      e.preventDefault();
                  });

              var rules = {},
                  messages = {};

              var namespaces = ["user_name", "user_phone", "user_email", "user_site"];
              $.each(namespaces, function(i, value) {
                  var $form_elements = $('input[name^="' + value + '"], textarea[name^="' + value + '"]', $form);

                  $form_elements.each(function() {
                      var elem_name = $(this).attr('name');
                      var message;

                      switch (value) {
                          case "user_name":
                              message = "Заполните Ваше имя";
                              break;
                          case "user_phone":
                              message = "Не указан телефон";
                              break;
                          case "user_email":
                              message = "Укажите корректный email";
                              break;
                          case "user_site":
                              message = "Укажите адрес сайта";
                              break;
                          default:
                              message = "Заполните данное поле";
                              break;
                      }
                      rules[elem_name] = {
                          required: true
                      };
                      if (value === 'user_phone') {
                          $('input[name^="' + value + '"]').mask("+7 (999) 999 99 99");
                          rules[elem_name].usPhoneFormat = true;
                      }
                      messages[elem_name] = {
                          required: message
                      }

                  });

              })
              // console.log(rules, messages);
              $form.validate({
                  rules: rules,
                  messages: messages,
                  submitHandler: function(form) {
                      submitRemodalForm(form, $context, task);
                  }
              });

          });
          function submitRemodalForm(form, $context, task) {
              /**
               * formPopupNumberId - is way to identify what type of form is present form - callback or baseOrder
               */

              var $form = $(form),
                  $progressBtn = $('.progress-button', $form);
              /*  prepare serialized array for the addition of a form type identifier  */
              var form_data = $form.serializeFormJSON();
              console.log(form_data);

                  $.ajax({
                      url: '/ajax.php',
                      type: 'POST',
                      data: form_data,
                      dataType: 'json',
                      cache: false,
                      beforeSend: function(r) {
                            $progressBtn.prop('disabled', true).progressSet(97);

                      }
                  }).always(function(r) {

                  }).done(function(r) {
                      // alert('done');
                      console.log(r);

                      $form.trigger('reset');
                      $progressBtn.progressSet(100);
                      setTimeout(function () {

                        $progressBtn.prop('disabled', false).removeClass('finished');

                      },3000);

                  }).fail(function(request, textStatus, errorThrown) {
                      // alert('fail');
                      console.log(request.responseText);
                      console.log(textStatus);
                      console.log(errorThrown);
                  });



          };





        // ----------------------------------------------------------------------------
        // Reviews slider
        // ----------------------------------------------------------------------------
        var reviewsSlider = new Swiper('.reviews__slider .swiper-container', {
               pagination: '.reviews__slider .swiper-pagination',
               slidesPerView: 4,
               paginationClickable: true,
               spaceBetween: 20,
               // Small screens, center to align and loop elements
               breakpoints: {
                 900: {
                    slidesPerView: 3
                 },
                 640: {
                    slidesPerView: 2
                 },
                 480: {
                     slidesPerView: 1
                 }
               },
               onSlideChangeEnd: function (s) { }

            });

        // ----------------------------------------------------------------------------
        // installation-and-replacement-types slider
        // ----------------------------------------------------------------------------
        var installationSlider = new Swiper('.installation-and-replacement-types__slider .swiper-container', {
               slidesPerView: 3,
               paginationClickable: true,
               spaceBetween: 15,
               pagination: '.installation-and-replacement-types__slider .swiper-pagination',
               // Small screens, center to align and loop elements
               breakpoints: {

                 992: {
                    slidesPerView: 2,

                 },
                 768: {
                     slidesPerView: 1,
                 }
               },
               onSlideChangeEnd: function (s) {  }

            });


        // ----------------------------------------------------------------------------
        // Init gallery for each review
        // ----------------------------------------------------------------------------


           $('.swiper-wrapper, .review__goal, .object__gallery, .examples__image-list, .project-mines__item-col').lightGallery({
              thumbnail: true,
               selector: '.imagemodal__link',
           });

           // ----------------------------------------------------------------------------
           // Certificates slider
           // ----------------------------------------------------------------------------
           var certificatesSlider = new Swiper('.certificates__slider .swiper-container', {
                  pagination: '.certificates__slider .swiper-pagination',

                  nextButton: '.certificates__slider .swiper-button-next',
                  prevButton: '.certificates__slider .swiper-button-prev',

                  slidesPerView: 4,
                  paginationClickable: true,
                  spaceBetween: 20,
                  // Small screens, center to align and loop elements
                  breakpoints: {
                    900: {
                       slidesPerView: 3
                    },
                    640: {
                       slidesPerView: 2
                    },
                    480: {
                        slidesPerView: 1
                    }
                  },
                  onSlideChangeEnd: function (s) {  }

               });

      // ----------------------------------------------------------------------
      //  Footer -- map settings
      // ----------------------------------------------------------------------



    // ------------------------------------------------------------------------
    // Toggle contacts filials and do action-map
    // ------------------------------------------------------------------------
    if($('.coverage__filials').length) {
      $('.filial_h').on('click', function (e) {

        e.preventDefault();
        var $filial_info = $(this).next('.filial_info');
        if(!$filial_info.hasClass('active')) {
          $('.filial_h.active').removeClass('active');
          $('.filial_info.active').removeClass('active').slideToggle();
          $filial_info.addClass('active').slideToggle();
          $(this).addClass('active');
        }
      })
    }

    // ------------------------------------------------------------------------
    // ANIMATIONS REVEAL
    // ------------------------------------------------------------------------



});
