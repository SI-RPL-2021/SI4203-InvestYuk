@extends('layouts.blank')
@section('title', 'Kelas')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->

<style>

.card-body{
position: absolute;
width: 758px;
height: 569px;
left: 430px;
top: 96px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
}

.card1{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 276px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card2{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 425px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card3{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 574px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

</style>



<div class="container">
<br>
<div class="card">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Yuk Mari Bergabung di Invest Yuk!</h5>
      <p class="card-text">Invest Yuk adalah salah satu platform pembelajaran keuangan</p>
    </div>
  </div>
</div>
</div>

<br>

</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card1">
        <div class="container">
          <h5><a class="class1">Kuy bergabung bersama kami!</a></h5> 
            
        </div>
      </div>
      &nbsp;
      <div class="card2">
        <div class="container">
          <h5><a class="class2" href="#">Login</a></h5> 
            <p>Jika kamu sudah memiliki akun</p> 
        </div>
      </div>
      &nbsp;
      <div class="card3">
        <div class="container">
          <h5><a class="class3" href="#">Register</a></h5> 
            <p>Jika kamu belum memiliki akun</p> 
        </div>
      </div>
    </div>
  </div>
</div>

@endsection