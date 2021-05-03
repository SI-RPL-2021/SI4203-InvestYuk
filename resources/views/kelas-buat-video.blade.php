@extends('layouts.blank')
@section('title', 'kelas-buat-video')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class="container">
<form>
  <fieldset enable>
    <legend>FORM MATERI</legend>
    <div class="mb-3">
        <label for="formGroupExampleInput" class="form-label">Judul Video</label>
        <input type="text" class="form-control" id="formGroupExampleInput" placeholder="">
    </div>
    <div class="mb-3">
        <label for="formFile" class="form-label">Upload Video</label>
        <input class="form-control" type="file" id="formFile">
    </div>

    
<div class="d-grid gap-2 col-2 mx-auto">
  <button class="btn btn-primary" type="button">UPLOAD</button>
</div>
   
</form>

<br>
<br>
<br>

<button type="button" class="btn btn-info" class="text-right" style="float: right;">Buat Quiz</button>
<button type="button" class="btn btn-info" class="text-left" style="float: left;">Back</button>


</div>



@endsection