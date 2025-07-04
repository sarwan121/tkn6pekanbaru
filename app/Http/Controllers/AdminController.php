<?php

namespace App\Http\Controllers;

use App\Models\Activity;
use App\Models\ClassModel;
use App\Models\Facility;
use App\Models\Teacher;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        // Ambil jumlah data dari setiap model
        $activityCount = Activity::count();
        $classCount = ClassModel::count();
        $teacherCount = Teacher::count();
        $facilityCount = Facility::count();

        return view('admin.index', compact('activityCount', 'classCount', 'teacherCount', 'facilityCount'));
    }
}
