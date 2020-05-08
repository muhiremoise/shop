<template>

<div class="w-90 mx-auto pt-4">
        <div class="text-center pb-5">
            <h1 class="text-2xl">Welcome To Our Shop</h1>
        </div>
        

        <div class="card-deck">
                <div class="card" v-for="product in products" v-blind:key="product.id">
                    <div class="h-px-200">
                        <a href="">
                        <img class="clip-full" src="" alt="Card image cap">
                        </a>
                    </div>
                <div class="card-body text-center">
                    <a class="no-underline text-grey-darkest" href="">
                    <h5 class="text-2xl">{{ product.name }}</h5>
                    </a>
                    
                    <p> {{ product.price }} </p>
                </div>
                </div>
          </div>
    </div>

</template>

<script>
    export default{
        data(){
            return {
                products : [],
                product: {
                    id: '',
                    name: '',
                    slug: '',
                    details: '',
                    description: '',
                }, product_id: '',
                edit: false
            }
        },

        created(){
            this.fetchProducts();
        },

        methods:{
            fetchProducts(){
                fetch('api/products')
                    .then(res => res.json())
                    .then(res => {
                        this.articles = res.data;
                    })
            }
        },
        
    }