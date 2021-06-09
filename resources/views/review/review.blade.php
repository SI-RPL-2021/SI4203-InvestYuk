@extends('layouts.blank')
@section('title', 'Review')
@component('components.topbar')
@endcomponent
@section('content')


<style>
    .card1 {
        position: absolute;
        width: 75px;
        height: 39px;
        left: 429px;
        top: 139px;
    }

    .card2 {
        position: absolute;
        width: 75px;
        height: 39px;
        left: 610px;
        top: 139px;
    }

    .card3 {
        position: absolute;
        width: 75px;
        height: 39px;
        left: 739px;
        top: 139px;
    }

    .card-group1 {
        position: absolute;
        width: 499px;
        height: 499px;
        left: 410px;
        top: 239px;
    }
</style>

<br>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Review Kelas</h1>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card-group">
                <div class="container">
                    <form action="{{ route('submitReview')}}" method="POST">
                        @csrf
                        <div class="row-grup">
                            {{-- <label for="id_course">ID Course</label> --}}
                            <input type="text" name="id_course" value="{{$course['id']}}" hidden>
                            {{-- <label for="id_user">ID User</label> --}}
                            <input type="text" name="id_user" value="{{$user}}" hidden>
                            <div class="card1">
                                <div class="container">
                                    <button type="button" class="btn btn-secondary btn-lg" href="#">Tidak Puas<input
                                            type="radio" class="form-control" id="namacourse" name="rating"
                                            value="Tidak Puas"></button>
                                </div>
                            </div>

                            <div class="card2">
                                <div class="container">
                                    <button type="button" class="btn btn-secondary btn-lg" href="#">Biasa <input
                                            type="radio" class="form-control" id="namacourse" name="rating"
                                            value="Biasa"></button>
                                </div>
                            </div>

                            <div class="card3">
                                <div class="container">
                                    <button type="button" class="btn btn-secondary btn-lg" href="#">Puas<input
                                            type="radio" class="form-control" id="namacourse" name="rating"
                                            value="Puas"></button>
                                </div>
                            </div>
                            <div class="card-group1">
                                <label for="linkCourse" class="form-label"></label>
                                <textarea class="form-control" id="linkCourse" rows="7"
                                    name="review"></textarea><br><br>
                                <button class="btn btn-primary" type="submit" value="Submit">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @endsection