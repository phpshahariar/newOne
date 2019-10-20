
    export default {
        methods: {
            loginDisplay () {
                EventBus.$emit('loginDisplay', true)
            },
            registerDisplay () {
                EventBus.$emit('registerDisplay', true)
            },
            forgotPasswordDisplay () {
                EventBus.$emit('forgotPasswordDisplay', true)
            }
        }
    }
