<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <title>Crest Capital</title>

  <meta property=”og:title” content='Crest Capital' />
  
  <meta property=”og:image” content=”{{ asset('front/images/site/logo.png') }}” />

  <meta content="width=device-width, user-scalable=no" name="viewport" />
  <meta
    content="Trade Stocks, Forex, and Crypto Currencies, Start making profit today by trading over 150 Stocks, Forex and Crypto Currencies."
    property="og:description" />

  <link href="https://fonts.googleapis.com" rel="preconnect" />
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" />
  <link href="{{asset('front/css/site/reactapp-modules.css') }}" rel="stylesheet" />
  <link href="{{asset('front/css/libs/flag-icon-css/css/flag-icon.min.css') }}" rel="stylesheet" />
  <link href="{{asset('front/css/libs/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />


  <link rel="shortcut icon" href="{{asset('front/images/pwa/favicon.ico') }}">
  <link rel="icon" type="image/png" sizes="16x16" href="{{asset('front/images/pwa/favicon-16x16.png') }}">
  <link rel="icon" type="image/png" sizes="32x32" href="{{asset('front/images/pwa/favicon-32x32.png') }}">
  <link rel="icon" type="image/png" sizes="48x48" href="{{asset('front/images/pwa/favicon-48x48.png') }}">
  <link rel="manifest" href="{{asset('front/images/pwa/manifest.json"') }}>
  <meta name="mobile-web-app-capable" content="yes">
  <meta name="theme-color" content="#fff">
  <meta name="application-name" content="{{config('app.name')}}">
  <link rel="apple-touch-icon" sizes="57x57" href="{{asset('front/images/pwa/apple-touch-icon-57x57.png') }}">
  <link rel="apple-touch-icon" sizes="60x60" href="{{asset('front/images/pwa/apple-touch-icon-60x60.png') }}">
  <link rel="apple-touch-icon" sizes="72x72" href="{{asset('front/images/pwa/apple-touch-icon-72x72.png') }}">
  <link rel="apple-touch-icon" sizes="76x76" href="{{asset('front/images/pwa/apple-touch-icon-76x76.png') }}">
  <link rel="apple-touch-icon" sizes="114x114" href="{{asset('front/images/pwa/apple-touch-icon-114x114.png') }}">
  <link rel="apple-touch-icon" sizes="120x120" href="{{asset('front/images/pwa/apple-touch-icon-120x120.png') }}">
  <link rel="apple-touch-icon" sizes="144x144" href="{{asset('front/images/pwa/apple-touch-icon-144x144.png') }}">
  <link rel="apple-touch-icon" sizes="152x152" href="{{asset('front/images/pwa/apple-touch-icon-152x152.png') }}">
  <link rel="apple-touch-icon" sizes="167x167" href="{{asset('front/images/pwa/apple-touch-icon-167x167.png') }}">
  <link rel="apple-touch-icon" sizes="180x180" href="{{asset('front/images/pwa/apple-touch-icon-180x180.png') }}">
  <link rel="apple-touch-icon" sizes="1024x1024" href="{{asset('front/images/pwa/apple-touch-icon-1024x1024.png') }}">
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
  <meta name="apple-mobile-web-app-title" content="Crest Capital">
  <link rel="apple-touch-startup-image"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-640x1136.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-750x1334.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-828x1792.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1125x2436.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1242x2208.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1242x2688.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1536x2048.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1668x2224.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1668x2388.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2048x2732.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: portrait)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1620x2160.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 320px) and (device-height: 568px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1136x640.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 375px) and (device-height: 667px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1334x750.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-1792x828.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 375px) and (device-height: 812px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2436x1125.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 736px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2208x1242.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 414px) and (device-height: 896px) and (-webkit-device-pixel-ratio: 3) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2688x1242.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 768px) and (device-height: 1024px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2048x1536.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 834px) and (device-height: 1112px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2224x1668.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 834px) and (device-height: 1194px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2388x1668.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 1024px) and (device-height: 1366px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2732x2048.png') }}">
  <link rel="apple-touch-startup-image"
    media="(device-width: 810px) and (device-height: 1080px) and (-webkit-device-pixel-ratio: 2) and (orientation: landscape)"
    href="{{asset('front/images/pwa/apple-touch-startup-image-2160x1620.png') }}">
  <link rel="icon" type="image/png" sizes="228x228" href="{{asset('front/images/pwa/coast-228x228.png') }}">
  <meta name="msapplication-TileColor" content="#fff">
  <meta name="msapplication-TileImage" content="/{{asset('front/images/pwa/mstile-144x144.png') }}">
  <meta name="msapplication-config" content="/{{asset('front/images/pwa/browserconfig.xml') }}">
  <link rel="yandex-tableau-widget" href="{{asset('front/images/pwa/yandex-browser-manifest.json') }}">
  <link href="crest-capital.css" rel="stylesheet">
</head>
<body style="position: relative; min-height: 100%; top: 0px;">
    <noscript> You need to enable JavaScript to run this app. </noscript>
  
  
      <div class="navbar-fixed">
        <nav class="bg bg-secondary">
          <div class="container nav-wrapper">
            <ul id="nav-mobile" class="left">
              <li><a data-target="sn" class="sidenav-trigger "><span class="material-icons notranslate">menu</span></a>
              </li>
              <li><a href="/">
                  <h6>CREST CAPITAL</h6>
                </a></li>
              <li class="hide-on-med-and-down pc-pl-1"><a href="/pages/about-us">About Us</a></li>
              <li class="hide-on-med-and-down pc-pl-1"><a href="/faq.html">Help Center</a></li>
              <li class="hide-on-med-and-down pc-pl-1"><a href="/markets.html">Assets</a></li>
            </ul>
            <ul class="right ">
              <li><span class="material-icons notranslate ">light_mode</span></li>
              <li data-target="tl" class="dropdown-trigger notranslate "><span class="flag-icon flag-icon-us"></span>
              </li>
              <div id="tl" class="dropdown-content" tabindex="0">
                <div class="row" tabindex="0" style="width: 250px;">
                  <ul class="col l6 s6">
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-us flag-icon"></span> EN</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-pt flag-icon"></span> PT</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-nl flag-icon"></span> NL</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-sy flag-icon"></span> AR</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-es flag-icon"></span> ES</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-de flag-icon"></span> DE</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-ir flag-icon"></span> FA</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-fr flag-icon"></span> FR</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-ru flag-icon"></span> RU</a></li>
                  </ul>
                  <ul class="col l6 s6">
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-tr flag-icon"></span> TR</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-in flag-icon"></span> IN</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-it flag-icon"></span> IT</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-se flag-icon"></span> SE</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-id flag-icon"></span> ID</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-vn flag-icon"></span> VN</a></li>
                    <li class="notranslate" style="margin-bottom: 10px;"><a class="notranslate"><span
                          class="flag-icon flag-icon-vi flag-icon"></span> VI</a></li>
                  </ul>
                </div>
              </div>
              <li class="hide-on-med-and-down"><a class="btn btn-secondary" href="/signin.html">Login</a></li>
              <li class="hide-on-med-and-down"><a class="btn" href="/signup.html">Registration</a></li>
            </ul>
          </div>
        </nav>
      </div>
      <ul class="sidenav" id="sn">
        <li>
          <div class="user-view">
            <div class="background"><img src="{{asset('front/images/site/logo.png')}}" class="responsive-img"
                style="height: 19vh; padding-left: 2rem;"></div>
          </div>
        </li>
        <li class="no-padding">
          <ul>
            <li><a class="sidenav-close" href="/signin.html"><span
                  class="material-icons notranslate">person_outline</span><span style="padding-left: 10px;">Sign
                  In</span></a></li>
            <li><a class="sidenav-close" href="/signup.html"><span
                  class="material-icons notranslate">person_add</span><span style="padding-left: 10px;">Sign Up</span></a>
            </li>
            <li><a class="sidenav-close" href="/pages/copy-expert-traders"><span
                  class="material-icons notranslate">content_copy</span><span style="padding-left: 10px;">Copy
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/crypto-trading"><span
                  class="material-icons notranslate">copyright</span><span style="padding-left: 10px;">Crypto
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/crypto-mining"><span
                  class="material-icons notranslate">dns</span><span style="padding-left: 10px;">Crypto Mining</span></a>
            </li>
            <li><a class="sidenav-close" href="/pages/forex-trading"><span
                  class="material-icons notranslate">wysiwyg</span><span style="padding-left: 10px;">Forex
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/stocks-trading"><span
                  class="material-icons notranslate">insert_chart_outlined</span><span style="padding-left: 10px;">Stocks
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/options-trading"><span
                  class="material-icons notranslate">donut_large</span><span style="padding-left: 10px;">Options
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/what-is-leverage"><span
                  class="material-icons notranslate">people</span><span style="padding-left: 10px;">What is
                  Leverage</span></a></li>
            <li><a class="sidenav-close" href="/pages/responsible-trading"><span
                  class="material-icons notranslate">people</span><span style="padding-left: 10px;">Responsible
                  Trading</span></a></li>
            <li><a class="sidenav-close" href="/pages/general-risk-disclosure"><span
                  class="material-icons notranslate">folder_open</span><span style="padding-left: 10px;">General Risk
                  Disclosure</span></a></li>
            <li><a class="sidenav-close" href="/pages/about-us"><span
                  class="material-icons notranslate">people</span><span style="padding-left: 10px;">About Us</span></a>
            </li>
            <li><a class="sidenav-close" href="/pages/cookie-policy"><span
                  class="material-icons notranslate">lock_open</span><span style="padding-left: 10px;">Cookie
                  Policy</span></a></li>
            <li><a class="sidenav-close" href="/pages/privacy-policy"><span
                  class="material-icons notranslate">lock_open</span><span style="padding-left: 10px;">Privacy
                  Policy</span></a></li>
            <li><a class="sidenav-close" href="/pages/terms-of-service"><span
                  class="material-icons notranslate">folder_open</span><span style="padding-left: 10px;">Terms of
                  Service</span></a></li>
            <li><a class="sidenav-close" href="/pages/bitcoin-mining"><span
                  class="material-icons notranslate">copyright</span><span style="padding-left: 10px;">Bitcoin
                  Mining</span></a></li>
            <li><a class="sidenav-close" href="/pages/dogecoin-mining"><span
                  class="material-icons notranslate">copyright</span><span style="padding-left: 10px;">Dogecoin
                  Mining</span></a></li>
            <li><a class="sidenav-close" href="/"><span class="material-icons notranslate">home</span><span
                  style="padding-left: 10px;">Home Page</span></a></li>
            <li><a class="sidenav-close" href="/contact.html"><span
                  class="material-icons notranslate">mail_outline</span><span style="padding-left: 10px;">Contact
                  Us</span></a></li>
          </ul>
        </li>
      </ul>
      <main class="" style="min-height: 60vh;">


      @yield('content')
      @stack('scripts')

    </main>
    <section class="bg app-py-3">
      <div class="row container">
        <div class="col l3 s12 app-mobile-center">
          <h6>CREST CAPITAL</h6>
          <p><span class="material-icons notranslate">mail</span> info@crestcapital.live</p>
          <p>© 2014 - 2023 Crest Capital</p>
        </div>
        <div class="col l9 s12" style="text-align: justify;"><br><small>The Transactions offered by this Website can be
            executed only by fully competent adults. Transactions with financial instruments offered on the Website
            involve substantial risk and trading may be very risky. If you make Transactions with the financial
            instruments offered on this Website, you might incur substantial losses or even lose everything in your
            Account. Before you decide to start Transactions with the financial instruments offered on the Website, you
            must review the Service Agreement and Risk Disclosure Information.</small></div>
      </div>
    </section>
<script src="crest-capital.js"></script>
</body>

</html>
