@extends('layouts.app')
@section('content')
    <div class="w-90 mx-auto">
        <div class="py-4">
            <h1 class="text-center text-3xl">Shopping Cart</h1>
        </div>
        <div class="w-100 flex">
            <div class="w-70 bg-white">
                
                <table class="table table-hover">
                    <tbody>
                      <tr>
                        <td>
                            <div style="height: 60px; width: 60px">
                                <img class="clip-full" src="{{ asset('images/sample_image.webp') }}">
                            </div>
                        </td>
                        <td><p class="font-weight-bold line-height-small">Nivea Lotion</p>
                            <span>Lorem ipsum dolor sit amet consectetur </span>
                        </td>
                        <td>
                            <p class="line-height-small">remove item</p>
                            <p class="line-height-small">save for later</p>
                        </td>
                        <td>
                            <input class="form-input" type="number">
                        </td>
                        <td>
                            15, 000 Rwf
                        </td>
                      </tr>
                      <tr>
                        <td>
                            <div style="height: 60px; width: 60px">
                                <img class="clip-full" src="{{ asset('images/sample_image.webp') }}">
                            </div>
                        </td>
                        <td><p class="font-weight-bold line-height-small">Nivea Lotion</p>
                            <span>Lorem ipsum dolor sit amet consectetur </span>
                        </td>
                        <td>
                            <p class="line-height-small">remove item</p>
                            <p class="line-height-small">save for later</p>
                        </td>
                        <td>
                            <input class="form-input" type="number">
                        </td>
                        <td>
                            15, 000 Rwf
                        </td>
                      </tr>
                    </tbody>
                  </table>
            </div>
            <div class="w-30">

            </div>
        </div>
    </div>
@endsection