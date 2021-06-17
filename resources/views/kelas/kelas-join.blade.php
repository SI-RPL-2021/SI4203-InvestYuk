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
@foreach ($errors->all() as $error)

	<div class="alert alert-danger mb-3">{{ $error }}</div>

@endforeach

<div class="card10">
</div>

<div class="card">
  <div class="card1">
    <div class="card-body">
      <h5 class="card-title">{{ $kelas->name_kelas }}</h5>
      <p class="card-text">{{ $kelas->desc_kelas }}</p>
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
          <h4> <a href="" data-toggle="modal" data-target="#exampleModal" 
          data-auth="{{ Auth::check() }}"
          data-route="{{ route('kelas.show.video', $kelas->id) }}"
          data-p="Anda akan melihat video materi kelas ini" data-a="Lihat Video">
          Video
          </a> </h4> 
        </div>
      </div>
  
      <div class="card3">
        <div class="container">
            <h4><a href="{{ route('kelas.show.topic', $kelas->id) }}">Materi</a></h4>  
        </div>
      </div>

      <div class="card4">
        <div class="container">
        <h4> <a href="" data-toggle="modal" data-target="#exampleModal" 
        data-auth="{{ Auth::check() }}"
        data-route="{{ route('kelas.show.kuis', $kelas->id) }}" 
        data-p="Apakah Anda siap melakukan kuis?" data-a="Lakukan Kuis">
        Quiz
        </a> </h4> 
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Konfirmasi</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <div class="modal-body">
            <p>Anda harus login untuk bisa mengakses fitur ini</p>
            <div class="form-group">
                <a href="{{ route('login.create') }}" class="btn btn-primary btn-block">Login</a>
            </div>
        </div>
    </div>
</div> 

<script>
$('#exampleModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var penjelasan = button.data('p') // Extract info from data-* attributes
    var ahref = button.data('a')
    var route = button.data('route')
    var auth = button.data('auth')
    // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
    // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.
    var modal = $(this)
    
    if(auth == true){
        modal.find('.modal-body p').text(penjelasan)
        modal.find('.modal-body a').text(ahref)
        modal.find('.modal-body a').attr("href", route)
    }
})

</script>


@endsection