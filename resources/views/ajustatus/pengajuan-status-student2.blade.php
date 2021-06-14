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
width: 720px;
height: 300px;
left: 600px;
top: 100px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

</style>



<div class="container">
    <div class="card-body1"><br>
    <div class="col text-center">
    <h5>Motivasi</h5><br>
    <form>
    <div class="form-group">
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  <br><button type="submit" class="btn btn-success">Submit</button>
</form>
@endsection
