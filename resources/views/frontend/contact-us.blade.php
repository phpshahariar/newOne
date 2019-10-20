@extends('frontend.layouts.master')

@section('content')
    @include('frontend.layouts.includes.trading-ticker')
    <section class="header-with-pic contact-bg">
        <div class="middle-text">
            <h2>CONTACT US</h2>
            <p>We are at the forefront of innovation. <br/>Discover with us the possibilities of your next dream.</p>
        </div>
    </section>
    <section class="contact-header">
        <div class="company-content container-fluid career">
            <div class="row">
                <div class="col-sm-3 contact-div">
                    <div class="contact-icon">
                        <img src="assets/images/contact/smartphone-call.png">
                    </div>
                    <div class="icon-title">PHONE</div>
                    <div class="contact-detail">
                        <p>SVG Office : +442032393863</p>
                        <p>Dubai Office : 072042799</p>
                    </div>
                </div>
                <div class="col-sm-3 contact-div">
                    <div class="contact-icon">
                        <img src="assets/images/contact/place.png">
                    </div>
                    <div class="icon-title">SVG Office</div>
                    <p class="ltd">Global Intergrated Capitech Markets Ltd.</p>
                    <div class="contact-detail">
                        <p>Shamrock Lodge</p>
                        <p>Murray Road, Kingstown</p>
                        <p>St. Vincent and The Grenadines</p>
                    </div>
                </div>
                <div class="col-sm-3 contact-div">
                    <div class="contact-icon">
                        <img src="assets/images/contact/place.png">
                    </div>
                    <div class="icon-title">Dubai, Office</div>
                    <p class="ltd">Global Intergrated Capitech Markets Ltd.</p>
                    <div class="contact-detail">
                        <p>Business Center-4 ( 8th Floor)</p>
                        <p>P.O. Box 325 782</p>
                        <p>Ras Al Khaimah, United Arab Emirates</p>
                        <p>Fax: 072041010</p>
                    </div>
                </div>
                <div class="col-sm-3 contact-div">
                    <div class="contact-icon">
                        <img src="assets/images/contact/envelope.png">
                    </div>
                    <div class="icon-title">Email</div>
                    <div class="contact-detail">
                        <p>support@gicmarkets.com</p>
                        <p>help@gicmarkets.net</p>
                        <p>info@gicmarkets.net </p>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <section class="contact-form-main">
        <div class="container">
            <h3>IF YOU GOT ANY QUESTIONS PLEASE DO NO HESITATE TO CONTACT US</h3>
            <form action="{{ url('/customer/contact/mail') }}" method="post" class="">
                @csrf
                <div class="form-group">
                    <div class="select-div">
                        <select name="department" class="form-control" required="required">
                            <option value="#" disabled="disabled" selected="selected" hidden="hidden">Department</option>
                            <option value="1">General Enquiries</option>
                            <option value="2">Signal Service</option>
                            <option value="3">Copytrade Service</option>
                            <option value="4">Fund Management Service</option>
                            <option value="5">FX Consultancy Service</option>
                            <option value="6">Broker Review Submission</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <div class="select-div">
                        <select name="priority" class="form-control" required="required">
                            <option value="#" disabled="disabled" selected="selected" hidden="hidden">Priority</option>
                            <option value="7">High</option>
                            <option value="8">Medium</option>
                            <option value="9">Low</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="first_name" placeholder="Name" required="required">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" name="email" placeholder="Email" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="phone" placeholder="Phone Number" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="address" placeholder="Address" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="city" placeholder="Subject" required="required">
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" rows="6" placeholder="Message"></textarea>
                </div>
                <p>WHAT IS 4+3 ? (SIMPLE SPAM CHECKER)</p>
                <div class="form-group">
                    <input type="text" class="form-control" name="answer" placeholder="Enter Your Answer" required="required">
                </div>
                <div class="col-md-12">
                    <input type="submit" class="btn btn-default custom-btn radius-2px" value="Send Message">
                </div>
            </form>
        </div>
    </section>
    <section class="address-map">
        <div class="map-container">
            <div class="map-shadow"></div>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3885.0500262195796!2d-61.22327608611501!3d13.159244514295702!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8c475159ce0ae9dd%3A0x3c836838cc979bc3!2sGrand+Finance!5e0!3m2!1sen!2sbd!4v1542878785316" width="100%" height="100%" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
    </section>

    <!-- Share Float -->
    <div class="floating-share">
        <div class="social-shares"></div>
    </div>
@endsection
