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
          var $orderRemodalContainer = $('.remodal--get-order'),
              $orderRemodalInstance = $orderRemodalContainer.remodal({hashTracking: false}),
              $orderBtn = $('.pricest__list-btn');

              $orderBtn.on('click', function (e) {
                e.preventDefault();
                $orderRemodalContainer.find('#tarif').val($(this).data('order-id'));
                $orderRemodalContainer.find('#selected_tarif-title').text($(this).data('order-title'));
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
          // OpenSeadragon (deep zooming) - base settings
          // ----------------------------------------------------------------------------
          /** Init global viewer instance **/
          // var viewer;
          // var viewerHasStarted = false;
          //
          // /** Translate buttons labels **/
          // OpenSeadragon.setString("Tooltips.Home","Сбросить");
          // OpenSeadragon.setString("Tooltips.ZoomOut","Уменьшить");
          // OpenSeadragon.setString("Tooltips.ZoomIn", "Увеличить");
          //
          //
          //
          // /**
          //  * Custom event handler for reset-viewport button
          //  */
          // /**
          //  * @param Boolean withAnimation
          //  */
          // function resetViewportToStartPosition(disableScaleAnimation) {
          //       // disable animation (default true)
          //       var disableScaleAnimation = disableScaleAnimation == false ? false : true;
          //       var oldBounds = viewer.viewport.getBounds();
          //       var newBounds = new OpenSeadragon.Rect(0, 0, 1, oldBounds.height / oldBounds.width);
          //       viewer.viewport.fitBounds(newBounds, disableScaleAnimation);
          // }
          //
          // /**
          //  * @param  String containerId
          //  * @param  String imageUrl
          //  */
          // function initDeepZoom(containerId, imageUrl, callback) {
          //   // write to global - basic settings with necessary parametrs
          //
          //
          //     viewer = OpenSeadragon({
          //       id:  containerId,
          //       tileSources: {
          //         type: 'image',
          //         url: imageUrl,
          //       },
          //       toolbar:        "remodal-zoom-toolbar",
          //       zoomInButton : "zoom-in--remodal",
          //       zoomOutButton : "zoom-out--remodal",
          //       // custom not extist for prevent error
          //       // homeButton:     "not1",
          //       // fullPageButton: "not2",
          //       // nextButton:     "not3",
          //       // previousButton: "not4",
          //
          //       visibilityRatio : 1,
          //       defaultZoomLevel : 1,
          //       // minZoomLevel : 1,
          //       // allowZoomToConstraintsOnResize : true,
          //       showNavigator : true,
          //       showFullScreenControl: false,
          //       showFullPageControl: false,
          //       showHomeControl: false,
          //       showRotationControl: false,
          //       // zoomPerScroll: 1,
          //       navigatorPosition : "TOP_RIGHT",
          //
          //     });
          //     // events stuff
          //     (function(_viewer) {
          //       var viewer =_viewer,
          //       zoom,
          //       oldContainerSize,
          //       containerSize;
          //
          //       viewer.addHandler("open", function () {
          //         setTimeout(function () {
          //           resetViewportToStartPosition();
          //         },0);
          //       });
          //
          //       viewer.addHandler('resize', function(e) {
          //         zoom = e.eventSource.viewport.getZoom();
          //         oldContainerSize = containerSize;
          //         containerSize = e.newContainerSize;
          //
          //       });
          //
          //       viewer.addHandler('fullpage', function (viewer) {
          //           if (viewer.isFullPage()) {
          //               viewer.setControlsEnabled(true);
          //               viewer.setMouseNavEnabled(true);
          //           } else {
          //               viewer.setControlsEnabled(false);
          //               viewer.setMouseNavEnabled(false);
          //           }
          //       });
          //       viewer.addHandler('animation', function(e) {
          //         zoom = e.eventSource.viewport.getZoom();
          //       });
          //       viewer.addHandler('tile-loaded', function(e) {
          //
          //         typeof callback === 'function' ? callback() : console.log('scene initialized');
          //       });
          //     })(viewer);
          //
          //     if(!viewerHasStarted) viewerHasStarted = true;
          //
          //
          //
          //
          // }
          //
          //
          //
          // /**
          //  * custom events for navigation in zoom-remodal
          //  */
          // $('.lg-icon--remodal').on('click', function () {
          //   //
          //   if($(this).hasClass('lg-actual-size--remodal')) {
          //     resetViewportToStartPosition(false);
          //   }
          //   if($('.lg-icon--remodal').hasClass('active')) {
          //     $('.lg-icon--remodal').removeClass('active')
          //   }
          //   $(this).addClass('active');
          // })
          //
          // /**
          //  * Set fixed dynamic height to container
          //  */
          // $window.on('resize', $.throttle(250, function () {
          //   $('.remodal--zoom-images .zoom-images').css({
          //     height: ($window.height() - 60) + 'px'
          //   });
          // })).trigger('resize');

          /**
           * Remodal events for zoom-images remodal
           */



          // remove padding
          $(document).on('opening', '.remodal--zoom-images', function(e) {

              // if(viewerHasStarted) {
              //   $('.zoom-scene-overlay').show();
              //   setTimeout(function () {
              //     $('.zoom-scene-overlay').fadeOut();
              //   }, 3000)
              // }
              setTimeout(function() {
                 $('.remodal--zoom-images').closest('.remodal-wrapper').addClass('remodal-wrapper--fixed');
                }, 30);


              /** hot fix for Android browser **/
              if (is_android_default_bro) {
                //
                //   // Tweak the canvas opacity, causing it to redraw
                // $("canvas").parents("*").css("overflow", "visible");
                $('.remodal--zoom-images').closest('.remodal-wrapper').css({'position': 'fixed'})

              }
          });
          // remove image canvas stuff after close && fadeIn overlay with preloader
          $(document).on('closing', '.remodal--zoom-images', function(e) {
              // $('.zoom-scene-overlay').fadeIn();

                $('.zoom-images').html('');

          });



          // ----------------------------------------------------------------------------
          // getProjectCases
          // ----------------------------------------------------------------------------
          var projectCasesList = [
            {
              url: 'img/project-cases/big/1-doma.jpg',
            },
            {
              url: 'img/project-cases/big/2-shapki.jpg',

            },
            {
              url: 'img/project-cases/big/3-geodezia.jpg',

            },

          ];

          var projectCasesRemodalContainer = $('.remodal--zoom-images'),
              // projectCasesRemodalInstance = projectCasesRemodalContainer.remodal({hashTracking: false}),
              projectCasesBtn = $('.project__link');

              projectCasesBtn.on('click', function (e) {
                e.preventDefault();
                // projectCasesRemodalInstance.open();
                var projectId = $(this).data('project-id'),
                    currentProjectCase = projectCasesList[+projectId-1];

                // load image
                // deferImage(currentProjectCase.url, function () {
                //   $('#zoom-images').html('<img class="zoom-image" src="' + currentProjectCase.url + '" />');
                //   $('.zoom-scene-overlay').fadeOut();
                // });
                //  $('.zoom-scene-overlay').fadeOut();
                  $('#zoom-images').html('<img class="zoom-image" src="' + currentProjectCase.url + '" />');
                // initDeepZoom("zoom-images", currentProjectCase.url, function () {
                //   $('.zoom-scene-overlay').fadeOut();
                //   $('#zoom-images').data('projectId', currentProjectCase.url);
                // });



                });


          // ----------------------------------------------------------------------------
          // getPortfolioGalley
          // ----------------------------------------------------------------------------
          var portfolioGalleryList = [
            {
              url: 'img/gallery/big/1_aviacionnyj_uchebnyj_centr_gamajun.jpg',
            },
            {
              url: 'img/gallery/big/2_detskij_lageri_materik.jpg',

            },
            {
              url: 'img/gallery/big/3_dizajnerskie_kukhni.jpg',

            },
            {
              url: 'img/gallery/big/4_kraska_ot_kompanii_favorit.jpg',

            },
            {
              url: 'img/gallery/big/5_kredit_pod_zalog_nedvizhimosti.jpg',

            },
            {
              url: 'img/gallery/big/6_natjazhnye_potolki_hottabych.jpg',

            },
            {
              url: 'img/gallery/big/7_organizacija_prazdnikov_best_event.jpg',

            },
            {
              url: 'img/gallery/big/8_orgcentr_himki_zapravka_i_prodazha_kartridzhej.jpg',

            },
            {
              url: 'img/gallery/big/9_osparivanie_kadastrovoj_stoimosti_nedvizhimosti.jpg',

            },
            {
              url: 'img/gallery/big/10_prodazha_iskusstvennykh_elok.jpg',

            },
            {
              url: 'img/gallery/big/11_remont_kvartir_pod_kljuch.jpg',

            },
            {
              url: 'img/gallery/big/12_shc_herbinskij_liftostroitelinyj_zavod.jpg',

            },

          ];

          var portfolioGalleryRemodalContainer = $('.remodal--zoom-images'),
              // portfolioGalleryRemodalInstance = portfolioGalleryRemodalContainer.remodal({hashTracking: false}),
              portfolioGalleryBtn = $('.portfolioGallery__link');

              portfolioGalleryBtn.on('click', function (e) {
                e.preventDefault();
                // portfolioGalleryRemodalInstance.open();
                var projectId = $(this).data('project-id'),
                    currentPortfolioProject = portfolioGalleryList[+projectId-1];

                // load image
                // deferImage(currentPortfolioProject.url, function () {
                //   $('#zoom-images').html('<img class="zoom-image" src="' + currentPortfolioProject.url + '" />');
                //   $('.zoom-scene-overlay').fadeOut();
                // });
                $('.zoom-scene-overlay').fadeOut();
                  $('#zoom-images').html('<img class="zoom-image" src="' + currentPortfolioProject.url + '" />');


                // // start zoom scene
                // initDeepZoom("zoom-images", currentPortfolioProject.url);
                //   setTimeout(function () {
                //     $('.zoom-scene-overlay').fadeOut();
                //   }, 1000);

                });



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
               onSlideChangeEnd: function (s) { s.fixLoop(); }

            });


      // ----------------------------------------------------------------------------
      // Init gallery for each review
      // ----------------------------------------------------------------------------
      var lightGalleryScene = $('.swiper-container').lightGallery({
          selector: '.review',
           selectWithin: $('.swiper-slide'),
            hash: false,
             download: false
           });



           // ----------------------------------------------------------------------------
           // Certificates slider
           // ----------------------------------------------------------------------------
           var reviewsSlider = new Swiper('.certificates__slider .swiper-container', {
                  pagination: '.certificates__slider .swiper-pagination',
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
                  onSlideChangeEnd: function (s) { s.fixLoop(); }

               });

      // ----------------------------------------------------------------------
      //  Footer -- map settings
      // ----------------------------------------------------------------------
      var myMap,
          mapIsLoaded = false;


      $('.footer-map-preview__btn').on('click', function() {

          $('.site-footer').toggleClass('site-footer--map-expanded');

          !mapIsLoaded && ($('.footer-map-preloader-overlay').fadeIn());
          if (mapIsLoaded) {
              return
          }

          load_script('//api-maps.yandex.ru/2.1/?lang=ru_RU', function() {

              ymaps.ready(function() {
                  $('.footer-map-preloader-overlay').fadeOut();
                  YandexReadyHandlerSiteMap();

                  mapIsLoaded = true;
              });

          });

      });

      function YandexReadyHandlerSiteMap() {
          if (!myMap) {
              myMap =  new ymaps.Map("site-map", {
                  center: [55.78877202385828, 37.63363826322933],
                  zoom: 17,
                  controls: ["zoomControl","typeSelector"],
                  type: "yandex#map"
              },{
                  suppressMapOpenBlock: true
              });
              myMap.geoObjects.add(new ymaps.GeoObject({
                  geometry: {
                      type: "Point",
                      coordinates: [55.788814339256064,37.63339686441791]
                  },
                  properties: {
                      balloonContent:decodeURIComponent("%3Cp%3E%0A%09%D0%A0%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D0%BD%D0%BE%D0%B5%20%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE%20%22Seosintez%22.%20%D0%B3.%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%93%D0%B8%D0%BB%D1%8F%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%2C%2068%D1%811%3Cbr%3E%0A%3C%2Fp%3E"),
                      iconCaption:decodeURIComponent("%D0%A0%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D0%BD%D0%BE%D0%B5%20%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE%20%22Seosintez%22.%20%D0%B3.%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%93%D0%B8%D0%BB%D1%8F%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%2C%2068%D1%811"),
                      hintCaption:decodeURIComponent("%D0%A0%D0%B5%D0%BA%D0%BB%D0%B0%D0%BC%D0%BD%D0%BE%D0%B5%20%D0%B0%D0%B3%D0%B5%D0%BD%D1%82%D1%81%D1%82%D0%B2%D0%BE%20%22Seosintez%22.%20%D0%B3.%20%D0%9C%D0%BE%D1%81%D0%BA%D0%B2%D0%B0%2C%20%D1%83%D0%BB%D0%B8%D1%86%D0%B0%20%D0%93%D0%B8%D0%BB%D1%8F%D1%80%D0%BE%D0%B2%D1%81%D0%BA%D0%BE%D0%B3%D0%BE%2C%2068%D1%811"),
                  }
              }, {
                  preset: "islands#darkOrangeDotIcon",
              }));
              myMap.container.fitToViewport();
              myMap.behaviors.disable('scrollZoom');
              myMap.behaviors.disable('wheel');

              return myMap;
          } else {
              myMap.destroy(); // Деструктор карты
              myMap = null;
          }
      }


    // ------------------------------------------------------------------------
    // ANIMATIONS REVEAL
    // ------------------------------------------------------------------------



});
