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
}
