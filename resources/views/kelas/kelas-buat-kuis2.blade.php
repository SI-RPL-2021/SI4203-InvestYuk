@extends('layouts.blank')
@section('title', 'Buat Kuis')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->

<style>

.card-body{
position: absolute;
width: 300px;
height: 250px;
left: 400px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}


</style>



<div class="container">
<div class="col text-center">
    <div class="card-body"><br>
      <h5>Pilih Tipe Soal</h5>
      <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1" checked>
  <label class="form-check-label" for="exampleRadios1">
    Pilihan Ganda
  </label>
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Esai
  </label>
    </div>
    <br><a href="#" class="btn btn-primary">Selanjutnya</a>
  </div>
</div>
</div>
</div>
<br>

</div>
@endsection
