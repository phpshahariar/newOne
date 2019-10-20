<header id="header" class="" data-plugin-options="{'stickyEnabled': true, 'stickyEnableOnBoxed': true, 'stickyEnableOnMobile': true, 'stickyStartAt': 164, 'stickySetTop': '-164px', 'stickyChangeLogo': false}" >
    <div class="header-body border-0">
        <div class="header-top header-top-default border-bottom-0 bg-dark">
            <div class="container">
                <div class="header-row py-2">
                    <div class="header-column justify-content-start">
                        <div class="header-row">
                            <nav class="header-nav-top">
                                <ul class="nav nav-pills text-uppercase text-2">
                                    <li class="nav-item nav-item-anim-icon">
                                        <a class="nav-link pl-0 text-light opacity-7" href="javascript:void(0)">
                                            <i class="fa fa-fax"></i>Phone: +91 8443 847147
                                        </a>
                                    </li>
                                    <li class="nav-item nav-item-anim-icon d-none d-sm-none d-md-none d-lg-block">
                                        <a class="nav-link text-light opacity-7 pr-0" href="javascript:void(0)">
                                            <i class="fas fa-envelope"></i> help@investingpartner.com
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="header-column justify-content-end">
                        <div class="header-row">
                            <ul class="header-social-icons social-icons d-none d-sm-none d-md-block social-icons-clean social-icons-icon-light">
                                <li class="text-white">SOCIAL NETWORKS</li>
                                <li class="social-icons-facebook"><a href="http://www.facebook.com/" target="_blank" title="Facebook"><i class="fab fa-facebook-f"></i></a></li>
                                <li class="social-icons-twitter"><a href="http://www.twitter.com/" target="_blank" title="Twitter"><i class="fab fa-twitter"></i></a></li>
                                <li class="social-icons-linkedin"><a href="http://www.linkedin.com/" target="_blank" title="Linkedin"><i class="fab fa-linkedin-in"></i></a></li>
                                <li class="social-icons-googleplus"><a href="http://www.gmail.com/" target="_blank" title="Google Plus"><i class="fab fa-google-plus-g"></i></a></li>
                                <li class="social-icons-youtube"><a href="http://www.youtube.com/" target="_blank" title="Youtube"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                            <nav class="header-nav-top ml-2">
                                <ul class="nav nav-pills">
                                    @if (auth()->guard('member')->check())
                                    <authenticated-state-button></authenticated-state-button>
                                    @else
                                    <unauthenticated-state-button></unauthenticated-state-button>
                                    @endif

                                    <li class="nav-item dropdown d-none d-sm-block">
                                        <a class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <img src="{{ asset('/assets/') }}/others/img/us-flag.png" class="flag flag-us" alt="English" /> English <i class="fas fa-angle-down"></i>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                                            <a class="dropdown-item" href="#"><img src="{{ asset('/assets/') }}/others/img/us-flag.png" class="flag flag-us" alt="English" /> English</a>
                                            <a class="dropdown-item" href="#"><img src="{{ asset('/assets/') }}/others/img/us-flag.png" class="flag flag-es" alt="English" /> Español</a>
                                            <a class="dropdown-item" href="#"><img src="{{ asset('/assets/') }}/others/img/us-flag.png" class="flag flag-fr" alt="English" /> Française</a>
                                        </div>
                                    </li>
                                </ul>
                            </nav>
                            <!-- <audio id="urario-radio" controls="" autoplay="autoplay" style="width:200px;height:30px;">
                                <source src="http://149.56.195.94:8545/;stream.mp3" type="audio/mp3">Your browser does not support the audio element.
                              </audio> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-container container">
            <div class="header-row">
                <div class="header-column justify-content-start w-50 order-md-1 d-none d-md-flex">
                    <div class="header-row">
                        <ul class="header-extra-info">
                            <li class="m-0">
                                <div class="feature-box feature-box-style-2 align-items-center">
                                    <div class="feature-box-icon">
                                        <i class="far fa-clock text-7 p-relative"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="pb-0 line-height-5 text-2">MON - FRI: 10:00 - 18:00<br>SAT - SUN: 10:00 - 14:00</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="header-column justify-content-start justify-content-md-center order-1 order-md-2">
                    <div class="header-row" >
                        <div class="wow shake" data-wow-duration="2s">
                            <a href="{{ url('/') }}">
                                <img alt="logo" src="{{ asset('/assets/') }}/images/logo.png" class="img-fluid" style="width: 135px;
                      margin-bottom: 1rem;
                      margin-top: 0.25rem;">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="header-column justify-content-end w-50 order-2 order-md-3">
                    <div class="header-row">
                        <ul class="header-extra-info">
                            <li class="m-0">
                                <div class="feature-box reverse-allres feature-box-style-2 align-items-center">
                                    <div class="feature-box-icon">
                                        <i class="fab fa-whatsapp text-7 p-relative" style="top: -2px;"></i>
                                    </div>
                                    <div class="feature-box-info">
                                        <p class="pb-0 font-weight-semibold line-height-5 text-2">(123) 456-7890<br>(123) 456-7891</p>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-nav-bar header-nav-bar-top-border bg-light">
            <div class="header-container container">
                <div class="header-row">
                    <div class="header-column">
                        <div class="header-row justify-content-end">
                            <div class="header-nav p-0">
                                <div class="header-nav header-nav-line header-nav-divisor header-nav-spaced justify-content-lg-center">
                                    <div class="header-nav-main header-nav-main-square header-nav-main-effect-1 header-nav-main-sub-effect-1">
                                        <nav class="collapse">
                                            <ul class="nav nav-pills flex-column flex-lg-row" id="mainNav">
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle active" href="{{ url('/') }}"><i class="fas fa-home"></i>
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{ url('aboutus') }}">About Us</a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Core Services
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ url('copytrade') }}">Copytrade</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('fund-management') }}">Fund Management</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('forex-consultancy') }}">FX Consultancy</a></li>
                                                        <li><a class="dropdown-item" href="profile/profile.html">Profile</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">
                                                        Signal
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ url('forex-signal') }}">FX Signal</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('forex-signal-package') }}">Signal Packages</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('forex-signal-report') }}">Signal report</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('signal-faq') }}">Signal Faq</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{ url('/analyses') }}">
                                                        Analysis
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="{{ url('blogs') }}">
                                                        Official Blog
                                                    </a>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="broker.html">
                                                        Review Section
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ url('forex-broker-review') }}">Forex Broker Reviews</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('forex-vpx-review') }}">Forex VPS Reviews</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown">
                                                    <a class="dropdown-item dropdown-toggle" href="#">								Support
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a class="dropdown-item" href="{{ url('/faq') }}">FAQ</a></li>
                                                        <li><a class="dropdown-item" href="{{ url('contact-us') }}">Contact Us</a></li>
                                                    </ul>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                    <button class="btn header-btn-collapse-nav" data-toggle="collapse" data-target=".header-nav-main nav">
                                        <i class="fas fa-bars"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>


