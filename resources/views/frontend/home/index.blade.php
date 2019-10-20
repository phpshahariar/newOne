@extends('frontend.layouts.master')
@section('slider')
    @include('frontend.layouts.includes.slider')
@endsection


@section('content')
    <section id="about" class="section">
        <div class="container">
            <div class="row align-items-center mb-5">
                <div class="col-lg-7 pr-5 wow fadeInRight" data-wow-duration="0.8s">
                    <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">Who </strong>We Are</h2>
                    <p class="pr-2 mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enikklam id valorem ipsum dolor sit amet, consectetur adipiscinLorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                    <p class="mb-4">Phasellus blandit massa enim. Nullam id varius elit. blandit massa enim  d varius blandit massa enimariusi d varius elit. blandit massa enimariud varius elit. blandit massa enimariusisi ariusius.</p>
                    <!-- <a href="javascript:void(0)" class="btn btn-default custom-btn page-scroll"><span>VIEW MORE</span> <i class="ion-ios-arrow-thin-right"></i></a> -->
                    <a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">VIEW MORE <i class="ion-ios-arrow-thin-right"></i></a>
                </div>
                <div class="col-lg-5 wow fadeInLeft" data-wow-duration="0.8s">
                    <div class="row mt-5 mt-lg-0">
                        <div class="col-md-8 col-lg-6 text-center text-lg-left mx-auto">
                            <img class="img-fluid m-3 my-0 mt-lg-5 pt-lg-5 appear-animation animated expandIn appear-animation-visible" src="{{ asset('/assets/') }}/others/img/our-office-4.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        </div>
                        <div class="col-md-8 col-lg-6 pl-lg-0 text-center text-lg-left mx-auto">
                            <img class="img-fluid m-3 my-0 appear-animation animated expandIn appear-animation-visible" src="{{ asset('/assets/') }}/others/img/our-office-5.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="400" style="animation-delay: 400ms;">
                            <img class="img-fluid m-3 my-0 appear-animation animated expandIn appear-animation-visible" src="{{ asset('/assets/') }}/others/img/our-office-7.jpg" alt="Office" data-appear-animation="expandIn" data-appear-animation-delay="200" style="animation-delay: 200ms;">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End who we are -->



    <!-- START HOW INVESTING PARTNER WORK -->
    <section id="how_it_work" class="blue-bg  wow fadeInDown" data-wow-duration="0.8s">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2">
                    <div class="title_light text-center">

                        <h2 class="font-weight-normal text-6 pb-5 pt-5"><strong class="font-weight-extra-bold">How </strong>Investing Partner work</h2>

                    </div>
                </div>
                <div class="col-md-12">
                    <nav>
                        <div class="nav nav-pills mb-3 justify-content-sm-center" id="nav-tab" role="tablist">
                            <a class="nav-item nav-link active" id="fund-tab" data-toggle="tab" href="#nav-fund" role="tab" aria-controls="nav-home" aria-selected="true">Find Management</a>
                            <a class="nav-item nav-link" id="copytrade-tab" data-toggle="tab" href="#nav-copytrade" role="tab" aria-controls="nav-copytrade" aria-selected="false">Copytrade Service</a>
                            <a class="nav-item nav-link" id="trading-tab" data-toggle="tab" href="#nav-trading" role="tab" aria-controls="nav-trading" aria-selected="false">Trading Signal</a>
                            <a class="nav-item nav-link" id="broker-tab" data-toggle="tab" href="#nav-broker" role="tab" aria-controls="nav-broker" aria-selected="false">Broker Reviews</a>
                            <a class="nav-item nav-link" id="analysis-tab" data-toggle="tab" href="#nav-analysis" role="tab" aria-controls="nav-analysis" aria-selected="false">Market Analysis</a>
                            <a class="nav-item nav-link" id="consultancy-tab" data-toggle="tab" href="#nav-consultancy" role="tab" aria-controls="nav-consultancy" aria-selected="false">FX Consultancy</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-fund" role="tabpanel" aria-labelledby="fund-tab">
                            <div class="col-xl-6 offset-xl-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-copytrade" role="tabpanel" aria-labelledby="copytrade-tab">
                            <div class="col-md-6 offset-md-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-trading" role="tabpanel" aria-labelledby="trading-tab">
                            <div class="col-md-6 offset-md-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-broker" role="tabpanel" aria-labelledby="broker-tab">
                            <div class="col-md-6 offset-md-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-analysis" role="tabpanel" aria-labelledby="analysis-tab">
                            <div class="col-md-6 offset-md-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-consultancy" role="tabpanel" aria-labelledby="consultancy-tab">
                            <div class="col-md-6 offset-md-3">
                                <p class="text-justify pt-3"> enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.</p>
                            </div>
                            <div class="col-md-12 pt-5 pb-5">
                                <div class="tag-container">
                                    <div class="tag wow bounceInLeft" data-wow-delay="1s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Account Opening</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>First Register An Account With ITN. After Registering Open A Live Trading Account With Any Of Our Listed Broker.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">1</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="1.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="2s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>A/C Verification and Deposit</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Next, Your Trading Account Must Be Verified By Submitting All Documents And Then You Can Deposit In Your Account.</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">2</span>
                                    </div>
                                    <div class="tag-border wow bounceInLeft" data-wow-delay="2.5s"></div>
                                    <div class="tag wow bounceInLeft" data-wow-delay="3s">
                                        <div class="tag-body">
                                            <div class="tag-details">
                                                <h5>Activate your service</h5>
                                                <div class="border-combo">
                                                    <p class="line-1"></p>
                                                    <p class="line-2"></p>
                                                </div>
                                                <p>Once your broker account is set up and funded and you have purchased your ITN membership you can apply to connect your broker to our copy trader. On the left side of this page</p>
                                            </div>
                                        </div>
                                        <span class="tag-num">3</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END HOW INVESTING PARTNER WORK -->



    <!-- START SECTION SERVICES -->
    <section class="no-dots wow fadeInUp" data-wow-duration="0.8s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <div class="text-center mb-5 mt-4">
                        <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">OUR </strong>CORE SERVICES</h2>
                        <p class="text-center">Our service at equal value but at a lower price or in a more desirable fashion
                            <br>Our service at equal value but at a lower price or in a more desirable fashion </p>
                    </div>
                    <div class="pic-carousel owl-carousel">
                        <div class="item">
                            <div class="service-box" data-value='1'>
                                <div class="service-inner-img zoom-img service-img1">
                                    <img src="{{ asset('/assets/') }}/images/service/trainer.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des1">
                                    <h4>FOREX TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software. For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value="3">
                                <div class="service-inner-img zoom-img service-img3">
                                    <img src="{{ asset('/assets/') }}/images/service/crypto-consultancy.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des3">
                                    <h4>CRYPTO TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software.For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value='1'>
                                <div class="service-inner-img zoom-img service-img1">
                                    <img src="{{ asset('/assets/') }}/images/service/trainer.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des1">
                                    <h4>FOREX TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software. For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value="3">
                                <div class="service-inner-img zoom-img service-img3">
                                    <img src="{{ asset('/assets/') }}/images/service/crypto-consultancy.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des3">
                                    <h4>CRYPTO TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software.For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- END SECTION SERVICES -->



    <!-- START About Us -->
    <section id="token" class="section border-0 pt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-12 col-sm-12 text_md_center wow fadeInLeft" data-wow-duration="0.8s">
                    <div class="tabs tabs-quaternary pt-5">
                        <ul class="nav nav-tabs">
                            <li class="nav-item active">
                                <a class="nav-link" href="#popularColors4" data-toggle="tab">Our Aim</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#recentColors4" data-toggle="tab">Safety Of Funds</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#recentColors5" data-toggle="tab">Investing Partner Model</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div id="popularColors4" class="tab-pane active">

                                <p>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit,
                                </p>
                            </div>
                            <div id="recentColors4" class="tab-pane">

                                <p>
                                    English is ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                            <div id="recentColors5" class="tab-pane">

                                <p>
                                    Bangla nation dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitat.
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- <a href="javascript:void(0)" class="btn btn-default custom-btn page-scroll"><span>READ MORE</span> <i class="fas fa-long-arrow-alt-right"></i></a>  -->
                    <a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">READ MORE <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
                <div class="col-lg-5 offset-lg-0 col-md-8 offset-md-2 text_md_center res_md_mt_30 mt-2 wow fadeInRight pt-5" data-wow-duration="0.8s">
                    <label class="progress-label">
                        Software Development
                        <span>75%</span>
                    </label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <label class="progress-label">
                        Software Development
                        <span>75%</span>
                    </label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <label class="progress-label">
                        Software Development
                        <span>75%</span>
                    </label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                    <label class="progress-label">
                        Software Development
                        <span>75%</span>
                    </label>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-animated" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shap1"></div>
        <div class="shape shap2"></div>
    </section>
    <!-- END About Us -->



    <!-- START SECTION WHITEPAPER & CONTACT -->
    <section id="whitepaper" class="wow fadeInLeft" data-wow-duration="0.8s">
        <div class="container">
            <div class="row text_sm_center">
                <div class="col-lg-12 pm-fix">
                    <div class="text-center mb-5">

                        <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">OUR </strong>performance statements</h2>
                        <p class="text-center">Our service at equal value but at a lower price or in a more desirable fashion
                            <br>Our service at equal value but at a lower price or in a more desirable fashion </p>
                    </div>
                    <div class="performance owl-carousel">
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account A</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : $10,000</li>
                                        <li>Profit : 19%</li>
                                        <li>Duration : 5 Months</li>
                                        <li>AVG Growth : 4% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/A/0.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account B</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : 5000 USD</li>
                                        <li>Profit : 17%</li>
                                        <li>Duration : 6 Months</li>
                                        <li>AVG Growth : 3% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/B/1.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account C</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : $5000</li>
                                        <li>Profit : 18%</li>
                                        <li>Duration : 5 Months</li>
                                        <li>AVG Growth : 4% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/C/2.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account D</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : $80000</li>
                                        <li>Profit : 287%</li>
                                        <li>Duration : 13 Months</li>
                                        <li>AVG Growth : 22% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/D/3.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account E</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : $2,00,000</li>
                                        <li>Profit : 90%</li>
                                        <li>Duration : 12 Months</li>
                                        <li>AVG Growth : 7.5% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/E/4.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                        <div class="item">
                            <div class="card portfolio-cards">
                                <div class="card-body">
                                    <h5>Account F</h5>
                                    <ul class="list-unstyled">
                                        <li>Investment : 5000</li>
                                        <li>Profit : 90%</li>
                                        <li>Duration : 12 Months</li>
                                        <li>AVG Growth : 7.5% Monthly</li>
                                    </ul>
                                </div>
                                <a href="javascript:void(0)" data-toggle="modal" data-target="#statement-modal" class="btn btn-default statement-btn" data-link="statements/E/5.html"><span>Check Statment</span> <i class="fas fa-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rounded_shape rounded_shape2"></div>
        <div class="rounded_shape rounded_shape1"></div>
    </section>



    <!-- START BROKER -->
    <section class="wow fadeInRight" data-wow-duration="0.8s">
        <div class="container">
            <div class="row">
                <!-- Broker Filters -->
                <div class="broker-table-filter">
                    <span class="table-name pull-left">Forex Broker List</span>
                    <!-- Sort Dropdown -->
                    <div class="dropdown-new sm-width pull-right ml-2">
                        <div class="select">
                            <span>Sort By</span>
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <input type="hidden" name="sort">
                        <ul class="dropdown-menu-new call-sort">
                            <li data-void data-sort-column="0" data-sort-direction="ASC">Rank</li>
                            <li data-void data-sort-column="1" data-sort-direction="ASC">Broker's Name</li>
                            <li data-void data-sort-column="3" data-sort-direction="ASC" class="sm-none">Minimum Diposite</li>
                            <li data-void data-sort-column="4" data-sort-direction="ASC" class="sm-none">Diposite Bonus</li>
                            <li data-void data-sort-column="5" data-sort-direction="ASC" class="sm-none">Type of Platform</li>
                        </ul>
                    </div>
                    <!-- Sort Dropdown End -->
                    <!-- Filter Dropdown -->
                    <div class="dropdown-new sm-width pull-right">
                        <div class="select">
                            <span>Filter By Category</span>
                            <i class="fa fa-chevron-left"></i>
                        </div>
                        <input type="hidden" name="sort">
                        <ul class="dropdown-menu-new filter-show" >
                            <li>All Catagories</li>
                            <li>MetaTrader 4</li>
                            <li>Proprietary platform</li>
                        </ul>
                    </div>
                    <!-- Filter Dropdown End -->
                </div>
                <!-- Broker Filters End -->
                <table class="table broker-table vps index-toggle" id="broker-table" data-show-toggle="true" data-expand-first="false" data-paging="true" data-filter-container>
                    <thead>
                    <tr>
                        <th class="rank-width" data-filterable="false"><span class="rank-head">Rank</span></th>
                        <th class="broker-nwidth" data-filterable="false">Broker's Name</th>
                        <th class="broker-nwidth">Category</th>
                        <th class="broker-nwidth">review</th>
                        <th data-sortable="false" data-filterable="false">Regulation</th>
                        <th class="d-width" data-filterable="false"><sapn class="sm-width-table-review">Minimum Diposite</sapn></th>
                        <th class="broker-nwidth" data-filterable="false"><sapn class="sm-width-table-review">Diposite Bonus</sapn></th>
                        <th data-sortable="false" data-filterable="false"><sapn class="sm-width-table-review">Type of Platform</sapn></th>
                        <th data-sortable="false" data-filterable="false">More Info</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td class="color-gray" data-sort-value="1">
                            <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">1</span></div>
                        </td>
                        <td data-sort-value="Pepperstone">
                            <div class="broker-image img-tooltip glass">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/assets/') }}/images/broker/pepperstone-logo.jpg" alt="Pepperstone" height="43">
                                </a>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <h3>Company Name</h3>
                                        <p>Pepperstone</p>
                                    </div>
                                </div>
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td>
                            <div class='custom-tooltip'>
                                <span class="category-limit">MyNewCategory</span>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <p>MyNewCategory</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="social-share-icons d-flex flex-column">
                                <ul class="m-0 p-0 list-unstyled">
                                    <li>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li>5.0 (6 reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td><button class="btn btn-default" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</button></td>
                        <td>$22000</td>
                        <td>Sign up - 20%</td>
                        <td class="trader-platform">MetaTrader 4, MetaTrader 5</td>
                        <td>
                            <button class="btn btn-raised btn-success custom-broker-up">Sign Up</button>
                            <p><a href="review-detail.html" target="_blank">See Review</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-gray" data-sort-value="2">
                            <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">2</span></div>
                        </td>
                        <td data-sort-value="Pepperstone">
                            <div class="broker-image img-tooltip glass">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/assets/') }}/images/broker/Pepperstone.png" height="43" alt="Pepperstone">
                                </a>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <h3>Company Name</h3>
                                        <p>Pepperstone White.</p>
                                    </div>
                                </div>
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td>
                            <div class='custom-tooltip'>
                                <span class="category-limit">MyNewCategory</span>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <p>MyNewCategory</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="social-share-icons d-flex flex-column">
                                <ul class="m-0 p-0 list-unstyled">
                                    <li>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li>5.0 (6 reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td><button class="btn btn-default" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</button></td>
                        <td>$22000</td>
                        <td>Up To $5000</td>
                        <td class="trader-platform">MetaTrader 4, Proprietary platform, Web-based</td>
                        <td>
                            <button class="btn btn-raised btn-success custom-broker-up">Sign Up</button>
                            <p><a href="javascript:void(0)">See Review</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-gray" data-sort-value="3">
                            <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">3</span></div>
                        </td>
                        <td data-sort-value="ironfx">
                            <div class="broker-image img-tooltip glass">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/assets/') }}/images/broker/ironfx-logo.jpg" alt="ironfx" height="43">
                                </a>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <h3>Company Name</h3>
                                        <p>Ironfx</p>
                                    </div>
                                </div>
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td>
                            <div class='custom-tooltip'>
                                <span class="category-limit">MyNewCategory</span>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <p>MyNewCategory</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="social-share-icons d-flex flex-column">
                                <ul class="m-0 p-0 list-unstyled">
                                    <li>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li>5.0 (6 reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td><button class="btn btn-default" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</button></td>
                        <td>$22000</td>
                        <td>None</td>
                        <td class="trader-platform">MetaTrader 4, Proprietary platform, Web-based </td>
                        <td>
                            <button class="btn btn-raised btn-success custom-broker-up">Sign Up</button>
                            <p><a href="javascript:void(0)">See Review</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-gray" data-sort-value="4">
                            <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">4</span></div>
                        </td>
                        <td data-sort-value="FXCC_FXBNP">
                            <div class="broker-image img-tooltip glass">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/assets/') }}/images/broker/FXCC_FXBNP.png" alt="FXCC_FXBNP" height="43">
                                </a>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <h3>Company Name</h3>
                                        <p>FXCC_FXBNP</p>
                                    </div>
                                </div>
                                <span class="premium-tag">premium</span>
                            </div>
                        </td>
                        <td>
                            <div class='custom-tooltip'>
                                <span class="category-limit">MyNewCategory</span>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <p>MyNewCategory</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="social-share-icons d-flex flex-column">
                                <ul class="m-0 p-0 list-unstyled">
                                    <li>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li>5.0 (6 reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td><button class="btn btn-default" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</button></td>
                        <td>$22000</td>
                        <td>None</td>
                        <td class="trader-platform">MetaTrader 4, Proprietary platform</td>
                        <td>
                            <button class="btn btn-raised btn-success custom-broker-up">Sign Up</button>
                            <p><a href="javascript:void(0)">See Review</a></p>
                        </td>
                    </tr>
                    <tr>
                        <td class="color-gray" data-sort-value="5">
                            <div class="position-relative"><i class="fa fa-bookmark"></i> <span class="rank">5</span></div>
                        </td>
                        <td data-sort-value="FXCC_FXBNP">
                            <div class="broker-image img-tooltip glass">
                                <a href="javascript:void(0)">
                                    <img src="{{ asset('/assets/') }}/images/broker/FXCC_FXBNP.png" alt="FXCC_FXBNP" height="43">
                                </a>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <h3>Company Name</h3>
                                        <p>FXCC_FXBNP</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class='custom-tooltip'>
                                <span class="category-limit">MyNewCategory</span>
                                <div class="broker-tooltip">
                                    <div class="broker-info-container">
                                        <p>MyNewCategory</p>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td>
                            <div class="social-share-icons d-flex flex-column">
                                <ul class="m-0 p-0 list-unstyled">
                                    <li>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                        <i class="fas fa-star text-warning"></i>
                                    </li>
                                    <li>5.0 (6 reviews)</li>
                                </ul>
                            </div>
                        </td>
                        <td><button class="btn btn-default" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</button></td>
                        <td>$22000</td>
                        <td>None</td>
                        <td class="trader-platform">Proprietary platform</td>
                        <td>
                            <button class="btn btn-raised btn-success custom-broker-up">Sign Up</button>
                            <p><a href="javascript:void(0)">See Review</a></p>
                        </td>
                    </tr>

                    </tbody>
                </table>
                <div class="text-center w-100 mt-3 mb-3">
                    <!-- <a href="broker.html" class="btn blue-btn"><span>VIEW MORE Brokers</span></a> -->
                    <a href="#" class="btn btn-dark btn-modern btn-outline rounded-0 py-2 px-4">VIEW MORE Brokers <i class="fas fa-long-arrow-alt-right"></i></a>
                </div>
            </div>
        </div>
        <div class="shape shap1 s-fix"></div>
    </section>
    <!-- END BROKER -->



    <div class="parallax wow fadeInLeft" data-wow-duration="0.8s">
        <section>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- <div class="title_light">
                        <h2 class="text-uppercase text-left">Client Review</h2>
                        </div> -->
                        <div class="text-center mb-5 mt-4">
                            <h2 class="font-weight-normal text-6 mb-4 text-white"><strong class="font-weight-extra-bold">Client </strong>Review</h2>

                            <p class="text-center text-white">Our service at equal value but at a lower price or in a more desirable fashion
                                <br>Our service at equal value but at a lower price or in a more desirable fashion </p>
                        </div>
                        <div class="testimonial owl-carousel">
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quote bg-light">
                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
                                        </div>
                                        <div class="student">
                                            <div class="photo">
                                                <img src="{{ asset('/assets/') }}/images/team-lg-2.jpg" alt="">
                                            </div>
                                            <p class="text-white">Pablo Napp</p>
                                            <p class="text-white">Important person, some Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="row">
                                    <div class="col-12">
                                        <div class="quote bg-light">
                                            <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In ultrices, elit sed faucibus pharetra, diam mauris bibendum orci, sit amet ullamcorper purus dui sit amet augue. Donec aliquet diam ut neque mattis, eu tristique sem rutrum.</p>
                                        </div>
                                        <div class="student">
                                            <div class="photo">
                                                <img src="{{ asset('/assets/') }}/images/team-lg-3.jpg" alt="">
                                            </div>

                                            <p class="text-white">Pablo Napp</p>
                                            <p class="text-white">Important person, some Company</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- START SECTION WHITEPAPER & CONTACT -->
    </div>



    <!-- START SECTION ARTICLES -->
    <section class="articles wow fadeInRight" data-wow-duration="0.8s">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">
                    <!-- <div class="text-left mb-2-px ">
                    <h2>RECENT ARTICLES</h2>
                    </div> -->
                    <div class="text-center mb-5 mt-4">
                        <h2 class="font-weight-normal text-6 mb-4"><strong class="font-weight-extra-bold">RECENT </strong>ARTICLES</h2>
                        <p class="text-center">Our service at equal value but at a lower price or in a more desirable fashion
                            <br>Our service at equal value but at a lower price or in a more desirable fashion </p>
                    </div>
                    <div class="pic-carousel owl-carousel">
                        <div class="item">
                            <div class="service-box" data-value='1'>
                                <div class="service-inner-img zoom-img service-img1">
                                    <img src="{{ asset('/assets/') }}/images/service/trainer.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des1">
                                    <h4>FOREX TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software. For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value="3">
                                <div class="service-inner-img zoom-img service-img3">
                                    <img src="{{ asset('/assets/') }}/images/service/crypto-consultancy.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des3">
                                    <h4>CRYPTO TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software.For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value='1'>
                                <div class="service-inner-img zoom-img service-img1">
                                    <img src="{{ asset('/assets/') }}/images/service/trainer.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des1">
                                    <h4>FOREX TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software. For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="service-box" data-value="3">
                                <div class="service-inner-img zoom-img service-img3">
                                    <img src="{{ asset('/assets/') }}/images/service/crypto-consultancy.jpg" alt="">
                                    <div class="shadow"></div>
                                </div>
                                <div class="service-inner service-des3">
                                    <h4>CRYPTO TRADE SERVICE</h4>
                                    <p>For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software.For those who would like to profit from our expert traders then our copy trade service is an ideal choice for you. Our automated trade copier software</p>
                                    <a href="#" class="btn btn-light font-weight-bold text-color-dark mb-3" data-animation="fadeInUp" data-animation-delay="0.5s">Read More <i class="fas fa-long-arrow-alt-right"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape shap2 ph-fix"></div>
        <div class="shape shap1 ph-fix"></div>
    </section>
    <!-- END SECTION ARTICLES -->



    <!--Broker Modal Start -->
    <div class="modal" id="myModal001" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
            <div class="modal-content modal1-bg">
                <div class="modal-header modal-header-bg-signal">
                    <h3 class="modal-title" id="myModalLabel">Regulated Broker</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
            <i class="fa fa-close"></i>
            </span>
                    </button>
                </div>
                <div class="modal-body no-pb borker-regulated-content broker-list">
                    <h3 class="m-0">FXChoice</h3>
                    <div class="rating pl-0" data-rateyo-star-width="15px" data-rating="0" data-rateyo-read-only="true" data-rateyo-rating="5"></div>
                    <span class="badge badge-primary2">5.0</span>
                    <ul>
                        <li><span class="fw-600">Website :</span> www.myfxchoice.com</li>
                        <li><span class="fw-600">Company Name :</span> FX Choice Limited</li>
                        <li><span class="fw-600">Foundation :</span> 2010</li>
                        <li><span class="fw-600">Headquarter :</span> Corner Hutson & Eyre Street, Blake Building, Suite 302, Belize City, Belize</li>
                        <li><span class="fw-600">Regulation :</span> IFSC ( License Number: IFSC/60/191/TS/18)</li>
                        <li><span class="fw-600">Payment Processor :</span> Wire Transfer, SKrill, Neteller, Bitcoin, Bitcoin Cash, Litecoin, Ethereum, XRP, VISA,MasterCard, FasaPay, PerfectMoney, Paysafe Card etc</li>
                    </ul>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default-modal" data-dismiss="modal">Close</button>
                </div>
                <div class="rounded_shape rounded_shape2 opacity-2"></div>
            </div>
        </div>
    </div>
    <!-- Broker Modal End -->



    <!--Company Modal Start -->
    <div class="modal" id="company-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg modal-mega animated zoomIn animated-3x" role="document">
            <div class="modal-content modal1-bg">
                <div class="modal-header modal-header-bg-signal">
                    <h3 class="modal-title" id="myModalLabel">Details Of VPS Service Providers</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
            <i class="fa fa-close"></i>
            </span>
                    </button>
                </div>
                <div class="modal-body no-pb borker-regulated-content">
                    <div class="vps-company-logo mb-3">
                        <img src="{{ asset('/assets/') }}/images/broker/pepperstone-logo.jpg" alt="Pepperstone">
                    </div>
                    <ul class="company-info">
                        <li><span class="fw-600">Company Name :</span> FX VPS Pro</li>
                        <li><span class="fw-600">Website :</span> http://www.fxvpspro.com/</li>
                        <li><span class="fw-600">Foundation :</span> 2009</li>
                        <li><span class="fw-600">Server Locations :</span> UK, Italy, India</li>
                        <li><span class="fw-600">Support Email :</span> info@fxvpspro.com </li>
                    </ul>
                    <div class="company-packages">
                        <h3 class="text-uppercase font-weight-bold text-center mb-4">Popular Packages</h3>

                        <div class="snip1265">
                            <!-- Standard Plan -->
                            <div class="plan">
                                <header>
                                    <i class="ion-ios-world"></i>
                                    <h4 class="plan-title">
                                        Standard
                                    </h4>
                                    <div class="plan-cost"><span class="plan-price">$30</span><span class="plan-type">/month</span></div>
                                </header>
                                <ul class="plan-features">
                                    <li>8 currency Pairs
                                    </li>
                                    <li>Entries, SL and TP placement
                                    </li>
                                    <li>Appx 75% Wining Rate
                                    </li>
                                    <li>Web Portal &amp; Email Alert
                                    </li>
                                    <li>Daily 5 to 10 Trade Signal
                                    </li>
                                    <li>Trade Modification
                                    </li>
                                    <li>Web &amp; Email alert
                                    </li>
                                    <li>Personal Manager for Help
                                    </li>
                                    <li>Signal given on US and London Sessions
                                    </li>
                                </ul>
                                <div class="plan-select"><a href="membership-payment.html">Select Plan</a></div>
                            </div>
                            <!-- Standard Plan End -->
                            <!-- PROFESSIONAL Plan -->
                            <div class="plan featured">
                                <header>
                                    <i class="ion-ios-speedometer"></i>
                                    <h4 class="plan-title">
                                        PROFESSIONAL
                                    </h4>
                                    <div class="plan-cost"><span class="plan-price">$100</span><span class="plan-type">/month</span></div>
                                </header>
                                <ul class="plan-features">
                                    <li>10 currency Pairs
                                    </li>
                                    <li>Crypto currency Signal Included
                                    </li>
                                    <li>Entries, SL and TP placement
                                    </li>
                                    <li>Appx 75% Wining Rate
                                    </li>
                                    <li>Web Portal, Email &amp; SMS Alert
                                    </li>
                                    <li>Daily 5 to 15 Trade Signal
                                    </li>
                                    <li>Trade Modification Alert
                                    </li>
                                    <li>Personal Manager for Help
                                    </li>
                                    <li>Signal given on US and London Sessions
                                    </li>
                                    <li>Market Analysis Included
                                    </li>
                                </ul>
                                <div class="plan-select"><a href="membership-payment.html">Select Plan</a></div>
                            </div>
                            <!-- PROFESSIONAL Plan End -->
                            <!-- PREMIUM Plan -->
                            <div class="plan">
                                <header>
                                    <i class="ion-ios-people"></i>
                                    <h4 class="plan-title">
                                        PREMIUM
                                    </h4>
                                    <div class="plan-cost"><span class="plan-price">$70</span><span class="plan-type">/month</span></div>
                                </header>
                                <ul class="plan-features">
                                    <li>10 currency Pairs
                                    </li>
                                    <li>Entries, SL and TP placement
                                    </li>
                                    <li>Appx 75% Wining Rate
                                    </li>
                                    <li>Web Portal, Email &amp; SMS Alert
                                    </li>
                                    <li>Daily 5 to 15 Trade Signal
                                    </li>
                                    <li>Trade Modification Alert
                                    </li>
                                    <li>Personal Manager for Help
                                    </li>
                                    <li>Signal given on US and London Sessions
                                    </li>
                                    <li>Market Analysis Included
                                    </li>
                                </ul>
                                <div class="plan-select"><a href="membership-payment.html">Select Plan</a></div>
                            </div>
                            <!-- PREMIUM Plan End -->
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default-modal" data-dismiss="modal">Close</button>
                </div>
                <!-- <div class="rounded_shape rounded_shape2 opacity-2"></div> -->
            </div>
        </div>
    </div>
    <!-- Company Modal End -->



    <!-- Statement Modal Start -->
    <div class="modal" id="statement-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
        <div class="modal-dialog modal-lg animated zoomIn animated-3x" role="document">
            <div class="modal-content modal1-bg">
                <div class="modal-header modal-header-bg-signal">
                    <h3 class="modal-title" id="myModalLabel">Full Account Statement</h3>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
            <i class="fa fa-close"></i>
            </span>
                    </button>
                </div>
                <div class="modal-body no-pb borker-regulated-content broker-list p-1" id="statement-drag" >
                    <div id="statementsModal"></div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default-modal" data-dismiss="modal">Close</button>
                </div>
                <div class="rounded_shape rounded_shape2 opacity-2"></div>
            </div>
        </div>
    </div>
    <!-- Statement Modal End -->




    <!-- Share Float -->
    <div class="floating-share">
        <div class="social-shares"></div>
    </div>

@endsection
