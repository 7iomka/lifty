<?php include_once("inc/header.php"); ?>
<body class="js">
    <div class="site-wrapper">

        <header class="site-header s1 inverted site-header--home" id="home">
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
              <img src="img/particles/header-left-banne-stuff.png" alt="">
            </div>
            <div class="header__banner-page-image">
              <img src="img/header-banner-test.jpg" alt="">
            </div>

            <div class="header__page-content">
              <div class="container">
                <div class="row">
                  <div class="header__title-area">
                      <div class="header__title-prefix">Получите</div>
                      <h1 class="header__title site-title">
                        <span class="header__title-span">лифтовое</span>
                        <span class="header__title-span">оборудование</span>
                      </h1>
                      <div class="header__title-postfix">в срок от 7 дней</div>
                  </div>
                  <div class="header__custom-text">
                    Поможем вовремя сдать<br/>объект в эксплуатацию
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
<section class="assortiment s1">
    <!-- <div class="multiple-parallax-overlay">
        <div class="parallax-element" style="background: url(img/particles/triangles.png) 50% 100% no-repeat;
    transform: translate(0%, 0%); left: 0;"></div>
    </div> -->
    <div class="container">
        <div class="row">
          <h2 class="assortiment__title">
            <span class="assortiment__title-big">Более 100</span>
            <span class="assortiment__title-postfix">моделей лифтов</span>
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
        </div>
    </div>
</section>
<section class="worksteps s2">
    <div class="container">
        <div class="row">
          <h2 class="worksteps__title">
            <span class="worksteps__title-big"><span class="worksteps__title-big-inner">Нужен</span></span>
            <span class="worksteps__title-postfix">
              <span class="worksteps__title-postfix-top">нестандартный лифт?</span>
              <span class="worksteps__title-postfix-bottom">Разработаем индивидуальное решение любой сложности для вашего объекта</span>
            </span>
          </h2>
          <div class="worksteps__content-wrapper">
              <div class="worksteps__column">
                  <img src="img/worksteps-img.png" alt="" class="worksteps__content-img">
              </div>
              <div class="worksteps__column">
                <div class="worksteps__steps-wrapper">
              <div class="worksteps__steps">
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/1.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">01</div>
                    <div class="worksteps__step-text">Изучим ваш объект и рассчитаем пассажиропоток</div>
                  </div>
                </div>
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/2.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">02</div>
                    <div class="worksteps__step-text">Рассчитаем необходимую грузоподъемность лифтов и количество требуемого лифтового оборудования.</div>
                  </div>
                </div>
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/3.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">03</div>
                    <div class="worksteps__step-text">Подготовим чертеж шахты и строительное задание</div>
                  </div>
                </div>
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/4.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">04</div>
                    <div class="worksteps__step-text">Разработаем уникальный дизайн лифта - нестандартное решение для вашего объекта.</div>
                  </div>
                </div>
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/5.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">05</div>
                    <div class="worksteps__step-text">Всего за 3 дня соберем<br/>лифт в необходимой комплектации</div>
                  </div>
                </div>
                <div class="worksteps__step">
                  <div class="worksteps__step-icon">
                    <img src="img/worksteps/6.png" />
                  </div>
                  <div class="worksteps__step-desc">
                    <div class="worksteps__step-number">06</div>
                    <div class="worksteps__step-text">Смонтируем лифтовое оборудование на объекте, проведем пуско-наладочные работы.</div>
                  </div>
                </div>
              </div>
            </div>

              </div>
          </div>
          <div class="site-form-wrapper worksteps__form-wrapper">
            <div class="worksteps__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
              <form method="POST" action="/ajax.php" novalidate="novalidate">
                  <input type="hidden" name="form_task" value="get_prices">
                  <input type="hidden" name="form_subject" value="Заявка на оценку стоимости и сроков установки лифта">
                  <div class="form-legend">
                    <span class="site-form__action-prefix">Оставьте заявку</span>
                    <span class="site-form__action-result">и узнайте стоимость и сроки<br>установки лифта</span>
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
<section class="achievements s3">
  <div class="container">
    <div class="row">
      <h3 class="right-section-title"><span>Щербинский</span><span>лифтостроительный</span><span>завод</span></h3>
      <div class="square-list achievements__list">
              <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 square-item square-item--table-layout square-item__1 square-item__first">
              <div class="square-item__img-wrapper">
                <div class="square-item__img">
                  <span class="square-item__img-text">74</span>
                </div>
              </div>
                <div class="square-item__desc">
                  <span>года работаем</span>
                  <span>для вас</span>
                </div>
              </div>
              <div class="col col--4-of-12 col--m-1-of-2 col--s-1-of-2 square-item square-item--table-layout square-item__2">
                <div class="square-item__img-wrapper" style=" width: 180px; ">
                  <div class="square-item__img">
                    <span class="square-item__img-text">180 000</span>
                  </div>
                </div>
                <div class="square-item__desc">
                  <span>лифтов</span>
                  <span>эксплуатируются по</span>
                  <span>всей стране</span>
                </div>
              </div>
              <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2 square-item square-item--table-layout square-item__3">
                <div class="square-item__img-wrapper" style=" width: 100px; ">
                  <div class="square-item__img">
                    <span class="square-item__img-text">30%</span>
                  </div>
                </div>
                <div class="square-item__desc">
                  <span>лифтового оборудования приходится</span><span>на ЩЛЗ</span>
                </div>
              </div>
              <div class="col col--2-of-12 col--m-1-of-2 col--s-1-of-2 square-item square-item--table-layout square-item__4 ">
                <div class="square-item__img-wrapper" style=" width: 150px; ">
                  <div class="square-item__img">
                    <span class="square-item__img-text">10 000</span>
                  </div>
                </div>
                <div class="square-item__desc">
                  <span>лифтов</span>
                  <span>производим</span>
                  <span>в год</span>
                </div>
              </div>

            </div>
    </div>
  </div>
</section>

<section class="trust s4">
  <div class="container">
    <div class="row">
      <h2 class="trust__title">
        <span class="trust__title-big">Нам</span>
        <span class="trust__title-postfix">
          <span>доверяют известные</span><span>застройщики</span>
        </span>
      </h2>
      <div class="trust__list">
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/1.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/2.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/3.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/4.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/5.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/6.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/7.png" alt="" class="trust__img"></div>
          </div>
        </div>
        <div class="col col--3-of-12 col--m-1-of-2 col--s-1-of-2">
          <div class="trust__block">
            <div class="trust__img-wrapper"><img src="img/trust/8.png" alt="" class="trust__img"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="objects s5 inverted">
    <!-- <div class="parallax-element">
        <img src="img/particles/triangles-objects.png" class="parallax-img" />
    </div> -->
    <div class="container">
        <div class="row">
            <h2 class="objects__title">
        <span class="objects__title-big">Наши</span>
        <span class="objects__title-postfix">
          <span>лифты эксплуатируются</span><span><strong>на известных объектах</strong></span>
        </span>
      </h2>
            <div class="objects__list">
                <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1">
                    <div class="object">
                        <div class="object__title">Крокус Экспо</div>
                        <div class="object__gallery">
                            <a class="imagemodal__link" href="img/objects/1-1.jpg" data-sub-html="<p>Крокус Экспо</p>">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/1-1.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <a class="imagemodal__link" href="img/objects/1-2.jpg" data-sub-html="<p>Крокус Экспо</p>">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/1-2.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1">
                    <div class="object">
                        <div class="object__title">Котельническая набережная</div>
                        <div class="object__gallery">
                            <a class="imagemodal__link" href="img/objects/2-1.jpg" data-sub-html="<p>Котельническая набережная</p>">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/2-1.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <a class="imagemodal__link" href="img/objects/2-2.jpg" data-sub-html="<p>Котельническая набережная</p>">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/2-2.jpg">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1">
                    <div class="object">
                        <div class="object__title">Минсельхоз</div>
                        <div class="object__gallery">
                            <a class="imagemodal__link" href="img/objects/3-1.jpg">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/3-1.jpg" data-sub-html="<p>Минсельхоз</p>">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                            <a class="imagemodal__link" href="img/objects/3-2.jpg">
                                <img class="imagemodal__thumb" src="img/objects/thumbs/3-2.jpg" data-sub-html="<p>Минсельхоз</p>">
                                <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png" /></span></span>
                            </a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</section>

<section class="services s6">
  <div class="container">
    <div class="row">
      <h2 class="services__title">
        <span class="services__title-big">Наши</span>
        <span class="services__title-postfix">
          услуги
        </span>
      </h2>
      <div class="image-block-list services__list">
              <div class="col col--6-of-12 col--m-1-of-2 col--s-1-of-1">
                <div class="image-block">
                    <a href="engineering.php" class="image-block__link"><span class="image-block__img-wrapper"><img src="img/services/1.jpg" alt="" class="image-block__img"></span><span class="image-block__controls"><span class="image-block__control">Проектирование лифтов и лифтовых шахт</span></span></a>
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

<section class="reviews s7">
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
<section class="certificates s8">
  <div class="container">
    <div class="row">
      <div class="site-form-wrapper reviews__form-wrapper">
        <div class="review__form site-form site-form--light inline-form inline-form--with-inline-btn inline-form--with-left-bg inline--action">
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
