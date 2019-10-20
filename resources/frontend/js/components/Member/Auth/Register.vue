<template>
    <div class="modal show" style="display: block;background: #000000cc;" id="signUpModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="register-modal-dialog" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="authorize_box p-4">
                                <div class="title_dark text-center">
                                    <h2 class="mb-4">REGISTER</h2>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="fb-login-button" data-size="large" data-button-type="continue_with" data-auto-logout-link="false"
                                         data-use-continue-as="false"></div>
                                </div>
                                <div class="d-flex justify-content-center mb-3">
                                    <div class="g-signin2" data-width="254" data-height="40" data-longtitle="true"></div>
                                </div>
                                <div class="text-center position-relative mb-3">
                                    <span class="d-block loginor"></span><span class="pl-2 pr-2 text-muted">or</span>
                                </div>

                                <div class="authorize_form">
                                    <form>
                                        <div class="form-group">
                                            <input type="text" name="first_name" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="last_name" placeholder="Last Name" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password" placeholder="Password" required="">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="password_confirmation" placeholder="Password" required="">
                                        </div>


                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-default">Continue</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <small>By joining I agree to receive emails from Investing Partner.</small>
                                        </div>
                                        <div class="form-group text-center">
                                            <span>Already a Member <a id="sign_in" href="#loginModal" @click="loginDisplay" data-toggle="modal" data-target="#loginModal" class="theme-color"><u>Sign In</u></a></span>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted () {
            document.getElementById('signUpModal').addEventListener('click', function(e){
                if (document.getElementById('register-modal-dialog').contains(e.target) === false) {
                    EventBus.$emit('registerDisplay', false)
                }
            })
        }
    }
</script>
