@extends('layouts.blank')
@section('title', 'Aplikasi Telah Terkirim!')
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
height: 300px;
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
      <h5>Aplikasi pengajuan status telah berhasil tersimpan. Selanjutnya aplikasi pengajuan akan diinformasikan ke User terkait.</h5>
    <br><a href="{{ route('home') }}" class="btn btn-success">Kembali ke Menu Utama</a>
  </div>
</div>
</div>
</div>
<br>

</div>
@endsection
