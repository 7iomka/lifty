<?php include_once("inc/header.php"); ?>
<body class="js">
    <div class="site-wrapper">

        <header class="site-header site-header--installation-and-replacement s1 inverted" id="home">
          <div class="header__panel">
            <div class="container">
              <div class="row">
                <!-- header top items -->
                <div class="header__items">
                    <div class="col col--4-of-12 col--push-1-of-12 col--am">
                      <div class="header__item">
                          <a href="/" class="header__link header__link--logo">
                              <span><strong>Центральное управление</strong></span><span style="font-size: 12px;">Щербинского лифтостроительного завода</span>
                          </a>
                      </div>
                    </div>
                    <div class="col col--4-of-12 col--am">
                      <div class="header__item header__item--center">
                          <span><strong>74 года</strong> с комфортом поднимаем</span><span>людей на любую высоту</span>
                      </div>
                    </div>
                    <div class="col col--3-of-12 col--am">
                      <div class="header__item">
                          <ul class="header__contacts">
                                  <li><a href="tel:74957396706" class="header__phone">+7 (495) 739 67 06</a></li>
                              </ul><p class="header__small-text small-text blue"><a class="blue underline" href="#" data-remodal-target="get_callback">Заказать обратный звонок</a></p>
                      </div>
                    </div>
                </div>
                <!-- /header top items -->
                <!-- Menu-->
                <?php require_once('inc/header-menu.php'); ?>
                <!-- /Menu -->
              </div>
            </div>
          </div>
          <div class="header__banner">
            <div class="header__banner-left-stuff">
              <img src="img/particles/header-left-banner-stuff2.png" alt="">
            </div>
            <div class="header__banner-page-image">

            </div>

            <div class="header__page-content">
              <div class="container">
                <div class="row">
                  <div class="header__title-area">
                      <h1 class="header__title site-title header__title--mod1">
                        <span class="header__title-span">Монтаж и замена</span>
                        <span class="header__title-span">лифтов от 7 дней</span>
                      </h1>
                      <div class="clearfix"></div>
                  </div>
                </div>
                <div class="row">
                  <div class="installation-and-replacement-types__slider">
                        <div class="swiper-container">
                          <div class="swiper-wrapper">
                            <div class="swiper-slide installation-and-replacement-types__slide">
                              <div class="installation-and-replacement-types__item">
                                <img src="img/installation-and-replacement-types/1.jpg" alt="" class="installation-and-replacement-types__slitemmg" />
                                <div class="installation-and-replacement-types__item-title">
                                  Замена старого лифта
                                </div>
                                <div class="installation-and-replacement-types__item-time">от 21 дня</div>
                              </div>
                            </div>
                            <div class="swiper-slide installation-and-replacement-types__slide">
                              <div class="installation-and-replacement-types__item">
                                <img src="img/installation-and-replacement-types/2.jpg" alt="" class="installation-and-replacement-types__slitemmg" />
                                <div class="installation-and-replacement-types__item-title">
                                  Монтаж лифтового оборудования
                                </div>
                                <div class="installation-and-replacement-types__item-time">от 7 дней</div>
                              </div>
                            </div>
                            <div class="swiper-slide installation-and-replacement-types__slide">
                              <div class="installation-and-replacement-types__item">
                                  <img src="img/installation-and-replacement-types/3.jpg" alt="" class="installation-and-replacement-types__item-img" />
                                <div class="installation-and-replacement-types__item-title">
                                  Монтаж приставных шахт
                                </div>
                                <div class="installation-and-replacement-types__item-time">от 20 дней</div>
                              </div>
                            </div>

                          </div>
                           <div class="swiper-pagination"></div>
                        </div>

                  </div>
                </div>
                <div class="row">
                  <div class="site-form-wrapper header__form-wrapper">
                    <div class="header__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
                        <form method="POST" action="/ajax.php">
                            <input type="hidden" name="form_task" value="get_visit">
                            <input type="hidden" name="form_subject" value="Заявка на бесплатный выезд специалиста для обследования объекта">
                            <div class="form-legend">
                              <span class="site-form__action-prefix">Оставьте заявку</span>
                              <span class="site-form__action-result">бесплатный выезд специалиста <br/>для обследования объекта</span>
                            </div>
                            <div class="form-group form-group--first">
                                <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--visit" name="user_name--visit" placeholder="Константин" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--visit" name="user_phone--visit" placeholder="+7 (987) 654 32 10" aria-required="true">
                                </div>
                            </div>

                            <div class="form-block">
                              <button type="submit" name="submit-btn" class="btn btn--red btn--medium btn--action-submit progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Оставить заявку</button>
                              <div class="form-post-title">Перезвоним в течение 10 минут</div>
                            </div>

                        </form>


                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>

        <!-- /Nav element -->

        </header>
        <section class="install s16">
          <div class="container">
            <div class="row">
              <h2 class="install__title">
                <span class="install__title-big">Что включает</span>
                <span class="install__title-postfix">
                  в себя монтаж лифтового оборудования
                </span>
              </h2>
              <div class="square-list install__list">
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__1 square-item__first">
                      <div class="square-item__img-wrapper">
                        <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/1.png">
                            <div class="square-item__num">01</div>
                        </div>
                      </div>
                        <div class="square-item__desc">
                          <span>Изучим ваш объект </span>
                          <span>и рассчитаем </span>
                          <span>пассажиропоток</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__2">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/2.png">
                            <div class="square-item__num">02</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Профессиональный </span>
                          <span>монтаж лифтового </span>
                          <span>оборудования</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__3">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/3.png">
                            <div class="square-item__num">03</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Пуско-наладочные </span><span>работы</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--reverse square-item--table-layout square-item__4">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/4.png">
                            <div class="square-item__num">04</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Комплексные </span><span>испытания всей </span><span>системы лифтового </span><span>оборудования </span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--reverse square-item--table-layout square-item__5">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/5.png">
                            <div class="square-item__num">05</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Строительно-</span><span>отделочные работы</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--reverse square-item--table-layout square-item__6">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/install/6.png">
                            <div class="square-item__num">06</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Техническое </span><span>освидетельство-</span><span>вание, декларирование, </span><span>передача эксплуатирующей </span><span> организации</span>
                        </div>
                      </div>


                    </div>
              <div class="site-form-wrapper install__form-wrapper">
                  <div class="install__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
                    <form method="POST" action="/ajax.php" novalidate="novalidate">
                        <input type="hidden" name="form_task" value="get_prices">
                        <input type="hidden" name="form_subject" value="Заявка на оценку стоимости и сроков разработки проекта">
                        <div class="form-legend">
                          <span class="site-form__action-prefix">Оставьте заявку</span>
                          <span class="site-form__action-result">точные сроки и стоимость<br>разработки проекта</span>
                        </div>
                        <div class="form-group form-group--first">
                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_name--prices" name="user_name--prices" placeholder="Константин" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_phone--prices" name="user_phone--prices" placeholder="+7 (987) 654 32 10" aria-required="true">
                            </div>
                        </div>

                        <div class="form-block">
                          <button type="submit" name="submit-btn" class="btn btn--red btn--medium btn--action-submit progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Оставить заявку</button>
                          <div class="form-post-title">Перезвоним в течение 10 минут</div>
                        </div>

                    </form>


                </div>
            </div>


            </div>
          </div>
        </section>
        <section class="install-types s17">
          <div class="container">
            <div class="row">
              <h2 class="install-types__title">
                <span class="install-types__title-inner">
                    <span class="install-types__title-big">Мы монтируем</span>
                    <span class="install-types__title-postfix">
                      лифты любого типа
                    </span>
                </span>
              </h2>
              <div class="image-block-list">
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                        <a href="" data-remodal-target="get_order" data-order-name="Пассажирские лифты" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/1.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Пассажирские лифты</span></span></a>
                    </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                      <a href="" data-remodal-target="get_order" data-order-name="Больничные лифты" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/2.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Больничные лифты</span></span></a>
                    </div>
                  </div>
                <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                    <a href="" data-remodal-target="get_order" data-order-name="Лифты для инвалидов" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/3.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Лифты для инвалидов</span></span></a>
                  </div>
                </div>

                <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                    <a href="" data-remodal-target="get_order" data-order-name="Грузовые лифты" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/4.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Грузовые лифты</span></span></a>
                  </div>
                </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                      <a href="" data-remodal-target="get_order" data-order-name="Лифты для автомобилей" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/5.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Лифты для автомобилей</span></span></a>
                    </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                      <a href="" data-remodal-target="get_order" data-order-name="Подъемники" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/6.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Подъемники</span></span></a>
                    </div>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block">
                      <a href="" data-remodal-target="get_order" data-order-name="Панорамные лифты" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/7.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Панорамные лифты</span></span></a>
                    </div>
                  </div>
                  <div class="col col--8-of-12 col--m-1-of-2 col--s-1-of-2">
                    <div class="image-block image-block--double">
                      <a href="" data-remodal-target="get_order" data-order-name="Лифты без машинного отделения" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/assortiment/8.png" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Лифты без машинного отделения</span></span></a>
                    </div>
                  </div>
              </div>
              <h3 class="install-types__price-depend-title">Стоимость монтажа зависит от</h3>
              <div class="square-list install-types__list">
                <div class="col col--3-of-12 col--m-1-of-3 col--s-1-of-1 square-item square-item--table-layout square-item__1 square-item__first">
                  <div class="square-item__img-wrapper">
                    <div class="square-item__img">
                        <img class="square-item__img-src" src="img/install-types/1.png">
                    </div>
                  </div>
                  <div class="square-item__desc">
                    <span>Грузоподъемности</span>
                    <span>лифта</span>
                  </div>
                </div>
                <div class="col col--3-of-12 col--m-1-of-3 col--s-1-of-1 square-item square-item--table-layout square-item__2">
                  <div class="square-item__img-wrapper">
                    <div class="square-item__img">
                        <img class="square-item__img-src" src="img/install-types/2.png">
                    </div>
                  </div>
                  <div class="square-item__desc">
                    <span>Высоты</span>
                    <span>подъема</span>
                  </div>
                </div>
                <div class="col col--3-of-12 col--m-1-of-3 col--s-1-of-1 square-item square-item--table-layout square-item__3">
                  <div class="square-item__img-wrapper">
                    <div class="square-item__img">
                        <img class="square-item__img-src" src="img/install-types/3.png">
                    </div>
                  </div>
                  <div class="square-item__desc">
                    <span>Количества</span>
                    <span>остановок</span>
                  </div>
                </div>
                <div class="col col--3-of-12 col--m-1-of-3 col--s-1-of-1 square-item square-item--table-layout square-item__4 square-item__last">
                  <div class="square-item__img-wrapper">
                    <div class="square-item__img">
                        <img class="square-item__img-src" src="img/install-types/4.png">
                    </div>
                  </div>
                  <div class="square-item__desc">
                    <span>Ваших</span>
                    <span>пожеланий</span>
                  </div>
                </div>
              </div>
              <div class="site-form-wrapper install-types__form-wrapper">
                  <div class="install-types__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
                    <form method="POST" action="/ajax.php" novalidate="novalidate">
                        <input type="hidden" name="form_task" value="get_install">
                        <input type="hidden" name="form_subject" value="Заявка на оценку стоимости и сроков монтажа">
                        <div class="form-legend">
                          <span class="site-form__action-prefix">Оставьте заявку</span>
                          <span class="site-form__action-result">точную стоимость и <br>сроки монтажа</span>
                        </div>
                        <div class="form-group form-group--first">
                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_name--install" name="user_name--install" placeholder="Константин" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_phone--install" name="user_phone--install" placeholder="+7 (987) 654 32 10" aria-required="true">
                            </div>
                        </div>

                        <div class="form-block">
                          <button type="submit" name="submit-btn" class="btn btn--red btn--medium btn--action-submit progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Оставить заявку</button>
                          <div class="form-post-title">Перезвоним в течение 10 минут</div>
                        </div>

                    </form>


                </div>
            </div>

            </div>
          </div>
        </section>
        <section class="reviews reviews--install s18">
            <!-- <div class="multiple-parallax-overlay">
                <div class="parallax-element" style="background: url(img/particles/triangles.png) 50% 100% no-repeat;
            transform: translate(0%, 0%); left: 0;"></div>
            </div> -->
            <div class="container">
                <div class="row">
                    <h2 class="reviews__title">
                <span class="reviews__title-big">Что говорят</span>
                <span class="reviews__title-postfix">
                  <span>наши</span><span>клиенты</span>
                </span>
              </h2>
                    <div class="review-wrapper">
                        <div class="review">
                            <div class="col col--5-of-12">
                                <div class="row">
                                    <div class="review__video-part">
                                        <div class="review__video-container">
                                            <div class="review__video">
                                                <div class="reviewYT" data-youtube-id="tfpW6w8J21I" data-ratio="16:9"></div>
                                            </div>
                                        </div>
                                        <div class="review__video-author">Дмитрий Подъемников</div>
                                        <div class="review__video-author-role">Генеральнй директор МОРТОН</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col--7-of-12">
                                <div class="row">
                                    <div class="review__content-part">
                                        <div class="review__goal">
                                            <a class="imagemodal__link" href="img/reviews/1.jpg"><img src="img/reviews/thumbs/1.jpg" alt="" class="imagemodal__thumb"><span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img src="img/zoom-icon.png" alt="" class="imagemodal__overlay-icon-img"></span></span>
                                            </a>
                                            <div class="review__text">
                                                <div class="review__title">Поставка 8 лифтов и монтаж</div>
                                                <div class="review__goal-desc"><strong>Задача:</strong> В короткий сроки поставить 6 пассажирских лифтов и 2 подъемника для инвалидов для жилого дома и смонтировать их.</div>
                                            </div>
                                        </div>
                                        <div class="review__result">
                                            <a class="imagemodal__link" href="img/reviews/1-result.jpg"><img src="img/reviews/thumbs/1-result.jpg" alt="" class="imagemodal__thumb"><span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img src="img/zoom-icon.png" alt="" class="imagemodal__overlay-icon-img"></span></span>
                                            </a>
                                            <div class="review__result-desc">
                                                <strong>Выполнение:</strong> В течение такого-то срока компания ЦУ ЩЛЗ поставило нам 8 лифтов, после чего бригада из 5 спецов смонтировала все лифты в течение такого-то срока. В процессе работы были трудности такие-то,
                                                которые успешно решили.
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="review-wrapper">
                        <div class="review">
                            <div class="col col--5-of-12">
                                <div class="row">
                                    <div class="review__video-part">
                                        <div class="review__video-container">
                                            <div class="review__video">
                                                <div class="reviewYT" data-youtube-id="tfpW6w8J21I" data-ratio="16:9"></div>
                                            </div>
                                        </div>
                                        <div class="review__video-author">Дмитрий Подъемников</div>
                                        <div class="review__video-author-role">Генеральнй директор МОРТОН</div>
                                    </div>
                                </div>
                            </div>
                            <div class="col col--7-of-12">
                                <div class="row">
                                    <div class="review__content-part">
                                        <div class="review__goal">
                                            <a class="imagemodal__link" href="img/reviews/1.jpg"><img src="img/reviews/thumbs/1.jpg" alt="" class="imagemodal__thumb"><span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img src="img/zoom-icon.png" alt="" class="imagemodal__overlay-icon-img"></span></span>
                                            </a>
                                            <div class="review__text">
                                                <div class="review__title">Поставка 8 лифтов и монтаж</div>
                                                <div class="review__goal-desc"><strong>Задача:</strong> В короткий сроки поставить 6 пассажирских лифтов и 2 подъемника для инвалидов для жилого дома и смонтировать их.</div>
                                            </div>
                                        </div>
                                        <div class="review__result">
                                            <a class="imagemodal__link" href="img/reviews/1-result.jpg"><img src="img/reviews/thumbs/1-result.jpg" alt="" class="imagemodal__thumb"><span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img src="img/zoom-icon.png" alt="" class="imagemodal__overlay-icon-img"></span></span>
                                            </a>
                                            <div class="review__result-desc">
                                                <strong>Выполнение:</strong> В течение такого-то срока компания ЦУ ЩЛЗ поставило нам 8 лифтов, после чего бригада из 5 спецов смонтировала все лифты в течение такого-то срока. В процессе работы были трудности такие-то,
                                                которые успешно решили.
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="reviews__slider">
                          <div class="swiper-container">
                            <div class="swiper-wrapper">
                              <div class="swiper-slide reviews__slide">
                                <div class="reviews__image-item">
                                  <a class="imagemodal__link" href="img/image-reviews/1.jpg">
                                      <img class="imagemodal__thumb" src="img/image-reviews/thumbs/1.jpg">
                                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                                  </a>
                                </div>
                              </div>
                              <div class="swiper-slide reviews__slide">
                                <div class="reviews__image-item">
                                  <a class="imagemodal__link" href="img/image-reviews/1.jpg">
                                      <img class="imagemodal__thumb" src="img/image-reviews/thumbs/1.jpg">
                                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                                  </a>
                                </div>
                              </div>
                              <div class="swiper-slide reviews__slide">
                                <div class="reviews__image-item">
                                  <a class="imagemodal__link" href="img/image-reviews/1.jpg">
                                      <img class="imagemodal__thumb" src="img/image-reviews/thumbs/1.jpg">
                                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                                  </a>
                                </div>
                              </div>
                              <div class="swiper-slide reviews__slide">
                                <div class="reviews__image-item">
                                  <a class="imagemodal__link" href="img/image-reviews/1.jpg">
                                      <img class="imagemodal__thumb" src="img/image-reviews/thumbs/1.jpg">
                                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                                  </a>
                                </div>
                              </div>

                            </div>
                             <div class="swiper-pagination"></div>
                          </div>

                    </div>
                </div>

            </div>
        </section>
        <section class="services services--engineering s19">
          <div class="container">
            <div class="row">
              <div class="vertical-lines"></div>
              <h2 class="services__title">
                <span class="services__title-big">Наши</span>
                <span class="services__title-postfix">
                  услуги
                </span>
              </h2>
              <div class="image-block-list services__list">
                      <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-1">
                        <div class="image-block">
                            <a href="/" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/5.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Поставки лифтового оборудования</span></span></a>
                        </div>
                      </div>
                      <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-2">
                        <div class="image-block">
                          <a href="installation-and-replacement.php" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/2.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Монтаж и замена лифтов</span></span></a>
                        </div>
                      </div>
                    <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-2">
                        <div class="image-block">
                        <a href="service.php" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/3.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Сервисное обслуживание</span></span></a>
                      </div>
                    </div>

                    <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-2">
                        <div class="image-block">
                        <a href="/" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/4.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Поставка комплектующих</span></span></a>
                      </div>
                    </div>

                  </div>
            </div>
          </div>
        </section>
        <section class="certificates s20">
          <div class="container">
            <div class="row">
              <div class="site-form-wrapper">
                <div class="site-form site-form--light inline-form inline-form--with-inline-btn inline-form--with-left-bg inline--action">
                  <form method="POST" action="/ajax.php" novalidate="novalidate">
                      <input type="hidden" name="form_task" value="get_consult">
                      <input type="hidden" name="form_subject" value="Заявка на бесплатную консультацию">
                      <div class="form-legend">
                        <span class="site-form__action-prefix">остались вопросы? Оставьте заявку</span>
                        <span class="site-form__action-result">и получите бесплатную<br>консультацию специалиста!</span>
                      </div>
                      <div class="form-group form-group--first">
                          <div class="form-input-wrapper">
                              <input type="text" class="form-control required" id="user_name--consult" name="user_name--consult" placeholder="Константин" aria-required="true">
                          </div>
                      </div>
                      <div class="form-group ">

                          <div class="form-input-wrapper">
                              <input type="text" class="form-control required" id="user_phone--consult" name="user_phone--consult" placeholder="+7 (987) 654 32 10" aria-required="true">
                          </div>
                      </div>

                      <div class="form-group form-group--with-btn">
                        <button type="submit" name="submit-btn" class="btn btn--red btn--medium btn--action-submit progress-button " data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Оставить заявку</button>
                        <div class="form-post-title">Перезвоним в течение 10 минут</div>
                      </div>

                  </form>


                  </div>
              </div>
            </div>
            <div class="row">
              <h2 class="certificates__title">
                <span class="certificates__title-big">Наши</span>
                <span class="certificates__title-postfix">
                  сертификаты
                </span>
              </h2>
              <div class="certificates__slider">
                    <div class="swiper-container">
                      <div class="swiper-wrapper">
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/1.pdf" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/1.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/1.pdf" class="certificates__item-title-link" target="_blank" rel="nofollow">Свидетельство о допуске к определенному виду или видам работ, которые оказывают влияние на безопасность объектов капитального ремонта</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/2.pdf" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/2.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/2.pdf" class="certificates__item-title-link" target="_blank" rel="nofollow">Сертификат  соответствия  ISO 9011-2011 (iso 9001:2008)</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/3.pdf" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/3.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/3.pdf" class="certificates__item-title-link" target="_blank" rel="nofollow">Сертификат официального представителя щербинского лифтостроительного завода</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/4.pdf" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/4.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/4.pdf" class="certificates__item-title-link" target="_blank" rel="nofollow">свидетельство о допуске к определенному виду или видам работ, которые оказывают влияние на безопасность объектов капитального строительства</a>
                            </div>
                          </div>
                        </div>
                      </div>
                       <div class="swiper-pagination"></div>
                    </div>

              </div>
            </div>
          </div>
        </section>
<?php include_once("inc/footer.php"); ?>
