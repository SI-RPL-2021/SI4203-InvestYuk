@extends('layouts.blank')
@section('title', 'Video Pembelajaran')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->

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
    <video class="video-fluid z-depth-1" autoplay loop controls>
    <source src="https://r2---sn-htgx20capjpq-ia2e.googlevideo.com/videoplayback?expire=1622889463&ei=l_-6YMTSDNjSogPn-5b4DA&ip=103.120.169.91&id=o-APuTny4Ezl9cYFFjvs8AvUeR-SvY58BgvfO-MsyS5g-_&itag=18&source=youtube&requiressl=yes&mh=7c&mm=31%2C29&mn=sn-htgx20capjpq-ia2e%2Csn-npoeenl7&ms=au%2Crdu&mv=m&mvi=2&pl=24&initcwndbps=917500&vprv=1&mime=video%2Fmp4&ns=MIilG5xkEiiq_EEpCEzQVnoF&gir=yes&clen=15929856&ratebypass=yes&dur=212.091&lmt=1578933304205652&mt=1622867582&fvip=4&fexp=24001373%2C24007246&c=WEB&txp=5531432&n=cxwrm9u0zBxE3Lulr&sparams=expire%2Cei%2Cip%2Cid%2Citag%2Csource%2Crequiressl%2Cvprv%2Cmime%2Cns%2Cgir%2Cclen%2Cratebypass%2Cdur%2Clmt&lsparams=mh%2Cmm%2Cmn%2Cms%2Cmv%2Cmvi%2Cpl%2Cinitcwndbps&lsig=AG3C_xAwRQIhANU-QiqmwIS0x8Md4OyiMuDBrSZ00yvsEXP8fzOWzbVuAiAQt_-U2fuZkcCV6KkDmsYNzL5lmB6HJBIPY76WDUabvA%3D%3D&sig=AOq0QJ8wRAIgLavuyYmIEpb9PXqxMv66FULfRKtB_0fkLmYvLc5kXfsCIA0lahAm5yTbxabptyKtmRdLn2rm8c9a3SdBxAA97Tfs" type="video/mp4" />
    </video>
    </div>
  </div>
</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card2">
        <div class="container">
        <div class="col text-center">
          <h5><a class="class1" href="#">Quiz >></a></h5>
            </div>
        </div>
      </div>
    </div>
  </div>
</div>



@endsection
