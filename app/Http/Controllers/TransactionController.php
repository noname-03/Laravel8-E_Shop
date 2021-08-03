<?php

namespace App\Http\Controllers;

use App\Models\DetailTransaction;
use App\Models\Cart;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $details = DetailTransaction::all();
        // // dd($detail);
        // return view('cart.invoice', compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // $transaksi = Auth::user()->transactions()->create($request->all());

        // $carts = Auth::user()->carts;
        // $carts->map(function($obj) use($transaksi) {
        //     unset($obj->user_id);
        //     unset($obj->created_at);
        //     unset($obj->updated_at);
        //     $obj['transaksi_id'] = $transaksi->id;
        //     $a = new DetailTransaction;
        //     $a->transaction_id = $obj->transaksi_id;
        //     $a->product_id = $obj->product_id;
        //     $a->qty = $obj->qty;
        //     $a->subtotal = $obj->subtotal;
        //     $a->save();
        //     return $obj;
        // });

        //     Cart::where('user_id', '=', Auth::user()->id)->delete();
        //     return redirect()->route('transaction.show', ['transaction'=>$transaksi->id]);

        // dd($carts);
        // return $carts;
        // DetailTransaction::insert($carts);

        // $carts->delete();
        /**
         *  Get array cart by user id
         *  create data transaksi. user id? Auth::user()->id
         *  transaksi detail? foreach $cart, ubah user_id jadi tranksaksi_id. id? create tranksasi di atas
         */
        // $cart = Auth::user()->carts;

        // $transaksi = Transaksi::create();

        // $transaksi->transaksiDetail()->insert($cart);

        // $transaksiDetail = [];

        // foreach ($cart as $data) {
        //     $transaksiDetail[] = [
        //         'transaksi_id' => $transaksi->id,
        //         'product_id' => $data->product_id,
        //     ];
        // }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $transaksi = Auth::user()->transactions()->create($request->all());

        $carts = Auth::user()->carts;
        $carts->map(function($obj) use($transaksi) {
            unset($obj->user_id);
            unset($obj->created_at);
            unset($obj->updated_at);
            $obj['transaksi_id'] = $transaksi->id;
            $a = new DetailTransaction;
            $a->transaction_id = $obj->transaksi_id;
            $a->product_id = $obj->product_id;
            $a->qty = $obj->qty;
            $a->subtotal = $obj->subtotal;
            $a->save();
            return $obj;
        });

            Cart::where('user_id', '=', Auth::user()->id)->delete();
            return redirect()->route('transaction.show', ['transaction'=>$transaksi->id]);
        // Transaction::create(Auth::user->id);
        // Auth::user()->transactions()->create();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function show(Transaction $transaction)
    {

        // return $transaction->user->name;
        // $transactions = Transaction::find($transaction);
        // dd($transactions);
        // foreach ($transaction->transactions as $data) {
        //     echo $data->product->name;
        return view('cart.invoice', compact('transaction'));
        }
        // return view('cart.invoice', compact('transaction'));


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Transaction  $transaction
     * @return \Illuminate\Http\Response
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
    public function datatransaction()
    {
        $transactions = Transaction::all();
        // dd($transactions);
        return view('transaction.index', compact('transactions'));
    }
    public function datatransactionshow(Transaction $transaction)
    {
        // dd($transaction);
        return view('transaction.show', compact('transaction'));
    }
}
