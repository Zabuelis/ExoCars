<?php

namespace App\Http\Controllers;

use App\Models\CarListing;
use Illuminate\Http\Request;

class CarListingsController extends Controller
{
    public function index()
    {
        $listings = CarListing::orderBy('model', 'desc')->get();

        return view('pages.listings', ['listings' => $listings]);
    }

    public function show($id)
    {
        $listing = CarListing::findOrFail($id);

        return view('pages.preview', ['listing' => $listing]);
    }

    public function create() {}
}
