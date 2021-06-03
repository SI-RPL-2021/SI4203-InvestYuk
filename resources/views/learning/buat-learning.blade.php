@extends('layouts.blank')
@section('title', 'Learning Buat')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class = "container">

    <form>
    <legend>Learning</legend>
    <br>

    <div class="mb-3">
        <label for="namaCourse" class="form-label">Nama Course</label>
        <input type="text" class="form-control" id="namacourse">
    </div>

    <div class="mb-3">
        <label for="deskripsiCourse" class="form-label">Deskripsi Course</label>
        <input type="text" class="form-control" id="deskripsiCourse">
    </div>

    <div class="mb-3">
        <label for="enrollPassword" class="form-label">Enroll (Password Learning)</label>
        <textarea class="form-control" id="linkCourse" rows="1"></textarea>
    </div>

    <div class="mb=3">
        <label for="listKelas" class="form-label">List Kelas</label>
        <div class="list-group"><label><input type="checkbox"><span class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 1</span></label></div>
        <div class="list-group"><label><input type="checkbox"><span class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 2</span></label></div>
        <div class="list-group"><label><input type="checkbox"><span class="list-group-item-text">&nbsp;<i class="fa fa-fw"></i>Kelas 3</span></label></div>
    </div>

    <br><br>
    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection
