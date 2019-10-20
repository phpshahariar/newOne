@extends('frontend.layouts.master')

@section('style')
    <style>
        .banner-consultency {
            background-image:url(../assets/images/hand.jpg);
            height: 585px;
            width:100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
            position: relative;
        }
        .banner-content-consultency {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }

        .banner-content-consultency ul {
            margin:0;
            padding: 0;
            text-align: center;
        }
        .banner-content-consultency ul li{
            list-style-type: none;
            display: inline-block;
            margin-bottom: 20px;
            margin-left: 30px;

        }
        .banner-content-consultency ul li .card {
            color: inherit;
            background: radial-gradient(black, transparent);
            text-align: center;
            border-width: 10px;
            border-style: double;
            transform: skew(10deg, -8deg);
            width:13rem;
        }
        .banner-content-consultency ul li .card .card-body {
            padding:1.25rem;
        }
        .banner-content-consultency ul li .card .card-body h5{
            font-weight: bold;
        }
        .banner-content-consultency ul li .card .card-body h6{
            font-weight: bold;
            font-size: 1rem;
        }
        @media(max-width:992px){
            .banner-content-consultency {
                position: absolute;
                top: 20%;
                left: 0%;
                transform: unset;
            }
            .banner-content-consultency ul li .card {
                width: 8rem;
            }
            .banner-content-consultency ul li {
                margin-bottom: 10px;
                margin-left: 15px;
            }
            .banner-content-consultency ul li .card .card-body {
                padding: 0.25rem;
            }
        }
        .parallax-2 {
            /* The image used */
            background-image: url(assets/images/hero-trading-station-web.jpg);

            /* Set a specific height */
            height: 570px;

            /* Create the parallax scrolling effect */
            background-attachment: fixed;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .parallax-2:before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            background-image: linear-gradient(to bottom right, #000, #222);
            opacity: .6;
        }
        .owl-carousel .owl-item img {
            height: auto;
            width: 100%;
        }


    </style>
@endsection

@section('script')
    <script src="{{ asset('/assets/') }}/js/moment.js"></script>
    <script src="{{ asset('/assets/') }}/js/moment-timezone.js"></script>
    <script type="text/javascript">
        /***********************************************
         * Local Time script- By Dynamic Drive (http://www.dynamicdrive.com)
         * Please keep this notice intact
         * Visit http://www.dynamicdrive.com/ for this script and 100s more.
         ***********************************************/
        function showLocalTime(container, zoneString, formatString) {
            var thisobj = this
            this.container = document.getElementById(container)
            this.localtime = moment.tz(new Date(), zoneString)
            this.formatString = formatString
            this.container.innerHTML = this.localtime.format(this.formatString)
            setInterval(function () {
                thisobj.updateContainer()
            }, 1000) //update container every second
        }

        showLocalTime.prototype.updateContainer = function () {
            this.localtime.second(this.localtime.seconds() + 1)
            this.container.innerHTML = this.localtime.format(this.formatString)
        }

    </script>
@endsection

@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <!-- Start banner -->
    <div class="banner-consultency no-dots wow fadeInUp" data-wow-duration="0.4s">
        <div class="banner-content-consultency text-white">
            <ul>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">100</h5>
                            <h6 class="card-subtitle mb-2">Pips gain in total</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">200</h5>
                            <h6 class="card-subtitle mb-2">Signal Package</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">50%</h5>
                            <h6 class="card-subtitle mb-2">Success Rate</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">60%</h5>
                            <h6 class="card-subtitle mb-2">Success Rate</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">70%</h5>
                            <h6 class="card-subtitle mb-2">Success Rate</h6>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title count">80%</h5>
                            <h6 class="card-subtitle mb-2">Success Rate</h6>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    <!-- End Banner -->




    <!-- START SECTION OUR SERVICES CARDS -->
    <section class="signal-report">

        <div class="icon-container">
            <div class="container">

                <h2 class="font-weight-normal text-6 mb-4 text-center"><strong class="font-weight-extra-bold">Why </strong>Subscribe Our Signal Service</h2>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-cloud"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Cloud Computing</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-desktop"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Web Design and SEO</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-tablet"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Mobile and Tablet Apps</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-wordpress"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Wordpress Themes</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-graduation-cap"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Training and development</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="icon-feature">
                            <div class="icon-feature-icon">
                  <span>
                  <i class="fa fa-send"></i>
                  </span>
                            </div>
                            <div class="icon-feature-content">
                                <h4>Customer service</h4>
                                <p>Praesentium cumque voluptate harum quae doloribus, atque error debitis, amet velit in similique, necessitatibus odit vero sunt.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="closed-sig-wrapper">
            <div class="container">
                <h2 class="font-weight-normal text-6 mb-4 text-center"><strong class="font-weight-extra-bold">Recent </strong>closed signals</h2>
                <div class="pic-carousel owl-carousel closed-sig">
                    <div class="item">
                        <div class="card ">
                            <div class="row ">
                                <!--Header div start-->
                                <div class="col-md-12 text-center ">
                                    <div class="lhsize4">
                      <span>
                      <strong>
                      <img src="../assets/images/flag.png" class="bangla1img">
                      USD/GBP</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <!--Header div end-->
                            <div class="row lhsize1  downborder">
                                <!--1st list start-->
                                <div class="col-md-6 col-sm-6 col">
                                    <span> EUR/USD signal: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right ">
                                    <span>12 hours 51 min</span>
                                </div>
                            </div>
                            <!--1st list start-->
                            <!--2nd list start-->
                            <div class="row lhsize1 downborder ">
                                <div class="col-md-6 col-sm-6 col">
                                    <span class="left-side ">From: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right">
                    <span>GMT+06:00
                    <strong>8:43</strong>
                    </span>
                                </div>
                            </div>
                            <!--2nd list end-->
                            <div class="row lhsize1 downborder">
                                <div class="col-md-4 col-sm-4 col">
                                    <span class="left-side ">Till: </span>
                                </div>
                                <div class="col-md-8 col-sm-8 col text-md-right">
                    <span>Till GMT+06:00
                    <strong>12:43</strong>
                    </span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side ">Sell at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2345</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side "> Take profit* at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2322</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Stop loss at: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2382</span>
                                </div>
                            </div>
                            <div class="row  ml-0 mr-0 downborder lhsize1">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Check Analysis: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal00">
                                        <div class="badge badge-primary9">Check</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row  text-center ">
                                <div class="col-md-12 text-center ">
                                    <div class="lhsizeone">
                      <span>
                      <strong>FILLED</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card ">
                            <div class="row ">
                                <!--Header div start-->
                                <div class="col-md-12 text-center ">
                                    <div class="lhsize4">
                      <span>
                      <strong>
                      <img src="../assets/images/flag.png" class="bangla1img">
                      USD/GBP</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <!--Header div end-->
                            <div class="row lhsize1  downborder">
                                <!--1st list start-->
                                <div class="col-md-6 col-sm-6 col">
                                    <span> EUR/USD signal: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right ">
                                    <span>12 hours 51 min</span>
                                </div>
                            </div>
                            <!--1st list start-->
                            <!--2nd list start-->
                            <div class="row lhsize1 downborder ">
                                <div class="col-md-6 col-sm-6 col">
                                    <span class="left-side ">From: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right">
                    <span>GMT+06:00
                    <strong>8:43</strong>
                    </span>
                                </div>
                            </div>
                            <!--2nd list end-->
                            <div class="row lhsize1 downborder">
                                <div class="col-md-4 col-sm-4 col">
                                    <span class="left-side ">Till: </span>
                                </div>
                                <div class="col-md-8 col-sm-8 col text-md-right">
                    <span>Till GMT+06:00
                    <strong>12:43</strong>
                    </span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side ">Sell at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2345</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side "> Take profit* at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2322</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Stop loss at: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2382</span>
                                </div>
                            </div>
                            <div class="row  ml-0 mr-0 downborder lhsize1">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Check Analysis: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal00">
                                        <div class="badge badge-primary9">Check</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row  text-center ">
                                <div class="col-md-12 text-center ">
                                    <div class="lhsizeone">
                      <span>
                      <strong>FILLED</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card ">
                            <div class="row ">
                                <!--Header div start-->
                                <div class="col-md-12 text-center ">
                                    <div class="lhsize4">
                      <span>
                      <strong>
                      <img src="../assets/images/flag.png" class="bangla1img">
                      USD/GBP</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <!--Header div end-->
                            <div class="row lhsize1  downborder">
                                <!--1st list start-->
                                <div class="col-md-6 col-sm-6 col">
                                    <span> EUR/USD signal: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right ">
                                    <span>12 hours 51 min</span>
                                </div>
                            </div>
                            <!--1st list start-->
                            <!--2nd list start-->
                            <div class="row lhsize1 downborder ">
                                <div class="col-md-6 col-sm-6 col">
                                    <span class="left-side ">From: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right">
                    <span>GMT+06:00
                    <strong>8:43</strong>
                    </span>
                                </div>
                            </div>
                            <!--2nd list end-->
                            <div class="row lhsize1 downborder">
                                <div class="col-md-4 col-sm-4 col">
                                    <span class="left-side ">Till: </span>
                                </div>
                                <div class="col-md-8 col-sm-8 col text-md-right">
                    <span>Till GMT+06:00
                    <strong>12:43</strong>
                    </span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side ">Sell at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2345</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side "> Take profit* at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2322</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Stop loss at: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2382</span>
                                </div>
                            </div>
                            <div class="row downborder lhsize1">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Check Analysis: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal00">
                                        <div class="badge badge-primary9">Check</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row  text-center ">
                                <div class="col-md-12 text-center ">
                                    <div class="lhsizeone">
                      <span>
                      <strong>FILLED</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="card ">
                            <div class="row ">
                                <!--Header div start-->
                                <div class="col-md-12 text-center ">
                                    <div class="lhsize4">
                      <span>
                      <strong>
                      <img src="../assets/images/flag.png" class="bangla1img">
                      USD/GBP</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                            <!--Header div end-->
                            <div class="row lhsize1  downborder">
                                <!--1st list start-->
                                <div class="col-md-6 col-sm-6 col">
                                    <span> EUR/USD signal: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right ">
                                    <span>12 hours 51 min</span>
                                </div>
                            </div>
                            <!--1st list start-->
                            <!--2nd list start-->
                            <div class="row lhsize1 downborder ">
                                <div class="col-md-6 col-sm-6 col">
                                    <span class="left-side ">From: </span>
                                </div>
                                <div class="col-md-6 col-sm-6 col text-md-right">
                    <span>GMT+06:00
                    <strong>8:43</strong>
                    </span>
                                </div>
                            </div>
                            <!--2nd list end-->
                            <div class="row lhsize1 downborder">
                                <div class="col-md-4 col-sm-4 col">
                                    <span class="left-side ">Till: </span>
                                </div>
                                <div class="col-md-8 col-sm-8 col text-md-right">
                    <span>Till GMT+06:00
                    <strong>12:43</strong>
                    </span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side ">Sell at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2345</span>
                                </div>
                            </div>

                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col">
                                    <span class="left-side "> Take profit* at:</span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2322</span>
                                </div>
                            </div>
                            <div class="row lhsize1 downborder">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Stop loss at: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <span>1.2382</span>
                                </div>
                            </div>
                            <div class="row  ml-0 mr-0 downborder lhsize1">
                                <div class="col-md-5 col-sm-5 col ">
                                    <span class="left-side ">Check Analysis: </span>
                                </div>
                                <div class="col-md-7 col-sm-7 col text-md-right">
                                    <a href="javascript:void(0)" data-toggle="modal" data-target="#myModal00">
                                        <div class="badge badge-primary9">Check</div>
                                    </a>
                                </div>
                            </div>
                            <div class="row  text-center ">
                                <div class="col-md-12 text-center ">
                                    <div class="lhsizeone">
                      <span>
                      <strong>FILLED</strong>
                      </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container pb-5">
            <div class="row">
                <div class="col-12">
                    <h2 class="font-weight-normal text-6 mb-4 text-center"><strong class="font-weight-extra-bold">Quick </strong>Statistics</h2>
                </div>
            </div>
            <div class="row">

                <div class="col-md-6">
                    <div class="drop-shadow">
                        <table class="sig-facilities-table mb-1">
                            <thead>
                            <tr>
                                <th colspan="2">Signal statistics</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td>Registered members</td>
                                <td>23456</td>
                            </tr>
                            <tr>
                                <td>total signal provided</td>
                                <td>5000</td>
                            </tr>
                            <tr>
                                <td>Performance percentage</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>avarage signal per week</td>
                                <td>122</td>
                            </tr>
                            <tr>
                                <td>total pips gained</td>
                                <td>20</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="drop-shadow">
                        <h4 class="pie-head">SIGNAL DISTRIBUTION PER INSTRUMENT</h4>
                        <div id="container" class="sig-pie"></div>
                    </div>
                </div>
            </div>
        </div>


        <div class="container pb-5">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="font-weight-normal text-6 mb-4 text-center"><strong class="font-weight-extra-bold">PERFORMANCE </strong>REPORT</h2>
                </div>
                <div class="col-md-12">
                    <div class="drop-shadow mb-4">
                        <div class="daily-sig-table-header border-top-radius mt-1">
                            <p class="text-uppercase text-center m-0 text-white">Weekly performance report</p>
                        </div>
                        <table class="table manage-table-custom daily-sig-table mb-0" data-show-toggle="true" data-expand-first="false">
                            <thead>
                            <tr>
                                <th>Weeks</th>
                                <th>Total</th>
                                <th>AUD/USD</th>
                                <th>EUR/JPY</th>
                                <th>EUR/USD</th>
                                <th>GBP/CHF</th>
                                <th>GBP/JPY</th>
                                <th>GBP/USD</th>
                                <th>NZD/USD</th>
                                <th>USD/CAD</th>
                                <th>USD/CHF</th>
                                <th>USD/JPY</th>
                                <th>GBP/CAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="bg-secondary text-white">Monday</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">Tuesday</td>
                                <td class="t-green">4999</td>
                                <td class="t-red">-2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">Wednesday</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">Thursday</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">Friday</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="drop-shadow mb-4">
                        <div class="daily-sig-table-header border-top-radius mt-1">
                            <p class="text-uppercase text-center m-0 text-white">monthly performance report</p>
                        </div>
                        <table class="table manage-table-custom daily-sig-table mb-0" data-show-toggle="true" data-expand-first="false">
                            <thead>
                            <tr>
                                <th>Month,Year</th>
                                <th>Total</th>
                                <th>AUD/USD</th>
                                <th>EUR/JPY</th>
                                <th>EUR/USD</th>
                                <th>GBP/CHF</th>
                                <th>GBP/JPY</th>
                                <th>GBP/USD</th>
                                <th>NZD/USD</th>
                                <th>USD/CAD</th>
                                <th>USD/CHF</th>
                                <th>USD/JPY</th>
                                <th>GBP/CAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="bg-secondary text-white">August, 2018</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">September, 2018</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">October, 2018</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">November, 2018</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">December, 2018</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="drop-shadow mb-1">
                        <div class="daily-sig-table-header border-top-radius">
                            <p class="text-uppercase text-center m-0 text-white">yearly performance report</p>
                        </div>
                        <table class="table manage-table-custom daily-sig-table mb-0" data-show-toggle="true" data-expand-first="false">
                            <thead>
                            <tr>
                                <th>Year</th>
                                <th>Total</th>
                                <th>AUD/USD</th>
                                <th>EUR/JPY</th>
                                <th>EUR/USD</th>
                                <th>GBP/CHF</th>
                                <th>GBP/JPY</th>
                                <th>GBP/USD</th>
                                <th>NZD/USD</th>
                                <th>USD/CAD</th>
                                <th>USD/CHF</th>
                                <th>USD/JPY</th>
                                <th>GBP/CAD</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="bg-secondary text-white">2019</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">2018</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">2017</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">2016</td>
                                <td>4999</td>
                                <td>2000</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td class="bg-secondary text-white">2015</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            <tr>
                                <td>Total</td>
                                <td class="t-green">4999</td>
                                <td>2000</td>
                                <td class="t-red">-999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                                <td>999</td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script src="{{ asset('/assets/') }}/js/highcharts.js"></script>
    <script src="{{ asset('/assets/') }}/js/exporting.js"></script>
    <script src="{{ asset('/assets/') }}/js/export-data.js"></script>
    <script>
        // Radialize the colors
        Highcharts.setOptions({
            colors: Highcharts.map(Highcharts.getOptions().colors, function (color) {
                return {
                    radialGradient: {
                        cx: 0.5,
                        cy: 0.3,
                        r: 0.7
                    },
                    stops: [
                        [0, color],
                        [1, Highcharts.Color(color).brighten(-0.3).get('rgb')] // darken
                    ]
                };
            })
        });

        // Build the chart
        Highcharts.chart('container', {
            chart: {
                backgroundColor: 'transparent',
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: '',
                style: {
                    color: '#7a7a7a',
                    fontWeight: 'bold'
                }
            },
            credits: {
                enabled: false
            },
            exporting: {
                enabled: false
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: true,
                        format: '<b>{point.name}</b>: {point.percentage:.1f} %',
                        style: {
                            color: '#7a7a7a',
                            textOutline: 0
                        },
                        connectorColor: 'silver'
                    }
                }
            },
            series: [{
                name: 'Share',
                data: [
                    { name: 'AUDJPY', y: 55.56 },
                    { name: 'EURJPY', y: 11.11 },
                    { name: 'USDJPY', y: 33.33 }
                ]
            }]
        });
    </script>
@endsection
