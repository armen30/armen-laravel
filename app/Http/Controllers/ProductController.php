<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use App\Services\ProductService;
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
            'products' => (new ProductService())->getUserproducts(Auth::user())
        ]);
    }


    public function store(Request $request)
    {
        $data = $request->only('name','price');
        $data['user_id'] = Auth::user()->id; ///TALISA LOGIN EXAC USER@
        Product::create($data);



        return redirect('/products');
    }

    public function getApiProducts()
    {
        return response()->json(
            (new ProductService())->getUserproducts(Auth::user())
        );
    }
}
