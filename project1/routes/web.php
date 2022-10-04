<?php

use App\Http\Controllers\ListingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
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
// COMMON RESOURCE ROUTES:
// index - Show all listings,
// show - Show single listing,
// create - Show form to crate new listing,
// store - Store new listing,
// edit - Show form to edit listing,
// update - Update listing,
// destroy - Delete listing,
//all listings
Route::get('/', [ListingController::class, "index"]);

//show create form
Route::get('/listings/create', [ListingController::class, "create"]);



//Single listing
Route::get("/listings/{listing}", [ListingController::class, "show"]);

// Route::get("/listings/{id}", function ($id) {
//     $listing = Listing::find($id);
//     if ($listing) {
//         return view('listing', [
//             'listing' => $listing
//         ]);
//     } else {
//         abort('404');
//     }
// });
