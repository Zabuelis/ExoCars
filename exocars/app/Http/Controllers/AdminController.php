<?php

namespace App\Http\Controllers;

use App\Models\Account;
use App\Models\CarListing;
use App\Models\Meeting;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Log;
use Intervention\Image\ImageManager;
use Intervention\Image\Drivers\Gd\Driver;

class AdminController extends Controller
{
    public function index()
    {
        $listings = CarListing::orderBy('c_id', 'asc')->get();
        $accounts = Account::orderBy('a_id', 'asc')->get();
        $meetings = Meeting::orderBy('m_id', 'asc')->get();

        foreach ($listings as $listing) {
            $path = public_path($listing->img_path);

            $images = File::files($path);

            $listing->img_path = $listing->img_path . '/' . $images[0]->getFilename();
        }

        return view('admin.dashboard', compact('listings', 'accounts', 'meetings'));
    }

    public function show($id) {}

    public function create() {}

    public function store() {}

    public function destroyUser($id)
    {
        try {
            $account = Account::findOrFail($id);

            if ($account->p_id == 2) {
                return redirect()->back()->with('failed', 'The user you are trying to remove is an admin.');
            }

            $account->delete();

            return redirect()->back()->with('successful', 'User account removed');
        } catch (Exception $e) {
            Log::error("User destruction failed", [
                'message' => $e->getMessage(),
                'exception' => $e
            ]);
            return redirect()->back()->with('failed', 'Failed to remove the selected user.');
        }
    }

    public function destroyMeeting($id)
    {
        try {
            Meeting::findOrFail($id)->delete();

            return redirect()->back()->with('successful', 'Meeting removed');
        } catch (Exception $e) {
            Log::error("Meeting destruction failed", [
                'message' => $e->getMessage(),
                'exception' => $e
            ]);
            return redirect()->back()->with('failed', 'Failed to destroy a meeting.');
        }
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
            Log::error('Removal of listing failed', [
                'message' => $e->getMessage(),
                'exception' => $e
            ]);
            return redirect()->back()->withErrors(['error' => 'Failed to delete the listing. Please try again.']);
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

            $absolutePath = public_path($path);

            if (!File::exists($absolutePath)) {
                File::makeDirectory($absolutePath, 0755, true);
            }

            $i = 0;
            foreach ($request->file('img_path') as $file) {
                $filename = $i . '_' . $file->getClientOriginalName();
                $manager = new ImageManager(new Driver());
                $img = $manager->read($file->getRealPath());
                $img->resize(800, 500)->toPng()->save($absolutePath . '/' . $filename);
                $i++;
            }

            CarListing::create($validated);

            return redirect()->back()->with('successful', 'Listing created');
        } catch (Exception $e) {
            Log::error('Listing insertion failed', [
                'message' => $e->getMessage(),
                'exception' => $e
            ]);
            return redirect()->back()->with(['error' => 'Failed to insert the listing. Please try again.']);
        }
    }
}
