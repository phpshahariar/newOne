@extends('frontend.layouts.master')

@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <section class="fx_tri">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12 offset-lg-2 text-center">
                    <div class="">
                        <h2>Signal Packages</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Aenean massa</p>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12">
                    <div class="shapes lreg">
                        <div class="shape1"></div>
                        <div class="shape2"></div>
                        <div class="shape1 mid-shape"></div>
                    </div>
                    <div class="col-12 p-0 privacy-policy-section">
                        <h4>About Our Packages</h4>
                        <div class="border-combo">
                            <p class="line-green"></p>
                            <p class="line-rellow"></p>
                        </div>
                        <p><strong>Third Parties.</strong> We work with third parties to provide some of our Services. For example, our Third-Party Providers send a verification code to your phone number when you register for our Services. These providers are bound by their Privacy Policies to safeguard that information. If you use other Third-Party Services like YouTube, Spotify, Giphy, etc. in connection with our Services, their Terms and Privacy Policies govern your use of those services.</p>
                        <p>Other instances where Signal may need to share your data</p>
                        <ul>
                            <li>
                                <p>To meet any applicable law, regulation, legal process or enforceable governmental request.</p>
                            </li>
                            <li>
                                <p>To enforce applicable Terms, including investigation of potential violations.</p>
                            </li>
                            <li>
                                <p>To detect, prevent, or otherwise address fraud, security, or technical issues.</p>
                            </li>
                            <li>
                                <p>To protect against harm to the rights, property, or safety of Signal, our users, or the public as required or permitted by law.</p>
                            </li>
                        </ul>

                    </div>

                </div>
                <div class="col-12 mt-3 sig-packages">
                    <div class="snip1265">
                        @foreach($forexSignalPackage as $forexSignal)
                        <!-- PROFESSIONAL Plan -->
                        <div class="plan featured">
                            <header>
                                <i class="ion-ios-speedometer"></i>
                                <h4 class="plan-title">
                                    {{ $forexSignal->title }}
                                </h4>
                                <div class="plan-cost"><span class="plan-price">$ {{ $forexSignal->price }}</span><span class="plan-type">/{{ $forexSignal->duration }}</span></div>
                            </header>
                            <ul class="plan-features">
                            @foreach($forexSignal->details as $each)
                                <li>{{ $each['key'] }}&nbsp;{{ $each['value'] }}</li>
                            @endforeach
                            </ul>
                            <div class="plan-select"><a href="membership-payment.html">Select Plan</a></div>
                        </div>
                        <!-- PROFESSIONAL Plan End -->
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Share Float -->
    <div class="floating-share">
        <div class="social-shares"></div>
    </div>
@endsection
