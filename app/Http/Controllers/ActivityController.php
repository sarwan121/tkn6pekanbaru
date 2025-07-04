<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function index()
    {
        $activities = Activity::all();
        return view('admin.activities.index', compact('activities'));
    }

    // Menampilkan form untuk membuat kegiatan baru
    public function create()
    {
        return view('admin.activities.create');
    }

    // Menyimpan data kegiatan baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string|max:1000',
        ]);

        // Menyimpan foto
        $photoName = time() . '.' . $request->photo->getClientOriginalExtension();
        $request->photo->move(public_path('images/activities'), $photoName);

        // Menyimpan kegiatan
        Activity::create([
            'activity_name' => $request->name,
            'photo' => 'images/activities/' . $photoName,
            'description' => $request->description,
        ]);

        return redirect()->route('activities.index')->with('success', 'Activity created successfully');
    }

    // Menampilkan form untuk mengedit kegiatan
    public function edit($id)
    {
        $activity = Activity::findOrFail($id);
        return view('admin.activities.edit', compact('activity'));
    }

    // Menyimpan perubahan data kegiatan
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string|max:500',
        ]);

        $activity = Activity::findOrFail($id);

        // Menyimpan foto baru jika ada
        if ($request->hasFile('photo')) {
            
            if ($activity->photo && file_exists(public_path($activity->photo))) {
                unlink(public_path($activity->photo));
            }

            $photoName = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('images/activities'), $photoName);
            $activity->photo = 'images/activities/' . $photoName;
        }

        $activity->update([
            'activity_name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('activities.index')->with('success', 'Activity updated successfully');
    }

    // Menghapus kegiatan
    public function destroy($id)
    {
        $activity = Activity::findOrFail($id);

        if ($activity->photo && file_exists(public_path($activity->photo))) {
            unlink(public_path($activity->photo));
        }

        $activity->delete();

        return redirect()->route('activities.index')->with('success', 'Activity deleted successfully');
    }
}
