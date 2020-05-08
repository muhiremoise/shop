<template>
    <div class="w-100 mx-auto" style="margin-top: -44px">
        <carousel-3d :autoplay="true" :autoplay-timeout="2000" :width="1000" :height="280" :display="3" 
                :controls-visible="true" :controls-prev-javascript="'U+2B98;'" :controls-next-javascript="'10093;'">
            <slide  v-for="(slide, i) in slides" :key="slide" :index="i" class="border-none">
                <figure class="w-100">
                    <img :src="slide.img" />
                </figure>
            </slide>
        </carousel-3d>
        
    </div>
</template>

<script>
    import { Carousel3d, Slide } from 'vue-carousel-3d';
    export default {
       components: {
            Carousel3d,
            Slide
        },
        data(){
            return{
                
                slides: [
                    {img: 'images/slider-1.jpg', title: 'Slide 1'},
                    {img: 'images/slider-2.jpg', title: 'Slide 2'},
                    {img: 'images/slider-1.jpg', title: 'Slide 3'},
                    {img: 'images/slider-2.jpg', title: 'Slide 4'},
                    {img: 'images/slider-1.jpg', title: 'Slide 5'},
                    {img: 'images/slider-2.jpg', title: 'Slide 6'}
                ]
            }
        },
        methods:{
             
        } 
    }
</script>
<style scoped>
    .carousel-3d-controls{
        background: red;
    }
   

</style>
