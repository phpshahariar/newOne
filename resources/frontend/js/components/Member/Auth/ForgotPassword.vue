<template>
    <div class="modal show" style="display: block;background: #000000cc;" id="forgotModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="forgot-modal-dialog" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="authorize_box p-4">
                                <div class="title_dark text-center mb-3">
                                    <h2>Reset Password</h2>
                                </div>
                                <div class=" text-muted text-center mb-3">
                                    <p>Please enter your email address and we'll send you a link to reset your password.</p>
                                </div>

                                <div class="authorize_form">
                                    <form>
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-mail" required="">
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="submit" class="btn btn-default">Send Email</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <small>By joining I agree to receive emails from Investing Partner.</small>
                                        </div>
                                        <div class="form-group text-center">
                                            <span>Already a Member <a id="sign_in_on_forgot" href="#loginModal" @click="loginDisplay" data-toggle="modal" data-target="#loginModal" class="theme-color"><u>Sign In</u></a></span>
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
            document.getElementById('forgotModal').addEventListener('click', function(e){
                if (document.getElementById('forgot-modal-dialog').contains(e.target) === false) {
                    EventBus.$emit('forgotPasswordDisplay', false)
                }
            })
        }
    }
</script>
