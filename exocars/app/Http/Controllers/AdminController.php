<?php

namespace App\Http\Controllers;

use App\Models\Accounts;
use App\Models\CarListings;
use App\Models\Meetings;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $listings = CarListings::orderBy('model', 'desc')->get();
        $accounts = Accounts::orderBy('f_name', 'desc')->get();
        $meetings = Meetings::orderBy('m_id', 'desc')->get();

        return view('admin.dashboard', compact('listings', 'accounts', 'meetings'));
    }

    public function show($id) {}

    public function create() {}

    public function store() {}

    public function destroyUser($id)
    {
        Accounts::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'User account removed');
    }

    public function destroyMeeting($id)
    {
        Meetings::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'Meeting removed');
    }

    public function destroyListing($id)
    {
        CarListings::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'Listing removed');
    }
}
