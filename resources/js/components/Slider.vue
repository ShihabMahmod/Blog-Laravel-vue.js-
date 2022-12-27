<template>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../Slider/1.jpg" class="image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Some representative placeholder content for the first slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Slider/2.jpg" class="image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Some representative placeholder content for the second slide.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../Slider/3.jpg" class="image d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Some representative placeholder content for the third slide.</p>
                </div>
            </div>
        </div>
    </div>
</template>


<script>

export default {

    name: 'Slider'
}

</script>

<style scoped>
    .carousel{
        width: 100%;
        height: 100%;
    }
    .carousel-item{
        height: 100%;
        width: 100%;
    }
    .image{
        height: 800px;
    }

</style>