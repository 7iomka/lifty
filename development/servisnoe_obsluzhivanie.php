<?php include_once("inc/header.php"); ?>
<body class="js">
    <div class="site-wrapper">

        <header class="site-header site-header--service s1 inverted" id="home">
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
                                  <li><a href="tel:74950038741" class="header__phone">+7 (495) 003-87-41</a></li>
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
              <img src="img/particles/header-left-banner-stuff3.png" alt="">
            </div>
            <div class="header__banner-page-image">

            </div>

            <div class="header__page-content">
              <div class="container">
                <div class="row">
                  <div class="header__title-area">
                      <h1 class="header__title site-title">
                        <span class="header__title-span">Обеспечиваем </span>
                        <span class="header__title-span">работоспособность </span>
                        <span class="header__title-span">лифтов</span>
                      </h1>
                      <div class="header__title-postfix">365 дней в году</div>
                  </div>
                </div>
                <div class="row">
                  <div class="site-form-wrapper header__form-wrapper">
                    <div class="header__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
                      <form method="POST" action="/ajax.php">
                          <input type="hidden" name="form_task" value="get_gift">
                          <input type="hidden" name="form_subject" value="Заявка на месяц бесплатного обслуживания лифта">
                          <div class="form-legend">
                            <span class="site-form__action-prefix">Оставьте заявку</span>
                            <span class="site-form__action-result">и получите месяц бесплатного<br/>обслуживания лифта</span>
                          </div>
                          <div class="form-group form-group--first">
                              <div class="form-input-wrapper">
                                  <input type="text" class="form-control required" id="user_name--gift" name="user_name--gift" placeholder="Имя" aria-required="true">
                              </div>
                          </div>
                          <div class="form-group ">

                              <div class="form-input-wrapper">
                                  <input type="text" class="form-control required" id="user_phone--gift" name="user_phone--gift" placeholder="Телефон" aria-required="true">
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
        <section class="service s21">
          <div class="container">
            <div class="row">
              <h2 class="service__title">
                <span class="service__title-big">Что Вы получаете</span>
                <span class="service__title-postfix">
                  в рамках сервисного обслуживания
                </span>
              </h2>
              <div class="square-list service__list">
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__1 square-item__first">
                      <div class="square-item__img-wrapper">
                        <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/1.png">
                            <div class="square-item__num">01</div>
                        </div>
                      </div>
                        <div class="square-item__desc">
                          Проведение ежемесячного технического обслуживания в соответствии с Техническим Регламентом Таможенного Союза 011/2011 и предписаниями заводов-изготовителей оборудования (ТР1, ТР3, ТР6, ТР12)
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__2">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/2.png">
                            <div class="square-item__num">02</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          Ежегодное проведение полного технического освидетельствования лифтового оборудования с выдачей технического заключения о состоянии оборудования
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__3">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/3.png">
                            <div class="square-item__num">03</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          Ежемесячные отчеты об инцидентах и проведенных работах, с предоставлением доступа к личному клиентскому кабинету.
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__4">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/4.png">
                            <div class="square-item__num">04</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Круглосуточная </span><span>аварийная служба</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__5">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/5.png">
                            <div class="square-item__num">05</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Программа обучения и </span><span> аттестация персонала </span><span>заказчика</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__6">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/6.png">
                            <div class="square-item__num">06</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Услуги круглосуточной </span><span>диспетчерской службы</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__7">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/7.png">
                            <div class="square-item__num">07</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Услуги лифтера </span><span>(подъем грузов на</span><span> специализированном </span><span>оборудовании)</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__8">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/8.png">
                            <div class="square-item__num">08</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Аварийный ремонт и </span><span>замена оборудования</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-1 square-item square-item--table-layout square-item__9">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/service/9.png">
                            <div class="square-item__num">08</div>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Проведение работ во </span><span>внерабочее время, </span><span>выходные и праздничные </span><span>дни</span>
                        </div>
                      </div>


                    </div>
              <div class="site-form-wrapper service__form-wrapper">
                  <div class="service__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
                    <form method="POST" action="/ajax.php" novalidate="novalidate">
                        <input type="hidden" name="form_task" value="get_prices">
                        <input type="hidden" name="form_subject" value="Заявка на оценку стоимости и сроков разработки проекта">
                        <div class="form-legend">
                          <span class="site-form__action-prefix">Оставьте заявку</span>
                          <span class="site-form__action-result">точные сроки и стоимость<br>разработки проекта</span>
                        </div>
                        <div class="form-group form-group--first">
                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_name--prices" name="user_name--prices" placeholder="Имя" aria-required="true">
                            </div>
                        </div>
                        <div class="form-group ">

                            <div class="form-input-wrapper">
                                <input type="text" class="form-control required" id="user_phone--prices" name="user_phone--prices" placeholder="Телефон" aria-required="true">
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
        <section class="reviews reviews--service s22 hidden">
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
        <section class="services services--engineering s23" style="margin-top: 160px;">
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
                          <a href="montazh_i_zamena_liftov" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/2.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Монтаж и замена лифтов</span></span></a>
                        </div>
                      </div>
                    <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-2">
                        <div class="image-block">
                        <a href="servisnoe_obsluzhivanie" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/3.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Сервисное обслуживание</span></span></a>
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
        <section class="certificates s24">
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
                              <input type="text" class="form-control required" id="user_name--consult" name="user_name--consult" placeholder="Имя" aria-required="true">
                          </div>
                      </div>
                      <div class="form-group ">

                          <div class="form-input-wrapper">
                              <input type="text" class="form-control required" id="user_phone--consult" name="user_phone--consult" placeholder="Телефон" aria-required="true">
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
                            <a class="imagemodal__link" href="img/certificates/1.jpg" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/1.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/1.pdf" class="certificates__item-title-link" title="Открыть в pdf" target="_blank" rel="nofollow">Свидетельство о допуске к определенному виду или видам работ, которые оказывают влияние на безопасность объектов капитального ремонта</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/2.jpg" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/2.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/2.pdf" class="certificates__item-title-link" title="Открыть в pdf" target="_blank" rel="nofollow">Сертификат  соответствия  ISO 9011-2011 (iso 9001:2008)</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/3.jpg" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/3.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/3.pdf" class="certificates__item-title-link" title="Открыть в pdf" target="_blank" rel="nofollow">Сертификат официального представителя щербинского лифтостроительного завода</a>
                            </div>
                          </div>
                        </div>
                        <div class="swiper-slide certificates__slide">
                          <div class="certificates__item">
                            <a class="imagemodal__link" href="img/certificates/4.jpg" target="_blank" rel="nofollow">
                                <img class="imagemodal__thumb" src="img/certificates/thumbs/4.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <div class="certificates__item-title">
                              <a href="img/certificates/4.pdf" class="certificates__item-title-link" title="Открыть в pdf" target="_blank" rel="nofollow">свидетельство о допуске к определенному виду или видам работ, которые оказывают влияние на безопасность объектов капитального строительства</a>
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
