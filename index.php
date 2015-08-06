
<!DOCTYPE html>
<!-- saved from url=(0070)https://slides.com/gsklee/angularjs-a-brief-introduction/fullscreen#/22 -->
<html class="sl-root decks fullscreen mz-applicationcache mz-history mz-localstorage mz-svg mz-opacity mz-rgba mz-backgroundsize mz-cssanimations mz-csstransforms mz-csstransforms3d mz-csstransitions mz-flexbox mz-flexboxlegacy mz-fullscreen loaded ua-mac ua-chrome has-visible-scrollbars reveal-is-ready wf-oxygen-n4-active wf-merriweathersans-n4-active wf-active fonts-are-ready"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, minimal-ui">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <script type="text/javascript" src="./AngularJS_ A Brief Introduction_ Slides_files/4fd2e9786b"></script><script src="./AngularJS_ A Brief Introduction_ Slides_files/nr-686.min.js"></script><script async="" src="./AngularJS_ A Brief Introduction_ Slides_files/analytics.js"></script><script type="text/javascript">window.NREUM||(NREUM={});NREUM.info={"beacon":"bam.nr-data.net","errorBeacon":"bam.nr-data.net","licenseKey":"4fd2e9786b","applicationID":"1563900","transactionName":"cApZREQKWl9XFxZQVlAORB9QEFpfQQZLUVZd","queueTime":0,"applicationTime":51,"agent":"js-agent.newrelic.com/nr-686.min.js"}</script>
        <script type="text/javascript">window.NREUM||(NREUM={}),__nr_require=function(e,n,t){function r(t){if(!n[t]){var o=n[t]={exports:{}};e[t][0].call(o.exports,function(n){var o=e[t][1][n];return r(o?o:n)},o,o.exports)}return n[t].exports}if("function"==typeof __nr_require)return __nr_require;for(var o=0;o<t.length;o++)r(t[o]);return r}({QJf3ax:[function(e,n){function t(e){function n(n,t,a){e&&e(n,t,a),a||(a={});for(var u=c(n),f=u.length,s=i(a,o,r),p=0;f>p;p++)u[p].apply(s,t);return s}function a(e,n){f[e]=c(e).concat(n)}function c(e){return f[e]||[]}function u(){return t(n)}var f={};return{on:a,emit:n,create:u,listeners:c,_events:f}}function r(){return{}}var o="nr@context",i=e("gos");n.exports=t()},{gos:"7eSDFh"}],ee:[function(e,n){n.exports=e("QJf3ax")},{}],3:[function(e,n){function t(e){return function(){r(e,[(new Date).getTime()].concat(i(arguments)))}}var r=e("handle"),o=e(1),i=e(2);"undefined"==typeof window.newrelic&&(newrelic=window.NREUM);var a=["setPageViewName","addPageAction","setCustomAttribute","finished","addToTrace","inlineHit","noticeError"];o(a,function(e,n){window.NREUM[n]=t("api-"+n)}),n.exports=window.NREUM},{1:12,2:13,handle:"D5DuLP"}],gos:[function(e,n){n.exports=e("7eSDFh")},{}],"7eSDFh":[function(e,n){function t(e,n,t){if(r.call(e,n))return e[n];var o=t();if(Object.defineProperty&&Object.keys)try{return Object.defineProperty(e,n,{value:o,writable:!0,enumerable:!1}),o}catch(i){}return e[n]=o,o}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],D5DuLP:[function(e,n){function t(e,n,t){return r.listeners(e).length?r.emit(e,n,t):void(r.q&&(r.q[e]||(r.q[e]=[]),r.q[e].push(n)))}var r=e("ee").create();n.exports=t,t.ee=r,r.q={}},{ee:"QJf3ax"}],handle:[function(e,n){n.exports=e("D5DuLP")},{}],XL7HBI:[function(e,n){function t(e){var n=typeof e;return!e||"object"!==n&&"function"!==n?-1:e===window?0:i(e,o,function(){return r++})}var r=1,o="nr@id",i=e("gos");n.exports=t},{gos:"7eSDFh"}],id:[function(e,n){n.exports=e("XL7HBI")},{}],G9z0Bl:[function(e,n){function t(){var e=d.info=NREUM.info,n=f.getElementsByTagName("script")[0];if(e&&e.licenseKey&&e.applicationID&&n){c(p,function(n,t){n in e||(e[n]=t)});var t="https"===s.split(":")[0]||e.sslForHttp;d.proto=t?"https://":"http://",a("mark",["onload",i()]);var r=f.createElement("script");r.src=d.proto+e.agent,n.parentNode.insertBefore(r,n)}}function r(){"complete"===f.readyState&&o()}function o(){a("mark",["domContent",i()])}function i(){return(new Date).getTime()}var a=e("handle"),c=e(1),u=window,f=u.document;e(2);var s=(""+location).split("?")[0],p={beacon:"bam.nr-data.net",errorBeacon:"bam.nr-data.net",agent:"js-agent.newrelic.com/nr-686.min.js"},d=n.exports={offset:i(),origin:s,features:{}};f.addEventListener?(f.addEventListener("DOMContentLoaded",o,!1),u.addEventListener("load",t,!1)):(f.attachEvent("onreadystatechange",r),u.attachEvent("onload",t)),a("mark",["firstbyte",i()])},{1:12,2:3,handle:"D5DuLP"}],loader:[function(e,n){n.exports=e("G9z0Bl")},{}],12:[function(e,n){function t(e,n){var t=[],o="",i=0;for(o in e)r.call(e,o)&&(t[i]=n(o,e[o]),i+=1);return t}var r=Object.prototype.hasOwnProperty;n.exports=t},{}],13:[function(e,n){function t(e,n,t){n||(n=0),"undefined"==typeof t&&(t=e?e.length:0);for(var r=-1,o=t-n||0,i=Array(0>o?0:o);++r<o;)i[r]=e[n+r];return i}n.exports=t},{}]},{},["G9z0Bl"]);</script>
		<title>AngularJS: A Brief Introduction: Slides</title>
		<meta name="description" content="Slides">
		<meta name="apple-mobile-web-app-capable" content="yes">
		<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
		<link href="https://assets.slid.es/assets/slides/slides-3cad3fcc3b17d21d10abdb14272418e0.css" media="all" rel="stylesheet">
		<link href="https://assets.slid.es/assets/application-d871bef2607ef9ddce7849f396e9d41e.css" media="all" rel="stylesheet">
		<link href="https://assets.slid.es/assets/deck-v1-56acf8e0f796f1d102e33b94e30c3784.css" media="all" rel="stylesheet">


<style id="user-css-output" type="text/css">
.reveal * {
  font-weight: bold !important;
}
.reveal .roll > span {
  display: inline-block;
}
.reveal .standard-avatar {
  position: absolute;
  top: -580px;
  left: -330px;
  max-width: none;
  max-height: none;
}
.reveal .standard-position-absolute {
  position: absolute;
  width: 100%;
}
.reveal .standard-mask {
  position: absolute;
  top: -900px;
  left: -50%;
  width: 200%;
  height: 2000px;
}
.reveal .standard-image-source {
  position: absolute;
  top: 450px;
  right: 0;
  color: #000;
  font-size: 9px;
}
.reveal .standard-code {
  display: inline-block;
  text-align: left;
}
.reveal .visual-diagram {
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}
</style>
<meta content="authenticity_token" name="csrf-param">
<meta content="aSfonlGCcVEM1yIivixq4VfI4tLV3ECovFqA0Ssba3g=" name="csrf-token">
<script type="text/javascript">
  if( !/dnt=1/.test( window.location.search ) ) {
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-39670045-1', 'auto');
    ga('send', 'pageview');

  }
</script>
<!--[if lt IE 9]>
<script src="//assets.slid.es/assets/html5shiv-b51d49ab0e89834a02ffce4a59905afb.js"></script>
<![endif]-->
<link rel="stylesheet" href="https://s3.amazonaws.com/static.slid.es/fonts/merriweathersans/merriweathersans.css"><link rel="stylesheet" href="https://s3.amazonaws.com/static.slid.es/fonts/oxygen/oxygen.css"><style type="text/css"></style><style></style></head>
<body class="reveal-viewport theme-font-merriweather theme-color-black-mint">
  <div class="reveal linear center" role="application" data-transition-speed="default" data-background-transition="slide">
	 <div class="slides" style="width: 960px; height: 700px; zoom: 1.18207142857143;">
		<section class="past" style="top: 172px; display: none;" hidden="" aria-hidden="true">
          <h2 style="text-align: center;"><span style="color: #f08">Aequor Information Technology Training Session</span></h2>
          <p><br></p>
          <h1 style="text-align: center;">Angular<span style="color: #f08">JS</span></h1>
          <p><br></p>
          <h2>A Brief Introduction</h2>
        </section>

        <section class="past" style="top: 132.5px; display: none;" hidden="" aria-hidden="true">
          <h2>jQuery + Webapp = <span style="color: #f08">Headaches</span></h2>
          <p><br></p>
          <ul>
            <li><span style="text-align: center;">JQuery is a library used for DOM Manipulations and nothing to do with models</span></li><br>
            <li><span style="text-align: center;">Selectors creating tight coupling</span></li><br>
            <li><span style="text-align: center;">Not enough high level abstractions</span></li>
          </ul>
        </section>

        <section class="past" style="top: 186px; display: none;" hidden="" aria-hidden="true">
          <h1 style="text-align: center;">Angular<span style="color: #f08">JS</span></h1>
          <p>SPA (Single Page Applications)</p>
          <p>Here to save your day</p>
          <p><br></p>
          <h6 style="font-size: 20px;line-height: 1;">AngularJS version 1.0 was released in 2012. Idea was started in 2009 by Misko Hevery (a Google employee).
              The idea turned out very well, and the project is now officially supported by Google.
          </h6>
          <!--<p class="fragment visible" data-fragment-index="0">Here to save your day</p>-->
        </section>

        <section class="past" style="top: 211px; display: none;" hidden="" aria-hidden="true">
          <p style="text-align: center;">What the * is</p>
          <h2>Angular<span style="color: #f08">JS</span></h2>
          <p>and why should I use it, exactly?</p>
        </section>

        <section data-background-color="rgba( 180, 50, 140, 0.6 )" class="has-dark-background past" style="top: 172px; display: none;" hidden="" aria-hidden="true">
          <h2>It's</h2>
          <h1 style="color: rgb(255, 170, 0);">FAST</h1>
        </section>

        <section data-background-color="rgba( 255, 122, 0, 0.6 )" class="has-light-background past" style="top: 172px; display: none;" hidden="" aria-hidden="true">
          <h2>It brings</h2>
          <h1 style="color: rgb(255, 234, 64);">QUALITY</h1>
          <!--<p class="fragment visible" data-fragment-index="0">(Both in terms of code structure and robustness)</p>-->
        </section>

        <section data-background-color="rgba( 50, 200, 90, 0.4 )" class="has-light-background past" style="top: 172px; display: none;" hidden="" aria-hidden="true">
          <h2>It's</h2>
          <h1 style="color: rgb(152, 242, 61);">FREE</h1>
          <!--<p class="fragment visible" data-fragment-index="0">(w00t!)</p>-->
        </section>

        <section class="past" style="top: 115.5px; display: none;" hidden="" aria-hidden="true">
          <h1 style="text-align: center; font-weight: bold;">Angular<span style="color: rgb(255, 0, 136);">JS</span></h1>
          <p><br></p>
          <p><br></p>
          <p style="font-weight: bold;">puts a heavy emphasis on</p>
          <h2 style="font-weight: bold; color: rgb(255, 170, 0);">Separation of Concerns</h2>
        </section>

        <section class="past" style="top: 0px; display: none;" hidden="" aria-hidden="true">
          <div style="background-color: rgb(194, 51, 101); width: 200%; height: 1500px; position: absolute; top: -100%; left: -50%; z-index: -3;"></div>
          <div style="background-color: rgb(88, 130, 186); width: 200%; height: 500%; position: absolute; top: 1050%; left: 70%; z-index: -2;"></div>
          <div style="background-color: rgb(124, 196, 51); width: 100%; height: 500%; position: absolute; top: 650%; left: -64%; z-index: -1;"></div>
          <div>
            <h1 style="font-weight: bold; position: absolute; left: 0px; top: 700%;">HTML</h1>
            <p style="font-weight: bold; position: absolute; left: 0.5%; top: 1000%; color: rgb(17, 17, 17);">STRUCTURE</p>
            <h1 style="font-weight: bold; position: absolute; right: 0px; top: 300%;">JS</h1>
            <p style="font-weight: bold; position: absolute; right: 0px; top: 150%; color: rgb(17, 17, 17);">BEHAVIOR</p>
            <h1 style="font-weight: bold; position: absolute; right: 0px; top: 1100%;">CSS</h1>
            <p style="font-weight: bold; position: absolute; right: 0px; top: 1400%; color: rgb(17, 17, 17);">PRESENTATION</p>
            <p style="font-weight: bold; position: absolute; left: 0px; top: 1600%; color: rgb(255, 239, 112);">The Eval JavaScript Empire</p>
          </div>
          <div class="fragment visible" data-fragment-index="0">
            <div style="background-color: rgb(194, 51, 101); width: 200%; height: 1500px; position: absolute; top: -100%; left: 0%; z-index: 1;"></div>
            <div style="background-color: rgb(88, 130, 186); width: 200%; height: 1500px; position: absolute; top: 875%; left: 0%; z-index: 2;"></div>
            <div class="visual-diagram" style="background-color: rgb(124, 196, 51); width: 100%; height: 1500px; position: absolute; top: -525%; left: -75%; z-index: 3;"></div>
            <h1 style="z-index: 4; font-weight: bold; position: absolute; left: 0px; top: 700%;">HTML</h1>
            <p style="z-index: 4; font-weight: bold; position: absolute; left: 0.5%; top: 1000%; color: rgb(17, 17, 17);">INTERFACE</p>
            <h1 style="z-index: 4; font-weight: bold; position: absolute; right: 0px; top: 300%;">JS</h1>
            <p style="z-index: 4; font-weight: bold; position: absolute; right: 0px; top: 150%; color: rgb(17, 17, 17);">LOGIC</p>
            <h1 style="z-index: 4; font-weight: bold; position: absolute; right: 0px; top: 1100%;">CSS</h1>
            <p style="z-index: 4; font-weight: bold; position: absolute; right: 0px; top: 1400%; color: rgb(17, 17, 17);">PRESENTATION</p>
            <p style="z-index: 4; font-weight: bold; position: absolute; left: 0px; top: 1600%; color: rgb(255, 239, 112);">The New Angular Republic</p>
          </div>
        </section>

        <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
          <div style="display: inline-block;">
            <h2 style="text-align: left; ">Angular<span style="color: #f08">JS</span></h2>
            <p>returns things to where they belong</p>
            <p style="text-align: right; ">in their natural forms</p>
          </div>
          <p><br></p>
          <ul>
            <li><span style="text-align: center;">Its a MVVM Framework, Used for creating SPA (<span style="color: #f08">Single Page Applications</span>)</span></li><br>
            <li><span style="text-align: center;">Has key features like routing, directives, two way data binding, models, dependency injection, unit tests etc</span></li><br>
            <li><span style="text-align: center;">Maintainable, when project size increases</span></li>
          </ul>
        </section>
        <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
           <div style="display: inline-block;">
               <h2 style="text-align: left; ">Angular<span style="color: #f08">JS - Directives</span></h2>
               <p>AngularJS directives are extended HTML attributes with the prefix <span style="color: #f08">ng-</span></p>
           </div>
           <p><br></p>
           <ul>
              <li><span style="text-align: center;">The <span style="color: #f08">ng-app</span> directive defines an AngularJS application.</span></li><br>
              <li><span style="text-align: center;">The <span style="color: #f08">ng-init</span> directive initializes application data.</span></li><br>
              <li><span style="text-align: center;">The <span style="color: #f08">ng-model</span> directive binds the value of HTML controls (input, select, textarea) to application data.</span></li><br>
              <li><span style="text-align: center;">The <span style="color: #f08">ng-bind</span> directive binds application data to the HTML view.</span></li>
           </ul>
        </section>

        <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
           <div style="display: inline-block;">
             <h2 style="text-align: left; ">Angular<span style="color: #f08">JS- Expressions</span></h2>
             <p>Let's play with <span style="color: #f08">AngularJs</span></p>
          </div>
          <p><br></p>
          <ul>
            <li><span style="text-align: center;">Are written inside double braces: <span style="color: #f08">{{ expression }}</span>.</span></li><br>
            <li><span style="text-align: center;">Will "output" data exactly where the expression is written.</span></li><br>
            <li><span style="text-align: center;">They can contain literals, operators, and variables. Example <span style="color: #f08">{{ 5 + 5 }} or {{ firstName + " " + lastName }}</span>.</span></li><br>
            <li><a href="http://www.w3schools.com/angular/tryit.asp?filename=try_ng_expression" target="_blank"><span style="color: #f08">Example</span></a></li>
          </ul>
        </section>

        <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
           <div style="display: inline-block;">
             <h2 style="text-align: left; ">Angular<span style="color: #f08">JS- Data Binding and Repeating</span></h2>
           </div>
           <p><br></p>
           <ul>
             <li><span style="text-align: center;">Data binding in AngularJS, synchronizes AngularJS expressions with AngularJS data.</span></li><br>
             <li><span style="text-align: center;">The <span style="color: #f08">ng-repeat</span> directive repeats an HTML element</span></li><br>
             <li><a href="http://www.w3schools.com/angular/tryit.asp?filename=try_ng_binding" target="_blank"><span style="color: #f08">Example - Data Binding</span></a></li><br>
             <li><a href="http://www.w3schools.com/angular/tryit.asp?filename=try_ng_repeat_array" target="_blank"><span style="color: #f08">Example - Repeating HTML Elements</span></a></li><br>
             <li><span style="text-align: center;">Using <span style="color: #f08">ng-init</span> is not very common. You will learn how to initialize data in the chapter about controllers.</span></li>
           </ul>
        </section>

         <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
             <div style="display: inline-block;">
               <h2 style="text-align: left; ">Angular<span style="color: #f08">JS- Controllers</span></h2>
             </div>
             <p><br></p>
             <ul>
                 <li><span style="text-align: center;">It <span style="color: #f08">control the data</span> of AngularJS applications.</span></li><br>
                 <li><span style="text-align: center;">The <span style="color: #f08">ng-controller</span> directive defines the application controller</span></li>
                 <li style="list-style: none;"><img src="Angular_Controllers.png" alt="Angular Controller"></li>
                 <li><a href="http://www.w3schools.com/angular/tryit.asp?filename=try_ng_controller_property" target="_blank"><span style="color: #f08">Example - Controller</span></a></li>
             </ul>
         </section>

         <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
             <div style="display: inline-block;">
                 <h2 style="text-align: left; ">Angular<span style="color: #f08">JS- Controllers Contd..</span></h2>
             </div>
             <p><br></p>
             <ul>
                 <li><span style="text-align: center;">In larger applications, it is common to store controllers in external files.</span></li><br>
                 <li><span style="text-align: center;">We just need to pass external file inside script like: <span style="color: #f08">src="YourController.js"</span></span></li><br>
                 <li><a href="http://www.w3schools.com/angular/tryit.asp?filename=try_ng_controller_names" target="_blank"><span style="color: #f08">Example - External Files</span></a></li>
             </ul>
         </section>

         <section class="past" style="top: 76.5px; display: none;" hidden="" aria-hidden="true">
             <div style="display: inline-block;">
                 <h2 style="text-align: left; ">Angular<span style="color: #f08">JS- To be continued..</span></h2>
             </div>
             <p><br></p>
             <ul>
                 <li><span style="text-align: center;">Filters</span></li>
                 <li><span style="text-align: center;">AJAX - $http</span></li>
                 <li><span style="text-align: center;">Database Connection</span></li>
                 <li><span style="text-align: center;">HTML DOM</span></li>
                 <li><span style="text-align: center;">Events and Modules</span></li>
                 <li><span style="text-align: center;">Forms and Input Validation</span></li>
                 <li><span style="text-align: center;">API and Twitter Bootstrap</span></li>
             </ul>
         </section>


       <section class="past" style="top: 0px; display: block;" hidden="" aria-hidden="true">
         <p>It's believed that,</p>
         <img src="./AngularJS_ A Brief Introduction_ Slides_files/chrome.png">
         <p>this company is responsible for everything</p>
       </section>

       <section class="present" style="top: 242.5px; display: block;"><h1>Questions?</h1></section>
  </div>
  <div class="backgrounds">
     <div class="slide-background past" data-loaded="true" style="display: none;"></div>
     <div class="slide-background past" data-loaded="true" style="display: none;"></div>
     <div class="slide-background past" data-loaded="true" style="display: none;"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" data-background-hash="0rgba( 180, 50, 140, 0.6 )nullnullnull" style="display: none; background-color: rgba(180, 50, 140, 0.6);" data-loaded="true"></div>
     <div class="slide-background past" data-background-hash="0rgba( 255, 122, 0, 0.6 )nullnullnull" style="display: none; background-color: rgba(255, 122, 0, 0.6);" data-loaded="true"></div>
     <div class="slide-background past" data-background-hash="0rgba( 50, 200, 90, 0.4 )nullnullnull" style="display: none; background-color: rgba(50, 200, 90, 0.4);" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div><div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: none;" data-loaded="true"></div>
     <div class="slide-background past" style="display: block;" data-loaded="true"></div>
     <div class="slide-background past" style="display: block;" data-loaded="true"></div>
     <div class="slide-background present" style="display: block;" data-loaded="true"></div>
  </div>
  <div class="progress" style="display: block;"><span style="width: 1909px;"></span></div>
  <aside class="controls" style="display: block;">
    <div class="navigate-left enabled"></div>
    <div class="navigate-right"></div>
    <div class="navigate-up"></div>
    <div class="navigate-down"></div>
  </aside>
  <div class="slide-number"></div>
  <div class="pause-overlay"></div>
  <div id="aria-status-div" aria-live="polite" aria-atomic="true" style="position: absolute; height: 1px; width: 1px; overflow: hidden; clip: rect(1px 1px 1px 1px);">Questions?</div></div>

		
<script>
	var SLConfig = {"deck":{"id":77836,"slug":"angularjs-a-brief-introduction","title":"AngularJS: A Brief Introduction","description":"","visibility":"all","published_at":"2013-10-03T08:39:33.276Z","sanitize_messages":null,"thumbnail_url":"https://s3.amazonaws.com/media-p.slid.es/thumbnails/gsklee/af577c/angularjs-a-brief-introduction.jpg","view_count":3970,"user":{"id":36368,"username":"gsklee","name":"G. Kay Lee","description":"","thumbnail_url":"https://www.gravatar.com/avatar/4b9046e1a575660d1974e9f34a9653e8?s=140\u0026d=https%3A%2F%2Fs3.amazonaws.com%2Fstatic.slid.es%2Fimages%2Fdefault-profile-picture.png","pro":true,"enterprise":false,"enterprise_manager":false,"settings":{"id":101,"present_controls":true,"present_upsizing":true},"registered":true},"background_transition":"slide","transition":"linear","theme_id":null,"theme_font":"merriweather","theme_color":"black-mint","auto_slide_interval":0,"comments_enabled":true,"forking_enabled":false,"rolling_links":true,"center":true,"should_loop":false,"rtl":false,"version":0}};
</script>
<script defer="defer" src="./AngularJS_ A Brief Introduction_ Slides_files/application-b6bdf109220f1717af6649e020794649.js"></script>
<script defer="defer" src="./AngularJS_ A Brief Introduction_ Slides_files/reveal.min-e0f835696be5fc3f817bbdecfd80e0c7.js"></script>
</body>
</html>