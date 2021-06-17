@extends('layouts.blank')
@section('title', 'Home Laerning')
@component('components.topbar')
@endcomponent
@section('content')


<br><br>

<div class="container">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1>List Learning Path</h1>
        </div>
    </div>
    <div class="row">
        @if(auth()->user()->role == 'Admin')
            <a class="btn btn-primary ml-3 mb-4" href="{{ route('createCourse') }}">Tambah Learning Path</a>
        @endif
        <a class="btn btn-info ml-3 mb-4" href="{{ route('myCourse') }}">My Learning Path</a>
        {{-- {{session()->get('name')}} --}}
    </div>
    @if(auth()->user()->role == 'Admin')
        <div class="alert alert-info" role="alert">
            sebaiknya Anda menggunakan akun lain untuk melihat detail learning path
        </div>
    @endif
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