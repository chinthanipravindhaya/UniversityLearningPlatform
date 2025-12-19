<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function studentDetails(){
        return view('admin.student');
    }

    public function addCourse(){
        return view('admin.addcourse');
    }
}
