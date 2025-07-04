<?php

namespace App\Http\Controllers;

use App\Models\Teacher;
use Illuminate\Http\Request;

class TeacherController extends Controller
{
    // Menampilkan daftar guru
    public function index()
    {
        $teachers = Teacher::all(); // Ambil semua data guru
        return view('admin.teachers.index', compact('teachers'));
    }

    // Menampilkan form untuk membuat guru baru
    public function create()
    {
        return view('admin.teachers.create');
    }

    // Menyimpan data guru baru
    public function store(Request $request)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Simpan data guru baru
        $teacher = new Teacher();
        $teacher->name = $request->name;
        $teacher->position = $request->position;

        // Menyimpan foto jika ada
        if ($request->hasFile('photo')) {
            $photoName = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $photoName); // Simpan foto di public/images
            $teacher->photo = 'images/' . $photoName;
        }

        $teacher->save(); // Simpan ke database

        return redirect()->route('teachers.index')->with('success', 'Teacher created successfully');
    }

    // Menampilkan form untuk mengedit data guru
    public function edit($id)
    {
        $teacher = Teacher::findOrFail($id);
        return view('admin.teachers.edit', compact('teacher'));
    }

    // Menyimpan perubahan data guru
    public function update(Request $request, $id)
    {
        // Validasi data
        $request->validate([
            'name' => 'required|string|max:255',
            'position' => 'required|string|max:255',
            'photo' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        // Ambil data guru yang akan diperbarui
        $teacher = Teacher::findOrFail($id);
        $teacher->name = $request->name;
        $teacher->position = $request->position;

        // Menyimpan foto baru jika ada
        if ($request->hasFile('photo')) {
            // Hapus foto lama jika ada
            if ($teacher->photo && file_exists(public_path($teacher->photo))) {
                unlink(public_path($teacher->photo));
            }

            // Simpan foto baru
            $photoName = time() . '.' . $request->photo->getClientOriginalExtension();
            $request->photo->move(public_path('images'), $photoName);
            $teacher->photo = 'images/' . $photoName;
        }

        $teacher->save(); // Simpan perubahan

        return redirect()->route('teachers.index')->with('success', 'Teacher updated successfully');
    }

    // Menghapus data guru
    public function destroy($id)
    {
        $teacher = Teacher::findOrFail($id);

        // Hapus foto jika ada
        if ($teacher->photo && file_exists(public_path($teacher->photo))) {
            unlink(public_path($teacher->photo));
        }

        $teacher->delete(); // Hapus data guru

        return redirect()->route('teachers.index')->with('success', 'Teacher deleted successfully');
    }
}
