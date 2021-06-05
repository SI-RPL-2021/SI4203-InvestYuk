@extends('layouts.blank')
@section('title', 'Materi Pembelajaran')
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
height: 750px;
left: 330px;
top: 96px;

background: rgba(196, 196, 196, 0.22);
border: 5px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

.video-fluid {
  width: 100%;
  height: auto;
}

.card2{
position: absolute;
width: 150px;
height: 35px;
left: 1400px;
top: 875px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

</style>


<div class="container">
<br>
    <div class="card-body">
    <div class="col text-center">
    <h4>Materinya</h4><br>
    </div>
    <p>Investasi adalah suatu aktivitas dalam menempatkan dana pada satu periode tertentu dengan harapan penggunaan dana tersebut bisa menghasilkan keuntungan atau peningkatan nilai suatu investasi.</p>

<p>Secara bahasa, menurut Wikipedia pengertian investasi ini adalah suatu istilah yang digunakan untuk kegiatan yang berhubungan dengan akumulasi dalam suatu bentuk aktiva sebagai harapan untuk mendapatkan keuntungan.</p>

<p>Seseorang yang berinvestasi dikenal juga sebagai investor. Investasi ini juga terkadang disebut sebagai penanaman modal ke suatu perusahaan. Sehingga istilah investasi ini sudah sangat fasih dalam suatu bidang bisnis.</p>

<p>Istilah investasi ini bukanlah hal yang asing di kalangan pembisnis. Investasi yang berkaitan dengan hal-hal yang menyangkut keuangan dan ekonomi.</p>
    
    </div>
  </div>
</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card2">
        <div class="container">
        <div class="col text-center">
          <h5><a class="class1" href="#">Video >></a></h5>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
