<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $categories = Category::all();
        $carts = Auth::user()->carts;
        return view('cart.index', compact('carts','categories'));
        // dd($carts);
        // $sub = 0;
        // foreach ($carts as $data) {
        //     echo "<br>";
        //     echo $data->id;
        //     echo "user";
        //     echo "<br>";
        //     echo $data->user->name;
        //     echo $data->product->name;
        //     echo $data->qty;
        //     echo $data->subtotal;
        //     echo "<br>";
        //     echo "Sub total";
        //     echo "<br>";
        //     echo $data->qty*$data->product->price;
        //     $sub += $data->qty*$data->product->price;
        // };
        // echo "<br>";
        // echo $sub;
        // beda
        //
        // return $carts->map(function($obj) {
        //     unset($obj->user_id);
        //     unset($obj->created_at);
        //     unset($obj->updated_at);
        //     $obj['transaksi_id'] = 1;
        //     return $obj;
        // });
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request['user_id'] = Auth::user()->id;
        Cart::create($request->all());

        return redirect()->route('cart.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function show(Cart $cart)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function edit(Cart $cart)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Cart $cart)
    {
        $request['user_id'] = Auth::user()->id;
        $cart->update($request->all());

        return redirect()->route('cart.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cart  $cart
     * @return \Illuminate\Http\Response
     */
    public function destroy(Cart $cart)
    {
        $cart->delete();
        return redirect()->route('cart.index');
    }
    public function test(Request $request)
    {
        dd($request);
        if($request->id && $request->qty){
            $cart = session()->get('cart');
            $cart[$request->id]["qty"] = $request->qty;
            session()->put('cart', $cart);
            session()->flash('success', 'Cart updated successfully');
        }
    }
}
