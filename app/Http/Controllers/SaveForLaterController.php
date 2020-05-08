<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;

class SaveForLaterController extends Controller
{

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success-message', 'Item has been removed!');
    }

    public function switchToCart($id){

        $item  = Cart::instance('saveForLater')->get($id);
        
        Cart::instance('saveForLater')->remove($id);

        $duplicate = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id){
            return $rowId === $id;
        });

        if($duplicate->isNotEmpty()){
            return redirect()->route('cart')->with('success-message', 'Item is already in your cart');
        }

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
              ->associate('App\Product');

        return redirect()->route('cart')->with('success-message', 'Item has been moved to the cart added!');        

    

    }

}
