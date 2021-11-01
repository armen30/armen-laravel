<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        $categories = Category::get();
        return view('product', [
            'categories' => $categories
        ]);
    }
    public function getProducts()
    {
        return view('products-list',[
            'products' => Product::where('user_id',Auth::user()->id)->get()
        ]);
    }

    public function store(Request $request)
    {
        $data = $request->only('name','price');
        $data['user_id'] = Auth::user()->id; ///TALISA LOGIN EXAC USER@
        Product::create($data);



        return redirect('/products');
    }
}
