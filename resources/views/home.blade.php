@extends('layouts.blank')
@section('title', 'Home')
@component('components.topbar')
@endcomponent
@section('content')

<!-- tampilan utama saat memasuki website
        (boleh diakses tanpa login)
 -->
<style>

img {
  opacity: 0.75;
}


</style>

<div class= "container-sm">

            <h1 style = "text-align : Center; color:black;">Selamat Datang!</h1>
            <p style = "text-align : Center; color:black;">Pilih modul pembelajaran</p>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-4">
                        <div class="card shadow" style="width: 20rem;">
                            <img class="card-img-top" src="https://cdn.icon-icons.com/icons2/1312/PNG/512/01-8_86385.png" alt="Card image cap">
                            <div class="card-body text-center">
                                <h5 class="card-title">Bab 1</h5>
                                <h5 class="text-primary">Fundamentals</h5> <br>
                                <div class="card-header">
                                Materi pembelajaran:
                                </div>
                                <ul class="list-group list-group-flush text-center">
                                    <li class="list-group-item">Apa itu Keuangan?</li>
                                    <li class="list-group-item">Apa itu Investasi?</li>
                                    <div class="card-footer">
                                        <a href="#" class="btn btn-primary">Pilih</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card shadow" style="width: 20rem;">
                                <img class="card-img-top" src="https://cdn.icon-icons.com/icons2/1312/PNG/512/01-8_86385.png" alt="Card image cap">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Bab 2</h5>
                                    <h5 class="text-primary">Mengelola Keuangan</h5> <br>
                                    <div class="card-header">
                                        Materi pembelajaran:
                                    </div>
                                    <ul class="list-group list-group-flush text-center">
                                        <li class="list-group-item">Mata uang</li>
                                        <li class="list-group-item">Jenis jenis keuangan</li>
                                        <li class="list-group-item">Menyimpan berkepanjangan</li>
                                        <div class="card-footer">
                                            <a href="#" class="btn btn-primary">Pilih</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="col-md-4">
                                    <div class="card shadow" style="width: 20rem;">
                                        <img class="card-img-top" src="https://cdn.icon-icons.com/icons2/1312/PNG/512/01-8_86385.png" alt="Card image cap">
                                        <div class="card-body text-center">
                                            <h5 class="card-title">Bab 3</h5>
                                            <h5 class="text-primary">Investasi</h5> <br>
                                            <div class="card-header">
                                                Materi pembelajaran:
                                            </div>
                                            <ul class="list-group list-group-flush text-center">
                                                <li class="list-group-item">Apa itu Broker?</li>
                                                <li class="list-group-item">Apa itu Reksadana?</li>
                                                <li class="list-group-item">Apa itu Trading?</li>
                                                <li class="list-group-item">Apa itu Cryptocurrency?</li>
                                                <li class="list-group-item">Apa itu Fintech?</li>
                                                <div class="card-footer">
                                                    <a href="#" class="btn btn-primary">Pilih</a>
                                                </div>
                                            </div>  
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>  

@endsection
