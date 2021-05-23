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
width: 1280px;
height: 720px;
left: 350px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}


</style>



<div class="container">
    <div class="card-body"><br>
    <div class="col text-center">
      <h5>Tipe Soal : Pilihan Ganda</h5><br>
      </div>
      <form>
      <h5>Silakan Masukkan Soal</h5>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">No 1</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masukkan Disini" rows="3"></textarea>
  </div>

  <h5>Silakan Masukkan Jawaban</h5>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios1" value="option1">
  <label class="form-check-label" for="exampleRadios1">
    Pilihan A
  </label>
  <input class="form-control" type="text" placeholder="Masukkan Disini">
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios2" value="option2">
  <label class="form-check-label" for="exampleRadios2">
    Pilihan B
  </label>
  <input class="form-control" type="text" placeholder="Masukkan Disini">
  </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios3" value="option3">
  <label class="form-check-label" for="exampleRadios3">
    Pilihan C
  </label>
  <input class="form-control" type="text" placeholder="Masukkan Disini">
</div>
<div class="form-check">
  <input class="form-check-input" type="radio" name="exampleRadios" id="exampleRadios4" value="option4">
  <label class="form-check-label" for="exampleRadios4">
    Pilihan D
  </label>
  <input class="form-control" type="text" placeholder="Masukkan Disini">
    </div>
    <div class="col text-center">
    <br><p>Pilih salah satu sebagai petunjuk jawaban yang benar</p>
    <br><a href="#" class="btn btn-primary">Selanjutnya, Untuk Input Soal Berikutnya</a>
    <a href="#" class="btn btn-success">Simpan, Jika Sudah Selesai</a>
  </div>
</div>
</form>
</div>
</div>
<br>

</div>
@endsection
