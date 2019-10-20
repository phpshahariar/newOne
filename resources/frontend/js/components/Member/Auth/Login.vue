<template>
    <div class="modal show" style="display: block;background: #000000cc;" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div id="login-modal-dialog" class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="authorize_box p-3">
                                <div class="title_dark text-center">
                                    <h2 class="mb-4">Login</h2>
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
                                    <form method="post" action="">
                                        <div class="form-group">
                                            <input type="email" name="email" placeholder="E-mail" required v-model="email">
                                            <small class="text-danger" v-text="emailError"></small>
                                        </div>
                                        <div class="form-group">
                                            <input type="password" id="password-field" name="password" placeholder="Password" required v-model="password">
                                            <span data-toggle="#password-field" class="ion-eye toggle-password"></span>
                                            <small class="text-danger" v-text="passwordError"></small>
                                        </div>
                                        <div class="form-group">
                                            <div class="checkbox_field d-inline">
                                                <input type="checkbox" value="rememberme" id="rememberme" name="rememberme">
                                                <label for="rememberme">Remember me</label>
                                            </div>
                                            <a href="#"  id="forgot_password"  class="forgot_pass theme-color" @click="forgotPasswordDisplay">Forgot Password?</a>
                                        </div>
                                        <div class="form-group text-center">
                                            <button type="button" class="btn btn-default" @click="login">Login</button>
                                        </div>
                                        <div class="form-group text-center">
                                            <span>if you don't have an account <a href="#" @click="registerDisplay" id="join_now" data-toggle="modal" data-target="#signUpModal" class="theme-color"><u>Sign Up</u></a></span>
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
        data () {
            return {
                email: '',
                password: '',
                errorCount: 0,
                emailError: '',
                passwordError: ''
            }
        },
        mounted () {
            document.getElementById('loginModal').addEventListener('click', function(e){
                if (document.getElementById('login-modal-dialog').contains(e.target) === false) {
                    EventBus.$emit('loginDisplay', false)
                }
            })
        },
        methods: {
            resetError () {
                this.errorCount = 0
                this.emailError =''
                this.passwordError = ''
            },
            login () {
                this.resetError()

                // validation
                // check email length
                if (this.email.length === 0) {
                    this.emailError = 'Email address required'
                    this.errorCount++
                }


                // check email with regex

                // chech password length min 8
                if (this.password.length < 8) {
                    this.passwordError = 'Password is too short'
                    this.errorCount++
                }

                    if (this.password.length === 0) {
                        this.passwordError = 'Password Is required'
                        this.errorCount++
                    }


                // sent login request
                if (this.errorCount === 0) {
                    let data = {
                        email: this.email,
                        password: this.password
                    }
                    axios.post('member/login', data)
                        .then(response => {
                            console.log(response)
                        })
                        .catch(error => {
                            if (error.status === 422) {
                                console.log('There is a validation error');
                            } else {
                                console.log('Others error')
                            }
                        })
                }

            }
        }
    }
</script>
