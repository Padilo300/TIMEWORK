<?php 
 function sanitize_output($buffer) {
    $search = array(
        '/\>[^\S ]+/s',     // strip whitespaces after tags, except space
        '/[^\S ]+\</s',     // strip whitespaces before tags, except space
        '/(\s)+/s',         // shorten multiple whitespace sequences
        '/<!--(.|\s)*?-->/' // Remove HTML comments
    );
    $replace = array(
        '>',
        '<',
        '\\1',
        ''
    );
    $buffer = preg_replace($search, $replace, $buffer);
    return $buffer;
}

ob_start("sanitize_output");
   
?>
<!DOCTYPE html>
<html lang="ua">
<head>
	<!-- Facebook Pixel Code -->
    <script>
        !function(f,b,e,v,n,t,s)
        {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
        n.callMethod.apply(n,arguments):n.queue.push(arguments)};
        if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
        n.queue=[];t=b.createElement(e);t.async=!0;
        t.src=v;s=b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t,s)}(window, document,'script',
        'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '311752552987239');
        fbq('track', 'PageView');
      </script>
<!-- End Facebook Pixel Code -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <meta name="theme-color" content="#deb90d">
    <title>Timework - надійна робота за кордоном!</title>
    <script data-skip-moving="true">
        (function(w,d,u){
                var s=d.createElement('script');s.async=1;s.src=u+'?'+(Date.now()/60000|0);
                var h=d.getElementsByTagName('script')[0];h.parentNode.insertBefore(s,h);
        })(window,document,'https://cdn.bitrix24.ua/b8529055/crm/site_button/loader_2_4gx5p7.js');
</script> <!-- BEGIN JIVOSITE CODE {literal} -->
<script type='text/javascript'>
(function(){ var widget_id = '8QeUQd7MSH';var d=document;var w=window;function l(){
var s = document.createElement('script'); s.type = 'text/javascript'; s.async = true; s.src = '//code.jivosite.com/script/widget/'+widget_id; var ss = document.getElementsByTagName('script')[0]; ss.parentNode.insertBefore(s, ss);}if(d.readyState=='complete'){l();}else{if(w.attachEvent){w.attachEvent('onload',l);}else{w.addEventListener('load',l,false);}}})();</script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-126449061-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-126449061-1');
</script>

<!-- {/literal} END JIVOSITE CODE -->
</head>
<style>/*** uncss> filename: build/sprite_ico.css ***/
    .kievstar,.lifecell,.mts,.viber{display:inline-block;background:url('/img/icoSprite.png') no-repeat;overflow:hidden;text-indent:-9999px;text-align:left;position:relative;bottom:-2px}.kievstar{background-position:-28px -166px;width:17px;height:16px}.lifecell{background-position:-27px -185px;width:17px;height:15px}.mts{background-position:-23px -203px;width:17px;height:17px}.viber{background-position:-3px -222px;width:17px;height:17px}.grafic,.molot,.doc,.monof{display:inline-block;background:url('/img/icoSprite2.png') no-repeat;overflow:hidden;text-indent:-9999px;text-align:left}.grafic{background-position:-20px -0px;width:41px;height:40px}.molot{background-position:-20px -60px;width:39px;height:33px}.doc{background-position:-20px -113px;width:34px;height:44px}.monof{background-position:-20px -177px;width:32px;height:32px} 
    /*** uncss> filename: build/animate.css ***/
    @charset "UTF-8";
    
    /*!
     * animate.css -http://daneden.me/animate
     * Version - 3.7.0
     * Licensed under the MIT license - http://opensource.org/licenses/MIT
     *
     * Copyright (c) 2018 Daniel Eden
     */
    
    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
    
    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
    
    @-webkit-keyframes fadeInDown {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    @keyframes fadeInDown {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, -100%, 0);
        transform: translate3d(0, -100%, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    .fadeInDown {
      -webkit-animation-name: fadeInDown;
      animation-name: fadeInDown;
    }
    
    @-webkit-keyframes fadeInUp {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    @keyframes fadeInUp {
      from {
        opacity: 0;
        -webkit-transform: translate3d(0, 100%, 0);
        transform: translate3d(0, 100%, 0);
      }
    
      to {
        opacity: 1;
        -webkit-transform: translate3d(0, 0, 0);
        transform: translate3d(0, 0, 0);
      }
    }
    
    .fadeInUp {
      -webkit-animation-name: fadeInUp;
      animation-name: fadeInUp;
    }
    .contentBottom{
        margin-bottom: 70px;
    }
    
    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */
    
    /* originally authored by Nick Pettit - https://github.com/nickpettit/glide */ 
    /*** uncss> filename: build/NativStyle.css ***/ 
    /*** uncss> filename: build/placeholder.css ***/
    input::-webkit-input-placeholder{text-indent:0;transition:text-indent .6s ease}input::-moz-placeholder{text-indent:0;transition:text-indent .6s ease}input:-moz-placeholder{text-indent:0;transition:text-indent .6s ease}input:-ms-input-placeholder{text-indent:0;transition:text-indent .6s ease}input:focus::-webkit-input-placeholder{text-indent:500px;transition:text-indent .6s ease}input:focus::-moz-placeholder{text-indent:500px;transition:text-indent .6s ease}input:focus:-moz-placeholder{text-indent:500px;transition:text-indent .6s ease}input:focus:-ms-input-placeholder{text-indent:500px;transition:text-indent .6s ease}body::-webkit-scrollbar{width:1em}body::-webkit-scrollbar-track{-webkit-box-shadow:inset 0 0 6px 10px #222b38;background:0;opacity:.7}body::-webkit-scrollbar-thumb{border-radius:5px;background:0;-webkit-box-shadow:inset 0 0 6px 10px #deb90d;cursor:pointer} 
    /*** uncss> filename: build/font-awesome.min.css ***/
    /*!
     *  Font Awesome 4.7.0 by @davegandy - http://fontawesome.io - @fontawesome
     *  License - http://fontawesome.io/license (Font: SIL OFL 1.1, CSS: MIT License)
     */@font-face{font-family:'FontAwesome';data-original:url('../fonts/fontawesome-webfont.eot?v=4.7.0');data-original:url('../fonts/fontawesome-webfont.eot?#iefix&v=4.7.0') format('embedded-opentype'),url('../fonts/fontawesome-webfont.woff2?v=4.7.0') format('woff2'),url('../fonts/fontawesome-webfont.woff?v=4.7.0') format('woff'),url('../fonts/fontawesome-webfont.ttf?v=4.7.0') format('truetype'),url('../fonts/fontawesome-webfont.svg?v=4.7.0#fontawesomeregular') format('svg');font-weight:normal;font-style:normal}.fa{display:inline-block;font:normal normal normal 14px/1 FontAwesome;font-size:inherit;text-rendering:auto;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.fa-facebook-official:before{content:"\f230"}.fa-telegram:before{content:"\f2c6"}
     
    /*** uncss> filename: build/bootstrap.min.css ***/
    /*!
     * Bootstrap v3.3.7 (http://getbootstrap.com)
     * Copyright 2011-2018 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     */
    
    /*!
     * Generated using the Bootstrap Customizer (<none>)
     * Config saved to config.json and <none>
     *//*!
     * Bootstrap v3.3.7 (http://getbootstrap.com)
     * Copyright 2011-2016 Twitter, Inc.
     * Licensed under MIT (https://github.com/twbs/bootstrap/blob/master/LICENSE)
     *//*! normalize.css v3.0.3 | MIT License | github.com/necolas/normalize.css */html{font-family:sans-serif;-ms-text-size-adjust:100%;-webkit-text-size-adjust:100%}body{margin:0}figcaption,figure,header,nav,section{display:block}a{background-color:transparent}a:active,a:hover{outline:0}h1{font-size:2em;margin:0.67em 0}img{border:0}svg:not(:root){overflow:hidden}figure{margin:1em 40px}button,input{color:inherit;font:inherit;margin:0}button{overflow:visible}button{text-transform:none}button{-webkit-appearance:button;cursor:pointer}button::-moz-focus-inner,input::-moz-focus-inner{border:0;padding:0}input{line-height:normal}/*! Source: https://github.com/h5bp/html5-boilerplate/blob/master/data-original/css/main.css */@media print{*,*:before,*:after{background:transparent !important;color:#000 !important;-webkit-box-shadow:none !important;box-shadow:none !important;text-shadow:none !important}a,a:visited{text-decoration:underline}a[href]:after{content:" (" attr(href) ")"}a[href^="#"]:after{content:""}img{page-break-inside:avoid}img{max-width:100% !important}p{orphans:3;widows:3}}@font-face{font-family:'Glyphicons Halflings';data-original:url('../fonts/glyphicons-halflings-regular.eot');data-original:url('../fonts/glyphicons-halflings-regular.eot?#iefix') format('embedded-opentype'),url('../fonts/glyphicons-halflings-regular.woff2') format('woff2'),url('../fonts/glyphicons-halflings-regular.woff') format('woff'),url('../fonts/glyphicons-halflings-regular.ttf') format('truetype'),url('../fonts/glyphicons-halflings-regular.svg#glyphicons_halflingsregular') format('svg')}*{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}*:before,*:after{-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box}html{font-size:10px;-webkit-tap-highlight-color:rgba(0,0,0,0)}body{font-family:"Helvetica Neue",Helvetica,Arial,sans-serif;font-size:14px;line-height:1.42857143;color:#333;background-color:#fff}input,button{font-family:inherit;font-size:inherit;line-height:inherit}a{color:#428bca;text-decoration:none}a:hover,a:focus{color:#2a6496;text-decoration:underline}a:focus{outline:5px auto -webkit-focus-ring-color;outline-offset:-2px}figure{margin:0}img{vertical-align:middle}h1,.h1,.h6{font-family:inherit;font-weight:500;line-height:1.1;color:inherit}h1,.h1{margin-top:20px;margin-bottom:10px}.h6{margin-top:10px;margin-bottom:10px}h1,.h1{font-size:36px}.h6{font-size:12px}p{margin:0 0 10px}.text-center{text-align:center}ul{margin-top:0;margin-bottom:10px}.container{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}@media (min-width:768px){.container{width:750px}}@media (min-width:992px){.container{width:970px}}@media (min-width:1200px){.container{width:1170px}}.container-fluid{margin-right:auto;margin-left:auto;padding-left:15px;padding-right:15px}.row{margin-left:-15px;margin-right:-15px}.col-md-3, .col-lg-4, .col-sm-6, .col-md-6, .col-lg-8, .col-xs-12{position:relative;min-height:1px;padding-left:15px;padding-right:15px}.col-xs-12{float:left}.col-xs-12{width:100%}@media (min-width:768px){.col-sm-6{float:left}.col-sm-6{width:50%}}@media (min-width:992px){.col-md-3, .col-md-6{float:left}.col-md-6{width:50%}.col-md-3{width:25%}}@media (min-width:1200px){.col-lg-4, .col-lg-8{float:left}.col-lg-8{width:66.66666667%}.col-lg-4{width:33.33333333%}}.container:before,.container:after,.container-fluid:before,.container-fluid:after,.row:before,.row:after{content:" ";display:table}.container:after,.container-fluid:after,.row:after{clear:both}@-ms-viewport{width:device-width} 
    /*** uncss> filename: build/main.css ***/
    @charset "UTF-8";
    @import url("https://fonts.googleapis.com/css?family=Roboto+Condensed");
    .mainButton {
      height: 42px;
      -webkit-border-radius: 8px;
              border-radius: 8px;
      background-color: #deb90d;
      border: none;
      font-size: 24px;
      -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      transition: all 0.4s; }
      .mainButton:hover {
        -webkit-box-shadow: 0 0 25px #deb90c;
                box-shadow: 0 0 25px #deb90c;
        color: #fff; }
      .mainButton .mainButton_num {
        -webkit-border-radius: 8px;
                border-radius: 8px;
        background-color: #f24841;
        color: #ffffff;
        font-size: 18px;
        padding: 3px 6px 3px 5px;
        text-align: center; }
    
    .mainButtonXL {
      width: 88%;
      height: 61px; }
      @media screen and (max-width: 767px) {
        .mainButtonXL {
          height: -webkit-max-content;
          height: -moz-max-content;
          height: max-content; } }
    
    .ham {
      cursor: pointer;
      -webkit-tap-highlight-color: transparent;
      -webkit-transition: -webkit-transform 400ms;
      transition: -webkit-transform 400ms;
      -o-transition: transform 400ms;
      transition: transform 400ms;
      transition: transform 400ms, -webkit-transform 400ms;
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
      user-select: none; }
    
    .line {
      fill: none;
      -webkit-transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
      -o-transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
      transition: stroke-dasharray 400ms, stroke-dashoffset 400ms;
      stroke: #deb90d;
      stroke-width: 5.5;
      stroke-linecap: round; }
    
    .ham8 .top {
      stroke-dasharray: 40 160; }
    
    .ham8 .middle {
      stroke-dasharray: 40 142;
      -webkit-transform-origin: 50%;
          -ms-transform-origin: 50%;
              transform-origin: 50%;
      -webkit-transition: -webkit-transform 400ms;
      transition: -webkit-transform 400ms;
      -o-transition: transform 400ms;
      transition: transform 400ms;
      transition: transform 400ms, -webkit-transform 400ms; }
    
    .ham8 .bottom {
      stroke-dasharray: 40 85;
      -webkit-transform-origin: 50%;
          -ms-transform-origin: 50%;
              transform-origin: 50%;
      -webkit-transition: stroke-dashoffset 400ms, -webkit-transform 400ms;
      transition: stroke-dashoffset 400ms, -webkit-transform 400ms;
      -o-transition: transform 400ms, stroke-dashoffset 400ms;
      transition: transform 400ms, stroke-dashoffset 400ms;
      transition: transform 400ms, stroke-dashoffset 400ms, -webkit-transform 400ms; }
    
    section.mainSection {
      height: 100vh;
      min-height: 914px; }
      section.mainSection .mainBG {
        background-image: url("/img/bg_top.webp");
        height: -webkit-calc(100vh - 69px);
        height: calc(100vh - 69px);
        -webkit-background-size: cover;
                background-size: cover;
        background-position: 40%; }
        @media screen and (max-width: 991px) {
          section.mainSection .mainBG {
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content; } }
        section.mainSection .mainBG div.container {
          visibility: hidden; }
      section.mainSection .rowMainSection {
        margin: 136px 0 0  0; }
        @media screen and (max-width: 991px) {
          section.mainSection .rowMainSection {
            margin: 0; } }
      section.mainSection .mainSection_leftSide ul li.h1 {
        font-size: 3em;
        color: #fff;
        font-weight: 600;
        position: relative;
        margin-bottom: 50px; }
        @media screen and (max-width: 991px) {
          section.mainSection .mainSection_leftSide ul li.h1 {
            line-height: 60px;
            text-align: center; } }
        @media screen and (max-width: 400px) {
          section.mainSection .mainSection_leftSide ul li.h1 {
            font-size: 2em; } }
        section.mainSection .mainSection_leftSide ul li.h1:after {
          content: "";
          display: block;
          position: absolute;
          width: 200px;
          height: 6px;
          background-color: #deb90d;
          bottom: -23px; }
          @media screen and (max-width: 991px) {
            section.mainSection .mainSection_leftSide ul li.h1:after {
              width: 100%; } }
      section.mainSection .mainSection_leftSide ul li.h6 {
        color: #ffffff;
        font-size: 18px;
        font-weight: 400;
        max-width: 470px;
        line-height: 22px;
        margin-bottom: 29px; }
        @media screen and (max-width: 991px) {
          section.mainSection .mainSection_leftSide ul li.h6 {
            text-align: center;
            font-size: 1.6em;
            line-height: 31px;
            width: 100%;
            max-width: 100%; } }
        @media screen and (max-width: 400px) {
          section.mainSection .mainSection_leftSide ul li.h6 {
            font-size: 1.3em; } }
      section.mainSection .mainSection_leftSide .mainButtonXL {
        display: block;
        line-height: 61px;
        text-align: center; }
        @media screen and (max-width: 991px) {
          section.mainSection .mainSection_leftSide .mainButtonXL {
            margin: 0 auto;
            display: block; } }
        @media screen and (max-width: 400px) {
          section.mainSection .mainSection_leftSide .mainButtonXL {
            white-space: nowrap;
            min-height: 50px;
            width: 100%;
            font-size: 1.5em; } }
      section.mainSection .mainSection_RigthSide form {
        width: 88%;
        height: 353px;
        -webkit-border-radius: 8px;
                border-radius: 8px;
        background-color: #deb90d;
        padding: 15px;
        float: right; }
        @media screen and (max-width: 991px) {
          section.mainSection .mainSection_RigthSide form {
            float: none;
            width: 100%;
            margin: 50px 0;
            height: -webkit-max-content;
            height: -moz-max-content;
            height: max-content; } }
        section.mainSection .mainSection_RigthSide form input {
          width: 89%;
          height: 47px;
          -webkit-border-radius: 5px;
                  border-radius: 5px;
          border: none;
          text-align: left;
          margin: 0  auto 10px auto;
          display: block;
          font-size: 18px;
          line-height: 47px;
          padding: 0 0 0 17px; }
        section.mainSection .mainSection_RigthSide form h1 {
          color: #ffffff;
          font-size: 24px;
          font-weight: 500;
          margin-bottom: 12px;
          text-align: center; }
        section.mainSection .mainSection_RigthSide form p {
          font-size: 18px; }
        section.mainSection .mainSection_RigthSide form button {
          width: 100%;
          height: 58px;
          background-color: #222b38;
          border: none;
          -webkit-border-radius: 8px;
                  border-radius: 8px;
          color: #fff;
          font-size: 24px;
          -webkit-transition: all 0.4s;
          -o-transition: all 0.4s;
          transition: all 0.4s; }
          section.mainSection .mainSection_RigthSide form button:hover {
            -webkit-box-shadow: 0 0 25px #ffffffc2;
                    box-shadow: 0 0 25px #ffffffc2;
            text-shadow: 0 0 3px #fff; }
    
    #header {
      background: -webkit-gradient(linear, left top, left bottom, color-stop(55%, #222b38), color-stop(45%, #303946));
      background: -webkit-linear-gradient(top, #222b38 55%, #303946 45%);
      background: -o-linear-gradient(top, #222b38 55%, #303946 45%);
      background: linear-gradient(180deg, #222b38 55%, #303946 45%);
      padding-bottom: 5px;
      padding-top: 10px;
      z-index: 10000; }
      @media screen and (max-width: 1200px) {
        #header {
          background: -webkit-gradient(linear, left top, left bottom, color-stop(65%, #222b38), color-stop(45%, #303946));
          background: -webkit-linear-gradient(top, #222b38 65%, #303946 45%);
          background: -o-linear-gradient(top, #222b38 65%, #303946 45%);
          background: linear-gradient(180deg, #222b38 65%, #303946 45%); } }
      @media screen and (max-width: 768px) {
        #header {
          background: none;
          background-color: #222b38; } }
      @media screen and (max-width: 1999px) {
        #header .imgLogo {
          display: block;
          margin-left: 15px; } }
      @media screen and (max-width: 1199px) {
        #header .imgLogo {
          margin: 0 auto; } }
      #header p {
        font-size: 18px;
        color: #FFFFFF;
        text-align: center; }
      #header ul.tel {
        display: -webkit-box;
        display: -webkit-flex;
        display: -ms-flexbox;
        display: flex;
        -webkit-box-pack: end;
        -webkit-justify-content: flex-end;
            -ms-flex-pack: end;
                justify-content: flex-end;
        margin: 10px 0 5px 0; }
        @media screen and (max-width: 1999px) {
          #header ul.tel {
            -webkit-box-pack: justify;
            -webkit-justify-content: space-between;
                -ms-flex-pack: justify;
                    justify-content: space-between; } }
        @media screen and (max-width: 767px) {
          #header ul.tel {
            display: block;
            padding: 0; } }
        #header ul.tel li {
          margin: 5px 5px -5px 0px; }
          #header ul.tel li a {
            font-size: 16px;
            font-weight: 300;
            color: #528ba4;
            -webkit-transition: all 0.4s;
            -o-transition: all 0.4s;
            transition: all 0.4s; }
            @media screen and (max-width: 767px) {
              #header ul.tel li a {
                display: block;
                width: 100%;
                text-align: center; } }
            #header ul.tel li a:focus {
              color: #528ba4; }
            #header ul.tel li a:active {
              color: #528ba4; }
            #header ul.tel li a:link {
              color: #528ba4; }
            #header ul.tel li a:hover {
              color: #fff; }
          #header ul.tel li:last-child {
            margin: 8px 0 2px 40px; }
            @media screen and (max-width: 767px) {
              #header ul.tel li:last-child {
                display: -webkit-box;
                display: -webkit-flex;
                display: -ms-flexbox;
                display: flex;
                -webkit-box-pack: center;
                -webkit-justify-content: center;
                    -ms-flex-pack: center;
                        justify-content: center;
                width: 40%;
                margin: 0 auto; } }
            #header ul.tel li:last-child a {
              margin: 2px 2px; }
              #header ul.tel li:last-child a:last-child {
                margin: 2px 0 0 14px; }
      #header nav {
        position: relative; }
        #header nav .mobilBar {
          display: none;
          cursor: pointer; }
          @media screen and (max-width: 767px) {
            #header nav .mobilBar {
              float: right;
              position: fixed;
              right: -2%;
              top: 8%;
              z-index: 1000;
              display: block; } }
        #header nav ul {
          display: -webkit-box;
          display: -webkit-flex;
          display: -ms-flexbox;
          display: flex;
          -webkit-box-pack: end;
          -webkit-justify-content: flex-end;
              -ms-flex-pack: end;
                  justify-content: flex-end; }
          @media screen and (max-width: 1999px) {
            #header nav ul {
              -webkit-box-pack: center;
              -webkit-justify-content: center;
                  -ms-flex-pack: center;
                      justify-content: center;
              margin: 10px 0; } }
          @media screen and (max-width: 767px) {
            #header nav ul {
              padding: 0;
              position: fixed;
              width: 80%;
              height: 100vh;
              background: #222b38;
              z-index: 100;
              display: -webkit-box;
              display: -webkit-flex;
              display: -ms-flexbox;
              display: flex;
              -webkit-box-orient: vertical;
              -webkit-box-direction: normal;
              -webkit-flex-direction: column;
                  -ms-flex-direction: column;
                      flex-direction: column;
              -webkit-box-pack: space-evenly;
              -webkit-justify-content: space-evenly;
                  -ms-flex-pack: space-evenly;
                      justify-content: space-evenly;
              right: -200%;
              -webkit-transition: all 0.5s;
              -o-transition: all 0.5s;
              transition: all 0.5s;
              -webkit-box-shadow: -20px 0 30px #000000;
                      box-shadow: -20px 0 30px #000000;
              top: -10px; } }
          #header nav ul li {
            margin: 0 0 0 50px; }
            @media screen and (max-width: 767px) {
              #header nav ul li {
                margin: 0; } }
            #header nav ul li a {
              color: #ffffff;
              font-size: 16px;
              font-weight: 300;
              -webkit-transition: all 0.4s;
              -o-transition: all 0.4s;
              transition: all 0.4s; }
              @media screen and (max-width: 767px) {
                #header nav ul li a {
                  width: 100%;
                  text-align: center;
                  display: block;
                  font-size: 2em; } }
              #header nav ul li a:hover {
                color: #deb90d; }
    
    .fa-telegram:before {
      margin-left: -15px;
      content: "\f2c6"; }
    
    section.advantages figure {
      width: 231px;
      height: 284px;
      background-color: #222b38;
      position: absolute;
      top: -207px;
      padding: 34px 20px 10px 20px;
      -webkit-transition: all 0.4s;
      -o-transition: all 0.4s;
      transition: all 0.4s; }
      section.advantages figure:hover {
        -webkit-box-shadow: 0 0 20px #deb90c;
                box-shadow: 0 0 20px #deb90c;
        -webkit-border-radius: 8px;
                border-radius: 8px;
        -webkit-transform: scale(1.1) translate(0, 20px);
            -ms-transform: scale(1.1) translate(0, 20px);
                transform: scale(1.1) translate(0, 20px); }
      @media screen and (max-width: 991px) {
        section.advantages figure {
          position: static;
          margin: 30px auto; } }
      section.advantages figure div {
        width: 84px;
        height: 84px;
        -webkit-border-radius: 100px;
                border-radius: 100px;
        margin: 0 auto;
        border: 3px solid #deb90c;
        position: relative; }
        section.advantages figure div span {
          display: block;
          margin: 0 auto;
          position: relative;
          top: 19px; }
      section.advantages figure figcaption {
        text-align: center;
        font-weight: 500;
        font-size: 1.4em;
        color: #fff;
        margin: 16px 0 35px 0;
        position: relative;
        text-transform: uppercase; }
        section.advantages figure figcaption:after {
          content: "";
          display: block;
          width: 34px;
          height: 4px;
          background: #deb90c;
          position: absolute;
          bottom: -20px;
          left: 41%; }
      section.advantages figure p {
        color: #fff;
        font-size: 1em;
        text-align: center; }
    
    ul {
      margin: 0;
      list-style: none;
      padding: 0; }
    
    img {
      max-width: 100%; }
    
    * {
      font-family: 'Roboto Condensed', sans-serif; }
    
    a {
      color: #fff;
      text-decoration: none; }
      a:focus {
        color: #fff;
        text-decoration: none; }
      a:active {
        color: #fff;
        text-decoration: none; }
      a:link {
        color: #fff;
        text-decoration: none; }
    
    body {
      padding-right: 0px; }
      .text-block{width:250px;margin:50px}#go-top{position:fixed;bottom:1%;right:1%;text-align:center;cursor:pointer;display:none;font-size:2em;width:max-content;height:max-content;padding:5px;background:#deb90c;line-height:30px;border-radius:5px;color:#000;box-shadow:0 0 5px #deb90c}
      #header > div > div.col-xs-12 > ul > li.social_ico > a:nth-child(2) > img {
    width: 21px;
    position: relative;
    top: -2px;
}
#header > div > div.row > div.col-xs-12.col-lg-4 > a.dispNone > img{
    display: none;
}
#header > div > div.col-xs-12 > ul{
    margin: 20px 0 0 0;
}
#header nav ul li a{
    font-weight: 500 !important ;
    font-size: 1.3em !important;
}
#nav > li:nth-child(1){
    margin: 0 !important;
}
#header nav ul li{
    margin: 0 0 0 35px !important;

}
#header>div>div.col-xs-12>ul>li.social_ico{
    top: -10px !important; 
}
section.vacancies .vacancies_cart {
    padding: 0 !important;
    margin-top: 20px !important ;
}

