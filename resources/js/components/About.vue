<template>
    <div>
        <Header />
        <SliderCommon />
        <div class="container">
            <h1>About</h1>
        </div>
        <Footer />
    </div>
</template>

<script>

import Header from './Header.vue';
import SliderCommon from './SliderCommon.vue';
import Footer from './Footer.vue';

export default{
    name : 'About',
    components:{
        Header,
        SliderCommon,
        Footer
    }
}

</script>