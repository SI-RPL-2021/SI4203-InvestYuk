@extends('layouts.blank')
@section('title', 'Review')
@component('components.topbar')
@endcomponent
@section('content')


<br>

<div class="container">
    <legend class="text-center">Review Seluruh Kelas</legend>
    <div class="card-group">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Course ID</th>
                                <th scope="col">Student ID</th>
                                <th scope="col">Rating </th>
                                <th scope="col">Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($reviews as $review)
                            <tr>
                                <td>{{$review['id_course']}}</td>
                                <td>{{$review['id_user']}}</td>
                                <td>{{$review['rating']}}</td>
                                <td>{{$review['review']}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


    @endsection