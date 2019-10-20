@extends('frontend.layouts.master')
@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <section class="fx_tri">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6 md-pr-1-half">
                    <div class="mb-1-half card card-forex-head">
                        <div class="card-header conurl" align="center">
                            <h4 class="card-title">
                                <a role="button ">
                                  <span class="text-white">
                                    <span class="text-uppercase">Analysis Category</span>
                                  </span>
                                </a>
                            </h4>
                        </div>
                    </div>
                    <div id="accordion" class="faq_content left_menu">
                        <div class="card">
                            <div class="card-header" id="headingOne">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="false" aria-controls="collapseOne">Main Category 1</a> </h6>
                            </div>
                            <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="javascript:void(0)">All Post</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 1</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 2</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 3</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingTwo">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Main Category 2</a> </h6>
                            </div>
                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="javascript:void(0)">Sub Category 1</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 2</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 3</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFour">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">Main Category 3</a> </h6>
                            </div>
                            <div id="collapseFour" class="collapse" aria-labelledby="headingFour" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="javascript:void(0)">Sub Category 1</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 2</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 3</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-header" id="headingFive">
                                <h6 class="mb-0"> <a class="collapsed" data-toggle="collapse" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">Main Category 4</a> </h6>
                            </div>
                            <div id="collapseFive" class="collapse" aria-labelledby="headingFive" data-parent="#accordion">
                                <div class="card-body">
                                    <ul>
                                        <li><a href="javascript:void(0)">Sub Category 1</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 2</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 3</a></li>
                                        <li><a href="javascript:void(0)">Sub Category 4</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-2">
                        <h4 class="trading-session-header mt-1-half border-radius-top-3">Top Forex Brokers</h4>
                        <div class="toggleWrapper">
                            <input type="checkbox" name="forex-brokers" data-value="l1" class="mobileToggle user-toggle" id="forex-brokers" checked="checked">
                            <label for="forex-brokers"></label>
                        </div>
                        <div class="hide-l1">
                            <table class="top-broker-table left-tab">
                                <tbody>
                                <tr>
                                    <td class="width-50 normal">
                                        <div class="position-relative-align">
                                            <span>1</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/FXCC_FXBNP.png" alt="FXCC_FXBNP">
                                            <span class="premium-tag">premium</span>
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="width-50 normal">
                                        <div class="position-relative-align">
                                            <span>2</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/ironfx-logo.jpg" alt="ironfx-logo">
                                            <span class="premium-tag">premium</span>
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="width-50 normal">
                                        <div class="position-relative-align">
                                            <span>3</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                            <span class="premium-tag">premium</span>
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="width-50 normal">
                                        <div class="position-relative-align">
                                            <span>4</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/FXCC_FXBNP.png" alt="FXCC_FXBNP">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="width-50 normal">
                                        <div class="position-relative-align">
                                            <span>5</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="normal width-50">
                                        <div class="position-relative-align">
                                            <span>6</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="normal width-50">
                                        <div class="position-relative-align">
                                            <span>7</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="normal width-50">
                                        <div class="position-relative-align">
                                            <span>8</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="normal width-50">
                                        <div class="position-relative-align">
                                            <span>9</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr>
                                    <td class="normal width-50">
                                        <div class="position-relative-align">
                                            <span>10</span>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="table-broker-img glass">
                                            <img src="../assets/images/broker/Pepperstone.png" alt="Pepperstone">
                                        </div>
                                    </td>
                                    <td class="review"><a href="review-detail.html" target="_blank">Review</a></td>
                                    <td class="signup"><a href="javascript:void(0)" target="_blank">Sign Up</a></td>
                                </tr>
                                <tr class="footer">
                                    <td colspan="4"><a href="broker-review.html" target="_blank">Read More Broker Review</a></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="position-relative">
                        <h4 class="trading-session-header border-radius-top-3">Advertisement</h4>
                        <div class="toggleWrapper">
                            <input type="checkbox" name="forex-cross-rates" data-value="6" class="mobileToggle user-toggle" id="forex-cross-rates-1" checked="checked">
                            <label for="forex-cross-rates-1"></label>
                        </div>
                        <div class="hide-6">
                            <table class="ad-table">
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/best-fxvps.png">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/fxsvps.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/fxvpspro.png">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 md-pl-1-half md-pr-1-half" id="seconddiv">
                    <div class="mid-content position-relative">
                        <i class="fa fa-align-justify side-toggle toggle-pos-new d-none d-lg-pro"></i>
                        <div class="title-container">
                            <h2 class="forex-header-second"><span>FX Analysis detail</span></h2>
                        </div>
                        <div class="topic-head-title toggled">
                            <h2>{{ $slug->title }}</h2>
                            <div class="container d-none d-lg-block d-md-block">
                            </div>
                        </div>
                        <div class="post-info">
                            <span><i class="fa fa-user text-yellow"></i> <a href="javascript:void(0)">{{ $slug->created }}</a></span>
                            <span><i class="fa fa-folder text-yellow"></i> <a href="javascript:void(0)">Forex</a>, <a href="javascript:void(0)">Bitcoin</a></span>
                            <span><i class="fa fa-clock-o text-yellow"></i> {{ date('F j Y', strtotime($slug->created_at)) }}</span>
                            <span><i class="fa fa-eye text-yellow"></i> 999</span>
                            <span><i class="fa fa-comment text-yellow"></i> 999</span>
                        </div>
                        <div class="school-content">
                            <h4>What is FXMASTERMIND?</h4>
                            <div class="border-combo">
                                <p class="line-green"></p>
                                <p class="line-rellow"></p>
                            </div>
                            <p>
                                {{ $slug->body }}
                            </p>
                        </div>
                        <div class="school-content">
                            <img src="{{ $slug->feature_image }}">
                        </div>
                        <div class="like-share-page">
                            <div class="like">
                                <a href="javascript:void(0)" class="liked"><i class="fa fa-thumbs-up"></i></a>
                                <span class="count-tag">100K</span>
                            </div>
                            <div class="social-shares"></div>
                            <ul class="pagination">
                                <li class="page-item"><span class="page-link"><</span></li>
                                <li class="page-item"><span class="page-link"><<</span></li>
                                <li class="page-item active"><span class="page-link">1</span></li>
                                <li class="page-item"><span class="page-link">2</span></li>
                                <li class="page-item"><span class="page-link">3</span></li>
                                <li class="page-item"><span class="page-link">>></span></li>
                                <li class="page-item"><span class="page-link">></span></li>
                            </ul>
                        </div>
                        <div class="comment-container">
                            <div class="rate-post">
                                <h6 class="rate-title">Please Rate this post</h6>
                                <div class="rating" data-rateyo-star-width="15px"></div>
                                <span class="badge badge-primary2">0</span>
                                <i class="fa fa-user ml-2 mr-1"></i><span>10</span>
                            </div>
                            <div class="top-bar">
                                <div class="left-side">
                                    <i class="fa fa-sign-in"></i>
                                    <span>Please <a href="javascript:void(0)">Login</a> to comment</span>
                                </div>
                                <div class="right-side">
                                    <span class="login-text">Login With</span>
                                    <span class="social fb"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></span>
                                    <span class="social google"><a href="javascript:void(0)"><i class="fa fa-google"></i></a></span>
                                </div>
                            </div>
                            <div class="comment-box">
                                <div class="form-group">
                                    <div class="comment-avatar">
                                        <img src="../assets/images/none.png" alt="">
                                    </div>
                                    <textarea name="" placeholder="Write Your Comment" class="form-control enter_comment"></textarea>
                                </div>
                                <div class="sign-as-guest">
                                    <div class="row">
                                        <div class="col-md-6 signup-form md-no-pr">
                                            <div class="form-group">
                                                <input type="text" class="form-control" placeholder="name">
                                            </div>
                                            <div class="form-group">
                                                <input type="email" class="form-control" placeholder="email">
                                            </div>
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a href="javascript:void(0)" class="btn btn-default custom-btn"><span>Post Your Comment</span></a>
                                            <div class="fb-post-check">
                                                <input class="styled-checkbox" id="styled-checkbox-1" type="checkbox" value="value1">
                                                <label for="styled-checkbox-1"></label>Share In Facebook
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-and-reply pb-20">
                                <div class="comment">
                                    <div class="user-avater">
                                        <img src="../assets/images/none.png" alt="">
                                        <span>Johnathan</span>
                                    </div>
                                    <div class="user-comment">
                                        <p>Rather than be constrained by ideas for new products, services and new markets coming from just a few people</p>
                                        <div class="like">
                                            <a href="javascript:void(0)" class="liked"><i class="fa fa-thumbs-up"></i></a>
                                            <span class="count-tag">100K</span>
                                        </div>
                                        <div class="like">
                                            <a href="javascript:void(0)" class="disliked"><i class="fa fa-thumbs-down"></i></a>
                                            <span class="count-tag dislike">100K</span>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-danger edit-btn"><span>Edit</span></a>
                                        <a href="javascript:void(0)" class="btn btn-default reply-btn"><span>Reply</span></a>
                                        <span class="posted-time"><i class="fa fa-clock-o"></i>  28th Jan,2019 3:50 PM</span>

                                        <div class="reply-section">
                                            <div class="top-bar">
                                                <div class="left-side">
                                                    <i class="fa fa-sign-in"></i>
                                                    <span>Please <a href="javascript:void(0)">Login</a> to comment</span>
                                                </div>
                                                <div class="right-side">
                                                    <span class="login-text">Login With</span>
                                                    <span class="social fb"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></span>
                                                    <span class="social google"><a href="javascript:void(0)"><i class="fa fa-google"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" placeholder="Write Your Reply" class="form-control enter_comment"></textarea>
                                            </div>
                                            <div class="sign-as-guest">
                                                <div class="row">
                                                    <div class="col-md-6 signup-form md-no-pr">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="javascript:void(0)" class="btn btn-default custom-btn"><span>Post Your Reply</span></a>
                                                        <div class="fb-post-check">
                                                            <input class="styled-checkbox" id="styled-checkbox-3" type="checkbox" value="value1">
                                                            <label for="styled-checkbox-3"></label>Share In Facebook
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="comments-and-reply pb-20">
                                <div class="comment">
                                    <div class="user-avater">
                                        <img src="../assets/images/none.png" alt="">
                                        <span>Johnathan</span>
                                    </div>
                                    <div class="user-comment">
                                        <p>Rather than be constrained by ideas for new products, services and new markets coming from just a few people</p>
                                        <div class="like">
                                            <a href="javascript:void(0)" class="liked"><i class="fa fa-thumbs-up"></i></a>
                                            <span class="count-tag">100K</span>
                                        </div>
                                        <div class="like">
                                            <a href="javascript:void(0)" class="disliked"><i class="fa fa-thumbs-down"></i></a>
                                            <span class="count-tag dislike">100K</span>
                                        </div>
                                        <a href="javascript:void(0)" class="btn btn-default reply-btn"><span>Reply</span></a>
                                        <span class="posted-time"><i class="fa fa-clock-o"></i>  28th Jan,2019 3:50 PM</span>
                                        <div class="reply-section">
                                            <div class="top-bar">
                                                <div class="left-side">
                                                    <i class="fa fa-sign-in"></i>
                                                    <span>Please <a href="javascript:void(0)">Login</a> to comment</span>
                                                </div>
                                                <div class="right-side">
                                                    <span class="login-text">Login With</span>
                                                    <span class="social fb"><a href="javascript:void(0)"><i class="fa fa-facebook"></i></a></span>
                                                    <span class="social google"><a href="javascript:void(0)"><i class="fa fa-google"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <textarea name="" placeholder="Write Your Reply" class="form-control enter_comment"></textarea>
                                            </div>
                                            <div class="sign-as-guest">
                                                <div class="row">
                                                    <div class="col-md-6 signup-form md-no-pr">
                                                        <div class="form-group">
                                                            <input type="text" class="form-control" placeholder="name">
                                                        </div>
                                                        <div class="form-group">
                                                            <input type="email" class="form-control" placeholder="email">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 text-right">
                                                        <a href="javascript:void(0)" class="btn btn-default custom-btn"><span>Post Your Reply</span></a>
                                                        <div class="fb-post-check">
                                                            <input class="styled-checkbox" id="styled-checkbox-2" type="checkbox" value="value1">
                                                            <label for="styled-checkbox-2"></label>Share In Facebook
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="next-prev-post">
                            <div class="prev-post">
                                <a href="javascript:void(0)" class="btn btn-default custom-btn radius-2px"><i class="ion-ios-arrow-thin-left"></i> <span>Previous Analysis</span></a>
                            </div>
                            <div class="next-post pull-right">
                                <a href="javascript:void(0)" class="btn btn-default custom-btn radius-2px"><span>Next Analysis</span> <i class="ion-ios-arrow-thin-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 md-pl-1-half" id="thirddiv">
                    <div class="row signal-table">
                        <div class="col-md-12 ">
                            <table class=" trades-table">
                                <tr>
                                    <td colspan="5" class="abor3 text-center border-radius-top-3" style="font-size: 15px">Recent Closed Trades</td>
                                </tr>
                                <tr>
                                    <td class="abor3 text-center">
                                        <span>Currency</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>Signal</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>Profit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>Time</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="conurl text-center">
                                        <a href="#">
                                            <img src="../assets/images/flag.png" alt="flag">
                                        </a>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>BUY Limit</span>
                                    </td>
                                    <td class="abor3 text-center">
                                        <span>60 pips</span>
                                    </td>
                                    <td class="text-center">
                                        <span>5 days ago</span>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <!-- Analysis -->
                    <div class="position-relative">
                        <h4 class="trading-session-header mt-2">Latest Analysis</h4>
                        <div class="">
                            <ul class="custum-nav-indicator master-upper nav nav-tabs nav-tabs-transparent indicator-primary market-panal-bg" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link withoutripple active" href="#recent" aria-controls="cat1" role="tab" data-toggle="tab">
                                        <span>Recent Analysis</span>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link withoutripple" href="#popular"  aria-controls="cat1" role="tab" data-toggle="tab">
                                        <span>Recent Comments</span>
                                    </a>
                                </li>
                            </ul>
                            <div class="panel-body  ">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane active show fade" id="recent">
                                        <div class="recent-analysis-container" data-simplebar>
                                            <ul class="profile-list">
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-eye mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="popular">
                                        <div class="recent-analysis-container" data-simplebar>
                                            <ul class="profile-list">
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-thumbs-down mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-down mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-down mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="analysis-icon">
                                                        <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                                    </div>
                                                    <div class="analysis-discription">
                                                        <div class="right-info-container">
                                                            <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                            <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                            <p class="vc-num">
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-up mr10"></i>
                                                              <span id="ip_view"> 2,461</span>
                                                              </span>
                                                              <span class="bp-view">
                                                              <i class="fa fa-thumbs-down mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                               <span class="bp-view">
                                                              <i class="fa fa-comments mr10"></i>
                                                              <span id="ip_view"> 2453</span>
                                                              </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Analysis END -->
                    <!-- Related Posts -->
                    <div class="position-relative">
                        <h4 class="trading-session-header mt-2">Related Analysis</h4>
                        <div class="toggleWrapper">
                            <input type="checkbox" name="forex-cross-rates" data-value="7" class="mobileToggle user-toggle" id="forex-cross-rates-2" checked="checked">
                            <label for="forex-cross-rates-2"></label>
                        </div>
                        <div class="hide-7">
                            <div class="recent-analysis-container" data-simplebar>
                                <ul class="profile-list">
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                                  <span class="bp-view">
                                                  <i class="fa fa-comments mr10"></i>
                                                  <span id="ip_view"> 2,461</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-eye mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-thumbs-up mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                                  <span class="bp-view">
                                                  <i class="fa fa-comments mr10"></i>
                                                  <span id="ip_view"> 2,461</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-eye mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-thumbs-up mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                                  <span class="bp-view">
                                                  <i class="fa fa-comments mr10"></i>
                                                  <span id="ip_view"> 2,461</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-eye mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-thumbs-up mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                                  <span class="bp-view">
                                                  <i class="fa fa-comments mr10"></i>
                                                  <span id="ip_view"> 2,461</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-eye mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                  <span class="bp-view">
                                                  <i class="fa fa-thumbs-up mr10"></i>
                                                  <span id="ip_view"> 2453</span>
                                                  </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                              <span class="bp-view">
                                              <i class="fa fa-comments mr10"></i>
                                              <span id="ip_view"> 2,461</span>
                                              </span>
                                               <span class="bp-view">
                                              <i class="fa fa-eye mr10"></i>
                                              <span id="ip_view"> 2453</span>
                                              </span>
                                              <span class="bp-view">
                                              <i class="fa fa-thumbs-up mr10"></i>
                                              <span id="ip_view"> 2453</span>
                                              </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="analysis-icon">
                                            <img src="../assets/images/city.jpg" alt="..." class="pro-img">
                                        </div>
                                        <div class="analysis-discription">
                                            <div class="right-info-container">
                                                <h4 class="profile-name conurl"><a href="analysis-detail.html" target="_blank">Forex Research</a></h4>
                                                <p class="discription">Forex is a signal based trading system. It has become very popular.</p>
                                                <p class="vc-num">
                                                    <span class="bp-view">
                                                      <i class="fa fa-comments mr10"></i>
                                                      <span id="ip_view"> 2,461</span>
                                                    </span>
                                                    <span class="bp-view">
                                                      <i class="fa fa-eye mr10"></i>
                                                      <span id="ip_view"> 2453</span>
                                                    </span>
                                                    <span class="bp-view">
                                                      <i class="fa fa-thumbs-up mr10"></i>
                                                      <span id="ip_view"> 2453</span>
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- Related Posts END -->

                    <div class="position-relative mt-2">
                        <h4 class="trading-session-header mt-1-half border-radius-top-3 bg-success">Need Help ?</h4>
                        <div class="container">
                            <div class="row helper">
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-university"></i>
                                        <span>Broker</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-money-bill-alt"></i>
                                        <span>Bonus</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-graduation-cap"></i>
                                        <span>Training</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-info"></i>
                                        <span>Guideline</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="far fa-chart-bar"></i>
                                        <span>Trading</span>
                                    </a>
                                </div>
                                <div class="col-md-6">
                                    <a href="javascript:void(0)">
                                        <i class="fa fa-bullhorn"></i>
                                        <span>Expert Appointment</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative">
                        <h4 class="trading-session-header mt-2 border-radius-top-3">Advertisement</h4>
                        <div class="toggleWrapper">
                            <input type="checkbox" name="forex-cross-rates" data-value="6" class="mobileToggle user-toggle" id="forex-cross-rates-1" checked="checked">
                            <label for="forex-cross-rates-1"></label>
                        </div>
                        <div class="hide-6">
                            <table class="ad-table">
                                <tbody>
                                <tr>
                                    <td colspan="2">
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/best-fxvps.png">
                                        </a>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/fxsvps.png">
                                        </a>
                                    </td>
                                    <td>
                                        <a href="javascript:void(0)" target="_blank">
                                            <img src="../assets/images/add/fxvpspro.png">
                                        </a>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="position-relative mt-2">
                        <h4 class="trading-session-header mt-1-half border-radius-top-3">ARCHIVE</h4>
                        <div class="archive-select">
                            <div class="form-group">
                                <select name="" id="" class="form-control">
                                    <option value="Select Month">Select Month</option>
                                    <option value="Select Month">January 2019</option>
                                    <option value="Select Month">December 2018</option>
                                    <option value="Select Month">November 2018</option>
                                    <option value="Select Month">October 2018</option>
                                </select>
                                <span class="arrow" role="presentation">
                                </span>
                            </div>
                        </div>
                    </div>
                    <div class="position-relative mt-2">
                        <h4 class="trading-session-header mt-1-half border-radius-top-3">Tags</h4>
                        <div class="tag-container">
                            <a href="javascript:void(0)" class="tags">Forex</a>
                            <a href="javascript:void(0)" class="tags">advisors</a>
                            <a href="javascript:void(0)" class="tags">benchmarks</a>
                            <a href="javascript:void(0)" class="tags">finance</a>
                            <a href="javascript:void(0)" class="tags">technology</a>
                            <a href="javascript:void(0)" class="tags">bitcoin</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="floating-share">
        <div class="social-shares"></div>
    </div>
@endsection
