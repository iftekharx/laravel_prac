<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    // show all listings
    public function index(){

        //dd(request()->tag);






        return view('listings.index', [
            'headings' => 'Latest Listings',
            'listings' => Listing::latest()->filter(request(['tag', 'search']))->get(), // latest get will sort the latest first

        ]);

    }

    // show single listing
    public function show(Listing $listing){
        return view('listings.show', [
            'listing' => $listing ,
        ]);
    }

    
}
