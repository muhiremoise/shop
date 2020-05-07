@extends('layouts.app')
@section('content')
    <div class="text-center">
        <h1>Checkout Page</h1>
        
    </div>

    <div class="w-90 mx-auto flex">
        <div class="w-60 pt-5">
            <h3 class="text-2xl text-center">Billing Details</h3>
            <form>
                <div class="w-80 mx-auto">
                    <label>Email Address : </label>
                    <input type="email" class="form-input">    
                </div>   
                <div class="w-80 mx-auto pt-2">
                    <label>Phone : </label>
                    <input type="text" class="form-input">    
                </div>
                <div class="w-80 mx-auto pt-2">
                    <label>Names : </label>
                    <input type="text" class="form-input">    
                </div>    
                
                <div class="w-80 mx-auto pt-2">
                    <label>City : </label>
                    <input type="text" class="form-input">    
                </div>                
            </form>

            <h3 class="text-2xl text-center pt-3">Payment Details</h3>
            <form>
                <div class="w-80 mx-auto">
                    <label>Name on Card : </label>
                    <input type="email" class="form-input">    
                </div>   
                <div class="w-80 mx-auto pt-2">
                    <label>Phone : </label>
                    <input type="text" class="form-input">    
                </div>
                               
            </form>
        </div>
        <div class="w-40">
            <div>
                <h3 class="text-2xl">Your Order</h3>
            </div>
            <div>
                
            </div>
        </div>
    </div>
    
@endsection