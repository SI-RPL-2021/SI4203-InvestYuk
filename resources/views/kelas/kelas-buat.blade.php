@extends('layouts.blank')
@section('title', 'kelas-buat')
@component('components.topbar')
@endcomponent
@section('content')

<br>
<br>
<div class="container">
<form>
  <fieldset enable>
    <legend>FORM KELAS</legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Nama Kelas</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Nama Kelas">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label">Deskripsi Kelas</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Deskripsi Kelas">
    </div>
    
<div class="d-grid gap-2 col-2 mx-auto">
  <button class="btn btn-primary" type="button">SUBMIT</button>
</div>
   
</form>

<br>
<br>
<br>

<button type="button" class="btn btn-info" class="text-right" style="float: right;">Upload Video/materi</button>
<button type="button" class="btn btn-info" class="text-left" style="float: left;">Back</button>


</div>



@endsection