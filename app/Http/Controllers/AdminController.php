<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
class AdminController extends Controller
{
    public function studentDetails(){
        return view('admin.student');
    }

    public function addCourse(){
        return view('admin.addcourse');
    }

    public function postAddcourse(Request $request){
        $request->validate([
            'title'=>'required|string|max:255',
            'description'=>'required|string',
            'image'=>'required|image|mimes:jpg,jpeg,png,gif|max:2048',
        ]);

        $course = new Course();
        $course->title = $request->title;
        $course->description = $request->description;

        $image = $request->image;
        if($image){
            $imagename = time().'.'.$image->getClientOriginalExtension();
            $course->image = $imagename;
        }

        $course->save();

        if($image && $course->save()){
            $request->image->move('images',$imagename);
        }
        return redirect()->route('admin.viewcourse')->with('course_message','Course Added Successfully!');
    }

    public function viewCourse(){
        $courses = Course::all();

        return view('admin.viewcourse',compact('courses'));

    }
}
