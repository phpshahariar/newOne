<template>
    <div>
        <div>
            <login v-if="LoginDisplayStatus" />
            <register v-if="RegisterDisplayStatus" />
            <forgot-password v-if="ForgotPassowrdDisplayStatus" />
        </div>
    </div>
</template>

<script>
    import Login from './Login.vue'
    import Register from './Register.vue'
    import ForgotPassword from './ForgotPassword.vue'
    export default {
        name:'AuthenticationModal',
        data () {
            return {
                LoginDisplayStatus: false,
                RegisterDisplayStatus: false,
                ForgotPassowrdDisplayStatus: false
            }
        },
        methods: {
            closeAllModal () {
                this.LoginDisplayStatus = false
                this.RegisterDisplayStatus = false
                this.ForgotPassowrdDisplayStatus = false
            }
        },
        created () {
            if (InvestingPartner.auth === null) {
                this.displayStatus = true
            }
            EventBus.$on('loginDisplay', (payload) => {
                this.closeAllModal()
                if (payload === true) {
                    this.LoginDisplayStatus = true
                }

            })
            EventBus.$on('registerDisplay', (payload) => {
                this.closeAllModal()
                if (payload === true) {
                    this.RegisterDisplayStatus = true
                }
            })
            EventBus.$on('forgotPasswordDisplay', (payload) => {
                this.closeAllModal()
                if (payload === true) {
                    this.ForgotPassowrdDisplayStatus = true
                }
            })
        },
        components: {
            Login,
            Register,
            ForgotPassword
        }
    }
</script>
