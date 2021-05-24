@extends('layouts.blank')
@section('title', 'kelas-buat')
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


<form method="post" action="{{ route('kelas.store') }}">
@csrf
  <fieldset enable>
    <legend>FORM KELAS</legend>
    
    <div class="form-group mb-3">
      <label for="name_kelas" class="form-label">Nama Kelas</label>
      <input type="text" id="name_kelas" name="name_kelas" class="form-control" placeholder="Nama Kelas">

    </div>
    <div class="form-group mb-3">
      <label for="desc_kelas" class="form-label">Deskripsi Kelas</label>
      <input type="text" id="desc_kelas" name="desc_kelas" class="form-control" placeholder="Deskripsi Kelas">

    </div>
    
  <!-- <div class="d-grid gap-2 col-2 mx-auto"> -->
    <button class="btn btn-primary">SUBMIT</button>
  <!-- </div> -->
   
</form>

<br>
<br>
<br>


<button type="button" class="btn btn-info" class="text-right" style="float: right;">
<a href="{{ route('kelas.create.topic') }}">
Upload Materi</a></button>

<button type="button" class="btn btn-info" class="text-left" style="float: left;">
<a href="{{ route('home') }}">
Back</a></button>

</div>



@endsection