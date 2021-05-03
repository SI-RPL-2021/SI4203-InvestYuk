@extends('layouts.blank')
@section('title', 'login')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->

 <style>


.card10{
position: absolute;
width: 200px;
height: 150px;
left: 700px;
top: 198px;

border: 5px solid #000000;
box-sizing: border-box;
border-radius: 12px;
background: rgba(100, 100, 10, 0.22);
}

img {
  opacity: 0.75;
}

</style>
<img src="http://trinomics.eu/wp-content/uploads/2018/05/Climate-finance.jpg" class="card-img-top" alt="...">
<div class="container">
<br>

<div class="card10">
<div class="limiter">
		<div class="container-login100" style="background-image: url('images/backround3.jpg');">
			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						Akun anda sudah berhasil dibuat!
                        Klik tombol Sign In dibawah ini
					</span>
                    <br><br>
			
						<a href="halaman_utama.php" class="login100-form-btn btn btn-secondary">Sign In Now!</a>
                                                      

					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</div>

<br>

@endsection