<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ListingController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ListingController::class, 'index']);

// single listing
Route::get('/listing/{listing}', [ListingController::class, 'show']);

// Common Resource Routes
/*
index - Show all list
show - show single listing
show - show single listing
create - show form to create new listing
store - store new listing
edit - show form to edit listing
update - update listing
delete - delete listing
*/


// Route::get('/hello', function(){
//     return response("<h1>Hello World! :)</h1>")
//     ->header("Content-Type", 'text/plain'); // headers
//     // ->header('foo', 'bar');

//     // return response("<h1>Hello World! :)</h1>", 404); // error status
// });

// Route::get('/posts/{id}', function($id){

//     dd($id);
//     // ddd($id); for more debug information
//     return response("Post ".$id);

// })->where('id', '[0-9]+'); // this will only take id as a number not letters.

// Route::get('/search', function(Request $request){

//     //dd($request);
//     return $request->name.' '.$request->age; // search?name=ifty&age=25
    
    

// });


