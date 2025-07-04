<?php

namespace App\Http\Controllers;

use App\Models\ClassModel;
use App\Models\Teacher;
use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function index()
    {
        $classes = ClassModel::all();
        return view('admin.classes.index', compact('classes'));
    }

    // Menampilkan form untuk membuat class baru
    public function create()
    {
        $teachers = Teacher::all();  // Ambil semua data guru untuk pilihan wali kelas
        return view('admin.classes.create', compact('teachers'));
    }

    // Menyimpan data class baru
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'homeroom_teacher_id' => 'required|exists:teachers,id',
        ]);

        // Menyimpan gambar jika ada
        if ($request->hasFile('image')) {
            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
        } else {
            $imageName = null;
        }

        // Menyimpan data class
        ClassModel::create([
            'name' => $request->name,
            'image' => 'images/'. $imageName,
            'teacher_id' =>  $request->homeroom_teacher_id,
        ]);

        return redirect()->route('classes.index')->with('success', 'Class created successfully');
    }

    // Menampilkan form untuk edit class
    public function edit($id)
    {
        $class = ClassModel::findOrFail($id);
        $teachers = Teacher::all();  // Ambil semua data guru untuk pilihan wali kelas
        return view('admin.classes.edit', compact('class', 'teachers'));
    }

    // Menyimpan perubahan data class
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:jpg,jpeg,png,gif|max:2048',
            'homeroom_teacher_id' => 'required|exists:teachers,id',
        ]);

        $class = ClassModel::findOrFail($id);

        // Menyimpan gambar baru jika ada
        if ($request->hasFile('image')) {
            
            if ($class->image && file_exists(public_path($class->image))) {
                unlink(public_path($class->image));
            }

            $imageName = time() . '.' . $request->image->getClientOriginalExtension();
            $request->image->move(public_path('images'), $imageName);
            $class->image = 'images/' . $imageName;
        }

        $class->update([
            'name' => $request->name,
            'teacher_id' => $request->homeroom_teacher_id,
        ]);

        return redirect()->route('classes.index')->with('success', 'Class updated successfully');
    }

    // Menghapus class
    public function destroy($id)
    {
        $class = ClassModel::findOrFail($id);

        if ($class->image && file_exists(public_path($class->image))) {
            unlink(public_path($class->image));
        }

        $class->delete();

        return redirect()->route('classes.index')->with('success', 'Class deleted successfully');
    }
}
