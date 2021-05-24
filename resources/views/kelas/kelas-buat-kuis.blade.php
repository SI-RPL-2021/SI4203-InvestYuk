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
width: 758px;
height: 569px;
left: 830px;
top: 96px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
}

.card1{
position: absolute;
width: 183px;
height: 85px;
left: 300px;
top: 276px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.gambar{
position: absolute;
width: 700px;
height: 400px; 
}

</style>



<div class="container">
    <div class="card-body">
      <h5 class="card-title">Yeay! Kamu sekarang ada di Halaman Buat Quiz</h5>
      <p class="card-text">Di halaman ini, Kamu bisa membuat soal quiz sebagai tolak ukur untuk mengetahui kemampuan user. Silakan klik tombol "Buat Quiz"
      jika Kamu ingin menginputkan soal quiz. Bravo!</p>
      <img src="https://venngage-wordpress.s3.amazonaws.com/uploads/2015/06/header.png" class="gambar">
    </div>
  </div>
</div>
</div>

<br>

</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card1">
        <div class="container">
        <div class="col text-center">
          <br><h4><a class="class1" href="{{ route('kelas.create.jenis.kuis') }}">Buat Quiz!</a></h4>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection
