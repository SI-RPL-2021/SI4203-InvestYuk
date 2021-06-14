@extends('layouts.blank')
@section('title', 'Pengajuan Status | Admin')
@component('components.topbar')
@endcomponent
@section('content')

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
    <div class="card-body1">
        <form method="post" action="{{ route('ajuStatus.store') }}">
						@csrf
            <table class="table text-center">
                <thead>
                    <tr>
                    <th scope="col">Nama User</th>
                    <th scope="col">Motivasi</th>
                    <th scope="col">Disetujui?</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                    <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->motivasi }}</td>
                    <td> 
                    <input type="hidden" name="{{ $user->id }}" value="0" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger">
                    <div class="form-check form-switch">
                    <input type="checkbox" name="{{ $user->id }}" value="1" checked data-toggle="toggle" data-on="Ya" data-off="Tidak" data-onstyle="success" data-offstyle="danger">
                    </div> </td>
                    </tr>
                    @endforeach
                </tbody>
            
            </table>
            
            @if(count($users) == 0)
                <p class="form-group text-center">Tidak ada pengajuan perubahan status</p>
            @else
                <div class="form-group text-center">
                    <button href="#" class="btn btn-success align-middle">Konfirmasi</button>
                </div>
            @endif
        </form>
    </div>
</div>

@endsection
