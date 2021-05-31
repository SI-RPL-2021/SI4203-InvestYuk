@extends('layouts.blank')
@section('title', 'Kelas Join')
@component('components.topbar')
@endcomponent
@section('content')

<style>

.card-img{
position: absolute;
padding:  20px;
margin-top: 30px;

}

img {
width: 110px;
height: 107px;
}

.card10{
  position: absolute;
width: 910px;
height: 262px;
left: 265px;
top: 198px;

border: 1px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card1{
position: absolute;
padding:  20px;
margin-top: 30px;


border: 1px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card2{
position: absolute;
width: 169px;
height: 76px;
left: 355px;
top: 543px;


}

.card3{
    position: absolute;
width: 169px;
height: 76px;
left: 650px;
top: 543px;



}

.card4{
    position: absolute;
width: 169px;
height: 76px;
left: 986px;
top: 543px;

}

.card5{
    position: absolute;
width: 75px;
height: 39px;
left: 58px;
top: 333px;

}

.card6{
    position: absolute;
width: 75px;
height: 39px;
left: 58px;
top: 223px;
}




</style>


<div class="container">
  <br>

 

  <div class="card10">

  <div class="container">
        <div class="row g-0">

          <div class="col-sm-5">
                <div class="card-img">
                    <img src="https://www.flaticon.com/svg/vstatic/svg/2784/2784445.svg?token=exp=1620011583~hmac=08569afecd22a6a471d512ed341e3f48">
                </div>
          </div>
                
              

              <div class="col-md-6">
                <div class="card1">
                    <h5 class="card-title">Info  Kelas</h5>
                    <p class="card-text">Saham Adalah suatu dokumen berharga yang mampu menampilkan bagian kepemilikan dari suatu perusahaan.</p>
                </div>
              </div>
        </div>
  </div> 
  </div>

  
</div>

<br>




<div class="card-group">
  <div class="container">

    <div class="row-grup">
      <div class="card2">
          <button type="button" class="btn btn-secondary btn-lg" href="#">Video</button>
      </div>

      <div class="card3">
        <button type="button" class="btn btn-secondary btn-lg" href="#">Materi</button>
      </div>

      <div class="card4">
        <button type="button" class="btn btn-secondary btn-lg" href="#">Quiz</button>
      </div>

    </div>
  </div>

  <div class="card-group">
    <div class="container">

      <div class="card5">
            <button type="button" class="btn btn-secondary btn-lg" href="#">Review</button>
      </div>

      <div class="card6">
        <button type="button" class="btn btn-secondary btn-lg" href="#">Learning</button>
      </div>

    </div>
  </div>
  
</div>



@endsection