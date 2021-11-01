<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index()
    {
        return view('product');
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
