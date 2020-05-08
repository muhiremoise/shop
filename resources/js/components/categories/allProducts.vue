<template>
    <div>
        <div class="grid grid-3">
            <div class="bg-white mx-2 my-2 shadow-sm border rounded" v-for="product in filteredProducts" :key="product">
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
    filters: {
          capitalize: function(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
          }
    },
    data(){
        return{

        }
    },
}
</script>