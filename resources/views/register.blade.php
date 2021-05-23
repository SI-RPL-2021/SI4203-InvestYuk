@extends('layouts.blank')
@section('title', 'Register | Invest Yuk!')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
 <style>

.card10{
position: absolute;
width: 325px;
height: 300px;
left: 600px;
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
			<div class="col text-center">
				<form class="login100-form validate-form flex-sb flex-w">
					<span class="login100-form-title p-b-32">
						<h3>Buat Akun Anda!</h3>
					</span>
                    <br>

					<form>
					<div class="form-group">
						<label for="exampleInputUsername1">Username</label>
						<input type="username" class="form-control" id="exampleInputUsername1" aria-describedby="usernameHelp" placeholder="Masukkan Username">

					</div>
					<div class="form-group">
						<label for="exampleInputPassword1">Kata Sandi</label>
						<input type="password" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Kata Sandi">
					</div>
					
                        <a href="#" class="btn btn-primary">Sign Up</a>
					
						</div>
					</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</div>

<br>



@endsection