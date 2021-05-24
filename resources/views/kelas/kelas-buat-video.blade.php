@extends('layouts.blank')
@section('title', 'kelas-buat-video')
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


<form method="post" action="{{ route('kelas.store.file') }}">
@csrf
  <fieldset enable>
    <legend>FORM VIDEO</legend>
    
    <div class="form-group mb-3">
      <label for="name_video" class="form-label">Judul Video</label>
      <input type="text" id="name_video" name="name_video" class="form-control" placeholder="Judul Video">

    </div>
    <div class="form-group mb-3">
      <label for="file_video" class="form-label">Upload Video</label>
      <input type="file" id="file_video" name="file_video" class="form-control" placeholder="Video Materi">

    </div>
    
  <!-- <div class="d-grid gap-2 col-2 mx-auto"> -->
    <button class="btn btn-primary">UPLOAD</button>
  <!-- </div> -->
   
</form>

<br>
<br>
<br>


<button type="button" class="btn btn-info" class="text-right" style="float: right;">
<a href="{{ route('kelas.create.kuis') }}">
Buat Kuis</a></button>

<button type="button" class="btn btn-info" class="text-left" style="float: left;">
<a href="{{ route('home') }}">
Back</a></button>

</div>



@endsection