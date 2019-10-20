@extends('member.layouts.master-login')

@section('content')
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="authorize_box mt-5 mb-5 p-4" style="box-shadow: 0 5px 30px rgba(0, 0, 0, 0.1);">
                        <div class="title_dark text-center">
                            <h2 class="mb-4">REGISTER</h2>
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
                            <form method="POST" action="{{ url('member/register') }}">
                                @csrf
                                <div class="form-group">
                                    <input type="text" class="@error('first_name') is-invalid @enderror" value="{{ old('first_name') }}" name="first_name"  placeholder="First Name" required="">
                                    @error('first_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="text" name="last_name" class="@error('last_name') is-invalid @enderror" value="{{ old('last_name') }}" placeholder="Last Name" required="">
                                    @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="@error('email') is-invalid @enderror" value="{{ old('email') }}" placeholder="E-mail" required="">
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="@error('password') is-invalid @enderror" placeholder="Enter Password" required="">
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password_confirmation" class="@error('password_confirmation') is-invalid @enderror" placeholder="Enter Confirm Password" required="">
                                    @error('password_confirmation')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>


                                <div class="form-group text-center">
                                    <button type="submit" class="btn btn-default">Continue</button>
                                </div>
                                <div class="form-group text-center">
                                    <small>By joining I agree to receive emails from Investing Partner.</small>
                                </div>
                                <div class="form-group text-center">
                                    <span>Already a Member <a href="{{ url('member/login') }}" class="theme-color"><u>Sign In</u></a></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
