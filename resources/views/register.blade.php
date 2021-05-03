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
height: 250px;
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
						Create an Account Now!
					</span>
                    <br><br>

					<span class="txt1 p-b-11">
						Username
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Username is required">
						<input class="input100" type="text" name="username" >
						<span class="focus-input100"></span>
					</div>
					
					<span class="txt1 p-b-11">
						Password
					</span>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Password is required">
						<span class="btn-show-pass">
							<i class="fa fa-eye"></i>
						</span>
						<input class="input100" type="password" name="pass" >
						<span class="focus-input100"></span>
					</div>
					
						<br><a href="halaman_utama.php" class="login100-form-btn btn btn-secondary">Sign Up</a>

					</div>
				</form>
			</div>
		</div>
	</div>
</div>

</div>

<br>



@endsection