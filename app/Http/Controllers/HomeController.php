<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ClassModel;
use App\Models\Facility;
use App\Models\Teacher;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Mengambil data yang diperlukan untuk halaman utama
        $classes = ClassModel::with('teacher')->get(); // Mengambil data kelas beserta guru
        $activities = Activity::all(); // Mengambil semua data kegiatan
        $teachers = Teacher::all(); // Mengambil semua data guru
        $facilities = Facility::all();

        // Mengembalikan view 'home' dengan data yang sudah diambil
        return view('home', compact('classes', 'activities', 'teachers', 'facilities'));
    }
    public function aboutus()
    {
        // Mengembalikan view 'home' dengan data yang sudah diambil
        $teachers= Teacher::all();
        return view('aboutus', compact('teachers'));
    }
    public function contact()
    {
        // Mengembalikan view 'home' dengan data yang sudah diambil
        return view('contact');
    }
    public function facilities()
    {
        // Mengambil semua fasilitas dari database
        $facilities = Facility::all();

        // Mengirim data fasilitas ke view
        return view('facilities', compact('facilities'));
    }


}
