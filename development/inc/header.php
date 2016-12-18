<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Создание и продвижение сайтов. Реклама сайтов в Яндекс Директ и Google AdWords</title>
    <meta name="keywords" content="создание и продвижение сайтов. реклама сайтов в яндекс директ" />
    <meta name="description" content="Агентство  интернет-маркетинга SEOSINTEZ. Создание сайтов любой тематики и сложности. SEO продвижение сайтов. Настройка и сопровождение рекламных кампаний в Яндекс Директ и Google AdWords" />
    <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="/favicon.ico"> -->
    <style>
    header.site-header { left: 0; top: 0px; position: absolute; z-index: 999; width: 100%; height: 100%; background-color: #141414; } .brown { color: #ac9455; } header.site-header .top-pulled, header.site-header #header-nav, header.site-header .header-parallax-container, header.site-header .top-logo { opacity: 0; }
    </style>
    <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'">
    <noscript><link rel="stylesheet" href="css/main.css" media="all" title="no title" charset="utf-8"></noscript>
       <script>
       /*! loadCSS: load a CSS file asynchronously. [c]2016 @scottjehl, Filament Group, Inc. Licensed MIT */
       (function(w){
         "use strict";
         /* exported loadCSS */
         var loadCSS = function( href, before, media ){
           // Arguments explained:
           // `href` [REQUIRED] is the URL for your CSS file.
           // `before` [OPTIONAL] is the element the script should use as a reference for injecting our stylesheet <link> before
             // By default, loadCSS attempts to inject the link after the last stylesheet or script in the DOM. However, you might desire a more specific location in your document.
           // `media` [OPTIONAL] is the media type or query of the stylesheet. By default it will be 'all'
           var doc = w.document;
           var ss = doc.createElement( "link" );
           var ref;
           if( before ){
             ref = before;
           }
           else {
             var refs = ( doc.body || doc.getElementsByTagName( "head" )[ 0 ] ).childNodes;
             ref = refs[ refs.length - 1];
           }

           var sheets = doc.styleSheets;
           ss.rel = "stylesheet";
           ss.href = href;
           // temporarily set media to something inapplicable to ensure it'll fetch without blocking render
           ss.media = "only x";

           // wait until body is defined before injecting link. This ensures a non-blocking load in IE11.
           function ready( cb ){
             if( doc.body ){
               return cb();
             }
             setTimeout(function(){
               ready( cb );
             });
           }
           // Inject link
             // Note: the ternary preserves the existing behavior of "before" argument, but we could choose to change the argument to "after" in a later release and standardize on ref.nextSibling for all refs
             // Note: `insertBefore` is used instead of `appendChild`, for safety re: http://www.paulirish.com/2011/surefire-dom-element-insertion/
           ready( function(){
             ref.parentNode.insertBefore( ss, ( before ? ref : ref.nextSibling ) );
           });
           // A method (exposed on return object for external use) that mimics onload by polling until document.styleSheets until it includes the new sheet.
           var onloadcssdefined = function( cb ){
             var resolvedHref = ss.href;
             var i = sheets.length;
             while( i-- ){
               if( sheets[ i ].href === resolvedHref ){
                 return cb();
               }
             }
             setTimeout(function() {
               onloadcssdefined( cb );
             });
           };

           function loadCB(){
             if( ss.addEventListener ){
               ss.removeEventListener( "load", loadCB );
             }
             ss.media = media || "all";
           }

           // once loaded, set link's media back to `all` so that the stylesheet applies once it loads
           if( ss.addEventListener ){
             ss.addEventListener( "load", loadCB);
           }
           ss.onloadcssdefined = onloadcssdefined;
           onloadcssdefined( loadCB );
           return ss;
         };
         // commonjs
         if( typeof exports !== "undefined" ){
           exports.loadCSS = loadCSS;
         }
         else {
           w.loadCSS = loadCSS;
         }
       }( typeof global !== "undefined" ? global : this ));




       /* CSS rel=preload polyfill (from src/cssrelpreload.js) */
       /* CSS rel=preload polyfill. Depends on loadCSS function */
       (function( w ){
         // rel=preload support test
         if( !w.loadCSS ){
           return;
         }
         var rp = loadCSS.relpreload = {};
         rp.support = function(){
           try {
             return w.document.createElement("link").relList.supports( "preload" );
           } catch (e) {}
         };

         // loop preload links and fetch using loadCSS
         rp.poly = function(){
           var links = w.document.getElementsByTagName( "link" );
           for( var i = 0; i < links.length; i++ ){
             var link = links[ i ];
             if( link.rel === "preload" && link.getAttribute( "as" ) === "style" ){
               w.loadCSS( link.href, link );
               link.rel = null;
             }
           }
         };

         // if link[rel=preload] is not supported, we must fetch the CSS manually using loadCSS
         if( !rp.support() ){
           rp.poly();
           var run = w.setInterval( rp.poly, 300 );
           if( w.addEventListener ){
             w.addEventListener( "load", function(){
               w.clearInterval( run );
             } )
           }
         }
       }( this ));

       </script>

       <script></script><!-- here to ensure a non-blocking load still occurs in IE and Edge, even if scripts follow loadCSS in head -->


</head>

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
                  				<li class="menu__item"><a href="#projects-cases">Проектирование лифтов и шахт</a></li>
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
