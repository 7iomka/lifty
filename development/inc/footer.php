        <footer class="site-footer">
          <div class="footer__map">
            <div class="footer__map-content">
              <div style="width: auto;height: 500px" id="footer__map"></div>
              <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU&onload=loadExcursionMap" type="text/javascript"></script>
              <script>
                  // ------------------------------------------------------------------------
                  // Excursion map callback
                  // ------------------------------------------------------------------------
                  function loadExcursionMap() {
                      var map = new ymaps.Map("footer__map", {
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
          <div class="footer__panel">
              <div class="container">
                <div class="row">
                  <!-- footer top items -->
                  <div class="footer__items">
                      <div class="col col--1-of-1 ">
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
                    				<li class="menu__item"><a href="service.php">Сервисное обслуживание</a></li>
                    				<li class="menu__item"><a href="engineering.php">Проектирование лифтов и шахт</a></li>
                    				<li class="menu__item"><a href="installation-and-replacement.php">Монтаж и замена лифтов</a></li>
                    				<li class="menu__item menu__item--last"><a href="contacts.php">Контакты</a></li>
                    			</ul>
                    		</nav>
                      <!-- /Menu Items -->
                	</div>
                <!-- /Menu -->
                <!-- Copyright -->
                <div class="footer__copyright">
                  Design by <a class="footer__copyright-link" target="_blank" href="http://seosintez.ru">Seosintez.ru</a>
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
