<?php

namespace App\Http\Controllers;

use App\Models\Meeting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use Exception;

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
        $validated = $request->validate([
            'c_id' => 'required|integer',
            'a_id' => 'required|integer',
            'date' => 'required|date',
            'time' => 'required|date_format:H:i'
        ]);

        try {
            Meeting::create($validated);
            return redirect()->back()->with('successful', 'Meeting created');
        } catch (Exception $e) {
            abort(500, 'Something went wrong');
        }
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
