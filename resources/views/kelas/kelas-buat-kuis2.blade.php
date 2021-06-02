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
      <form method="post" action="{{ route('kelas.store.jenis.kuis') }}">
      @csrf
        <fieldset enable>
          <legend>Pilih Tipe Soal</legend>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKuis" id="jenisKuis" value="option1" checked>
              <label class="form-check-label" for="jenisKuis">
                Pilihan Ganda
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="jenisKuis" id="jenisKuis" value="option2">
              <label class="form-check-label" for="jenisKuis">
                Esai
              </label>
            </div>
          <br>
          <button class="btn btn-primary">Selanjutnya</button>
      </form>
    </div>
  </div>
</div>

@endsection
