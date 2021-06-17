@extends('layouts.blank')
@section('title', 'Review')
@component('components.topbar')
@endcomponent
@section('content')


<br>

<div class="container">
    <legend class="text-center">Review Learning Path {{$course_name}}</legend>
    <div class="card-group">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @for ($i = 0; $i < count($reviews); $i++)
                    <div class="media mb-3" style="border: 1px solid black;border-radius: 10px">
                        <div class="media-body ml-3 py-3 mb-2">
                            <h5 class="mt-0 btn btn-info">{{$reviews[$i]->rating}}</h5> | <b> User {{ $users->where('id', $reviews[$i]->id_user)->first()->name }}</b>
                            <p>{{$reviews[$i]->review}}</p>

                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>


    </div>


    @endsection