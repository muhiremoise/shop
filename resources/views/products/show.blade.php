@extends('layouts.app')
@section('content')
    <div class="w-90 mx-auto pt-4">
        <div class="text-center pb-5">
            <h1 class="text-2xl">Nivea Lotion</h1>
        </div>

        <div class="w-100 flex">
            <div class="w-50">
                <div class="h-px-400 px-5">
                    <img class="clip-full" src="{{ asset('images/sample_image.webp') }}">
                </div>
            </div>
            <div class="w-50">
                <div class="py-4">
                    <h1 class="text-3xl font-weight-bold line-height-small"> {{ $product->name }} </h1>
                <p class>{{ $product->details }}</p>
                <h1 class="text-3xl font-weight-bold ">{{ $product->presentPrice() }}</h1>
                <p class="text-lg pt-3">{{ $product->description }}</p>
                <form action="{{ route('cart.store') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="hidden" name="name" value="{{ $product->name }}">
                    <input type="hidden" name="price" value="{{ $product->price }}">
                    <button type="submit" class="btn btn-success">Add To Cart</button>
                </form>
                </div>
            </div>
        </div>

        @include('products.might-like')
        
    </div>
    
@endsection