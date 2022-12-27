<template>
    <div>
        <Header />
        <SliderCommon />
        <div>
            <section class="h-100 gradient-form" style="background-color: #eee;">
                <div class="container py-5 h-100">
                    <div class="row d-flex justify-content-center align-items-center h-100">
                        <div class="col-xl-10">
                            <div class="card rounded-3 text-black">
                                <div class="row g-0">
                                    <div class="col-lg-6">
                                        <div class="card-body p-md-5 mx-md-4">

                                            <div class="text-center">
                                                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                                                    style="width: 185px;" alt="logo">
                                                <h4 class="mt-1 mb-5 pb-1">We are The Lotus Team</h4>
                                            </div>
                                            <p v-if="mag">{{ msg }}</p>
                                            <form @submit="registration" method="POST" >
                                                <p>Please provide your details</p>

                                                <div class="form-outline mb-4">
                                                    <input type="text" v-model="signup.name" class="form-control"
                                                        placeholder="Full Name"  />
                                                    <label class="form-label" for="form2Example11">User name</label>
                                                    <p v-if="nameError">{{ nameError }}</p>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="email" v-model="signup.email" class="form-control"
                                                        placeholder="Email Address" />
                                                    <label class="form-label" for="form2Example11">User email</label>
                                                </div>

                                                <div class="form-outline mb-4">
                                                    <input type="password" v-model="signup.password" class="form-control" />
                                                    <label class="form-label" for="form2Example22">Password</label>
                                                </div>

                                                <div class="text-center pt-1 mb-5 pb-1">
                                                    <button
                                                        class="btn btn-primary btn-block fa-lg gradient-custom-2 mb-3"
                                                        type="submit">Log
                                                        in</button>
                                                    <a class="text-muted" href="#!">Forgot password?</a>
                                                </div>

                                                <div class="d-flex align-items-center justify-content-center pb-4">
                                                    <p class="mb-0 me-2">Don't have an account?</p>
                                                    <button type="button" class="btn btn-outline-danger">Create
                                                        new</button>
                                                </div>

                                            </form>

                                        </div>
                                    </div>
                                    <div class="col-lg-6 d-flex align-items-center gradient-custom-2">
                                        <div class="text-white px-3 py-4 p-md-5 mx-md-4">
                                            <h4 class="mb-4">We are more than just a company</h4>
                                            <p class="small mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing
                                                elit, sed do eiusmod
                                                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                                veniam, quis nostrud
                                                exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <Footer />
    </div>
</template>
<script>

import Header from './Header.vue';
import SliderCommon from './SliderCommon.vue';
import axios from 'axios';
import Footer from './Footer.vue';


export default{
    name : 'Login',
    components:{
        Header,
        SliderCommon,
        Footer
    },
    data()
    {
        return{
            signup:{
                name : null,
                email :  null,
                password : null,
                nameError : null,
                emailError : null,
                passwordError : null,
                msg : null
            }
        }
    },
    methods:{
        registration(e)
        {
            e.preventDefault();

            axios.post("http://localhost:8000/api/sign-up/",this.signup).then((result)=>{
                this.msg = result.data.msg;
            });
                this.name = null,
                this.email =  null,
                this.password = null
        }
    }
    
}

</script>

<style scoped>

.gradient-custom-2 {
background: #221A70;

}

@media (min-width: 768px) {
.gradient-form {
height: 100vh !important;
}
}
@media (min-width: 769px) {
.gradient-custom-2 {
border-top-right-radius: .3rem;
border-bottom-right-radius: .3rem;
}
}
</style>