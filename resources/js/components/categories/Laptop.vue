<template>
    <div class="grid grid-3">
        <div class="bg-white mx-2 my-2 shadow-sm border rounded" v-for="laptop in laptops" :key="laptop.name">
            <div class="h-px-200">
                <img :src="product.img" alt="">
            </div>
            <div class="card-body mt-5">
                <div>
                    <a class="no-underline text-grey-darkest" href="">
                        <h5 class="text-xl">{{product.name | capitalize}}</h5>
                    </a>
                    <h6 class="text-green">Price: {{product.price}}</h6>
                </div>
                <div class="text-centered mt-1">
                    <button class="btn border bg-orange btn-sm">
                        <a class="no-underline text-white" href="">
                            <h5 class="text-xl pt-2">Add To Cart</h5>
                        </a>
                    </button>
                </div>
            </div>
        </div>  
    </div>
</template>

<script>
export default {
    props:{
        products:{
            type: Array
        },
        filteredProducts:{
            type: Function
        }
    },
    data(){
        return{

        }
    },
    computed:{
        laptops(){
            return this.products.filter(product => {
            return product.category === 'laptop'
            console.log('Function is done')
            })
        },
    }
    
}
</script>