@extends('layouts.blank')
@section('title', 'kelas-buat-materi')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class="container">
<br>
@foreach ($errors->all() as $error)

	<div class="alert alert-danger mb-3">{{ $error }}</div>

@endforeach


<form method="post" action="{{ route('kelas.store.file') }}" enctype='multipart/form-data'>
@csrf
  <fieldset enable>
    <legend>FORM MATERI</legend>
    
    <div class="form-group mb-3">
      <label for="name_topic" class="form-label">Judul Materi</label>
      <input type="text" id="name_topic" name="name_topic" class="form-control" placeholder="Judul Materi">

    </div>
    <div class="form-group mb-3">
      <label for="file_topic" class="form-label">Upload Materi</label>
      <input type="file" id="file_topic" name="file_topic" class="form-control" placeholder="File Materi">

    </div>
    
  <!-- <div class="d-grid gap-2 col-2 mx-auto"> -->
    <button class="btn btn-primary">UPLOAD</button>
  <!-- </div> -->
   
</form>

<br>
<br>
<br>


<button type="button" class="btn btn-info" class="text-right" style="float: right;">
<a href="{{ route('kelas.create.video') }}">
Upload Video</a></button>

<button type="button" class="btn btn-info" class="text-left" style="float: left;">
<a href="{{ route('home') }}">
Back</a></button>


</div>



@endsection