@media screen and (max-width: 767px){
    #nav > li:nth-child(1){
        margin: 0 0 0 35px !important;
    }
}
</style>
<body>
    <section class="mainSection container-fluid">
      <div class="row">
        <header class="col-xs-12" id="header">
            <div class="container" data-transform='container-fluid'>
                <div class="row">
                    <div class="col-xs-12 col-lg-4">
                        
                        <a href="/" class="dispNone">
                            <img data-original="/img/logo_timework.webp" class="imgLogo" alt="logo">
                        </a>
                        <a href="/">
                          <img data-original="/img/logo.webp" class="imgLogo" alt="logo">
                      </a>
                      
                    </div>
                    <div class="col-xs-12 col-lg-8">
                        <div class="row">
                             <nav class="row">
                              <ul id="nav">
                                  <li>
                                     <a href="/">
                                         Головна
                                     </a>
                                 </li>
                                  <li>
                                     <a href="#vacancies" class="scrollto">
                                        Вакансії
                                     </a>
                                 </li>
                                  <li>
                                     <a href="#aboute" class="scrollto">
                                         Послуги
                                     </a>
                                 </li>
                                  <li>
                                     <a href="#revies" class="scrollto">
                                         Вiдгуки
                                     </a>
                                 </li>
                                  <li>
                                     <a href="#aboute" class="scrollto">
                                         Про компанiю
                                     </a>
                                 </li>
                                  <li>
                                     <a href="#contact" class="scrollto">
                                        Контакти
                                     </a>
                                 </li>
                               </ul>
                            </nav>
                            <div class="col-xs-12">
                                <nav>
                                    <svg class="ham hamRotate mobilBar ham8" viewBox="0 0 100 100" width="100" onclick="this.classList.toggle('active')">
                                      <path
                                            class="line top"
                                            d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20" />
                                      <path
                                            class="line middle"
                                            d="m 30,50 h 40" />
                                      <path
                                            class="line bottom"
                                            d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20" />
                                    </svg>
                                    
                                    
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12">
                      <ul class="tel">
                                 <li>
                                  <p>Потрібна допомога?</p>
                              </li>
                          <li>
                              <a href="tel:+380937954805">
                                <span class="lifecell"></span>
                                  +38 093 795 48 05
                              </a>
                          </li>
                          <li>
                              <a href="tel:+380662643454">
                                  <span class="mts"></span>
                                    +38 066 264 34 54
                              </a>
                          </li>
                          <li>
                              <a href="tel:+380982075877">
                                  <span class="kievstar"></span>
                                  +38 098 207 58 77
                              </a>
                              </li>
                          <li>
                              <a href="viber://chat?number=48888814122">
                                   <span class="viber"></span>
                                   +48 888 814 12 22
                               </a>
                          </li>
                          <li class="social_ico">
                            <a href="https://www.facebook.com/timework.in.ua/">
                                <i class="fa fa-facebook-official" aria-hidden="true"></i>
                            </a>
                            <a href="https://www.instagram.com/timework_agencjia_pracy/">
                                <img data-original="img/instagram-logo (1).svg" >
                            </a>
                            <a href="https://t.me/timeworkeu">
                                <i class="fa fa-telegram" aria-hidden="true"></i>
                            </a>
                              
                          </li>
                        </ul>
                 </div>
            </div>
        </header>
      </div>
      <div class="row">
          <div class="col-xs-12 mainBG">
              <div class="container  wow fadeInDown" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s"> 
                    <div class="row rowMainSection" >
                        <div class="col-xs-12 col-md-6 mainSection_leftSide">
                            <ul>
                                <li class="h1">
                                   РОБОТА  ЗА КОРДОНОМ
                                    <br> 
                                   
                                </li>
                                <li class="h6">
                                    Timework SP Z O.O. - це можливість кожному працювати на гідній 
                               
                                    роботі за кордоном, зробити життя успішнішим. <br>  
                                </li>
                                
                                <li>
                                    <a href="#vacancies" class=" scrollto mainButton mainButtonXL">
                                        Дивитись вакансії
                                        <span class="mainButton_num">
                                            146
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-md-6 mainSection_RigthSide">
                            <form  id="bxform" enctype="multipart/form-data" action="/" method="POST" data-id="send_mail_top">
                                <h1>
                                    ЗНАЙДІТЬ РОБОТУ В ПОЛЬЩІ
                                </h1>
                                <p class="text-center">
                                    Просто заповніть форму
                                </p>
                                <input type="text" name="name" autocomplete="given-name" placeholder="Ваше імя*" required>
                                <input type="number" name="phone" id="phone" required autocomplete="tel" placeholder="Номер телефону*" required>
                                <input type="email" name="email" autocomplete="email" placeholder="E-mail" >
                                <button type="submit">
                                    Відправити анкету
                                </button>
                            </form>
                        </div>
                    </div>
              </div>
          </div>
      </div>
    </section>
    <section class="advantages container  ">
        <div class="col-xs-12">
            <div class="row">
                <div class="col-xs-12  col-sm-6 col-md-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="1s">
                    <figure>
                        <div>
                            <span class="monof"></span>
                        </div>
                        <figcaption>
                            ОФІЦІЙНО
                        </figcaption>
                        <p>
                            Офіційне працевлаштування, умова злеценя, умова о праце. Супровід при оформленні документів.
                        </p>
                    </figure>
                </div>

                <div class="col-xs-12 col-sm-6  col-md-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="1s">
                    <figure>
                        <div>
                            <span class="molot"></span>
                        </div>
                        <figcaption>
                            СТРАХУВАННЯ
                        </figcaption>
                        <p>
                            Медичне страхування. Кожному 5 страховка від ГЛОБАЛ ГАРАНТ безкоштовно
                        </p>
                    </figure>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="1s">
                    <figure>
                        <div>
                            <span class="grafic"></span>
                        </div>
                        <figcaption>
                            Перевезення
                        </figcaption>
                        <p>
                            Комфортне перевезення власним автотранспортом до місця роботи
                        </p>
                    </figure>
                </div>


                <div class="col-xs-12 col-sm-6 col-md-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="1s">
                    <figure>
                        <div>
                            <span class="doc"></span>
                        </div>
                        <figcaption>
                            Для студентів
                        </figcaption>
                        <p>
                            Стажування за кордоном відразу після закінчення навчання
                        </p>
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="vacancies container" id="vacancies">
        <div class="row">
            <div class="col-xs-12">
                <p class="h3">
                    <mark>100% працевлаштування</mark> Компанія  TIMEWORK дає можливість кожному працювати 
                    на гідній роботі за кордоном.
                </p>
                <div class="hotTex">
                    <span>
                        ГАРЯЧІ ВАКАНСІЇ
                    </span>
                </div>
            </div>
        </div>
        <div class="row vacancies_cart">
            <div class="vacancies_cart_cart col-xs-12 col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Працівники на склад косметичних товарів SONOKO
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> скануванням, збір замовлень за накладною нового товару, упаковка скоч стрічкою акційного товару (марок Джилет, Росман, Джонсанс)
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            10 zl/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Польща, Гловно</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>2 зміни по 12 годин</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Проживання:100 зл/міс </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
            </div>

            <div class="col-xs-12 vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
     <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Працівники на конвеєр консервного заводу
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            Жінки: упакування продукції, поклейка стікерів, робота на конвеєрній стрічці. Чоловіки: розвантаження, пересування піддонів та коробок
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                           10 zl/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Польща, Квідзин</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>з пн-сб 6.00-18.00</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Проживання: безкоштовно </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
            </div>


            <div class="col-xs-12  vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                       Робочі у логістичний склад FM
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b>  упаковка коробок на піддони, за допомогою навантажувача, розвантаження, вивантаження, комплектація замовлень, упаковка.
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                           11.60 zl/год нетто + премії
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td>Польща, Лодзь</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>2-3 зміни по 10-12 годин</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>безкоштовне, 3 км від роботи </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
            </div>


            <div class="col-xs-12  vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                 
                  <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Робочий на виробничих лініях TPV
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> Робочий на виробничих лініях TPV, робота на виробництві деталей до телевізорів
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            З/П:  10,4 зл/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td>Гожув-Велькопольский</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>по 8-10 годин, 5-6 днів</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Безкоштовно, хороші умови </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
            </div>


            <div class="col-xs-12 vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                   
                    <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Робітник на виробничі лінії, фабрика JABIL.
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> робітник на виробничі лінії, упаковка, сортування, комплектація продукції на стрічці
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            З/П:  10,2 зл/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Місце роботи: Польща, <br>Гловно</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>Графік роботи: 12 годин на день</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Безкоштовно, хороші умови </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
                </div>


                <div class="col-xs-12 vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                    
                         <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Працівники на фабрику по пошиттю ковдр і подушок
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> працівники на фабрику по пошиттю ковдр і подушок Офіційне працевлаштування, умова злеценя
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            З/П:  10 zl/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Місце роботи: Польща, Сважендз</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>Графік роботи: 12 годин 5 днів, в суботу 8 </td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Проживання: 200 зл/міс </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
                    </div>


                    <div class="col-xs-12 vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                              <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                        Покоївки та кухарі в готельно ресторанний комплекс
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> покоївки та кухарі в готельно ресторанний комплекс,  жінки 18-55 років<br>
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            З/П:  10 zl/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Місце роботи: Польща, Сяножеті</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>Графік: 6-7 днів в тиждень 12 год у вихідні по 8 год</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>Проживання: 240 зл/міс </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
                        </div>



                        <div class="col-xs-12 vacancies_cart_cart col-md-6 col-lg-3 wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
                                <section>
                    <div class="img_work">
                       
                    </div>
                    <h3 class="vacanciesName">
                         Працівники на очищення фруктів та овочів, жінки 18-60 років
                    </h3>
                    <ul>
                          <li>
                            <table>
                                <tr>
                                    <td>
                                      
                                            <b>Обов'язки:</b> очищення апельсинів, динь, бананів, грейпфрутів.
                                      
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td>
                                        <span class="dollar"></span>
                                    </td>
                                    <td>
                                        <b class="money">
                                            З/П: 11 зл/год нетто
                                        </b>
                                    </td>
                                </tr>
                            </table>
                      
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td> <span class="marker"></span></td>
                                        <td> Польща, <br>Суха Безкідзка</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                                <table>
                                    <tr>
                                        <td><span class="clock"></span></td>
                                        <td>Графік роботи: 8-14 год./день, 6-7 днів/тижд.</td>
                                    </tr>
                                </table>
                           
                        </li>
                        <li>
                            <table>
                                <tr>
                                    <td><span class="home"></span></td>
                                    <td>300 зл, Хороші умови </td>
                                </tr>
                            </table>
                            
                            <!-- <p>
                                    Проживание: предоставляестся 
                                    за счет работодателя 
                            </p> -->
                           
                        </li>
                    </ul>
                    <button class="mainButton" data-toggle="modal" data-target=".bs-example-modal-lg">
                        <span class="work "></span>
                        ПОДАТИ ЗАЯВКУ
                    </button>
                </section>
                            </div>
            
            <div class="col-xs-12 contentBottom">
                    <p class="h2 text-center textBottom">
                        Не знайшли? Ми допоможемо вам підібрати вакансію
                        саме для вас!
                    </p>
                    <button class="mainButton mainButtonXL" data-toggle="modal" data-target=".bs-example-modal-lg">
                        Підібрати вакансію
                        <span class="mainButton_num">
                            146
                        </span>
                    </button>    
            </div>
            
        </div>
    </section>
    <section class="container-fluid section3" id="aboute">
        <div class="container  wow flipInY" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
            <img data-original="../img/logo_dop.webp" alt="logo" class="logoBottom">
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <table>
                        <tr>
                          <td colspan="3"></td>
                        </tr>
                        <tr>
                        	<style>
                        		a.socsoc:hover {

    -webkit-box-shadow: 0 0 25px #deb90c;
    box-shadow: 0 0 25px #deb90c;
    color: #fff;
                        		}
                        		h2 {
                        			    margin-top: 48px;
    margin-bottom: 58px;
                        		}
                        	</style>
                            <td>
                               
                                
                            </td>
                            <td>
                               
                            </td>
                            <td>
                                
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="col-xs-12 col-md-8 rightSide">
                    <p>
                        TIMEWORK SP Z O.O. Agencja posrednictva pracy <br>   Агенція надає послуги по працевлаштуванню українців за кордоном: 
                    </p>
                    <ul>
                        <li> 
                            <span>
                                 індивідуальний підбір вакансій 
                            </span>
                        </li>
                        <li> 
                            <span>
                                прямі контракти з роботодавцями 
                            </span>
                        </li>
                        <li> 
                            <span>
                                 офіційне працевлаштування
                            </span>
                        </li>
                        <li> 
                            <span>
                                гарантія своєчасної виплати заробітної плати 
                            </span>
                        </li>
                        <li> 
                            <span>
                                 візова підтримка (запрошення, страхування) 
                            </span>
                        </li>
                        <li> 
                            <span>
                                юридичний супровід 
                            </span>
                        </li>
                        <li> 
                            <span>
                                 послуги перекладача 
                            </span>
                        </li>
                    </ul>
                    <button class="mainButton mainButtonXL" data-toggle="modal" data-target=".bs-example-modal-lg">
                            Підібрати вакансію
                        <span class="mainButton_num">
                            146
                        </span>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="section_4 container" id="revies">
        <div class="row">
            <div class="col-xs-12">
                <p class="h2 text-center">
                    <b>
                        Що про нас говорять наші клієнти
                    </b>
                </p>

                <div id="slikGo"> 
                    <figure>
                        <figcaption>
                            Спочатку сумнівався, але поспілкувавшись вирішив ризикнути. Швидко домовились про вакансію, і врешті-решт - планую завтра уже приступити на місці, до роботи (документи я уже мав). Якщо охарактеризувати двома словами - швидко і якісно.
                        </figcaption>
                        <img data-original="/img/o1.webp" alt="Лицо отзыва">
                        <figcaption>
                            Andrey Lipko
                        </figcaption>
                    </figure>

                    <figure>
                            <figcaption>
                               Дякую що допоміг з дуже гарною роботою.Швидко і якісно оформив документи, виручив в складну ситуацію, раджу всім звертатися, ця людина відповідає за кожне слово, коли лишилась в чужій країні без грошей, через іншого посередника - шахрая, не лишив саму, допоміг, незнаю щоб було якби не Роман. Працюю на чудоввй роботі, задоволена дуже. Ще раз щиро дякую, побільше таких людей, то б наші українці не бідували б за кордоном!
                            </figcaption>
                            <img data-original="/img/o2.webp" alt="Лицо отзыва">
                            <figcaption>
                                Таня Літовець
                            </figcaption>
                        </figure>

                        <figure>
                                <figcaption>
                                    Дякую за швидкість та зручність у працевлаштуванні в Польщі, раджу всім!!! Дякую що допоміг з дуже гарною роботою.Швидко і якісно оформив документи, виручив в складну ситуацію, раджу всім звертатися
                                </figcaption>
                                <img data-original="/img/o3.webp" alt="Лицо отзыва">
                                <figcaption>
                                    Оксана Ясиневич
                                </figcaption>
                            </figure>
                                <figure>
                                <figcaption>
                                   Спасибо Роме за помощь,реально выручил,довольно быстро оформил мне приглашение и визу и нашел хорошую работенку,за следующей визой тоже приду к тебе.
                                </figcaption>
                                <img data-original="/img/o4.webp" alt="Лицо отзыва">
                                <figcaption>
                                    Василь
                                </figcaption>
                            </figure>
                                <figure>
                                <figcaption>
                                   Нещодавно приїхав на роботу в Польщу,зараз тут тиждень уже. Умови проживання хороші,робота теж непогана,з документами все відповідально,чітко і без проблем. Направив до вас ще свою сестру.
                                </figcaption>
                                <img data-original="/img/o5.webp" alt="Лицо отзыва">
                                <figcaption>
                                    Андрій
                                </figcaption>
                            </figure>
                            <figure>
                                <figcaption>
                                   Доброго дня,хочу подякувати за вдале працевлаштування. ????????????Так як я вже мав негативний досвід раніше,а саме приїхав на роботу,на якій мене ніхто не чекав. То з Вами у мене ніяких ексцесів не було,знайшли мені роботу швидко,запрошення я вже мав. Дякую,буду звертатись ще
                                </figcaption>
                                <img data-original="/img/o6.webp" alt="Лицо отзыва">
                                <figcaption>
                                   Константин Юшманов
                                </figcaption>
                            </figure>           
                </div>  
            </div>
        </div>
    </section>
    <section class="section_5 container-fluid  wow fadeInUP" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="container">
            <div class="row"> 
                <div class="col-xs-12 col-md-6 col-lg-8 leftSide">
                    <p>
                        ХОЧEТЕ ОТРИМУВАТИ НАЙКРАЩІ ВАКАНСІЇ ПЕРШИМИ?
                    </p>
                </div>
                <div class="col-xs-12 col-md-6 col-lg-4 rightSide">
                    <form action="/" method="POST">
                        <input type="email" autocomplete="email" required placeholder="E-mail" >
                        <button type="submit" class="mainButton mainButtonXL">
                            Відправити
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="section_6 container  wow fadeInUp" data-wow-offset="200" data-wow-delay="0.5s" data-wow-duration="2s">
        <div class="row" style="text-align: center;">
             <p class="h2 text-center">
                    <b>
                        Сертифікати
                    </b>
                </p>
                  <div class="col-md-4 col-sm-6">
                <img data-original="/img/brands/sert1.jpg" >
            </div>
                <div class="col-md-4 col-sm-6">
                <img data-original="/img/brands/sert2.jpg" >
            </div>
                <div class="col-md-4 col-sm-6">
                <img data-original="/img/brands/sert3.jpg" >
            </div>
        </div>
        <div class="row">
            <p class="h2 text-center">
                    <b>
                        Наші партнери
                    </b>
                </p>
            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/1.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/2.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/3.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/4.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/5.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/6.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/7.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/8.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/9.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="../img/brands/10.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/11.webp" alt="партнеры">
            </div>

            <div class="col-xs-12 col-md-4 col-sm-6 col-lg-2">
                <img data-original="/img/brands/12.webp" alt="партнеры">
            </div>


        </div>

    </section>
    <section class="section_6 container-fluid  wow flipInY" id="contact" data-wow-offset="200" data-wow-delay="1.5s" data-wow-duration="2s">
        <div class="row">
            <div class="col-xs-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.463612696247!2d25.31605521574219!3d50.74843667951754!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x472599e836c52753%3A0xb01eddd82c70d890!2z0LLRg9C70LjRhtGPINCo0LXQstGH0LXQvdC60LAsIDIyLCDQm9GD0YbRjNC6LCDQktC-0LvQuNC90YHRjNC60LAg0L7QsdC70LDRgdGC0YwsIDQzMDAw!5e0!3m2!1sru!2sua!4v1542660787800" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            <!-- <iframe data-original="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2524.3663271732353!2d25.312835516036287!3d50.7502407795178!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4725991c06256d7f%3A0xeea454d4f48158c0!2sTIMEWORK+SP.+z+o.o.!5e0!3m2!1suk!2sua!4v1537704021491" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>      -->
            </div>
        </div>
        
    </section>
    <footer class="section_footer container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-5 mail">
                    <a href="/" class="logoFooter">
                        <img data-original="/img/logo.webp" alt="logo" style="width: 85%;">
                    </a>
                </div>
                <div class="col-xs-12 col-md-3 col-lg-3">
                 
                </div>
                <div class="col-xs-12 col-md-4 col-lg-3">
                <ul class="tel" >
                     <li style="color:#fff"><span><i class="fa fa-map-marker" aria-hidden="true" style="    color: #deb90c;"></i></span>
                                м.Луцьк, вул. Шевченка 22
                              
                </li>
                      
                         
                          <li>
                              <a href="tel:+380937954805">
                                <span class="lifecell"></span>
                                  +38 093 795 48 05
                              </a>
                          </li>
                          <li>
                              <a href="tel:+380662643454">
                                  <span class="mts"></span>
                                    +38 066 264 34 54
                              </a>
                          </li>
                          <li>
                              <a href="tel:+380982075877">
                                  <span class="kievstar"></span>
                                  +38 098 207 58 77
                              </a>
                              </li>
                          
                     
                </ul>
                </div>
            </div>
          <div class="row">
            <div class="col-md-12">
               <p style="color: #fff;font-size:15px;">Працюючи разом з нами ви отримаєте кваліфікований супровід від початку оформлення документів для отримання візи, трансферу до місця роботи, поселення, до  влаштування на роботу та отримання заробітної плати!</p>
            </div>
            <div class="col-md-12">
               <p style="color: #fff;font-size:15px;">Бережіть свій час і нерви, і заробляйте більше разом з нами!</p>
            </div>
          </div>
        </div>
    </footer>

    <!-- тут модальное окно для "подать заявку" -->
    <div class="modal fade bs-example-modal-lg" tabindex="-1" id="modalForm"  role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content modal_form">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <form action="/" method="POST" id="ModalSendMail" onsubmit="send_mail();">
                    <h1>
                        ЗНАЙДІТЬ РОБОТУ В ПОЛЬЩІ
                    </h1>
                    <p class="text-center">
                        Просто заповніть форму
                    </p>
                    <input type="text"  name="name" required autocomplete="given-name" placeholder="Ваше імя*">
                    <input type="text" name="phone" id="phone2" required autocomplete="tel" placeholder="Номер телефону*">
                    <input type="email" name="email" autocomplete="email" placeholder="E-mail" >
                    <input type="hidden" name="postiton" value="Вакансия не выбранна" id="hideenValuer" >
                    <button type="submit">
                        Відправити анкету
                    </button>
                </form>
            </div>
        </div>
    </div>

  <div class="modal fade bs-example-modal-sm" id="modalFuncYou" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p class="h2">Дякую!
            <br>
          Ми скоро зв'яжемося з вами</p>
        </div>
      </div>
    </div>
  </div>
  <!-- <link rel="stylesheet" href="/css/bootstrap.min.css">
  <link rel="stylesheet" href="/css/sprite_ico.css">
  <link rel="stylesheet" href="/css/animate.css">
  <link rel="stylesheet" href="/css/NativStyle.css">
  <link rel="stylesheet" href="/css/main.css">
  <link rel="stylesheet" href="/css/placeholder.css">
  <link rel="stylesheet" href="/css/slick.css"> -->
  <link rel="stylesheet" href="/css/all_Libs.css?ver=2">
  <link rel="stylesheet" href="/css/fix.css?ver=3">

    <!-- <script data-original="/js/jquery-3.3.1.min.js"></script>
    <script data-original="/js/bootstrap.min.js"></script>
    <script data-original="/js/main.js"></script>
    <script data-original="/js/wow.js"></script>
    <script data-original="/js/slick.min.js"></script> -->
    <script src="/js/all.min.js"></script>
    <script >
            $(document).ready(function(){
                new WOW().init();

                $(function() {
                    $("img[data-original]").lazyload();
                });
            
            $("#bxform").submit(function(e) {
                e.preventDefault();
                var form_data = $(this).serialize();
                $.ajax({
                    type: "POST",
                    url: "/php/sendMail.php",
                    data: form_data,
                    success: function () {
                        
                        $('#modalForm').modal('hide');
                        $('#modalFuncYou').modal('show');
                        $('#bxform').trigger('reset');
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
                return false;
            
            });
            })

        </script>
    <script>
        $(document).ready(function(){

           

            $('#slikGo').slick({
                infinite: true,
                speed: 500,
                fade: true,
                cssEase: 'linear',
                prevArrow: '<div class="prev"><</div>',
                nextArrow: '<div class="next">></div>',
                });
                
                var mql = window.matchMedia('all and (max-width: 991px)');
                if (mql.matches) {
                    $("[data-transform='container-fluid']").removeClass('container').addClass('container-fluid');
                }
          

        })
    </script>
    
</body>
</html>