@extends('layouts.blank')
@section('title', 'Aplikasi Ditolak!')
@component('components.topbar')
@endcomponent
@section('content')

<style>

.card-body{
position: absolute;
width: 300px;
height: 300px;
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
        <form method="post" action="{{ route('ajuStatus.admin.update', $user->id) }}">
        @csrf
            <h5>Sayangnya, Proses pengajuan Anda ditolak, Yuk masih ada kesempatan untuk mencoba kembali</h5>            
            <input type="hidden" name="noname" value="null">
            <button type="submit" class="btn btn-success">
                Kembali ke Menu Utama
            </button>
        </form>
    </div>
</div>
</div>
<br>

</div>
@endsection
