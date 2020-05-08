<template>
    <div>
        <div class="w-90">
        <div class="text-center py-3">
            <h1 class="text-3xl">Shop Page Here</h1>
        </div>
        
        <div class="w-100 flex">
            <div class="w-25">
                <div class="w-80 mx-auto  card shadow-sm">
                    <div class="w-100 my-auto">
                        <input class="w-100 rounded border-none border" type="text" v-model="search" placeholder="Search...">
                    </div>   
                </div>
                <div class="">
                    <div class="w-80 mx-auto  card mt-3 shadow-sm">
                        <ul class="list">
                            <li class="text-lg font-weight-bold">By Category</li>
                            <li class="text-sm mt-3 w"  style="border-bottom: 1px grey solid" v-on:click="component='all-products'">
                                <a href="" class="text-black hover:" style="text-decoration:none">
                                    <h3 class="text-lg">All</h3>
                                </a>
                            </li>
                            <li class="text-sm mt-3 w"  style="border-bottom: 1px grey solid" v-on:click="component='app-laptop'">
                                <a href="" class="text-black hover:" style="text-decoration:none">
                                    <h3 class="text-lg">Laptop</h3>
                                </a>
                            </li>
                            <li class="text-sm mt-3 cursor-pointer"  style="border-bottom: 1px grey solid">
                                <a href="#" class="text-black hover:" style="text-decoration:none">
                                    <h3 class="text-lg">Mobile App</h3>
                                </a>
                            </li>
                            <li class="text-sm mt-3 w"  style="border-bottom: 1px grey solid">
                                <a href="" class="text-black hover:" style="text-decoration:none">
                                    <h3 class="text-lg">Desktop</h3>
                                </a> 
                            </li>
                            <li class="text-sm mt-3 w"  style="border-bottom: 1px grey solid">
                                <a href="" class="text-black hover:" style="text-decoration:none">
                                    <h3 class="text-lg">TVs</h3>
                                </a> 
                            </li>
                            
                        </ul>
                    </div>
                    <div class="w-80 mx-auto card mt-3 shadow-sm">
                        <ul class="list pt-4">
                        <li class="text-lg font-weight-bold">By Price</li>
                        <li class="text-sm mt-3">0 - 15,000 Rwf</li>
                        <li class="text-sm mt-3">15, 000 - 25,000 Rwf</li>
                        <li class="text-sm mt-3">25, 000 - 45,000 Rwf</li>
                        <li class="text-sm mt-3">45, 000 - 65,000 Rwf</li>
                    </ul>
                    </div>
                    
                </div>
            </div>
            <div class="w-75">
                <div class="w-50 flex">
                    <div class="w-50 ">
                        <div class="w-100 dropdown">
                            <button class="w-100 text-left btn border bg-white dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Sort by
                            </button>
                            <div class="w-100 dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="#">Default</a>
                                <a class="dropdown-item" href="#">Lowest Price</a>
                                <a class="dropdown-item" href="#">Highest Price</a>
                            </div>
                        </div>
                    </div>
                </div>
                <component :is="component" v-bind:products="products" :filteredProducts="filteredProducts"></component>
                
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    //import Autocomplete from '@trevoreyre/autocomplete-vue'
    import Laptop from './categories/Laptop.vue'
    import allProducts from './categories/allProducts.vue'
    export default {
        components: {
            'app-laptop' : Laptop,
            'all-products' : allProducts
            //Autocomplete
        },
        filters: {
          capitalize: function(str) {
            return str.charAt(0).toUpperCase() + str.slice(1);
          }
        },
        data(){
            return{
                component: 'all-products',
                products:[
                    {name: 'techno Pop', price: '2500Frw', category: 'Mobile', img: 'images/sample_image.webp' },
                    {name: 'macbook i32', price: '2500Frw', category: 'laptop', img: 'images/sample_image.webp' },
                    {name: 'hp Air 56', price: '2500Frw', category: 'laptop', img: 'images/sample_image.webp' },
                    {name: 'philips', price: '2500Frw', category: 'Tvs', img: 'images/sample_image.webp' }
                ],
                search: '',
                
            }
        },
        computed:{
            filteredProducts:function(){
                return this.products.filter((product) => {
                return product.name.match(this.search);
            })
       }

        },
  }

</script>
