<?php


namespace App\Services;
use App\Product;
use App\User;

class ProductService
{
    public function getUserproducts(User $user)
    {
        return Product::where('user_id',$user->id)->get();
    }

}
