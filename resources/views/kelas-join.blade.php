@extends('layouts.blank')
@section('title', 'Kelas Join')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->
<style>

.card-img{
position: absolute;
width: 110px;
height: 107px;
left: 375px;
top: 281px;

}

img {
width: 110px;
height: 107px;
}

.card10{
position: absolute;
width: 910px;
height: 272px;
left: 265px;
top: 198px;

border: 1px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card1{
position: absolute;
width: 515px;
height: 162px;
left: 532px;
top: 172px;

border: 1px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card2{
    position: absolute;
    width: 169px;
height: 76px;
left: 265px;
top: 543px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

.card3{
    position: absolute;
width: 169px;
height: 76px;
left: 650px;
top: 543px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card4{
    position: absolute;
width: 169px;
height: 76px;
left: 1006px;
top: 543px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}




</style>


<div class="container">
<br>

<div class="card10">
</div>

<div class="card-img">
    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTu9sVkeebkZi20aIxjXKbIdUKUjXW27qjfrA&usqp=CAU">
</div>

<div class="card">
  <div class="card1">
    <div class="card-body">
      <h5 class="card-title">Info Kelas</h5>
      <p class="card-text">Kelas Saham adalah...................
      .......................</p>
    </div>
  </div>
</div>
</div>

<br>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card2">
        <div class="container">
          <h4><a class="video" href="#">Video</a></h4> 
        </div>
      </div>
  
      <div class="card3">
        <div class="container">
            <h4><a class="materi" href="#">Materi</a></h4>  
        </div>
      </div>

      <div class="card4">
        <div class="container">
        <h4><a class="quiz" href="#">Quiz</a></h4> 
        </div>
      </div>
    </div>
  </div>
</div>


@endsection