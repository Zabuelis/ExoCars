<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth as FacadesAuth;

class ProfileController extends Controller
{
    public function index()
    {
        $meetings = Meeting::where('a_id', FacadesAuth::user()->a_id)->get();
        $account = Account::where('a_id', FacadesAuth::user()->a_id)->first();

        return view('user.profile', compact('meetings', 'account'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id) {}

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    public function destroyMeeting($id)
    {
        Meeting::findOrFail($id)->delete();

        return redirect()->back()->with('successful', 'Meeting removed');
    }
}
