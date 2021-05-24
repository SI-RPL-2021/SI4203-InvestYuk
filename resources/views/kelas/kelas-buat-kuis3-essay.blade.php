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
<br>
@foreach ($errors->all() as $error)

	<div class="alert alert-danger mb-3">{{ $error }}</div>

@endforeach



<div class="container">
  <div class="card-body"><br>
    <div class="col text-center">
      <h5>Tipe Soal : Essay</h5><br>
      </div>
      <form method="post" action="{{ route('kelas.store.file') }}">
      @csrf
        <h5>Silakan Masukkan Soal</h5>
        {{ Form::hidden('jenis_kuis', 'essay') }}
          <div class="form-group">
            <label for="soal_kuis">Soal</label>
            <textarea class="form-control" id="soal_kuis" name="soal_kuis" placeholder="Masukkan Disini" rows="3"></textarea>
          </div>
          
          <div class="form-group">
            <label for="jawaban_kuis">Jawaban</label>
            <textarea class="form-control" id="jawaban_kuis" name="jawaban_kuis" placeholder="Masukkan Disini" rows="3"></textarea>
          </div>

          <div class="col text-center">
            <br>
            <button class="btn btn-primary">Selanjutnya, Untuk Input Soal Berikutnya</button>
          </div>
      </form>
      
          <div class="col text-center">
            <br>
            <a href="{{ route('home') }}" class="btn btn-success">Simpan, Jika Sudah Selesai</a>
          </div>
    </div>
  </div>
  <br>

</div>
@endsection
