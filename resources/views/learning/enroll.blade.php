@extends('layouts.blank')
@section('title', 'ENROLL')
@component('components.topbar')
@endcomponent
@section('content')


<br>
<br>
<div class="container">

  <form action="{{route('enrollCourse')}}" method="POST">
    @csrf
    <legend>Nama Coursenya</legend>
    <p>by InvestYuk!</p>
    <br>
    <label for="">Id Course</label>
    <input type="text" class="form-control" id="enroll" name="id_course" value="{{$data_course['id']}}">
    <label for="">Course Name</label>
    <input type="text" class="form-control" id="enroll" name="course_name" value="{{$data_course['course_name']}}">
    <br>
    <div class="input-group">
      <div class="input-group-text">Enroll</div>
      <input type="text" class="form-control" id="enroll" name="enroll_key">
    </div>

    <br>
    <br>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>
</div>


@endsection