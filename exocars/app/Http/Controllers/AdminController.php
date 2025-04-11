<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CarListing;
use App\Models\Meeting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;

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

        try {
            $listing = CarListing::findOrFail($id);

            $path = public_path($listing->img_path);

            if (File::exists($path)) {
                File::deleteDirectory($path);
            }

            $listing->delete();

            return redirect()->back()->with('successful', 'Listing removed');
        } catch (Exception $e) {
            Log::error('Removal of listing failed', $e->getMessage());
            abort(500, 'Something went wrong');
        }
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
            'img_path.*' => 'required|mimes:jpg,png,jpeg',
            'manufacturer' => 'required|string|max:50',
            'displacement' => 'required|numeric',
            'power' => 'required|integer'
        ]);

        try {
            $path = ('images/listings/' . time());

            $validated['img_path'] = $path;

            CarListing::create($validated);

            $absolutePath = public_path($path);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            if ($request->hasFile('img_path')) {
                foreach ($request->file('img_path') as $file) {
                    $filename = time() . '_' . $file->getClientOriginalName();
                    $file->move($absolutePath, $filename);
                }
            }
            return redirect()->back()->with('successful', 'Listing created');
        } catch (Exception $e) {
            Log::error('Creation of a listing failed', $e->getMessage());
            abort(500, 'Something went wrong');
        }
    }
}
