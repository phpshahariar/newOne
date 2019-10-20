<template>
    <div>
        <li class="nav-item dropdown bg-light" style="border-radius: 20px;">
            <a style="color: black" class="nav-link" href="#" role="button" id="dropdownLanguage" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                {{ full_name }} <i class="fas fa-angle-down"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                <a class="dropdown-item" href="#" @click="loginDisplay"> <i class="fas fa-sign-in-alt"></i> Account Settings</a>
                <a class="dropdown-item" href="#" @click="registerDisplay"> <i class="fas fa-user-alt"></i> Logout</a>
            </div>
        </li>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                full_name: InvestingPartner.auth.first_name + ' ' + InvestingPartner.auth.last_name
            }
        }
    }
</script>
