@extends('layouts.blank')
@section('title', 'Home Laerning')
@component('components.topbar')
@endcomponent
@section('content')


<br><br>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1>LIST COURSES</h1>
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary ml-3 mb-4" href="{{ route('createCourse') }}">Tambah Course (Admin)</a>
        <a class="btn btn-info ml-3 mb-4" href="{{ route('myCourse') }}">My Course</a>
        {{-- {{session()->get('name')}} --}}
    </div>
    {{-- {{dd($dataCourse)}} --}}
    <div class="row">
        @foreach ($dataCourse as $dc)
        <div class="col-sm-4 mb-4">
            <div class="card w-150" style="width: 17em;">
                <div class="card-body">
                    <h5 class="card-title">{{$dc['course_name']}}</h5>
                    <p class="card-text"> {{$dc['course_desc']}} </p>
                    <a href="{{ route('inputKey',$dc['id']) }}" class="btn btn-primary">ENROLL</a>
                    <a href="{{ route('reviewById',$dc['id']) }}" class="btn btn-success">SEE REVIEW</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection