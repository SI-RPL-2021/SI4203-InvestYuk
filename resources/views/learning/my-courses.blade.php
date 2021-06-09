@extends('layouts.blank')
@section('title', 'Learning')
@component('components.topbar')
@endcomponent
@section('content')


<br><br>
<div class="container">
    <div class="row mb-5">
        <div class="col-md-12 text-center">
            <h1>MY COURSE</h1>
        </div>
    </div>
    <div class="row">
        <a class="btn btn-primary ml-3 mb-4" href="{{ route('courses') }}">Learn New Course</a>
    </div>
    <div class="row">
        @foreach ($courses as $dc)
        <div class="col-sm-4 mb-4">
            <div class="card w-150" style="width: 17em;">
                <div class="card-body">
                    <h5 class="card-title">{{$dc->course_name}}</h5>
                    <p class="card-text"> {{$dc->course_desc}} </p>
                    <a class="btn btn-info" href="{{ route('contentCourse',$dc->id_course) }}">See Course</a>
                    <a class="btn btn-primary" href="{{route('createReview',$dc->id_course)}}">Review</a>
                </div>
            </div>
        </div>
        @endforeach

    </div>

</div>

@endsection