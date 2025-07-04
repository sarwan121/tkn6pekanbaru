<?php

namespace App\Http\Controllers;

use App\Models\Facility;
use Illuminate\Http\Request;

class FacilityController extends Controller
{
    public function index()
    {
        $facilities = Facility::all();
        return view('admin.facilities.index', compact('facilities'));
    }

    // Menampilkan form untuk membuat fasilitas baru
    public function create()
    {
        return view('admin.facilities.create');
    }

    // Menyimpan data fasilitas baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpg,jpeg,png,gif',
            'description' => 'required|string|max:255',
        ]);

        // Menyimpan gambar
        $imageName = time() . '.' . $request->image->getClientOriginalExtension();
        $request->image->move(public_path('images/facilities'), $imageName);

        // Menyimpan fasilitas
        Facility::create([
            'name' => $request->name,
            'image' => 'images/facilities/' . $imageName,
            'description' => $request->description,
        ]);
        return redirect()->route('facilities.index')->with('success', 'Facility created successfully');
    }

    // Menampilkan form untuk mengedit fasilitas
    public function edit($id)
    {
        $facility = Facility::findOrFail($id);
        return view('admin.facilities.edit', compact('facility'));
    }

    // Menyimpan perubahan data fasilitas
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'description' => 'required|string|max:255',
        ]);

        $facility = Facility::findOrFail($id);

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('image')) {
            
            if ($facility->image && file_exists(public_path($facility->image))) {
                unlink(public_path($facility->image));
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images/facilities'), $imageName);
            $facility->image = 'images/facilities/' . $imageName;
        }

        $facility->update([
            'name' => $request->name,
            'description' => $request->description,
        ]);

        return redirect()->route('facilities.index')->with('success', 'Facility updated successfully');
    }

    // Menghapus fasilitas
    public function destroy($id)
    {
        $facility = Facility::findOrFail($id);

        if ($facility->image && file_exists(public_path($facility->image))) {
            unlink(public_path($facility->image));
        }

        $facility->delete();

        return redirect()->route('facilities.index')->with('success', 'Facility deleted successfully');
    }
}
