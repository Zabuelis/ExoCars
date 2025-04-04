<?php

namespace App\Http\Controllers;

use App\Models\CarListings;
use Illuminate\Http\Request;

class CarListingsController extends Controller
{
    public function index()
    {
        $listings = CarListings::orderBy('model', 'desc')->get();

        return view('pages.listings', ['listings' => $listings]);
    }

    public function show($id)
    {
        $listing = CarListings::findOrFail($id);

        return view('pages.preview', ['listing' => $listing]);
    }

    public function create() {}

    public function store() {}
}
