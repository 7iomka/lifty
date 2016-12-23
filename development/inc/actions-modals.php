<?php
  $closeButtonHtml = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 24 24" enable-background="new 0 0 24 24" xml:space="preserve"> <g> <path class="close_path1" d="M22.5,6h-21C1.2,6,1,5.8,1,5.5C1,5.2,1.2,5,1.5,5h21C22.8,5,23,5.2,23,5.5C23,5.8,22.8,6,22.5,6z" data-svg-origin="12 5.5" transform="matrix(0.7071,0.7071,-0.7071,0.7071,7.4038059222874395,0.12563132923541787)" style="z-index: 0;"></path> <path class="close_path2" d="M22.5,13h-21C1.2,13,1,12.8,1,12.5C1,12.2,1.2,12,1.5,12h21c0.3,0,0.5,0.2,0.5,0.5C23,12.8,22.8,13,22.5,13z" data-svg-origin="1 12" transform="matrix(0,0,0,1,12,0)" style="z-index: 0;"></path> <path class="close_path3" d="M22.5,20h-21C1.2,20,1,19.8,1,19.5C1,19.2,1.2,19,1.5,19h21c0.3,0,0.5,0.2,0.5,0.5C23,19.8,22.8,20,22.5,20z" data-svg-origin="12 19.5" transform="matrix(0.7071,-0.7071,0.7071,0.7071,-10.27386360737625,7.196699141100892)" style="z-index: 0;"></path></g></svg>';
?>

    <!-- Video -->
    <div class="remodal remodal--browser remodal--video" data-remodal-id="getVideo" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                    <!-- video youtube -->
                    <div id="videoDialogPlayer" class="vidflex"></div>
                </div>
            </div>
        </div>
    </div>



    <!-- IMAGES WITH ZOOM -->
    <div class="remodal remodal--action remodal--browser remodal--zoom-images" data-remodal-id="get_zoomable_image" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
                <!-- <li class="c-nav">
                  <div class="remodal-zoom-toolbar" id="remodal-zoom-toolbar"><span id="zoom-in--remodal" class="lg-icon--remodal lg-zoom-in--remodal"></span><span id="zoom-out--remodal" class="lg-icon--remodal lg-zoom-out--remodal"></span><span id="actual-size--remodal" class="lg-icon--remodal lg-actual-size--remodal"></span>
                  </div>
                </li> -->
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content">
          <div class="zoom-scene-overlay">
            <!-- <div class="zoom-scene-preloader">
              <div class="css_spinner wf">
                <span class="side s_left"> <span class="fill"></span> </span>
                <span class="side s_right"> <span class="fill"></span> </span>
              </div>
            </div> -->
          </div>
          <div id="zoom-images" class="zoom-images">
          </div>
        </div>
    </div>

    <!-- Gallery with order -->
    <div class="remodal remodal--action remodal--browser remodal--order" data-remodal-id="get_order" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="remodal__order-wrapper">
                    <div class="remodal__order-gallery">
                      <img src="img/assortiment/2.png" alt="" class="remodal__order-gallery-img">
                    </div>
                    <div class="site-form site-form--basic-outlined site-form--callback site-form--action remodal__order-form" >
                      <div class="site-form--basic-outlined__inner">
                        <h3 class="site-form__header" id="order-name"><span>Пассажирский лифт</span></h3>
                        <p class="site-form__subheader">Оставьте заявку и <br />получите месяц бесплатного обслуживания лифта</p>
                        <form method="POST" action="/ajax.php">
                          <input type="hidden" name="form_task" value="get_order">
                          <input type="hidden" name="form_subject" id="form_subject" value="Заявка с формы: Пассажирский лифт">
                          <div class="form-group form-group--first">
                            <label for="user_name--order">Как Вас зовут:</label>
                            <div class="form-input-wrapper">
                              <input type="text" class="form-control required" id="user_name--order" name="user_name--order" placeholder="Имя">
                            </div>
                          </div>
                          <div class="form-group ">
                            <label for="user_phone--order">Номер телефона:</label>
                            <div class="form-input-wrapper">
                              <input type="text" class="form-control required" id="user_phone--order" name="user_phone--order" placeholder="Телефон">
                            </div>
                          </div>
                          <button type="submit" name="submit-btn" class="btn btn--red btn--large btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                        </form>

                      </div>
                    </div>
                  </div>
                </div>
            </div>
        </div>
    </div>

    <!-- CALL BACK -->
    <div class="remodal remodal--action remodal--browser remodal--callback" data-remodal-id="get_callback" data-remodal-options="hashTracking: false" role="dialog">

        <div class="remodal__header-wrapper">
            <ul class="c-controls">
            </ul>
            <div data-remodal-action="close" class="remodal-close" aria-label="Close">
                <?php echo $closeButtonHtml; ?>
            </div>
        </div>
        <div class="remodal__content-wrapper">
            <div class="remodal__content">
                <div class="remodal__body">
                  <div class="site-form site-form--basic-outlined site-form--callback site-form--action">
                    <div class="site-form--basic-outlined__inner">
                          <h3 class="site-form__header"><span>Связаться с менеджером</span></h3>
                          <p class="site-form__subheader">Оставьте заявку и мы перезвоним Вам <br />в течении 10 минут</p>
                          <form method="POST" action="/ajax.php">
                              <input type="hidden" name="form_task" value="get_callback">
                              <input type="hidden" name="form_subject" value="Заявка на обратный звонок">
                              <div class="form-group form-group--first">
                                  <label for="user_name--callback">Как Вас зовут:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_name--callback" name="user_name--callback" placeholder="Имя">
                                  </div>
                              </div>
                              <div class="form-group ">
                                  <label for="user_phone--callback">Номер телефона:</label>
                                  <div class="form-input-wrapper">
                                    <input type="text" class="form-control required" id="user_phone--callback" name="user_phone--callback" placeholder="Телефон">
                                  </div>
                              </div>
                              <button type="submit" name="submit-btn" class="btn btn--red btn--large btn--submit-action progress-button" data-loading="Отправка заявки.." data-finished="Заявка отправлена!">Отправить заявку</button>
                          </form>

                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
