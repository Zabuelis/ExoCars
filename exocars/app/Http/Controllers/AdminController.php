<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CarListing;
use App\Models\Meeting;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $listings = CarListing::orderBy('model', 'desc')->get();
        $accounts = Account::orderBy('f_name', 'desc')->get();
        $meetings = Meeting::orderBy('m_id', 'desc')->get();

        return view('admin.dashboard', compact('listings', 'accounts', 'meetings'));
    }

    public function show($id) {}

    public function create() {}

    public function store() {}

    public function destroyUser($id)
    {
        Account::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'User account removed');
    }

    public function destroyMeeting($id)
    {
        Meeting::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'Meeting removed');
    }

    public function destroyListing($id)
    {
        CarListing::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'Listing removed');
    }

    public function insertListing(Request $request)
    {
        $validated = $request->validate([
            'model' => 'required|string|max:50',
            'mileage' => 'required|integer',
            'comments' => 'required|string|max:255',
            'make_year' => 'required|integer',
            'color' => 'required|string|max:20',
            'price' => 'required|integer',
            'img_path' => 'required|mimes:jpg,png,jpeg',
            'manufacturer' => 'required|string|max:50',
            'displacement' => 'required|numeric',
            'power' => 'required|integer'
        ]);

        $file = $request['img_path'];
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' . $extension;
        $path = ('images/listings/');
        $file->move($path, $filename);

        $validated['img_path'] = $path . $filename;

        CarListing::create($validated);

        return redirect()->back()->with('successful', 'Listing created');
    }
}
