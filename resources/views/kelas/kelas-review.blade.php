@extends('layouts.blank')
@section('title', 'kelas-review')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->
<style>
.form-outline{
position: absolute;
width: 910px;
height: 272px;
left: 517px;
top: 201px;
}

.card1{
  position: absolute;
width: 161px;
height: 87px;
left: 747px;
top: 430px;
}


</style>


<br>
<br>





  <div class="container">
    <center><h5>Review Kelas</h5></center>
    <div class="card-group">
        <div class="form-outline w-25 mb-4" method="POST">
            <textarea class="form-control" id="textAreaExample1" rows="5"></textarea>
            <label class="form-label" for="textAreaExample"></label>
               
        </div>

        <div class="card1">
          <button type="submit" class="btn btn-primary text-dark bg-dark">
                  <a href="#">Submit</a>
                </button>
        </div>
      </form>

    </div>
  </div>

@endsection