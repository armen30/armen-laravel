<?php

use App\Product;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['auth:api']], function (){
    Route::get('products', 'ProductController@getApiProducts');
    Route::post('products', 'ProductController@store');
});

Route::get('test', function (){


//
//    $users = User::get();
//    $users = User::first();
//    $users = User::latest()->first();
//    $users = User::find(1);
//    $users = User::where('id','>',5)->get();
//    $users = User::where('id','>',5)->count();
//    $users = User::where('id','>',5)->orderBy('id','desc')->get();
//    $users = User::where('id','>',5)->orWhere('id','<',5)->get();
//    $users = User::where('id','>',2)->Where('id','<',5)->get();
//    $users = User::where('id','>',2)->Where('id','<',5)->toSql();
//    $query = User::where('id','>',2)->Where('id','<',5);
//    dd($query->toSql(),
//        $query->getBindings()
//    );
//    dd($users);

//    $products = Product::where('user_id',6)->get();
//    dd($products);
//

//    $products = User::has('products')->get();

//    $users = User::doesntHave('products')->get();
    $users = User::whereHas('products',function ($query){
        $query->where('id','>','1');
    })->get();
    dd($users);



});





//Route::middleware('auth:api')->get('/user',function (Request $request){
//    return $request->user();
//});
//
////Route::get('test',function (){
////    return response()->json([
////        'name' => 'john',
////        'age'=> 55
////    ]);
////});
