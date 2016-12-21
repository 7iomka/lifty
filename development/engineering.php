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
                                  <li><a href="tel:74957396706" class="header__phone">+7 (495) 739 67 06</a></li>
                              </ul><p class="header__small-text small-text blue"><a class="blue underline" href="#" data-remodal-target="get_callback">Заказать обратный звонок</a></p>
                      </div>
                    </div>
                </div>
                <!-- /header top items -->
                <!-- Menu-->
                <div id="header-nav">
                      <!-- Small screen menu button -->

                       <!-- <div id="hamburger-icon" class="hamburger">
                          <div class="icon"></div>
                          <div class="hamburger-text">Меню</div>
                      </div>
                      <div class="small-logo">
                        <a href="#home" class="small-logo-link">
                          <span class="logo__title">
                              <span class="brown">seo</span>sintez.<span class="brown">ru</span>
                          </span>
                        </a>
                      </div> -->

                      <!-- /Small screen menu button -->

                      <!-- Menu Items -->
                      <nav id="menu" role="navigation">
                  			<ul>
                  				<li class="menu__item"><a href="#home">Сервисное обслуживание</a></li>
                  				<li class="menu__item"><a href="engineering.php">Проектирование лифтов и шахт</a></li>
                  				<li class="menu__item"><a href="#portfolio">Поставка лифтов</a></li>
                  				<li class="menu__item"><a href="#prices">Монтаж и замена лифтов</a></li>
                  				<li class="menu__item menu__item--last"><a href="#contacts">Контакты</a></li>
                  			</ul>
                  		</nav>
                    <!-- /Menu Items -->
              	</div>
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
                        <form method="POST" action="/ajax.php">
                            <input type="hidden" name="form_task" value="get_audit">
                            <div class="form-legend">
                              <span class="site-form__action-prefix">Оставьте заявку</span>
                              <span class="site-form__action-result">и получите месяц бесплатного<br/>обслуживания лифта</span>
                            </div>
                            <div class="form-group form-group--first">
                                <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--audit" name="user_name--audit" placeholder="Константин" aria-required="true">
                                </div>
                            </div>
                            <div class="form-group ">

                                <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--audit" name="user_phone--audit" placeholder="+7 (987) 654 32 10" aria-required="true">
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

        <section class="achievements s9">
          <div class="container">
            <div class="row">
              <h3 class="right-section-title"><span>Щербинский</span><span>лифтостроительный</span><span>завод</span></h3>
              <div class="square-list achievements__list">
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__1 square-item__first">
                      <div class="square-item__img-wrapper">
                        <div class="square-item__img">
                            <img class="square-item__img-src" src="img/achievements/1.png">
                        </div>
                      </div>
                        <div class="square-item__desc">
                          <span>года работаем</span>
                          <span>для вас</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__2">
                        <div class="square-item__img-wrapper" style=" width: 180px; ">
                          <div class="square-item__img">
                            <img class="square-item__img-src" src="img/achievements/2.png">
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <span>лифтов</span>
                          <span>эксплуатируются по</span>
                          <span>всей стране</span>
                        </div>
                      </div>
                      <div class="col col--4-of-12 col--s-1-of-1 square-item square-item--table-layout square-item__3">
                        <div class="square-item__img-wrapper" style=" width: 100px; ">
                          <div class="square-item__img">
                            <span class="square-item__img-text">30%</span>
                          </div>
                        </div>
                        <div class="square-item__desc">
                          <img class="square-item__img-src" src="img/achievements/3.png">
                        </div>
                      </div>


                    </div>
            </div>
          </div>
        </section>
<?php include_once("inc/footer.php"); ?>
