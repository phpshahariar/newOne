@extends('frontend.layouts.master')
@section('style')
    <style>
        .broker-catagory .custom-control-label{
            font-size: 0.9rem;
            color: #7a7a7a;
        }
        .broker-catagory .custom-control-label::before{
            top:7px;
            background-color: inherit;
            border: 1px solid #ddd;
            border-radius: 0;
        }
        .broker-catagory .custom-control-label::after {
            top:7px;
        }
        .load-more-badge {
            font-weight: 400;
            background: #04abab;
            color: #fff;
            padding: 5px;
            font-style: italic;
            font-size: 10px;
            border-radius: 3px;
            letter-spacing: 0.3px;
        }
        .reset-badge {
            font-weight: 400;
            background: #607D8B;
            color: #fff;
            padding: 5px;
            font-style: italic;
            font-size: 10px;
            border-radius: 3px;
            letter-spacing: 0.3px;
        }
        .broker-title h1 {
            text-align: center;
            font-size: 30px;
            letter-spacing: 2px;
            color: #797979;
            font-weight: 500;
            margin: 0;
            padding: 0;
        }
        .search-bar input[type="text"]{
            height: 50px;
            background: #f9f9f9;
            font-size: 16px;
        }
        .search-bar i {
            position: absolute;
            right: 16px;
            top: 14px;
            font-size: 1.5rem;
            color: hsl(0, 5%, 84%);
        }

    </style>
    <style>

        .numbers {
            position: absolute;
            color: #000;
            background: #fff;
            line-height: 18px;
            width: 18px;
            height: 18px;
            border-radius: 9px;
            top: 6px;
            left:5px;
            text-align: center;
            display: block;
        }
        .numbers-position {
            position:absolute;
            top:30%;
            left:30%;
        }
        .platform-column ul {
            padding: 0;
            margin: 0;
            line-height: 0;
        }
        .platform-column ul li {
            display: inline-block;
            font-size: 12px;
        }
        .all-btns {
            display: inline-flex;
            text-transform: capitalize;
        }
        .all-btns .btn{
            font-size: 0.7rem;
            padding: 0.33rem 0.33rem;
            margin-bottom: 7px;
            font-weight: 500;
            margin-right: 0.4rem;
        }
        .all-btns .btn + .btn:last-child {
            margin-left: 0;
        }



        .forex-broker-table td,
        .forex-broker-table th {
            border-color: rgba(0, 0, 0, 0.06);
            padding: 0.25rem;
            font-size: 13px;
            vertical-align: middle;
            text-align: center;
        }


        .link-button a div{
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0px 1px 4px 0px rgba(170, 170, 170, 0.4);
        }
        .link-button a div:hover {
            box-shadow: 0 4px 21px 0 rgba(0, 32, 147, 0.18);
        }
        .link-button a div span.text-btn{
            text-transform: capitalize;
            padding: .5rem 0.8rem;
            font-size: 14px;
            color: #7a7a7a;
        }
        .link-button a div span.check-btn {
            color: #fff;
            background: #212529;
            padding: .5rem 0.8rem;
            border-top-right-radius: 4px;
            border-bottom-right-radius: 4px;
        }
        @media(min-width:1199px){
            .display-xl-none{
                display: none;
            }
        }
        @media(max-width:1199px) {
            .display-none {
                display: none;
            }
            #sidebar {
                width: 250px;
                position: fixed;
                top: 0;
                left: -250px;
                height: 100vh;
                z-index: 99999;
                background: #fff;
                color: #fff;
                transition: all 0.3s;
                overflow-x: scroll;
                box-shadow: 3px 3px 3px rgba(0, 0, 0, 0.2);

            }

            #sidebar.active {
                left: 0;
            }

            #dismiss {
                width: 35px;
                height: 35px;
                line-height: 35px;
                text-align: center;
                background: #7386D5;
                position: absolute;
                top: 10px;
                right: 15px;
                cursor: pointer;
                -webkit-transition: all 0.3s;
                -o-transition: all 0.3s;
                transition: all 0.3s;
            }

            #dismiss:hover {
                background: #7386D5;
                color: #fff;
            }

            .overlay {
                display: none;
                position: fixed;
                width: 100vw;
                height: 100vh;
                background: rgba(0, 0, 0, 0.7);
                z-index: 998;
                opacity: 0;
                transition: all 0.5s ease-in-out;
            }
            .overlay.active {
                display: block;
                opacity: 1;
            }

            #sidebar .sidebar-header {
                padding: 20px;
                background: #6d7fcc;
            }

            #sidebar ul.components {
                padding: 20px 0;
                border-bottom: 1px solid #47748b;
            }

            #sidebar ul p {
                color: #fff;
                padding: 10px;
            }

            #sidebar ul li a {
                padding: 10px;
                font-size: 1.1em;
                display: block;
            }

            #sidebar ul li a:hover {
                color: #7386D5;
                background: #fff;
            }

            #sidebar ul li.active>a,
            a[aria-expanded="true"] {
                color: #fff;
                background: #6d7fcc;
            }

            a[data-toggle="collapse"] {
                position: relative;
            }

            .dropdown-toggle::after {
                display: block;
                position: absolute;
                top: 50%;
                right: 20px;
                transform: translateY(-50%);
            }
            .broker-title h1 {
                font-size: 24px;
            }
        }
        @media screen and (max-width: 768px) {
            .padding-0 {
                padding: 0;
            }
        }
        @media(max-width:540px) {
            .all-btns {
                display: flex;
                text-transform: capitalize;
                flex-direction: column;
            }
        }

    </style>
