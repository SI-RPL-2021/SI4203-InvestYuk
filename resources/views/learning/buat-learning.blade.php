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
        <label for="linkCourse" class="form-label">Link Video/Artikel</label>
        <textarea class="form-control" id="linkCourse" rows="3"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>


@endsection
