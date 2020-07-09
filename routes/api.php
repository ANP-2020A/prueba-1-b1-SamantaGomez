<?php

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

//Route::middleware('auth:api')->get('/user', function (Request $request) {
  //  return $request->user();
//});

Use App\Product;
Route::get('articles', function()
{
    return Product::all();
});
Route::get('articles/{id}', function($id)
{
    return Product::find($id); });
Route::post('articles', function(Request $request)
{
    return Product::create($request->all());
});
Route::put('articles/{id}', function(Request $request, $id)
{
    $article = Product::findOrFail($id);
    $article->update($request->all()); return $article;
});
Route::delete('articles/{id}', function($id) {
    Product::find($id)->delete(); return 204;
});

Use App\Customer;
Route::get('articles', function()
{
    return Customer::all();
});
Route::get('articles/{id}', function($id)
{
    return Customer::find($id); });
Route::post('articles', function(Request $request)
{
    return Customer::create($request->all());
});
Route::put('articles/{id}', function(Request $request, $id)
{
    $article = Customer::findOrFail($id);
    $article->update($request->all()); return $article;
});
Route::delete('articles/{id}', function($id) {
    Customer::find($id)->delete(); return 204;
});

