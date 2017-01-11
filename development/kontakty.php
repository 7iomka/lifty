<?php include_once("inc/header.php"); ?>
<body class="js">
    <div class="site-wrapper">

        <header class="site-header site-header--contacts s1 inverted" id="home">
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
                <!-- Phone Number And Callback for mobile Layout -->
                <div class="header__mobile-actions">
                    <ul class="header__contacts">
                            <li><a href="tel:74950038741" class="header__phone">+7 (495) 003-87-41</a></li>
                        </ul><p class="header__small-text small-text blue"><a class="blue underline" href="#" data-remodal-target="get_callback">Заказать обратный звонок</a></p>
                </div>
                <!-- /Phone Number And Callback for mobile Layout -->
              </div>
            </div>
          </div>

        <!-- /Nav element -->

        </header>
        <section class="excursion s25">
          <div class="container">
            <div class="row">
              <h2 class="excursion__title">
                <span class="excursion__title-big">Друзья, <span class="mobile-sep-worlds"></span>приглашаем Вас</span>
                <span class="excursion__title-postfix">
                  на экскурсию на Щербинский<br/> Лифтостроительный Завод
                </span>
              </h2>

            </div>
          </div>
          <div class="escursion__map-container">
            <div class="excursion__map-panel">
              <div class="container">
                <div class="row">
                  <p class="excursion__map-panel-header">Контакты Центрального управления ЩЛЗ</p>
                  <div class="excursion__map-adress">142171, Россия, г. Москва, г. Щербинка, ул. Первомайская, д. 6</div>
                  <div class="excursion__map-inline-contacts">
                    <div class="excursion__map-inline-contact excursion__phone"><a href="tel:4957396706" class="excursion__contacts-link">+7 (495) 003-87-41</a></div>
                    <div class="excursion__map-inline-contact excursion__email"><a href="mailto:lift@shlz.ru" class="excursion__contacts-link">lift@shlz.ru</a></div>
                  </div>
                </div>
              </div>

            </div>
            <div class="excursion__map-content">
              <div style="width: auto;height: 560px" id="excursion__map"></div>
              <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=loadExcursionMap" type="text/javascript"></script>
              <script>
                  // ------------------------------------------------------------------------
                  // Excursion map callback
                  // ------------------------------------------------------------------------
                  function loadExcursionMap() {
                      var map = new ymaps.Map("excursion__map", {
                      center: [55.50327149731009, 37.57213811202235],
                          zoom: 15,
                          controls: ["zoomControl","typeSelector"],
                          type: "yandex#map"
                      },{
                          suppressMapOpenBlock: true
                      });
                      map.geoObjects.add(new ymaps.GeoObject({
                          geometry: {
                              type: "Point",
                              coordinates: [55.5046242455879,37.567900502962075]
                          },
                          properties: {
                              balloonContent:decodeURIComponent("<p> 108851, Россия, г. Москва, <br> г. Щербинка, <br> ул. Первомайская, д. 6 <br> (вход на территорию завода со стороны центральной проходной по ул. Спортивная) <br> <br> </p>"),
                              iconCaption:decodeURIComponent("Первомайская улица, 6"),
                              hintCaption:decodeURIComponent("Первомайская улица, 6"),
                          }
                      }, {
                          preset: "islands#blueDotIconWithCaption",
                      }));
                      map.geoObjects.add(new ymaps.GeoObject({
                          geometry: {
                              type: "LineString",
                              coordinates: [[55.50458697190465,37.56788356525734],[55.504341092375185,37.56752499370081],[55.49978599813529,37.56724604396331],[55.49943277353092,37.56898411540496],[55.49944495374266,37.57110842494476],[55.51167610446034,37.57476131534523]]
                          },
                          properties: {
                              balloonContent:decodeURIComponent("Первомайская улица, 6"),
                              iconCaption:decodeURIComponent("Первомайская улица, 6"),
                              hintCaption:decodeURIComponent("Первомайская улица, 6"),
                          }
                      }, {
                          fillColor: "#1e98ff",
                          strokeColor: "#ed4543",
                          fillOpacity: 0.35,
                          strokeOpacity: 0.8,
                          strokeWidth: 6,
                      }));
                        map.container.fitToViewport();
                        map.behaviors.disable('scrollZoom');
                        map.behaviors.disable('wheel');
                      return map;
                  }
              </script>
            </div>
          </div>
        </section>
        <section class="coverage s26">
          <div class="container">
            <div class="row">
              <h2 class="coverage__title">
                <span class="coverage__title-inner">
                    <span class="coverage__title-big">Зона покрытия</span>
                    <span class="coverage__title-postfix">
                      сервисной сети
                    </span>
                </span>
              </h2>
            </div>
          </div>
          <div class="coverage__map-container">
            <div style="width: auto;height: 650px" id="coverage__map">
                <script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=LO7nl6GVfdfRmyCFex4YkOJYY5XU7555&amp;width=100%25&amp;height=650&amp;lang=ru_RU&amp;sourceType=constructor&amp;scroll=false"></script>
                <!-- https://yandex.ru/maps/?um=constructor%3ALO7nl6GVfdfRmyCFex4YkOJYY5XU7555&source=constructorLink -->
            </div>

            <!-- <script type="text/javascript">
                ymaps.ready(function () { var myMap = new ymaps.Map('coverage__map', { center: [54.82528769679242, 54.08669048703265], zoom: 9, size: [null, 650], type: "yandex#map", controls: ["zoomControl","typeSelector"], }, { searchControlProvider: 'yandex#search' }); /** * , myPlacemark = new ymaps.Placemark(myMap.getCenter(), { hintContent: 'Собственный значок метки', balloonContent: 'Это красивая метка' }, { // Опции. // Необходимо указать данный тип макета. iconLayout: 'default#image', // Своё изображение иконки метки. iconImageHref: 'img/map-pin.png', // Размеры метки. iconImageSize: [25, 42], // Смещение левого верхнего угла иконки относительно // её "ножки" (точки привязки). iconImageOffset: [-5, -38] }) */ var geoObjects = { "type": "FeatureCollection", "features": [{ "type": "Feature", "properties": { "name": "ООО \"Верхневолжское представительство ОАО \"ЩЛЗ\", г.Ярославль\n150022, пр-т Фрунзе, д.37/18,оф. 214а\nтел. (4852) 59-32-40, 59-32-43\ne-mail: vvpshlz@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [39.909705, 57.583802] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000000 } }, { "type": "Feature", "properties": { "name": "ООО ТД\"ЩЛ-Челябинск\", г. Челябинск\n454048, Омская, д. 61 а\nтел. (351) 778-15-30\ne-mail:rpk-a@yandex.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [61.38483, 55.141197] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000001 } }, { "type": "Feature", "properties": { "name": "ЗАО \"Чувашлифт\", г.Чебоксары\n428024, пр.Мира, д.58\nтел. (8352) 63-85-66\ne-mail: lenalift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [47.268694, 56.114987] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000002 } }, { "type": "Feature", "properties": { "name": "ООО ТД \"ОЛЗ-Уфа\", г.Уфа\n450022, г. Уфа, ул. Бакалинская, д.33, кв.38\nтел. (347) 256-34-37, 292-73-79", "description": "" }, "geometry": { "type": "Point", "coordinates": [55.981293, 54.717891] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000003 } }, { "type": "Feature", "properties": { "name": "ООО \"Щербинские лифты\", г.Тюмень\n625000, ул. Грибоедова, 15, корпус 2/1\nтел. (3452) 45-72-71, 45-60-03\ne-mail: sherblift.tyumen@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [65.534229, 57.147179] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000004 } }, { "type": "Feature", "properties": { "name": "ООО \"Стройлифткомплект\", г.Томск\n634050, ул. Гагарина, д.7, офис 602\nтел. (3822) 51-67-57\ne-mail: slk-tomsk@bk.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [84.951044, 56.483154] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000005 } }, { "type": "Feature", "properties": { "name": "ООО \"ЛифтТехника\", г. Тверь\n170001, 4-й переулок Пески, д.10\nтел. (4822) 42-72-79\ne-mail: lift69@lifteh.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [35.87432, 56.849832] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000006 } }, { "type": "Feature", "properties": { "name": "ООО «Тамбовсоюзлифтмонтаж», г.Тамбов\n392000, ул. Монтажников, д. 9\nтел. (4752) 71-91-64, 71-91-62\ne-mail: lift@tamb.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [41.47183, 52.744247] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000007 } }, { "type": "Feature", "properties": { "name": "ООО \"Санкт-Петербургское представительство ОАО \"ЩЛЗ\", г. Санкт-Петербург\n198013, ул. Введенский канал, д.7\nтел. (812) 326-40-34\ne-mail: 3264034@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [30.32901, 59.917669] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000008 } }, { "type": "Feature", "properties": { "name": "ООО «Приволжское управление ОАО \"ЩЛЗ\", г.Самара\n443035, ул.Ставропольская, д.204, оф.4\nтел. (846) 331-57-47/57\ne-mail: lift@lift-63.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [50.252682, 53.232454] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000009 } }, { "type": "Feature", "properties": { "name": "ООО \"Щербинские лифты\", г.Рязань\n390023, пр. Яблочкова, д. 5,к.1\nтел. (4912) 28-27-58\ne-mail: lift@neiron.ryazan.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [39.762713, 54.61339] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000010 } }, { "type": "Feature", "properties": { "name": "ЗАО «Союзлифтмонтаж-Юг», г.Ростов-на-Дону\n344002, ул. Красноармейская, 166\nтел. (863) 240-42-53, 240-42-68(ф)\ne-mail: info@semug.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [39.712264, 47.227555] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000011 } }, { "type": "Feature", "properties": { "name": "ООО \"Камский лифтостроительный завод\", Республика Татарстан, г.Набережные Челны\n423814, Промкомзона-2, а/я 30\nтел. (8552) 53-75-91, 53-75-94\ne-mail: liftmark@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [52.430854, 55.707887] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000012 } }, { "type": "Feature", "properties": { "name": "ООО ТД «Щербинские лифты-Пермь», г.Пермь\n614068, ул. Кирова, 200\nтел. (342) 236-37-97, 236-03-61\ne-mail: lift@perm.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [56.21613, 58.005749] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000013 } }, { "type": "Feature", "properties": { "name": "ООО \"Запсиблифт\", г.Новокузнецк\n654066, ул. Грдины, 37\nтел. (3843) 35-38-37\ne-mail: zapsiblift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [87.172776, 53.75628] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000014 } }, { "type": "Feature", "properties": { "name": "ООО \"Лифтсервис\", г. Нижний Новгород\n603146, ул. Бекетова, д.63/34, пом. П3\nтел.: (831) 255-95-15, (831) 255-77-16\nЕ-mail: lift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [44.024752, 56.294341] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000015 } }, { "type": "Feature", "properties": { "name": "ООО \"СМУ Лифтстрой\", г.Краснодар\n350065, ул.Снесарева, 2, оф.2\nтел. (861) 263-51-46, 263-51-47\ne-mail: liftstroy@inbox.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [39.079113, 44.999586] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000016 } }, { "type": "Feature", "properties": { "name": "ООО «Лифт групп сервис», г.Казань\n420124, ул. Родины, д.18, оф.203 \nтел. (843) 272-13-89, 204-10-00\ne-mail: kasanlift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [49.197791, 55.768415] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000017 } }, { "type": "Feature", "properties": { "name": "ЗАО \"Удмуртлифт\", г. Ижевск\n426073, ул. Союзная, 121\nтел. (3412) 37-09-44, 37-13-44, 37-07-79 \ne-mail: tradenshlz@udm.net", "description": "" }, "geometry": { "type": "Point", "coordinates": [53.302499, 56.853134] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000018 } }, { "type": "Feature", "properties": { "name": "ООО «Средураллифт», г.Екатеринбург\n620149 ул. Зоологическая, д. 7\nтел. (343) 240-22-22, 240-89-70\ne-mail: sul@ulift.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [60.537224, 56.811502] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000019 } }, { "type": "Feature", "properties": { "name": "ООО \"Рослифт\", г.Владимир\n600001 ул. Студеная гора, 36А, оф.323\nтел. (4922) 32-10-08\ne-mail: vladimirlift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [40.383386, 56.122756] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000020 } }, { "type": "Feature", "properties": { "name": "ООО «Щербинка Лифт ДВ» г. Владивосток\n690068, Приморский кай, г. Владивосток, ул. Кирова, д. 25Д, оф. 47\nПочтовый адрес: 690068, г. Владивосток, ул. Кирова, д. 25Д, оф. 47\nтел.: 8 (423) 230-21-51, 230-21-43\nE-mail: lift@vladivostok.com, lift@shldv.ru\nсайт : www.evrolifts.ru\n\nГенеральный директор Дюндик Алексей Анатольевич", "description": "" }, "geometry": { "type": "Point", "coordinates": [131.908562, 43.176426] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000021 } }, { "type": "Feature", "properties": { "name": "ООО \"Евро-Лифт\", г. Барнаул\n656066, ул. Новгородская, 22 Н 18\nтел. 8 (3852) 53-64-74, 8 (3852) 53-64-72\ne-mail: aslift@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [83.692927, 53.356589] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000022 } }, { "type": "Feature", "properties": { "name": "ООО «Астрахань-Лифт», г.Астрахань\n414024 ул. Боевая 4-й проезд/2-й проезд, 13/4\nтел. (8512) 30-08-90, 30-08-91\ne-mail: olga_zim@mail.ru", "description": "" }, "geometry": { "type": "Point", "coordinates": [48.019839, 46.324474] }, "options": { "preset": "islands#blueIcon", "zIndex": 800000023 } }] }; var  objectManager = new ymaps.ObjectManager({ // Чтобы метки начали кластеризоваться, выставляем опцию. clusterize: true, // ObjectManager принимает те же опции, что и кластеризатор. gridSize: 32 }); // Чтобы задать опции одиночным объектам и кластерам, // обратимся к дочерним коллекциям ObjectManager. objectManager.objects.options.set('preset', 'islands#greenDotIcon'); objectManager.clusters.options.set('preset', 'islands#greenClusterIcons'); myMap.geoObjects.add(objectManager); objectManager.add(geoObjects); myMap.geoObjects.add(objectManager); // var result = ymaps.geoQuery(geoObjects); // myMap.geoObjects.add(result.search('geometry.type == "Point"').clusterize()); // myMap.geoObjects.add(myPlacemark); // myMap.geoObjects.add(geoObjects); });
            </script> -->
          </div>
          <div class="coverage__filials-wrapper">
              <div class="container">
                  <div class="row">
                      <div class="coverage__filials">
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Астрахань-Лифт», г.Астрахань </a>
                              <div class="filial_info"><address>
                    <p>414024 ул. Боевая 4-й проезд/2-й проезд, 13/4<br> <strong>тел.</strong> (8512) 30-08-90, 30-08-91<br> <strong>e-mail</strong>: <a href="mailto:olga_zim@mail.ru">olga_zim@mail.ru </a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Евро-Лифт", г. Барнаул</a>
                              <div class="filial_info">
                                  <p>656066, ул. Новгородская, 22 Н 18<br><strong><span style="color: #000000;">тел.</span></strong> 8 (3852) 53-64-74, 8 (3852) 53-64-72<br><strong>e-mail:</strong><span style="color: #0000ff;"> </span><span style="text-decoration: underline; color: #0000ff;">aslift@mail.ru</span></p>
                              </div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Щербинка Лифт ДВ» г. Владивосток</a>
                              <div class="filial_info"><address>
                    <p>ООО «Щербинка Лифт ДВ»</p>
                    <address>
                    <p>Адрес: 690068, Приморский край, г. Владивосток, ул. Кирова, д. 25Д, оф. 47<br>Почтовый адрес: 690068, г. Владивосток, ул. Кирова, д. 25Д, оф. 47<br><strong>тел.</strong>: 8 (423) 230-21-51, 230-21-43<br><strong>E-mail</strong>: <a href="mailto:lift@vladivostok.com">lift@vladivostok.com, lift@shldv.ru</a><br><strong>сайт</strong> : <a href="http://www.владжилфонд.рф" target="_blank">www.evrolifts.ru</a></p>
                    <p><a href="http://www.владжилфонд.рф" target="_blank"></a>Генеральный директор Дюндик Алексей Анатольевич</p>
                    </address> </address>
                              </div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Рослифт", г.Владимир</a>
                              <div class="filial_info"><address>
                    <p>600001 ул. Студеная гора, 36А, оф.323<br> <strong>тел.</strong> (4922) 32-10-08<br> <strong>e-mail</strong>: <a href="mailto:vladimirlift@mail.ru">vladimirlift@mail.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Средураллифт», г.Екатеринбург</a>
                              <div class="filial_info"><address>
                    <p>620149 ул. Зоологическая, д. 7<br> <strong>тел.</strong> (343) 240-22-22, 240-89-70<br> <strong>e-mail</strong>: <a href="mailto:sul@ulift.ru">sul@ulift.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ЗАО "Удмуртлифт", г. Ижевск</a>
                              <div class="filial_info"><address>
                    <p>426073, ул. Союзная, 121<br> <strong>тел.</strong> (3412) 37-09-44, 37-13-44, 37-07-79  <br> <strong>e-mail</strong>: <a href="mailto:tradenshlz@udm.net">tradenshlz@udm.net</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Лифт групп сервис», г.Казань</a>
                              <div class="filial_info"><address>
                    <p>420124, ул. Родины, д.18, оф.203 <br> <strong>тел.</strong> (843) 272-13-89, 204-10-00<br> <strong>e-mail</strong>: <span style="text-decoration: underline; background-color: #ffffff; color: #000000;">kasanlift@mail.ru</span></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "СМУ Лифтстрой", г.Краснодар</a>
                              <div class="filial_info"><address>
                    <p>350065, ул.Снесарева, 2, оф.2<br> <strong>тел.</strong> (861) 263-51-46, 263-51-47<br> <strong>e-mail</strong>: <a href="mailto:liftstroy@inbox.ru">liftstroy@inbox.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Лифтсервис", г. Нижний Новгород</a>
                              <div class="filial_info">
                                  <p>603146, ул. Бекетова, д.63/34, пом. П3<br>тел.: (831) 255-95-15, (831) 255-77-16<br>Е-mail: lift@mail.ru<br><br></p>
                              </div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Запсиблифт", г.Новокузнецк</a>
                              <div class="filial_info"><address>
                    <p>654066, ул. Грдины, 37<br> <strong>тел.</strong> (3843) 35-38-37<br> <strong>e-mail</strong>: <a href="mailto:zapsiblift@mail.ru">zapsiblift@mail.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО ТД «Щербинские лифты-Пермь», г.Пермь</a>
                              <div class="filial_info"><address>
                    <p>614068, ул. Кирова, 200<br> <strong>тел.</strong> (342) 236-37-97, 236-03-61<br> <strong>e-mail</strong>: <a href="mailto:lift@lift.perm.ru">lift@perm.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Камский лифтостроительный завод", Республика Татарстан, г.Набережные Челны</a>
                              <div class="filial_info"><address>
                    <p>423814, Промкомзона-2, а/я 30<br> <strong>тел.</strong> (8552) 53-75-91, 53-75-94<br> <strong>e-mail</strong>: <a href="mailto:liftmark@mail.ru">liftmark@mail.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ЗАО «Союзлифтмонтаж-Юг», г.Ростов-на-Дону</a>
                              <div class="filial_info"><address>
                    <p>344002, ул. Красноармейская, 166<br> <strong>тел.</strong> (863) 240-42-53, 240-42-68(ф)<br> <strong>e-mail</strong>: <a href="mailto:info@semug.ru">info@semug.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Щербинские лифты", г.Рязань</a>
                              <div class="filial_info"><address>
                    <p>390023, пр. Яблочкова, д. 5,к.1<br> <strong>тел.</strong> (4912) 28-27-58<br> <strong>e-mail</strong>: <a href="mailto:lift@neiron.ryazan.ru">lift@neiron.ryazan.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Приволжское управление ОАО "ЩЛЗ", г.Самара</a>
                              <div class="filial_info"><address>
                    <p>443035, ул.Ставропольская, д.204, оф.4<br> <strong>тел.</strong> (846) 331-57-47/57<br> <strong>e-mail</strong>: <a href="mailto:lift@lift-63.ru">lift@lift-63.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Санкт-Петербургское представительство ОАО "ЩЛЗ", г. Санкт-Петербург</a>
                              <div class="filial_info">
                                  <p>198013, ул. Введенский канал, д.7<br><strong>тел.</strong> (812) 326-40-34<br><strong>e-mail:</strong> <span style="text-decoration: underline; color: #0000ff;">3264034@mail.ru</span></p>
                              </div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО «Тамбовсоюзлифтмонтаж», г.Тамбов</a>
                              <div class="filial_info"><address>
                    <p>392000, ул. Монтажников, д. 9<br> <strong>тел.</strong> (4752) 71-91-64, 71-91-62<br> <strong>e-mail</strong>: <a href="mailto:lift@tamb.ru">lift@tamb.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "ЛифтТехника", г. Тверь</a>
                              <div class="filial_info"><address>
                    <p>170001, 4-й переулок Пески, д.10<br> <strong>тел.</strong> (4822) 42-72-79<br> <strong>e-mail</strong>: <a href="mailto:ltranslift71@mail.ru">lift69@lifteh.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Стройлифткомплект", г.Томск</a>
                              <div class="filial_info"><address>
                    <p>634050, ул. Гагарина, д.7, офис 602<br> <strong>тел.</strong> (3822) 51-67-57<br> <strong>e-mail</strong>: <a href="mailto:shl-s@bk.ru">slk-tomsk@bk.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Щербинские лифты", г.Тюмень</a>
                              <div class="filial_info"><address>
                    <p>625000, ул. Грибоедова, 15, корпус 2/1<br> <strong>тел.</strong> (3452) 45-72-71, 45-60-03<br> <strong>e-mail</strong>: <a href="mailto:sherblift.tyumen@mail.ru">sherblift.tyumen@mail.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО ТД "ОЛЗ-Уфа", г.Уфа</a>
                              <div class="filial_info"><address>
                    <p>450022, г. Уфа, ул. Бакалинская, д.33, кв.38<br> <strong>тел.</strong> (347) 256-34-37, 292-73-79</p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ЗАО "Чувашлифт", г.Чебоксары</a>
                              <div class="filial_info"><address>
                    <p>428024, пр.Мира, д.58<br> <strong>тел.</strong> (8352) 63-85-66<br> <strong>e-mail</strong>: <a href="mailto:lenalift@mail.ru">lenalift@mail.ru</a></p>
                    </address></div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО ТД"ЩЛ-Челябинск", г. Челябинск</a>
                              <div class="filial_info">
                                  <p>454048, Омская, д. 61 а<br>тел. (351) 778-15-30<br>e-mail:<span style="text-decoration: underline; color: #0000ff;">rpk-a@yandex.ru</span></p>
                              </div>
                          </div>
                          <div class="filial">
                              <a href="#" class="filial_h">ООО "Верхневолжское представительство ОАО "ЩЛЗ",  г.Ярославль</a>
                              <div class="filial_info"><address>
                    <p>150022, пр-т Фрунзе, д.37/18,оф. 214а<strong><br>тел.</strong> (4852) 59-32-40, 59-32-43<br> <strong>e-mail</strong>: <span style="text-decoration: underline;">vvpshlz@mail.ru<a href="mailto:Lift.com@list.ru"></a></span></p>
                    </address></div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
        </section>

        <footer class="site-footer">

          <div class="footer__panel">
              <div class="container">
                <div class="row">
                  <!-- footer top items -->
                  <div class="footer__items">
                      <div class="col col--1-of-1 ">
                        <div class="small-logo small-logo--footer">
                          <a href="/" class="small-logo-link footer__link footer__link--logo">
                            <img class="small-logo-img" src="img/mobile_logo.png">
                            <span class="small-logo-title">
                              <span><strong>Центральное управление</strong></span><span style="font-size: 12px;">Щербинского лифтостроительного завода</span>
                            </span>
                          </a>
                        </div>
                        <div class="footer__item">
                            <a href="/" class="footer__link footer__link--logo">
                                <span><strong>Центральное управление Щербинского лифтостроительного завода</strong></span>
                            </a>
                        </div>
                      </div>


                  </div>
                  <!-- /footer items -->
                  <!-- Menu-->
                  <div id="footer-nav">
                        <!-- Menu Items -->
                        <nav id="footer_menu" role="navigation" class="footer-menu">
                    			<ul>
                            <li class="menu__item"><a href="/">Поставка лифтов</a></li>
                    				<li class="menu__item"><a href="servisnoe_obsluzhivanie">Сервисное обслуживание</a></li>
                    				<li class="menu__item"><a href="proektirovanie_liftov_i_shaht">Проектирование лифтов и шахт</a></li>
                    				<li class="menu__item"><a href="montazh_i_zamena_liftov">Монтаж и замена лифтов</a></li>
                    				<li class="menu__item menu__item--last"><a href="kontakty">Контакты</a></li>
                    			</ul>
                    		</nav>
                      <!-- /Menu Items -->
                	</div>
                <!-- /Menu -->
                <!-- Actions -->
                <div class="footer-actions">
                    <a href="tel:74950038741" class="footer_phone">+7 (495) 003-87-41</a>
                    <p class="footer__small-text small-text blue"><a class="blue underline" href="#" data-remodal-target="get_callback">Заказать обратный звонок</a></p>
                </div>
                <!-- /Actions -->
                <!-- Copyright -->
                <div class="footer__copyright">
                  Design by <a class="footer__copyright-link" href="http://seosintez.ru">Seosintez.ru</a>
                </div>
                <!-- Copyright -->
                </div>
              </div>
            </div>

        </footer>


        <div class="remodal-bg">
          <?php require_once("inc/actions-modals.php"); ?>
        </div>
        <!-- this is end of overlay remodal container-->

        <script type="text/javascript">
            var go_animations = false;



            /**
             * ISMOBILE
             */
            ; ! function(a) { var b = /iPhone/i, c = /iPod/i, d = /iPad/i, e = /(?=.*\bAndroid\b)(?=.*\bMobile\b)/i, f = /Android/i, g = /(?=.*\bAndroid\b)(?=.*\bSD4930UR\b)/i, h = /(?=.*\bAndroid\b)(?=.*\b(?:KFOT|KFTT|KFJWI|KFJWA|KFSOWI|KFTHWI|KFTHWA|KFAPWI|KFAPWA|KFARWI|KFASWI|KFSAWI|KFSAWA)\b)/i, i = /Windows Phone/i, j = /(?=.*\bWindows\b)(?=.*\bARM\b)/i, k = /BlackBerry/i, l = /BB10/i, m = /Opera Mini/i, n = /(CriOS|Chrome)(?=.*\bMobile\b)/i, o = /(?=.*\bFirefox\b)(?=.*\bMobile\b)/i, p = new RegExp("(?:Nexus 7|BNTV250|Kindle Fire|Silk|GT-P1000)", "i"), q = function(a, b) { return a.test(b) }, r = function(a) { var r = a || navigator.userAgent, s = r.split("[FBAN"); if ("undefined" != typeof s[1] && (r = s[0]), s = r.split("Twitter"), "undefined" != typeof s[1] && (r = s[0]), this.apple = { phone: q(b, r), ipod: q(c, r), tablet: !q(b, r) && q(d, r), device: q(b, r) || q(c, r) || q(d, r) }, this.amazon = { phone: q(g, r), tablet: !q(g, r) && q(h, r), device: q(g, r) || q(h, r) }, this.android = { phone: q(g, r) || q(e, r), tablet: !q(g, r) && !q(e, r) && (q(h, r) || q(f, r)), device: q(g, r) || q(h, r) || q(e, r) || q(f, r) }, this.windows = { phone: q(i, r), tablet: q(j, r), device: q(i, r) || q(j, r) }, this.other = { blackberry: q(k, r), blackberry10: q(l, r), opera: q(m, r), firefox: q(o, r), chrome: q(n, r), device: q(k, r) || q(l, r) || q(m, r) || q(o, r) || q(n, r) }, this.seven_inch = q(p, r), this.any = this.apple.device || this.android.device || this.windows.device || this.other.device || this.seven_inch, this.phone = this.apple.phone || this.android.phone || this.windows.phone, this.tablet = this.apple.tablet || this.android.tablet || this.windows.tablet, "undefined" == typeof window) return this }, s = function() { var a = new r; return a.Class = r, a }; "undefined" != typeof module && module.exports && "undefined" == typeof window ? module.exports = r : "undefined" != typeof module && module.exports && "undefined" != typeof window ? module.exports = s() : "function" == typeof define && define.amd ? define("isMobile", [], a.isMobile = s()) : a.isMobile = s() }(this);

            function hasClass(elem, className) {
                return new RegExp(' ' + className + ' ').test(' ' + elem.className + ' ');
            }

            function addClass(elem, className) {
                if (!hasClass(elem, className)) {
                    elem.className += ' ' + className;
                }
            }

            function removeClass(elem, className) {
                var newClass = ' ' + elem.className.replace(/[\t\r\n]/g, ' ') + ' ';
                if (hasClass(elem, className)) {
                    while (newClass.indexOf(' ' + className + ' ') >= 0) {
                        newClass = newClass.replace(' ' + className + ' ', ' ');
                    }
                    elem.className = newClass.replace(/^\s+|\s+$/g, '');
                }
            }

            var nua = navigator.userAgent,
                coreElement = (document.querySelector("body") || document.body || document.getElementsByTagName('body')[0] || document.documentElement.outerHTML || document.getElementsByTagName("html")[0]);
            var is_android_default_bro = ((nua.indexOf('Mozilla/5.0') > -1 && nua.indexOf('Android ') > -1 &&
                nua.indexOf('AppleWebKit') > -1) && !(nua.indexOf('Chrome') > -1));

            function switchClassesDependences(){
                  if(is_android_default_bro) {
                    addClass(coreElement, 'is_android_default_bro');

                  } else {
                    removeClass(coreElement, 'is_android_default_bro');
                  }
                  if(isMobile.apple.device) {
                      addClass(coreElement, 'isApple');
                  } else {
                      removeClass(coreElement, 'isApple');
                  }

                  if(!isMobile.any && !is_android_default_bro) {
                      removeClass(coreElement, 'is_any_mobile')
                      addClass(coreElement, 'is_not_any_mobile');
                  }
                  else {
                      addClass(coreElement, 'is_any_mobile')
                      removeClass(coreElement, 'is_not_any_mobile');
                  }


                }

                // call once
                switchClassesDependences();



            /**
             * DEFER IMAGES PRELOAD with data-src
             */
            function importScr(src, callback) {
                var scriptElem = document.createElement('script');
                scriptElem.setAttribute('src', src);
                scriptElem.setAttribute('type', 'text/javascript');
                scriptElem.setAttribute('charset', 'utf-8');
                document.getElementsByTagName('head')[0].appendChild(scriptElem);
                var callback = callback || function() {};
                callback();
            }


            var loaded_scripts = {};
            /** loadScriptWithCallback **/
            function load_script(url, onload, onload_params) {
                if (typeof(loaded_scripts[url]) != 'undefined') return;

                if (typeof(onload_params) == 'undefined') var onload_params = {};
                if (typeof(onload) == 'undefined') var onload = function() {};


                var script = document.createElement("script");
                script.src = url;
                script.type = "text/javascript";

                var triggered = 0;
                script.onreadystatechange = function() {
                    if (!triggered && (this.readyState == 'complete' || this.readyState == 'loaded')) {
                        onload(onload_params);
                        triggered = 1;
                    }
                }
                script.onload = function() {
                    onload(onload_params);
                };

                document.getElementsByTagName("head")[0].appendChild(script);

                loaded_scripts[url] = 1;
            }




            window.onload = function() {

                load_script('js/modernizr.min.js');

                importScr('js/all.package.min.js', function () {
                  // after load document script - will load vk/fb & other need scripts or functions

                });

            }

        </script>



    </div>
    <!-- END OF SITE WRAPPER -->
</body>

</html>
