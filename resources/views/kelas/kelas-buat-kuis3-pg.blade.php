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
<br>
@foreach ($errors->all() as $error)

	<div class="alert alert-danger mb-3">{{ $error }}</div>

@endforeach



<div class="container">
  <div class="card-body"><br>
    <div class="col text-center">
      <h5>Tipe Soal : Pilihan Ganda</h5><br>
      <form method="post" action="{{ route('kelas.store.file') }}" enctype='multipart/form-data'>
      @csrf
        <h5>Silakan Masukkan Soal</h5>
        <input type="hidden" value="pilgan" name="jenis_kuis">
        <div class="form-group">
          <label for="soal_kuis">No 1</label>
          <textarea class="form-control" id="soal_kuis" name="soal_kuis" placeholder="Masukkan Disini" rows="3"></textarea>
        </div>

        <h5>Silakan Masukkan Jawaban</h5>
        <div class="form-check">
          <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option1">
          <label class="form-check-label" for="jawaban_kuis">
            Pilihan A
          </label>
          <input type="text" id="option1" name="option1" class="form-control" placeholder="Masukkan Disini">
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option2">
          <label class="form-check-label" for="jawaban_kuis">
            Pilihan B
          </label>
          <input type="text" id="option2" name="option2" class="form-control" placeholder="Masukkan Disini">
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option3">
          <label class="form-check-label" for="jawaban_kuis">
            Pilihan C
          </label>
          <input type="text" id="option3" name="option3" class="form-control" placeholder="Masukkan Disini">
        </div>

        <div class="form-check">
          <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option4">
          <label class="form-check-label" for="jawaban_kuis">
            Pilihan D
          </label>
          <input type="text" id="option4" name="option4" class="form-control" placeholder="Masukkan Disini">
        </div>

        <div class="col text-center">
          <br>
          <p>Pilih salah satu sebagai petunjuk jawaban yang benar</p>
          <br>
          <button href="#" class="btn btn-primary">Selanjutnya, Untuk Input Soal Berikutnya</button>
        </div>
      </form>
      
        <div class="col text-center">
          <a href="{{ route('home') }}" class="btn btn-success">Simpan, Jika Sudah Selesai</a>
        </div>
    </div>
  </div>
  <br>

</div>
@endsection
