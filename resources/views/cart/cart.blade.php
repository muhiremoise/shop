@extends('layouts.app')
@section('content')
    <div class="w-90 mx-auto">
        <div class="py-4">
            <h1 class="text-center text-3xl">Shopping Cart</h1>
        </div>
        <div class="w-100 flex">
            <div class="w-80 bg-white px-4 py-4">
                @if(session()->has('success-message'))
                    <div class="alert alert-success">
                        {{ session()->get('success-message') }}
                    </div>
                @endif
                @if(count($errors) > 0)
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                <div>
                    <h4>{{ Cart::count() }} item(s) in shopping cart</h4>
                </div>
                @if(count(Cart::content()) > 0)
                <table class="table table-hover">
                    <tbody>
                        @foreach(Cart::content() as $product)
                            <tr>
                                <td>
                                    <a href="{{ route('product.show', $product->model->slug) }}">
                                    <div style="height: 60px; width: 60px">
                                        <img class="clip-full" src="{{ asset('images/sample_image.webp') }}">
                                    </div>
                                    </a>
                                </td>
                                <td><a href="{{ route('product.show', $product->model->slug) }}">
                                    <p class="font-weight-bold line-height-small">{{ $product->model->name }}</p>
                                    </a>
                                    <span>{{ $product->model->details }} </span>
                                </td>
                                <td>
                                    {{-- <p class="line-height-small">remove item</p> --}}
                                <form action="{{ route('cart.destroy', $product->rowId) }}" method="POST">
                                        @csrf
                                        {{ method_field('DELETE') }}
                                        <button type="submit">Delete</button> 
                                </form> 
                                <form action="{{ route('cart.saveForLater', $product->rowId) }}" method="POST">
                                    @csrf
                                    <button type="submit">Save For Later</button> 
                               </form>    
                                
                                </td>
                                <td>
                                    <select class="form-input">
                                        <option>1</option>
                                        <option>2</option>
                                        <option>3</option>
                                        <option>4</option>
                                        <option>5</option>
                                    </select>
                                </td>
                                <td>
                                    {{ $product->model->price }} Rwf
                                </td>
                            </tr>
                      @endforeach
                      
                    </tbody>
                  </table>
                  <div class="bg-white-smoke px-3 py-3 my-3">
                        <div class="w-100 flex">
                            <div class="w-60">
                                <p>Delivering Fees are Payed according where you are located,
                                   don't hesitate to trust us, we are awesome in delivering
                                   All your order in few minutes!  </p>
                            </div> 
                            <div class="w-40 text-right">
                                <span>Sub Total : {{ Cart::subtotal() }} </span><br>
                                <span>Tax (0.00 %) : {{ Cart::tax() }}</span>
                                <div class="border w-80 mx-auto my-2"></div>
                                <p class="font-weight-bold">Total : {{ Cart::total() }}</p>
                            </div>  
                        </div>
                  </div>
                  
                  <div>
                      <a href="{{route('checkout')}}">
                          <button class="btn btn-success float-right">Checkout</button>
                      </a>
                      <a href="{{route('shop')}}">
                        <button class="btn btn-outline-success">Continue Shopping</button>
                    </a>
                  </div>
                  @else
                  <div class="bg-white-smoke my-4 px-3 py-3">
                    <h4>No items in the cart</h4>
                    
                  </div>
                  <a href="{{route('shop')}}">
                    <button class="btn btn-outline-success">Continue Shopping</button>
                  </a>
                  @endif

                  @if(Cart::instance('saveForLater')->count() > 0)
                    <div class="w-100 my-4"></br>
                        <h4>{{ Cart::instance('saveForLater')->count() }} item(s) Saved For Later</h4>
                        <table class="table table-hover">
                            <tbody>
                                @foreach(Cart::content() as $product)
                                    <tr>
                                        <td>
                                            <a href="{{ route('product.show', $product->model->slug) }}">
                                            <div style="height: 60px; width: 60px">
                                                <img class="clip-full" src="{{ asset('images/sample_image.webp') }}">
                                            </div>
                                            </a>
                                        </td>
                                        <td><a href="{{ route('product.show', $product->model->slug) }}">
                                            <p class="font-weight-bold line-height-small">{{ $product->model->name }}</p>
                                            </a>
                                            <span>{{ $product->model->details }} </span>
                                        </td>
                                        <td>
                                            {{-- <p class="line-height-small">remove item</p> --}}
                                        <form action="{{ route('saveForLater.destroy', $product->rowId) }}" method="POST">
                                                @csrf
                                                {{ method_field('DELETE') }}
                                                <button type="submit">Remove</button> 
                                        </form> 
                                        <form action="{{ route('saveForLater.switchToCart', $product->rowId) }}" method="POST">
                                            @csrf
                                            <button type="submit">Move to Cart</button> 
                                       </form>    
                                        
                                        </td>
                                        <td>
                                            <select class="form-input">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </td>
                                        <td>
                                            {{ $product->model->price }} Rwf
                                        </td>
                                    </tr>
                              @endforeach
                              
                            </tbody>
                          </table>
                        
                    @else 

                    @endif
            </div>
            <div class="w-30">

            </div>
        </div>
    </div>
    @include('products.might-like')
@endsection