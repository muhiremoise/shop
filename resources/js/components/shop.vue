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
                        <input class="w-100" type="text" placeholder="Search..">
                    </div>   
                </div>
                <div class="">
                    <div class="w-80 mx-auto  card mt-3 shadow-sm">
                        <ul class="list">
                            <li class="text-lg font-weight-bold">By Category</li>
                            <li class="text-sm mt-3 pl-5">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Laptop</label>
                            </li>
                            <li class="text-sm mt-3 pl-5">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Desktop</label>
                            </li>
                            <li class="text-sm mt-3 pl-5">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Mobile App</label>
                            </li>
                            <li class="text-sm mt-3 pl-5">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">TVs</label>
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
                <!--<div class="grid grid-3">
                    <div class="bg-white mx-2 my-2 shadow-sm border rounded">
                        <div class="h-px-200">
                            image goes here
                        </div>
                        <div class="card-body">
                            <div>
                                <a class="no-underline text-grey-darkest" href="">
                                    <h5 class="text-xl">Juice</h5>
                                </a>
                                <h6 class="text-green">Price: 100FRW</h6>
                            </div>
                            <div class="text-centered">
                                <button class="btn bg-blue btn-sm">
                                    <a class="no-underline text-white" href="">
                                        <h5 class="text-xl pt-2">Add To Cart</h5>
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>  
                </div>-->
                
            </div>
        </div>
    </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                products:[
                    {name: 'Techno Pop', price: '2500Frw', category: 'Mobile', img: './public/images/sample_image.webp' },
                    {name: 'Macbook i32', price: '2500Frw', category: 'laptop', img: './public/images/sample_image.webp' },
                    {name: 'Hp Air 56', price: '2500Frw', category: 'laptop', img: './public/images/sample_image.webp' },
                    {name: 'Philips', price: '2500Frw', category: 'Tvs', img: './public/images/sample_image.webp' }
                ]
            }
        }
    }
</script>
