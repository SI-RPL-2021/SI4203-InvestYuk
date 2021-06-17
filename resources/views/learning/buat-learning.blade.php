@extends('layouts.blank')
@section('title', 'Learning Path')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class="container">

    <form method="POST" action="{{ route('submitCourse') }}">
        @csrf
        <legend>Learning Path</legend>
        <br>

        <div class="mb-3">
            <label for="namaCourse" class="form-label">Nama Learning Path</label>
            <input type="text" class="form-control" id="namacourse" name="course_name">
        </div>

        <div class="mb-3">
            <label for="deskripsiCourse" class="form-label">Deskripsi Learning Path</label>
            <input type="text" class="form-control" id="deskripsiCourse" name="course_desc">
        </div>

        <div class="mb-3">
            <label for="enrollPassword" class="form-label">Enroll (Password Learning Path)</label>
            <input type="text" class="form-control" id="deskripsiCourse" name="enroll_key">
        </div>

        <div class="mb=3">
            <label for="listKelas" class="form-label">List Kelas</label>
            @foreach($kelass as $kelas)
            <div class="list-group"><label><input type="checkbox" name="list_kelas[]" value="{{ $kelas->id }}"><span
                        class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>{{ $kelas->name_kelas }}</span></label></div>
            @endforeach
        </div>

        <br><br>
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection