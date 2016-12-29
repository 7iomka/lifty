<?php include_once("inc/header.php"); ?>
<body class="js">
    <div class="site-wrapper">

        <header class="site-header s1 inverted" id="home">
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
              <img src="img/particles/header-left-banne-stuff.png" alt="">
            </div>
            <div class="header__banner-page-image">
              <img src="img/header-banner/engineering.jpg" alt="">
            </div>

            <div class="header__page-content">
              <div class="container">
                <div class="row">
                  <div class="header__title-area">
                      <div class="header__title-prefix">Проектирование</div>
                      <h1 class="header__title site-title header__title--mod1">
                        <span class="header__title-span">лифтов и</span>
                        <span class="header__title-span">лифтовых шахт</span>
                      </h1>
                      <div class="header__title-postfix" style="padding-bottom: 0;"></div>
                  </div>
                  <div class="header__custom-text">
                    Нестандартные решения для <br/>ваших объектов в срок от 5 дней
                  </div>
                </div>
                <div class="row">
                  <div class="site-form-wrapper header__form-wrapper">
                    <div class="header__form site-form site-form--light inline-form inline-form--with-left-bg inline--action">
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
            </div>

          </div>

        <!-- /Nav element -->

        </header>

        <section class="achievements achievements--engineering s9">
          <div class="container">
            <div class="row">

              <div class="square-list achievements__list">
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__1 square-item__first">
                      <div class="square-item__img-wrapper">
                        <div class="square-item__img">
                            <img class="square-item__img-src" src="img/achievements/1.png">
                        </div>
                      </div>
                        <div class="square-item__desc">
                          <span>Экспертные решения в </span>
                          <span>каждом регионе</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__2">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/achievements/2.png">
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Реализовали более 100 </span>
                          <span>специальных проектов</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__3">
                        <div class="square-item__img-wrapper">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/achievements/3.png">
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>Строго соблюдаем все</span>
                          <span>нормы и правила</span>
                          <span>проектирования (ГОСТ,</span>
                          <span>СНИП и ТР)</span>
                        </div>
                      </div>


                    </div>
            </div>
          </div>
        </section>
        <section class="worksteps worksteps--engineering s10">
          <div class="container">
              <div class="row">
                <h2 class="worksteps__title">
                  <span class="worksteps__title-big"><span class="worksteps__title-big-inner">Как мы</span></span>
                  <span class="worksteps__title-postfix">
                    <span class="worksteps__title-postfix-top">проектируем для вас</span>
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
                          <img src="img/worksteps/1.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">01</div>
                          <div class="worksteps__step-text">Изучим ваш объект и рассчитаем пассажиропоток</div>
                        </div>
                      </div>
                      <div class="worksteps__step">
                        <div class="worksteps__step-icon">
                          <img src="img/worksteps/2.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">02</div>
                          <div class="worksteps__step-text">Рассчитаем необходимую грузоподъемность лифтов и количество требуемого лифтового оборудования.</div>
                        </div>
                      </div>
                      <div class="worksteps__step">
                        <div class="worksteps__step-icon">
                          <img src="img/worksteps/3.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">03</div>
                          <div class="worksteps__step-text">Подготовим необходимые документы - строительное задание, установочные чертежи, проект замены лифта</div>
                        </div>
                      </div>
                      <div class="worksteps__step">
                        <div class="worksteps__step-icon">
                          <img src="img/worksteps/4--engineering.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">04</div>
                          <div class="worksteps__step-text">Разработаем индивидуальную комплектацию для лифта</div>
                        </div>
                      </div>
                      <div class="worksteps__step">
                        <div class="worksteps__step-icon">
                          <img src="img/worksteps/5--engineering.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">05</div>
                          <div class="worksteps__step-text">Подготовим прозрачную смету проекта и сроки реализации</div>
                        </div>
                      </div>
                      <div class="worksteps__step">
                        <div class="worksteps__step-icon">
                          <img src="img/worksteps/6--engineering.png">
                        </div>
                        <div class="worksteps__step-desc">
                          <div class="worksteps__step-number">06</div>
                          <div class="worksteps__step-text">Проведем экспертизу проекта и сметы в госорганах</div>
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
      <section class="examples examples--engineering s11">
        <div class="container">
          <div class="row">
            <h2 class="examples__title">
              <span class="examples__title-big">Посмотрите</span>
              <span class="examples__title-postfix">
                <span>примеры выполненных </span><span>проектов</span>
              </span>
            </h2>
            <div class="examples__image-list">
              <div class="col col--6-of-12 col--s-1-of-1">
                <div class="examples__image-item">
                  <div class="examples__image-title">Администрация поселения Развилковское <br>Проект замены в жилых домах</div>
                  <a class="imagemodal__link" href="img/engineering-examples/1.jpg">
                      <img class="imagemodal__thumb" src="img/engineering-examples/thumbs/1.jpg">
                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                  </a>
                </div>
              </div>
              <div class="col col--6-of-12 col--s-1-of-1">
                <div class="examples__image-item">
                  <div class="examples__image-title">Проект замены лифтов. <br>Балтика Тула</div>
                  <a class="imagemodal__link" href="img/engineering-examples/2.jpg">
                      <img class="imagemodal__thumb" src="img/engineering-examples/thumbs/2.jpg">
                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                  </a>
                </div>
              </div>
              <div class="col col--6-of-12 col--s-1-of-1">
                <div class="examples__image-item">
                  <div class="examples__image-title">Проект замены лифтов. Луховицкая ЦРБ</div>
                  <a class="imagemodal__link" href="img/engineering-examples/3.jpg">
                      <img class="imagemodal__thumb" src="img/engineering-examples/thumbs/3.jpg">
                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                  </a>
                </div>
              </div>
              <div class="col col--6-of-12 col--s-1-of-1">
                <div class="examples__image-item">
                  <div class="examples__image-title">Проект замены МГТС ул Дубнинская</div>
                  <a class="imagemodal__link" href="img/engineering-examples/4.jpg">
                      <img class="imagemodal__thumb" src="img/engineering-examples/thumbs/4.jpg">
                      <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                  </a>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="site-form-wrapper examples__form-wrapper">
              <div class="examples__form site-form site-form--light inline-form inline-form--with-inline-btn inline-form--with-left-bg inline--action">
                <form method="POST" action="/ajax.php" novalidate="novalidate">
                    <input type="hidden" name="form_task" value="get_album">
                    <input type="hidden" name="form_subject" value="Заявка на получение актуального альбома строительных зданий">
                    <div class="form-legend">
                      <span class="site-form__action-prefix">Оставьте адрес своей почты</span>
                      <span class="site-form__action-result">получите актуальный альбом <br>строительных заданий</span>
                    </div>
                    <div class="form-group form-group--first">
                        <div class="form-input-wrapper">
                            <input type="text" class="form-control required" id="user_name--album" name="user_name--album" placeholder="Имя" aria-required="true">
                        </div>
                    </div>
                    <div class="form-group ">

                        <div class="form-input-wrapper">
                            <input type="text" class="form-control required" id="user_phone--album" name="user_phone--album" placeholder="Телефон" aria-required="true">
                        </div>
                    </div>

                    <div class="form-group form-group--with-btn">
                      <button type="submit" name="submit-btn" class="btn btn--red btn--medium btn--action-submit progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">получить альбом</button>
                      <div class="form-post-title">Последнее обновление 23.10.2016</div>
                    </div>

                </form>


                </div>
            </div>
          </div>
        </div>
      </section>
      <section class="project-mines s12">
        <div class="container">
          <div class="row">
            <h2 class="project-mines__title">
              <span class="project-mines__title-big">Разработаем</span>
              <span class="project-mines__title-postfix">
                <span>проект </span><span>приставной </span><span>шахты</span>
              </span>
            </h2>
            <div class="project-mines__list">
              <div class="project-mines__item">
                  <div class="col col--8-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                      <a class="imagemodal__link project-mines__item-draft" href="img/project-mines/1-d.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/1-d.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                      <a class="imagemodal__link project-mines__item-photo" href="img/project-mines/1-p.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/1-p.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                    <div class="project-mines__item-title">Проект устройства шахты для пассажирского лифта грузоподъемностью 1000кг. В здании по адресу: г.Подольск, Улица Бронницкая 15</div>
                  </div>
              </div>
              <div class="project-mines__item">
                  <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                    <div class="project-mines__item-title">Проект приставной шахты грузопассажирского лифта грузоподъемностью 630 кг, в здании многофункционального назначения по адресу: М\О, Серебряно-прудский район, П.Г.Т. Серебяные пруды, ул. Советская площадь 22В</div>
                  </div>
                  <div class="col col--8-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                      <a class="imagemodal__link project-mines__item-draft" href="img/project-mines/2-d.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/2-d.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                      <a class="imagemodal__link project-mines__item-photo" href="img/project-mines/2-p.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/2-p.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                  </div>
              </div>
              <div class="project-mines__item">
                  <div class="col col--8-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                      <a class="imagemodal__link project-mines__item-draft" href="img/project-mines/3-d.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/3-d.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                      <a class="imagemodal__link project-mines__item-photo" href="img/project-mines/3-p.jpg">
                          <img class="imagemodal__thumb" src="img/project-mines/thumbs/3-p.jpg">
                          <span class="imagemodal__overlay"><span class="imagemodal__overlay-icon"><img class="imagemodal__overlay-icon-img" src="img/zoom-icon.png"></span></span>
                      </a>
                  </div>
                  <div class="col col--4-of-12 col--m-1-of-1 col--s-1-of-1 col--am project-mines__item-col">
                    <div class="project-mines__item-title">Проект устройства металлокаркаса шахты для пассажирского лифта без машинного помещения. Грузоподъемность 1000 кг. Адрес: Торгово-сервисный центр, г.Москва, ВМО Южное Бутово, Щербинка, мкр. 4, корп. 18</div>
                  </div>
              </div>


            </div>
          </div>
        </div>
      </section>
      <section class="reviews s13 hidden">
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
      <section class="services services--engineering s14">
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
      <section class="certificates s15">
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
