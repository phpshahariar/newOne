@extends('member.layouts.master-login')

@section('content')

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    @if(Session::get('message'))
                        <p class="alert alert-success" style="text-align: center">{{ Session::get('message') }}</p>
                    @endif
                    @if(Session::get('error'))
                        <p class="alert alert-danger" style="text-align: center">{{ Session::get('error') }}</p>
                    @endif
                    @if(Session::get('incorrect'))
                        <p class="alert alert-danger" style="text-align: center">{{ Session::get('incorrect') }}</p>
                    @endif
                    <div class="authorize_box mt-5 mb-5 p-5" style="box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);">
                        <div class="title_dark text-center">
                            <h2 class="mb-4">Login</h2>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-auto-logout-link="false" data-use-continue-as="false"></div>
                        </div>
                        <div class="d-flex justify-content-center mb-3">
                            <div class="g-signin2" data-width="254" data-height="40" data-longtitle="true"></div>
                        </div>
                        <div class="text-center position-relative mb-3">
                            <span class="d-block loginor"></span><span class="pl-2 pr-2 text-muted">or</span>
                        </div>

                        <div class="authorize_form">
                            <form method="POST" action="{{ url('/member/login') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="E-mail" required="">
                                </div>
                                <div class="form-group">
                                    <input type="password" id="password-field" name="password" placeholder="Password">

                                </div>
                                <div class="form-group">
                                    <div class="checkbox_field d-inline">
                                        <input type="checkbox" value="rememberme" id="rememberme" name="rememberme">
                                        <label for="rememberme">Remember me</label>
                                    </div>
                                    <a href="lost-password.html" class="forgot_pass theme-color">Forgot Password?</a>
                                </div>
                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-default">Login</button>
                                </div>
                                <div class="form-group text-center">
                                    <span>if you don't have an account <a href="{{ url('member/register') }}" class="theme-color"><u>Sign Up</u></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
