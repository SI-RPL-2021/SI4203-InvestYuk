@extends('layouts.blank')
@section('title', 'Your Dashboard')
@component('components.topbar')
@endcomponent
@section('content')


<!-- 

pakai if, kalau student munculnya apa, teacher apa, admin apa
teacher list kelas yang dia buat
admin list user untuk bisa diubah jadi teacher


 -->

<div class="container mt-5">

@if(auth()->user()->role == 'Admin')
    <a class="btn btn-block btn-primary" href="{{ route('createCourse') }}"> Buat Learning Path </a>
    <a class="btn btn-block btn-primary" href="{{ route('ajuStatus.create') }}"> Lihat Aju Status </a>
@else
    <!-- update data user, belakangan -->


    @if(auth()->user()->role == 'Teacher')
    <!-- list kelas, pake tabel -->
    <h4>List Kelasmu</h4>
    <table class="table">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th scope="col">Nama Kelas</th>
            <th scope="col">Deskripsi Kelas</th>
            </tr>
        </thead>
        <tbody>
            @foreach($kelass as $kelas)
            <tr>
            <th scope="row">{{ $loop->index }}</th>
            <td>{{ $kelas->name_kelas }} adada</td>
            <td>{{ $kelas->desc_kelas }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @elseif(auth()->user()->role == 'Student')
    





    @endif
@endif


</div>


@endsection