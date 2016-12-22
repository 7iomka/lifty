<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Создание и продвижение сайтов. Реклама сайтов в Яндекс Директ и Google AdWords</title>
    <meta name="keywords" content="Щербинский лифтостроительный завод ЩЛЗ лифты пассажирские лифты грузовые лифты больничные подъемник">
    <meta name="description" content="один из основных производителей лифтового оборудования изготавливает наиболее широкую в России и за ее пределами гамму лифтов и подъемников с электрическим и гидравлическим приводом">
    <!-- <meta name=viewport content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta content="yes" name="apple-mobile-web-app-capable">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent"> -->
    <!-- Favicons -->
    <!-- <link rel="shortcut icon" sizes="16x16 24x24 32x32 48x48 64x64" href="/favicon.ico"> -->
    <style>
    /*header.site-header { left: 0; top: 0px; position: absolute; z-index: 999; width: 100%; height: 100%; background-color: #141414; } .brown { color: #ac9455; } header.site-header .top-pulled, header.site-header #header-nav, header.site-header .header-parallax-container, header.site-header .top-logo { opacity: 0; }*/
    </style>
    <link rel="stylesheet" href="css/main.css" media="all" title="no title" charset="utf-8">
    <!-- <link rel="preload" href="css/main.css" as="style" onload="this.rel='stylesheet'"> -->
    <!-- <noscript><link rel="stylesheet" href="css/main.css" media="all" title="no title" charset="utf-8"></noscript>
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

       <script></script>
 -->

</head>
