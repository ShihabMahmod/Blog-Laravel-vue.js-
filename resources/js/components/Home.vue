<template>
    <div>
        <Header />
        <Slider />
        <div class="container">
            <h1>Home</h1>
        <button class="btn btn-success">Button</button>
        </div>
        <Footer />
    </div>
</template>


<script>

import Header from './Header.vue';
import Slider from './Slider.vue';
import Footer from './Footer.vue';

export default{
    name : 'Home',
    components:{
        Header,
        Slider,
        Footer
    }
}

</script>