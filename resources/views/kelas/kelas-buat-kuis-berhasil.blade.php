@extends('layouts.blank')
@section('title', 'Buat Kuis Berhasil Dibuat!')
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
      <h5>Soal Quiz Berhasil Dibuat! Klik tombol dibawah untuk melanjutkan</h5>
    <br><a href="#" class="btn btn-success">Selanjutnya</a>
  </div>
</div>
</div>
</div>
<br>

</div>
@endsection
