@extends('layouts.blank')
@section('title', 'Pengajuan Status | Admin')
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
width: 720px;
height: 520px;
left: 550px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card-body2{
position: absolute;
width: 150px;
height: 320px;
left: 600px;
top: 7px;
}

.card-body3{
position: absolute;
width: 150px;
height: 320px;
left: 275px;
top: 56px;
}


</style>



<div class="container">
    <div class="card-body1"><br>
      <form>
      <h5>Pengajuan Status Teacher</h5><br>
      <fieldset disabled>
        <div class="form-group">
          <label for="disabledTextInput">Nama User</label>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Paimon" style="width:250px;"><br>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Amber" style="width:250px;"><br>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Kaeya" style="width:250px;"><br>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Lisa" style="width:250px;"><br>
          <input type="text" id="disabledTextInput" class="form-control" placeholder="Diluc" style="width:250px;">
        </div>
      <div class="col text-center">
      <br><a href="#" class="btn btn-success">Konfirmasi</a>
      </div>

    <div class="card-body2"><br>
      <h5>Disetujui?</h5><br>
        <br><input type="checkbox" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger"><br>
        <br><input type="checkbox" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger"><br>
        <br><input type="checkbox" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger"><br>
        <br><input type="checkbox" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger"><br>
        <br><input type="checkbox" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger"><br>
    </div>
    <div class="card-body3"><br>
    <label for="disabledTextInput">Motivasi</label>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Au ah" style="width:250px;"><br>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Males" style="width:250px;"><br>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Mau" style="width:250px;"><br>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Beli" style="width:250px;"><br>
      <input type="text" id="disabledTextInput" class="form-control" placeholder="Truk" style="width:250px;">
    </div>
</div>
</form>
@endsection
