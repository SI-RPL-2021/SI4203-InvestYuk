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
height: 375px;
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
      <h5>Tipe Soal : Essay</h5><br>
      </div>
      <form>
      <h5>Silakan Masukkan Soal</h5>
      <div class="form-group">
    <label for="exampleFormControlTextarea1">No 1</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Masukkan Disini" rows="3"></textarea>
  </div>


    <div class="col text-center">
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
