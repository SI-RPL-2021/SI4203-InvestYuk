@extends('layouts.blank')
@section('title', 'Learning')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class="container">

    <form method="POST" action="{{ route('submitCourse') }}">
        @csrf
        <legend>Learning</legend>
        <br>

        <div class="mb-3">
            <label for="namaCourse" class="form-label">Nama Course</label>
            <input type="text" class="form-control" id="namacourse" name="course_name">
        </div>

        <div class="mb-3">
            <label for="deskripsiCourse" class="form-label">Deskripsi Course</label>
            <input type="text" class="form-control" id="deskripsiCourse" name="course_desc">
        </div>

        <div class="mb-3">
            <label for="enrollPassword" class="form-label">Enroll (Password Learning)</label>
            <input type="text" class="form-control" id="deskripsiCourse" name="enroll_key">
        </div>

        <div class="mb=3">
            <label for="listKelas" class="form-label">List Kelas</label>
            <div class="list-group"><label><input type="checkbox" name="list_kelas[]" value="kelas 1"><span
                        class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 1</span></label></div>
            <div class="list-group"><label><input type="checkbox" name="list_kelas[]" value="kelas 2"><span
                        class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 2</span></label></div>
            <div class="list-group"><label><input type="checkbox" name="list_kelas[]" value="kelas 3"><span
                        class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 3</span></label></div>
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection