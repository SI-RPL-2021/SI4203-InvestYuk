@extends('layouts.blank')
@section('title', 'Materi Pembelajaran')
@component('components.topbar')
@endcomponent
@section('content')

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
    <h4>{{ $kelas->name_topic }}</h4><br>
    </div>
    <p>
    <iframe width="1230px" height="625px" src="{{ url('/storage/file_kelass/'.$kelas->file_topic) }}">
    </iframe>
    </p>
    </div>
  </div>
</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card2">
        <div class="container">
          <div class="col text-center">
            <h5><a class="class1" href="{{ route('kelas.show.video', $kelas->id) }}">Video >></a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
