<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class EshopController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $products = Product::all();
        return view('eshop.index', compact('products', 'categories'));
    }
}
