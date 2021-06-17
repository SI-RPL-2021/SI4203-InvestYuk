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
                                <th scope="col">Course Name</th>
                                <th scope="col">Student Name</th>
                                <th scope="col">Rating </th>
                                <th scope="col">Review</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count($reviews); $i++)
                            <tr>
                                <td>{{ $courses->where('id', $reviews[$i]->id_course)->first()->course_name }}</td>
                                <td>{{ $users->where('id', $reviews[$i]->id_user)->first()->name }}</td>
                                <td>{{ $reviews[$i]->rating }}</td>
                                <td>{{ $reviews[$i]->review }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>
            </div>
        </div>


    </div>


    @endsection