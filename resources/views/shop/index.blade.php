@extends('layouts.app')
@section('content')
    <div class="w-90 mx-auto">
        <div class="text-center py-3">
            <h1 class="text-3xl">Shop Page</h1>
        </div>
        <div class="w-100 flex">
            <div class="w-25">
                <div class="w-80 mx-auto pl-4 sticky">
                    <ul class="list">
                        <li class="text-lg font-weight-bold">By Category</li>
                        <li class="text-sm mt-3">Laptops</li>
                        <li class="text-sm mt-3">Desktop</li>
                        <li class="text-sm mt-3">Mobile App</li>
                        <li class="text-sm mt-3">Tvs</li>
                    </ul>
                    <ul class="list pt-4">
                        <li class="text-lg font-weight-bold">By Price</li>
                        <li class="text-sm mt-3">0 - 15,000 Rwf</li>
                        <li class="text-sm mt-3">15, 000 - 25,000 Rwf</li>
                        <li class="text-sm mt-3">25, 000 - 45,000 Rwf</li>
                        <li class="text-sm mt-3">45, 000 - 65,000 Rwf</li>
                    </ul>
                </div>
            </div>
            <div class="w-75">
                <div class="grid grid-4">
                    @foreach ($products as $product)
                    <div class="bg-white mx-2 my-2 hover:shadow-sm">
                        <div class="h-px-200">
                            <a href="{{ route('product.show', $product->slug ) }}">
                            <img class="clip-full" src="{{ asset('images/sample_image.webp') }}" alt="Card image cap">
                            </a>
                        </div>
                    <div class="card-body text-center">
                        <a class="no-underline text-grey-darkest" href="{{ route('product.show', $product->slug) }}">
                            <h5 class="text-xl">{{ $product->name }}</h5>
                        </a>
                        <p> {{ $product->price }} </p>
                    </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--<example-component></example-component>-->
    <div>
        <shop></shop>
    </div>
    
    <script src="/resources/js/pp.js"></script>
@endsection