@endsection
@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <section class="broker-catagory">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-10 offset-xl-1">
                    <div class="row">
                        <div class="col-xl-2 d-none d-xl-block d-lg-none d-md-none">
                            <div class="d-flex flex-column mb-3">
                                <div class="mb-2 link-button">
                                    <a href="#">
                                        <div>
                                            <span class="text-btn">all forex brokers</span>
                                            <span class="check-btn"><i class="fas fa-check"></i></span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-2 link-button">
                                    <a href="#">
                                        <div>
                                            <span class="text-btn">CFD Forex Brokers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-2 link-button">
                                    <a href="#">
                                        <div>
                                            <span class="text-btn">Binary Options Brokers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-2 link-button">
                                    <a href="#">
                                        <div>
                                            <span class="text-btn">Social Trading Brokers</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="mb-2 link-button">
                                    <a href="#">
                                        <div>
                                            <span class="text-btn">Crypto Forex Brokers</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Broker Catagory">
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck1">
                                    <label class="custom-control-label font-weight-normal" for="customCheck1">Swap free</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck2">
                                    <label class="custom-control-label font-weight-normal" for="customCheck2">ECN Broker</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck3">
                                    <label class="custom-control-label font-weight-normal" for="customCheck3">Deposit Bonus</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck4">
                                    <label class="custom-control-label font-weight-normal" for="customCheck4">Low Spread Broker</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck5">
                                    <label class="custom-control-label font-weight-normal" for="customCheck5">USA Client Broker</label>
                                </div>
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="customCheck6">
                                    <label class="custom-control-label font-weight-normal" for="customCheck6">High Rated Broker</label>
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="badge load-more-badge">Load more</span>
                                    <span class="badge reset-badge"> Reset </span>
                                </div>
                            </div>
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Regulatory Authority">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="badge load-more-badge">Load more</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Country">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="badge load-more-badge">Load more</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Payment Method">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="badge load-more-badge">Load more</span>
                                </div>
                            </div>
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="mb-2">
                                    <input type="text" class="form-control" placeholder="Trading Platform">
                                </div>
                                <div class="d-flex justify-content-between align-items-center mt-2">
                                    <span class="badge load-more-badge">Load more</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-10 padding-0">
                            <div class="d-flex flex-column drop-shadow mb-3">
                                <div class="broker-title mb-4 mt-2">
                          <span id="sidebarCollapse" class=" position-absolute display-xl-none">
                              <i class="fas fa-bars fa-2x"></i>
                          </span>
                                    <h1>Forex Broker Reviews</h1>
                                    <span class="text-center d-block text-4 font-weight-500 mt-2"><i>Best FXbroker - 2019</i></span>
                                </div>
                                <div class="search-bar position-relative mb-2">
                                    <i class="fas fa-search"></i>
                                    <input type="text" class="form-control" placeholder="Search...">
                                </div>
                                <div class="table-responsive" style="overflow-x:inherit;">
                                    <table class="table table-bordered table-striped text-center forex-broker-table">
                                        <thead class="thead-dark text-uppercase">
                                        <tr>
                                            <th class="display-none">rank</th>
                                            <th>broker</th>
                                            <th>review</th>
                                            <th class="display-none">Country</th>
                                            <th class="display-none">max leverage</th>
                                            <th class="display-none">platform</th>
                                            <th class="display-none">min deposit</th>
                                            <th>info</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td class="position-relative display-none">
                                                <div class="numbers-position">
                                                    <span><i class="fa fa-bookmark fa-3x text-primary"></i></span>
                                                    <span class="numbers">1</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <div class="broker-image img-tooltip d-flex flex-column">
                                                        <a href="javascript:void(0)" class="mb-1">
                                                            <img src="assets/images/broker/pepperstone-logo.jpg" alt="Pepperstone" height="43">
                                                        </a>
                                                        <a href="javascript:void(0)" class="badge bg-success text-white p-2 text-3 font-weight-400 text-uppercase border-0" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</a>

                                                        <div class="broker-tooltip">
                                                            <div class="broker-info-container">
                                                                <h3>Company Name</h3>
                                                                <p>Pepperstone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="social-share-icons d-flex flex-column fs-12">
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
                                            <td class="display-none">
                                                <div class="d-flex flex-column">
                                                    <span><img src="assets/images/flag/star.png" width="24" alt=""></span>
                                                    <span>Cyprus, UK, Mauritius</span>
                                                </div>
                                            </td>
                                            <td class="display-none"> <span>2000:1</span></td>
                                            <td class="display-none">
                                                <div class="platform-column">
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="display-none">
                                                <span>$10</span>
                                            </td>
                                            <td>
                                                <div class="all-btns">
                                                    <a href="#" class="btn bg-warning text-white">website</a>
                                                    <a href="review-detail.html" class="btn bg-success text-white" target="_blank">review</a>
                                                    <a href="#" class="btn bg-info text-white">compare</a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="position-relative display-none">
                                                <div class="numbers-position">
                                                    <span><i class="fa fa-bookmark fa-3x text-primary"></i></span>
                                                    <span class="numbers">2</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <div class="broker-image img-tooltip d-flex flex-column">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/broker/Pepperstone.png" alt="Pepperstone" height="43">
                                                        </a>
                                                        <a href="javascript:void(0)" class="badge bg-success text-white p-2 text-3 font-weight-400 text-uppercase border-0" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</a>
                                                        <div class="broker-tooltip">
                                                            <div class="broker-info-container">
                                                                <h3>Company Name</h3>
                                                                <p>Pepperstone</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="social-share-icons d-flex flex-column fs-12">
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
                                            <td class="display-none">
                                                <div class="d-flex flex-column">
                                                    <span><img src="assets/images/flag/spain.png" width="24" alt=""></span>
                                                    <span>Cyprus, UK, Mauritius</span>
                                                </div>
                                            </td>
                                            <td class="display-none"><span>1000:1</span></td>
                                            <td class="display-none">
                                                <div class="platform-column">
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>

                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="display-none">
                                                <span>$10</span>
                                            </td>
                                            <td>
                                                <div class="all-btns">
                                                    <a href="#" class="btn bg-warning text-white">website</a>
                                                    <a href="review-detail.html" class="btn bg-success text-white" target="_blank">review</a>
                                                    <a href="#" class="btn bg-info text-white">compare</a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="position-relative display-none">
                                                <div class="numbers-position">
                                                    <span><i class="fa fa-bookmark fa-3x text-primary"></i></span>
                                                    <span class="numbers">3</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <div class="broker-image img-tooltip d-flex flex-column">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/broker/ironfx-logo.jpg" alt="Pepperstone" height="43">
                                                        </a>
                                                        <a href="javascript:void(0)" class="badge bg-success text-white p-2 text-3 font-weight-400 text-uppercase border-0" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</a>
                                                        <div class="broker-tooltip">
                                                            <div class="broker-info-container">
                                                                <h3>Company Name</h3>
                                                                <p>Ironfx</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="social-share-icons d-flex flex-column fs-12">
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
                                            <td class="display-none">
                                                <div class="d-flex flex-column">
                                                    <span><img src="assets/images/flag/ger.jpg" width="24" alt=""></span>
                                                    <span>Cyprus, UK, Mauritius</span>
                                                </div>
                                            </td>
                                            <td class="display-none"><span>1:2000</span></td>
                                            <td class="display-none">
                                                <div class="platform-column">
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>

                                                </div>
                                            </td>
                                            <td class="display-none">
                                                <span>$10</span>
                                            </td>
                                            <td>
                                                <div class="all-btns">
                                                    <a href="#" class="btn bg-warning text-white">website</a>
                                                    <a href="review-detail.html" class="btn bg-success text-white" target="_blank">review</a>
                                                    <a href="#" class="btn bg-info text-white">compare</a>
                                                </div>
                                            </td>

                                        </tr>
                                        <tr>
                                            <td class="position-relative display-none">
                                                <div class="numbers-position">
                                                    <span><i class="fa fa-bookmark fa-3x text-primary"></i></span>
                                                    <span class="numbers">4</span>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="d-flex flex-column">
                                                    <div class="broker-image img-tooltip d-flex flex-column">
                                                        <a href="javascript:void(0)">
                                                            <img src="assets/images/broker/FXCC_FXBNP.png" alt="Pepperstone" height="43">
                                                        </a>
                                                        <a href="javascript:void(0)" class="badge bg-success text-white p-2 text-3 font-weight-400 text-uppercase border-0" onmouseover="this.innerHTML='Click Here';" onmouseout="this.innerHTML='Regulated';" data-toggle="modal" data-target="#myModal001">Regulated</a>
                                                        <div class="broker-tooltip">
                                                            <div class="broker-info-container">
                                                                <h3>Company Name</h3>
                                                                <p>FXCC_FXBNP</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </td>
                                            <td>
                                                <div class="social-share-icons d-flex flex-column fs-12">
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
                                            <td class="display-none">
                                                <div class="d-flex flex-column">
                                                    <span><img src="assets/images/flag/it.png" width="24" alt=""></span>
                                                    <span>Cyprus, UK, Mauritius</span>
                                                </div>
                                            </td>
                                            <td class="display-none"><span>1:2000</span></td>
                                            <td class="display-none">
                                                <div class="platform-column">
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                    <ul>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                        <li><a href="#" class="text-dark">Web</a></li>
                                                        <li><a href="#" class="text-dark">MT4,</a></li>
                                                        <li><a href="#" class="text-dark">MT5,</a></li>
                                                    </ul>
                                                </div>
                                            </td>
                                            <td class="display-none">
                                                <span>$10</span>
                                            </td>
                                            <td>
                                                <div class="all-btns">
                                                    <a href="#" class="btn bg-warning text-white">website</a>
                                                    <a href="review-detail.html" class="btn bg-success text-white" target="_blank">review</a>
                                                    <a href="#" class="btn bg-info text-white">compare</a>
                                                </div>
                                            </td>

                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row d-block d-sm-block d-md-block d-lg-block d-xl-none">
                        <div class="col-md-12">
                            <div id="sidebar">

                                <div class="row">
                                    <div class="col-xl-12 mb-3 mb-5">
                                        <div id="dismiss">
                                            <i class="fas fa-arrow-left"></i>
                                        </div>
                                    </div>
                                    <div class="col-xl-12">
                                        <div class="d-flex flex-column mb-3">
                                            <div class="mb-2 link-button">
                                                <a href="#">
                                                    <div>
                                                        <span class="text-btn">all forex brokers</span>
                                                        <span class="check-btn"><i class="fas fa-check"></i></span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mb-2 link-button">
                                                <a href="#">
                                                    <div>
                                                        <span class="text-btn">CFD Forex Brokers</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mb-2 link-button">
                                                <a href="#">
                                                    <div>
                                                        <span class="text-btn">Binary Options Brokers</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mb-2 link-button">
                                                <a href="#">
                                                    <div>
                                                        <span class="text-btn">Social Trading Brokers</span>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="mb-2 link-button">
                                                <a href="#">
                                                    <div>
                                                        <span class="text-btn">Crypto Forex Brokers</span>
                                                    </div>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column drop-shadow mb-3">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Broker Catagory">
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck7">
                                                <label class="custom-control-label font-weight-normal" for="customCheck7">Swap free</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck8">
                                                <label class="custom-control-label font-weight-normal" for="customCheck8">ECN Broker</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck9">
                                                <label class="custom-control-label font-weight-normal" for="customCheck9">Deposit Bonus</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck10">
                                                <label class="custom-control-label font-weight-normal" for="customCheck10">Low Spread Broker</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck11">
                                                <label class="custom-control-label font-weight-normal" for="customCheck11">USA Client Broker</label>
                                            </div>
                                            <div class="custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="customCheck12">
                                                <label class="custom-control-label font-weight-normal" for="customCheck12">High Rated Broker</label>
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="badge load-more-badge">Load more</span>
                                                <span class="badge reset-badge"> Reset </span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column drop-shadow mb-3">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Regulatory Authority">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="badge load-more-badge">Load more</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column drop-shadow mb-3">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Country">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="badge load-more-badge">Load more</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column drop-shadow mb-3">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Payment Method">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="badge load-more-badge">Load more</span>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-column drop-shadow mb-3">
                                            <div class="mb-2">
                                                <input type="text" class="form-control" placeholder="Trading Platform">
                                            </div>
                                            <div class="d-flex justify-content-between align-items-center mt-2">
                                                <span class="badge load-more-badge">Load more</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
