@extends('layouts.blank')
@section('title', 'Learning')
@component('components.topbar')
@endcomponent
@section('content')

<br><br><br>

<div class="container">
<br>
@foreach ($errors->all() as $error)

	  <div class="alert alert-danger mb-3">{{ $error }}</div>

@endforeach

    <div class="row">
        <div class="col-md-12">
            <h1 style="color: black">
                {{-- <?php $kelaslu = json_decode($courseContent[0]->list_kelas);?> --}}
                {{-- <?php echo count($kelaslu).'adadasd' ?> --}}
            </h1>
            <h1 class="text-center">{{ $course->course_name }}</h1>
        </div>
    </div>
    <div class="card">
        <div class="card-header text-center">
          Learning
        </div>

        <div class="list-group list-group">
            @for($i = 0; $i < count($kelas); $i++) <div class="list-group-item mb-5">
                <h4 class="alert-heading">{{ $kelas[$i]->name_kelas }}</h4>
                <br>
                <ul>
                    <li>
                        <a href="" data-toggle="modal" data-target="#exampleModal" 
                        data-auth="{{ Auth::check() }}"
                        data-route="{{ route('kelas.show.video', $kelas[$i]->id) }}"
                        data-p="Anda akan melihat video materi kelas ini" data-a="Lihat Video">
                        Video
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('kelas.show.topic', $kelas[$i]->id) }}">Materi</a>
                    </li>
                    <li>
                        <a href="" data-toggle="modal" data-target="#exampleModal" 
                        data-auth="{{ Auth::check() }}"
                        data-route="{{ route('kelas.show.kuis', $kelas[$i]->id) }}" 
                        data-p="Apakah Anda siap melakukan kuis?" data-a="Lakukan Kuis">
                        Quiz
                        </a>
                    </li>
                </ul>
            </div>
            @endfor
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