{{--@yield('trading-ticker')--}}
@include('frontend.layouts.includes.trading-ticker')
    <!-- START SECTION BANNER -->
    <section class="slider_section wow fadeInUp" data-wow-duration="0.8s">

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="4500">
            <div class="carousel-inner carousel-new-bg">
                <div class="carousel-item active zero-carosel">
                    <div class="top-video-frame position-relative">
                        <div class="overlay"></div>
                        <h1 class="typewrite text-capitalize font-weight-normal" data-period="2000" data-type='[ "Welcome To Investing Partner", "To The Next Level"]'></h1>
                        <div class="position-absolute slider-buttons">
                            <button type="button" class="btn btn-outline-light btn-custom">our services</button>
                            <button type="button" class="btn btn-outline-light btn-custom d-none d-sm-block">about us</button>
                        </div>
                    </div>
                </div>
            </div>
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            </ol>
        </div>
    </section>
    <!-- END SECTION BANNER -->



    <section class="ccblue sm-pad-d-none wow fadeInUp" data-wow-duration="0.8s">
        <div class="mainmenu">
            <ul>
                <li>
                    <i class="fa fa-home"></i>
                    <main>10 USD</main>
                    <span>MIN DEPOSIT</span>
                </li>
                <li>
                    <i class="fa fa-user"></i>
                    <main>O.4 Pip*</main>
                    <span>Min Spread</span>
                </li>
                <li>
                    <i class="fa fa-gear"></i>
                    <main>400:1</main>
                    <span>Max Leverage</span>
                </li>
                <li>
                    <i class="fa fa-comments"></i>
                    <main>0$</main>
                    <span>Deposit Fee</span>
                </li>
                <li>
                    <i class="fa fa-tint icon-large"></i>
                    <main>4+ Types</main>
                    <span>Trading AC </span>
                </li>
                <li>
                    <i class="fa fa-briefcase"></i>
                    <main>100+</main>
                    <span>Trading Tools</span>
                </li>
                <li>
                    <i class="fa fa-briefcase"></i>
                    <main>05+</main>
                    <span>Payment Methods</span>
                </li>
            </ul>
        </div>
    </section>
