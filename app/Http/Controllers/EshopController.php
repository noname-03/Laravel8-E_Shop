<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Transaction;
use Illuminate\Support\Facades\Auth;

class EshopController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $products = Product::paginate(6);
        return view('eshop.index', compact('products', 'categories'));
    }
    public function tes()
    {
        $transaction = Transaction::all();
        // dd($transaction);
        foreach ($transaction as $data) {
            echo $data->id;
            echo $data->user->name;
        };
        // return view('eshop.index', compact('products', 'categories'));
    }
    public function show(Category $category_id)
    {
        // $test = Category::with('products')->find($category_id);
        // $test = Product::where('category_id', $category_id)->get();
        $categories = Category::all();
        $products = Product::all()->take(3);
        $category_id->load('products');
        $product_categories = $category_id;
        return view('eshop.product_category', compact('categories', 'product_categories', 'products'));
        // dd($test);
        // foreach ($test->products as $a ) {
        //     // dd($a);
        //     echo $a->id;
        //     echo(' ');
        //     echo $a->name;
        //     echo('<br>');
        // }
        // return view('user.profile', [
        //     'user' => User::findOrFail($id)
        // ]);
    }
    public function productshow(Product $id)
    {
        // dd($id);
        $categories = Category::all();
        $products = Product::paginate(6);
        return view('eshop.item',compact('id', 'categories', 'products'));
    }
}
