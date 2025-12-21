@extends('layouts.slider')

@section('view_course')

@if(session('course_message'))
    <div class="text-white px-1 rounded d-flex align-items-center justify-content-center mx-auto"
    style="background-color: #28a745; width:45%;height:30px">
    {{session('course_message')}}    
</div>
@endif
<div class="container-fluid">

    <h4 class="mb-4 mt-7 text-center">Available Courses</h4>

    <div class="row">
        @foreach($courses as $course)
        <div class="col-md-4 mb-4">
            <div class="card bg-white border text-dark shadow-sm h-100 card-hover">

                <img src="{{asset('images/'.$course->image)}}"  
                     class="card-img-top" 
                     alt="Course Image" 
                     style="width: 100%; height: 200px; object-fit: cover; border-top-left-radius: 0; border-top-right-radius: 0; display: block; margin: 0;">

                <div class="card-body">
                    <h5 class="card-title text-center fs-6">{{$course->title}}</h5>
                    <p class="card-text fs-6">{{$course->description}}</p>
                    <div class="text-center">
                        <a href="#" class="btn btn-outline-secondary btn-sm">See more</a>
                    </div>

                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection

