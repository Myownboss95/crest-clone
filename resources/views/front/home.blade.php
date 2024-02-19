@extends('front.layouts.app')

@section("content")
    <section class="bg bg-secondary app-py-3 fade-appear-done fade-enter-done">
      <div class="container app-py-3">
        <div class="container row" style="display: flex; flex-wrap: wrap-reverse;">
          <div class="col l5 s12 app-mobile-center"><br>
            <h1>Profitability On The Rise</h1><br>
            <p class="f-24">A trading platform that supports your financial goals.</p><br><a class="btn btn-large"
              href="{{ route('register')}}">Get Started</a>
          </div>
          <div class="col l6 offset-l1 s12">
            <img src="{{asset('front/images/site/landing.png')}}" class="responsive-img" style="width: 400px">
          </div>
        </div>
      </div>
    </section>
    <section class="bg bg-secondary app-py-3 ">
      <div class="container app-py-3">
        <div class="row">
          <div class="col l6 s12 wow fadeInUp slow" style="visibility: visible;">
            <center><img src="{{asset('front/images/site/device.png')}}" class="responsive-img"
                style="height: 40vh;"><br><br></center>
          </div>
          <div class="col l6 s12 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
            <div class="container"><br><br>
              <h2 style="color: white">Smooth Experience on any Device</h2><br>
              <p class="app-text-justify f-24" style="color: white">Whether you prefer trading at your desk or on the go — {{ config('app.name')}}
                has got you covered.</p>
              <p class="f-24">The custom-built platform has been adapted for any device you may choose and switching
                is 100% seamless.</p><br>
            </div>
          </div>
        </div>
      </div>
    </section>
    <div class="bg bg-secondary app-image-world" style="
    background: url({{asset('front/images/site/World.webp')}});
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
  background-size: cover;
  background-position: top;
  background-repeat: no-repeat;
    ">
      <div class="app-py-3">
        <div class="container">
          <div class="row">
            <div class="col l6 s12 app-py-3">
              <h2>134 countries</h2>
              <p class="f-24">Traders from all over the world trust {{ config('app.name')}}. The platform interface is localized
                into 12 languages.<br><br></p>
            </div>
            <div class="col l6 s12"></div>
          </div>
          <div class="row app-mobile-center">
            <div class="col l3 s6">
              <p class="app-py-1"><span class="flag-icon flag-icon-gb"></span> English</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-pt"></span> Português</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-cn"></span> Chinese</p>
            </div>
            <div class="col l3 s6">
              <p class="app-py-1"><span class="flag-icon flag-icon-tr"></span> Türkçe</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-fr"></span> Français</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-de"></span> German</p>
            </div>
            <div class="col l3 s6">
              <p class="app-py-1"><span class="flag-icon flag-icon-id"></span> Indonesia</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-pt"></span> Português</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-it"></span> Italiano</p>
            </div>
            <div class="col l3 s6">
              <p class="app-py-1"><span class="flag-icon flag-icon-es"></span> Espanol</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-jp"></span> Japanese</p>
              <p class="app-py-1"><span class="flag-icon flag-icon-se"></span> Svenska</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <section class="bg bg-secondary app-py-2 app-mobile-center">
      <div class="container app-py-3">
        <div class="row container" style="display: flex; align-items: center; flex-wrap: wrap-reverse;">
          <div class="col l6 s12">
            <div class="container">
              <center><img src="{{asset('front/images/site/customer-service.png')}}" class="responsive-img" style="max-height: 35vh;">
              </center>
            </div>
          </div>
          <div class="col l6 s12">
            <h2 class="wow fadeInUp slow" style= "visibility: visible; animation-name: none;">Unrivaled 24/7 Customer
              Service</h2>
            <p class="wow fadeInUp slow" style= "visibility: visible; animation-name: none;">Got an issue? We respond
              under 5 minutes on live chat and solve the problem for you.</p><br><b><span
                class="material-icons notranslate alt-color">chevron_right</span>Contact us anytime, from
              anywhere</b><br><br><b><span class="material-icons notranslate alt-color">chevron_right</span>One-to-one
              trading support for all clients</b><br><br>
          </div>
        </div>
      </div>
    </section>
    <div class="bg bg-secondary app-py-3 app-image-gradient " style="
    background: url({{asset('front/images/site/Gradient.webp')}});
    background-color: rgba(0, 0, 0, 0);
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  ">
      <div class="container">
        <div class=" row container">
          <div class="col l6 s12"><br>
            <h2 class="app-mobile-center white-text">Seven Years of Impeccable Service</h2>
            <p class="app-text-justify light-text f-24">{{ config('app.name')}} was founded in 2014 by a group of professionals
              who are artfully combining the technical expertise required to Copy Professional Traders (If you can’t
              trade on your own).</p>
            <p class="app-text-justify light-text f-24">Forex Trading, Crypto Currency Trading and Stock Trading with
              a dedicated corporate team, state of the art headquarters and a passion for helping those with a strong
              desire to improve their lives</p>
          </div>
          <div class="col l6 s12">
            <center>
                <img src="{{asset('front/images/site/7.png')}}" class="responsive-img" style="max-height: 40vh;"><br>
            </center>
          </div>
        </div>
      </div>
    </div>


    <section class="bg bg-secondary app-py-3">
      <div class="app-pb-3 center wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
        <h2>PRICING</h2>
      </div>
      <div class="row container">
        @foreach($plans as $plan)
        <div class="col l3 s12 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
          <div class="card hoverable app-py-1 app-px-2" style="border-radius: 10px;">
            <center><span>{{$plan->name}}</span><br><span class="alt-color"
              style="font-size: 38px; font-weight: bold;">${{$plan->min_investment}}</span><br><br><br>
              @foreach($plan->features as $features)
              <p>{{$features->name}}</p>
              @endforeach
              <br><a class="btn"
              href="{{route('register')}}">PURCHASE PLAN</a>
            </center>
          </div>
        </div>
        @endforeach
      </div><br>
    </section>
    <section class="bg bg-secondary app-py-3 bg-gradient-charity">
      <div class="container row app-py-3">
        <div class="col l6 s12">
          <h2 class="wow fadeInUp slow" style= "visibility: visible; animation-name: none;">Our Charity Missions</h2>
          <br>
          <p class="f-20 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">We believe everyone has
            the right to a decent life. So, we channel a part of our earnings to bring positive change to local
            communities.</p><br>
          <p class="f-20 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">{{ config('app.name')}} partners
            with trusted humanitarian organizations and on-site volunteers to deliver emergency aid to disaster
            victims and run awareness and education programs. We also help vulnerable communities to overcome poverty
            and ensure healthy growth.</p>
        </div>
        <div class="col l6 s12 wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
          <center><img src="{{asset('front/images/site/Heart.png')}}" class="responsive-img" style="max-height: 350px;"></center>
        </div>
      </div>
    </section>
    <div class="bg app-py-2 ">
      <div class="row container">
        <h3 class="center">What is Bitcoin Mining?</h3><br>
        <div class="video-container"><iframe width="853" height="480" src="https://www.youtube.com/embed/GmOzih6I1zs"
            frameborder="0" allowfullscreen=""></iframe></div>
      </div>
    </div>
    <section class="bg center app-py-3">
      <div class="container">
        <div class="row">
          <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
            style="visibility: visible; animation-delay: 0.4s; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector3.png')}}" class="responsive-img">
            <h3 class="h4">Daily Mining Outputs</h3>
            <p class="app-mb-2">Returns made from either trading or mining transactions will be added to your account
              daily and automatically.</p>
          </div>
          <div class="app-my-2 col l4 s12 wow fadeInUp" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector1.png')}}" class="responsive-img">
            <h3 class="h4">State of the Art Mining</h3>
            <p class="app-mb-2">Productivity is a top notch quality for any investment. So, for every trade action or
              blockchain mining algorithm that we offer, we’re providing some of the highest performing systems and
              softwares that exist</p>
          </div>
          <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector2.png')}}" class="responsive-img">
            <h3 class="h4">Diverse Mining Portfolio</h3>
            <p class="app-mb-2">Choose from a wide range of target assets for trading and over 10 major mining
              algorithms that cut across 4 mineable cryptocurrencies</p>
          </div>
        </div>
        <div class="row">
          <div class="app-my-2 col l4 s12 wow fadeInUp" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector45.png')}}" class="responsive-img">
            <h3 class="h4">Hardware is already running</h3>
            <p class="app-mb-2">Don’t wrestle with rig assembly and hot, noisy miners at home. We have the fastest
              bitcoin mining hardware running for you already</p>
          </div>
          <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.2s"
            style="visibility: visible; animation-delay: 0.2s; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector55.png')}}" class="responsive-img">
            <h3 class="h4">Intuitive Dashboard</h3>
            <p class="app-mb-2">All the financial instruments data and charts that you need, when you need them</p>
          </div>
          <div class="app-my-2 col l4 s12 wow fadeInUp" data-wow-delay="0.4s"
            style="visibility: visible; animation-delay: 0.4s; animation-name: none;"><img
              src="{{asset('front/images/site/ServiceVector65.png')}}" class="responsive-img">
            <h3 class="h4">Secure and Private</h3>
            <p class="app-mb-2">We value the privacy of our users, so we strive to keep collected user data to a
              minimum level.</p>
          </div>
        </div>
      </div>
    </section>
    <section class=" app-pt-3">
      <div class="wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
        <h2 class="center-align">FAQS</h2>
      </div>
      <div class="container app-py-3">
        <div class="row">
          <div class="col l6 s12">
            <div class="app-padding wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header" tabindex="0"><i
                      class="material-icons notranslate">arrow_drop_down</i>How does copy trading work?</div>
                  <div class="collapsible-body"><span>
                      <p>Here is how the copier works: You, as an investor, simply select an expert or experts that
                        you want to copy trades from. Once you are signed up, this is the only action needed on your
                        part.</p><br>
                      <p>Once you’ve taken care of the above, you are all set. There are no codes that you need to run
                        or signals for you to manually input. Our software will handle the trade copying automatically
                        on your behalf. We monitor your experts trading activity and as soon as there is a trade, we
                        calculate all the necessary parameters and execute the trade.</p><br>
                      <p>The only thing you have to make sure of is that you have enough available base currency that
                        your expert trades with, in your trading account. How much is enough? First, you must meet the
                        exchanges minimum order amount (let’s say about $10 per trade to be safe). That means that if
                        your expert executes a 5% order, you must have at least $300 in your account total value (at
                        100% expert allocation as an example). This also means that you need to have at least 10% or
                        higher in available base currency to avoid missed trades.</p><br>
                      <p>When the expert exits a position, you too will exit it. Automatically. You can also change
                        allocation at any time.</p>
                    </span></div>
                </li>
                <li>
                  <div class="collapsible-header" tabindex="0"><i
                      class="material-icons notranslate">arrow_drop_down</i> What are the fees?</div>
                  <div class="collapsible-body"><span>Every investor is to pay a 15% withdrawal fee to complete
                      withdrawal process and each trader gets a set percentage of the profit they make.</span></div>
                </li>
              </ul>
            </div>
          </div>
          <div class="col l6 s12">
            <div class="app-padding wow fadeInUp slow" style= "visibility: visible; animation-name: none;">
              <ul class="collapsible">
                <li>
                  <div class="collapsible-header" tabindex="0"><i
                      class="material-icons notranslate">arrow_drop_down</i>Who are the trading experts?</div>
                  <div class="collapsible-body"><span>
                      <p>We carefully select expert applicants. We get to know them as a trader and examine their
                        trading performance over a period of time. We also tend to look for expert who already have a
                        following to further confirm their competence (social proof). You can also read about every
                        expert on their individual performance pages.</p><br>
                    </span></div>
                </li>
                <li>
                  <div class="collapsible-header" tabindex="0"><i
                      class="material-icons notranslate">arrow_drop_down</i>What is the recommended amount to start
                    with?</div>
                  <div class="collapsible-body"><span>
                      <p>We suggest to have around $3000-$5000 in your account in BTC value due to exchanges minimum
                        order requirements and so that you can at least cover the subscription cost every month.</p>
                    </span></div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class=" app-pb-3">
      <div class="row container ">
        <div class="col l6 s12">
          <div class="app-padding wow fadeInUp" style= "visibility: visible; animation-name: none;">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>What is a trading platform?</div>
                <div class="collapsible-body"><span> It is an online platform where traders track the quotes of
                    different kinds of asset and make trades using the services provided by a broker.</span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>The Platform Doesn’t Load</div>
                <div class="collapsible-body"><span>
                    Try opening it in some other browser. We recommend using the latest Google Chrome.

                    The system will not let you log in to the trading platform if your location is blacklisted.

                    Perhaps, there is an unexpected technical problem. Our support consultants will help you solve it.
                  </span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>When Will Deposits Be Credited</div>
                <div class="collapsible-body"><span>
                    The funds are usually credited to trading accounts fast, but sometimes it can take from 2 to 5
                    business days (depending on your payment provider.)

                    If the money has not been credited to your account right after you make a deposit, please wait for
                    1 hour. If after 1 hour there is still no money, please wait and check again.
                  </span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>Do I Need to Install Any Trading Software?
                </div>
                <div class="collapsible-body"><span> You can trade on our online platform in the web version right
                    after you create an account. There is no need to install new software.</span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>What Should I Do If a System Error Occurs?
                </div>
                <div class="collapsible-body"><span> When system errors occurs, we recommend clearing your cache and
                    cookies. You should also make sure you are using the latest version of the web browser. If you
                    take these actions but the error still occurs, contact our support team.</span></div>
              </li>
            </ul>
          </div>
        </div>
        <div class="col l6 s12">
          <div class="app-padding wow fadeInUp" style= "visibility: visible; animation-name: none;">
            <ul class="collapsible">
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>What are bonuses?</div>
                <div class="collapsible-body"><span>
                    Bonus is the money the company provides to a client for trading. Traders don't lose their own
                    funds when they lose a bonus. On the other hand, in case of success, they pocket the profit gained
                    from using bonus funds.
                  </span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>Trading and Quote Sessions</div>
                <div class="collapsible-body"><span>
                    A quote session is a period when the platform receives and transmits quotes. However, one can make
                    trades within a slightly shorter trading session, which is part of a quote session.

                    As a rule, a quote session starts 5-10 minutes earlier and ends 5-10 minutes later than the
                    trading session. This is meant to protect traders from the risk of high volatility at the
                    beginning and the end of the quote session.

                    For example, a quote session for Apple shares starts at 13:30 GMT (US Summer Time) and ends at
                    20:00. A trading session for Apple shares starts with a five-minute delay, i.e. at 13:35. And it
                    ends at 19:55, which is 5 minutes before the quote session ends.
                  </span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>Why Doesn’t a Trade Open Instantly?</div>
                <div class="collapsible-body"><span> It takes a few seconds to get data from the servers of our
                    liquidity providers. As a rule, the process of opening a new trade takes up to 4 seconds.</span>
                </div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>How Can I View the History of My Trades?
                </div>
                <div class="collapsible-body"><span> All information about your recent trades is available in the
                    “Trades” section. You can access the history of all your trades through the section with the same
                    name as your user account.</span></div>
              </li>
              <li>
                <div class="collapsible-header" tabindex="0"><i
                    class="material-icons notranslate">arrow_drop_down</i>What Is the Most Active Time of Day for
                  Trading?</div>
                <div class="collapsible-body"><span>
                    Trading activity depends on the working hours of major exchanges and increases at the time of
                    important news releases. The most active trading sessions are European and North American ones.
                    The European session begins at around 6:00 UTC and closes at 15:00 UTC. The North American trading
                    session spans from 13:00 UTC until 22:00 UTC.

                    Please note that some currency pairs and assets are available for trading for a limited period of
                    time. The trading hours for each asset are specified in the “Trading Conditions” tab of the asset
                     menu.
                  </span></div>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </section>
    <section class="bg app-pt-3 app-image-dots" style="
      background: url({{asset('front/images/site/Dots.png')}});
    background-position-x: 0%;
    background-position-y: 0%;
    background-repeat: repeat;
    background-size: auto;
    background-size: cover;
    background-position: center;
    background-repeat: no-repeat;
    ">
      <div class="container">
        <h2 class="center  wow fadeInUp slow" style= "visibility: visible; animation-name: none;">What Our Users Say
        </h2>
        <p class="center">See what our customer say about us</p><br><br>
        <div class="container row center app-pt-3">
          <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/p1.jpg')}}" class="circle" style="max-height: 140px;"><br><b>Henri Pacocha</b>
            <p class="app-px-1">I am extremely pleased with the platform, in terms of ease and speed of use and
              reliability.</p><br>
          </div>
          <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/p4.jpeg')}}" class="circle" style="max-height: 140px;"><br><b>Michelle Kings</b>
            <p class="app-px-1">Very simple and secure method to add some interest to your investments</p><br>
          </div>
          <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/p3.png')}}" class="circle" style="max-height: 140px;"><br><b>Molly Corwin</b>
            <p class="app-px-1">I tripled the bitcoin in my wallet with this service in just 7 days.</p><br>
          </div>
          <div class="col l3 s12 app-py-1 wow fadeInUp slow" style= "visibility: visible; animation-name: none;"><img
              src="{{asset('front/images/site/p5.jpeg')}}" class="circle" style="max-height: 140px;"><br><b>Lawson Robel</b>
            <p class="app-px-1">Easy to use, risk-free trading platform that increases ones earning potential.</p><br>
          </div>
        </div>
      </div>
    </section>

    <script>
      document.querySelectorAll('.collapsible-header').forEach(header => {
        header.addEventListener('click', () => {
          const content = header.nextElementSibling;
          content.classList.toggle('active');
          header.querySelector('.material-icons').classList.toggle('rotate');
        });
      });

    </script>
@endsection

