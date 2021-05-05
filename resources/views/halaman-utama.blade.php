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
left: 730px;
top: 96px;

background: rgba(10, 100, 100, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

.card1{
position: absolute;
width: 183px;
height: 74px;
left: 300px;
top: 276px;

background: rgba(10, 100, 100, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card2{
position: absolute;
width: 183px;
height: 85px;
left: 225px;
top: 425px;

background: rgba(100, 100, 10, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card3{
position: absolute;
width: 183px;
height: 85px;
left: 425px;
top: 425px;

background: rgba(100, 100, 10, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

img {
  opacity: 0.75;
}
</style>

<img src="http://trinomics.eu/wp-content/uploads/2018/05/Climate-finance.jpg" class="card-img-top" alt="...">

<div class="container">
<br>
    <div class="card-body">
      <h5 class="card-title">Apa itu Invest Yuk?</h5>
      <p class="card-text">Invest Yuk adalah website yang mempelajari tentang dunia investasi keuangan, selain itu akan menambah wawasan waow!<br><br> tunggu apalagi? yuk segera bergabung bersama kami!</p>
    </div>
  </div>
</div>



<div class="card-group">
  <div class="container">
    <div class="row-grup">

    <div class="card1">
    <div class="col text-center">
    <h6>Tunggu apalagi? Yuk mari bergabung bersama kami </h6>
      </div>
      </div>
      <div class="card2">
        <div class="container">
        <div class="col text-center">
        <a href="#" class="btn btn-success">Login</a>
          <h6>Jika sudah memiliki akun</h6> 
          </div>
        </div>
      </div>
      
      <div class="card3">
        <div class="container">
        <div class="col text-center">
        <a href="#" class="btn btn-primary">Sign Up</a>
            <h6>Jika belum memiliki akun</h6>
            </div> 
        </div>
      </div>
    

@endsection
