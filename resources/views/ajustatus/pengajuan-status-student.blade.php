@extends('layouts.blank')
@section('title', 'Pengajuan Status | Student')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->
 <link href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js"></script>
<style>

.card-body1{
position: absolute;
width: 500px;
height: 400px;
left: 550px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card-body2{
position: absolute;
width: 200px;
height: 70px;
left: 600px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 2px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}


</style>



<div class="container">
    <div class="card-body1"><br>
    <div class="col text-center">
    <h5>Untuk Melanjutkan, Silakan Masukkan Kembali Kredensial Anda</h5><br>
    <form>
  <div class="form-group">
    <label for="exampleInputUsername1">Username</label>
    <input type="username" class="form-control" id="exampleInputUsername1" placeholder="Masukkan Username">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Masukkan Email">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Password">
  </div>
  </div>
    <div class="container">
    <div class="card-body2">
    <div class="col text-center">
    <h5><a class="class1" href="#">Ajukan Pengajuan Status Teacher</a></h5>
    </div>
    </div>
</div>
</form>
@endsection
