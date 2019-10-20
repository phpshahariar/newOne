@extends('frontend.layouts.master')


@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <section class="header-with-pic faq-bg">
        <div class="middle-text">
            <h2>FAQ</h2>
            <p>We are at the forefront of innovation. <br/>Discover with us the possibilities of your next dream.</p>
        </div>
    </section>
    <section class="faq-main">

        <div class="container">
            <div class="row">
                <div class="shapes lreg">
                    <div class="shape1"></div>
                    <div class="shape2"></div>
                    <div class="shape1 mid-shape"></div>
                </div>
            </div>
            <div class="row"> 
            @foreach($signal_faqs as $levelOne => $faqs)
                <div class="col-lg-6 col-md-6">
                    <div id="accordion_{{ $levelOne }}" class="faq_content">
                        @foreach($faqs as $level_two => $faq)
                        <div class="card">
                            <div class="card-header" id="heading_{{ $levelOne }}_{{ $level_two }}">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapse_{{ $levelOne }}_{{ $level_two }}" aria-expanded="false" aria-controls="collapse_{{ $levelOne }}_{{ $level_two }}">{{ $faq['question'] }}</a> </h6>
                            </div>
                            <div id="collapse_{{ $levelOne }}_{{ $level_two }}" class="collapse" aria-labelledby="heading_{{ $levelOne }}_{{ $level_two }}" data-parent="#accordion_{{ $levelOne }}">
                                <div class="card-body">{{ $faq['answer'] }}</div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            @endforeach
            </div>
            </div>
        </div>

    </section>
    <!-- Share Float -->
    <div class="floating-share">
        <div class="social-shares"></div>
    </div>
@endsection
