<?php

namespace App\Http\Controllers;

use App\Mail\MeetingCreated;
use App\Models\Meeting;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class MeetingController extends Controller
{
    public function index() {}

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
        $meetings = Meeting::where('a_id', Auth::user()->a_id)->first();
        $meetingTimes = ['08:00', '09:30', '11:00', '12:30', '14:00', '15:30', '17:00'];

        if (!empty($meetings)) {
            return redirect()->back()->withErrors('You already have a scheduled meeting');
        }

        $validated = $request->validate([
            'c_id' => 'required|integer',
            'a_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ]);

        $meetingDate = Carbon::parse($validated['date']);
        if ($meetingDate->isWeekend()) {
            return redirect()->back()->withErrors('Meetings can not be scheduled on weekends.');
        }
        if (!in_array($validated['time'], $meetingTimes)) {
            return redirect()->back()->withErrors('Please select time only from the provided times.');
        }

        $meeting = Meeting::create($validated);

        Mail::to(Auth::user()->e_mail)->queue(new MeetingCreated($meeting, Auth::user()->f_name));

        return redirect()->route('profile')->with('successful', 'Meeting created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }
}
