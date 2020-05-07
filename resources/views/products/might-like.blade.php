<div class="w-90 mx-auto py-5">
    <h3 class="text-2xl">Might Also Like : </h3>
    <div class="grid grid-4 py-3">
        @foreach ($mightAlsoLike as $product)
                <div class="bg-white mx-2">
                    <div class="h-px-200">
                        <a href="{{ route('product.show', $product->slug ) }}">
                        <img class="clip-full" src="{{ asset('images/sample_image.webp') }}" alt="Card image cap">
                        </a>
                    </div>
                <div class="card-body text-center">
                    <a class="no-underline text-grey-darkest" href="{{ route('product.show', $product->slug) }}">
                    <h3 class="text-2xl">{{ $product->name }}</h3>
                    </a>
                    
                    <p> {{ $product->presentPrice() }} </p>
                </div>
                </div>
        @endforeach
    </div>
</div>