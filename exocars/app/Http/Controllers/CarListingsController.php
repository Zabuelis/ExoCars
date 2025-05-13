<?php

namespace App\Http\Controllers;

use App\Models\CarListing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarListingsController extends Controller
{
    public function index()
    {
        $listings = CarListing::orderBy('model', 'asc')->paginate(9);

        foreach ($listings as $listing) {
            $path = public_path($listing->img_path);

            $images = File::files($path);

            $listing->img_path = $listing->img_path . '/' . $images[0]->getFilename();
        }

        return view('pages.listings', ['listings' => $listings]);
    }

    public function show($id)
    {
        $listing = CarListing::findOrFail($id);

        $path = public_path($listing->img_path);

        $imageFiles = File::files($path);

        $images = [];

        foreach ($imageFiles as $image) {

            $images[] = $listing->img_path . '/' . $image->getFilename();
        }

        return view('pages.preview', compact('listing', 'images'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            // Validation rules here
        ]);

        CarListing::create($validated);
    }
}
