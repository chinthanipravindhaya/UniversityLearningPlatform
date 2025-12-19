@extends('layouts.app')
@section('content')
<div class="container-fluid mt-4">

    <h4 class="mb-4 mt-7 text-center">Available Courses</h4>

    <div class="row mb-4">
        <div class="col-md-6 offset-md-3">
            <form method="GET" action="" class="d-flex">
                <input 
                    type="text" 
                    name="search" 
                    class="form-control me-2" 
                    placeholder="Search materials..." 
                >
                <button type="submit" class="btn btn-secondary">Search</button>
            </form>
        </div>
    </div>

    @php
    $materials = [
        
            ['title'=>'Introduction to Programming in Python',
            'desc'=>'Learn the basics of programming using python including variables and loops',
            'image'=>'images/python.png'
            ],
            ['title'=>'Database Management and SQL Basics',
            'desc'=>'Learn the basics of programming using python including variables and loops',
            'image'=>'images/database.png'
            ],
            [ 'title'=>'Web Development',
            'desc'=>'Learn the basics of programming using python including variables and loops',
            'image'=>'images/web.png'
            ]
];
    
        
    @endphp

    <div class="row">
        @foreach ($materials as $material)
        <div class="col-md-4 mb-4">
            <div class="card bg-white border text-dark shadow-sm h-100 card-hover">
                <img src="{{asset($material['image'])}}" class="card-img-top" alt="Course Image" style="height: 150px; object-fit: cover;">
                <div class="card-body">
                    <h5 class="card-title text-center fs-6">{{$material['title']}}</h5>
                    <p class="card-text fs-6">
                        {{$material['desc']}}
                    </p>
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