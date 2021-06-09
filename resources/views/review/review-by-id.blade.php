@extends('layouts.blank')
@section('title', 'Review')
@component('components.topbar')
@endcomponent
@section('content')


<br>

<div class="container">
    <legend class="text-center">Review Kelas {{$id_course}}</legend>
    <div class="card-group">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    @foreach ($reviews as $review)
                    <div class="media mb-3" style="border: 1px solid black;border-radius: 10px">
                        <div class="media-body ml-3 py-3 mb-2">
                            <h5 class="mt-0 btn btn-info">{{$review->rating}}</h5> | <b> User {{$review->id_user}}</b>
                            <p>{{$review->review}}</p>

                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>


    @endsection