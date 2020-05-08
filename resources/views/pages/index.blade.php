@extends('layouts.app')
@section('content')
    <div>
        <slide-show></slide-show>
    </div>
    <div class="w-90 mx-auto pt-4">
        <div class="text-center pb-5">
            <h1 class="text-2xl">Welcome To Our Shop</h1>
        </div>

        <div class="card-deck">
            @foreach ($products as $product)
                <div class="card">
                    <div class="h-px-200">
                        <a href="{{ route('product.show', $product->slug ) }}">
                        <img class="clip-full" src="{{ asset('images/sample_image.webp') }}" alt="Card image cap">
                        </a>
                    </div>
                <div class="card-body text-center">
                    <a class="no-underline text-grey-darkest" href="{{ route('product.show', $product->slug) }}">
                    <h5 class="text-2xl">{{ $product->name }}</h5>
                    </a>
                    
                    <p> {{ $product->price }} </p>
                </div>
                </div>
            @endforeach
          </div>
    </div>
    
    <script src="/resources/js/pp.js"></script>
@endsection