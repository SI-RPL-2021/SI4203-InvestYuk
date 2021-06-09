@extends('layouts.blank')
@section('title', 'Learning')
@component('components.topbar')
@endcomponent
@section('content')

<br><br><br>

<div class="container">

  <div class="row">
    <div class="col-md-12">
      <h1 style="color: black">
        <?php $kelaslu = json_decode($courseContent[0]->list_kelas);?>
        {{-- <?php echo count($kelaslu)?> --}}
      </h1>
      <h1 class="text-center">{{$title['course_name']}}</h1>
    </div>
  </div>
  <div class="card">
    <div class="card-header text-center">
      Learning
    </div>

    <div class="list-group list-group">
      @for($i = 0; $i < count($kelaslu); $i++) <div class="list-group-item mb-5">
        <h4 class="alert-heading">{{$kelaslu[$i]}}</h4>
        <br>
        <ul>
          <li>
            <a href="#">Video</a>
          </li>
          <li>
            <a href="#">Materi</a>
          </li>
          <li>
            <a href="#">Quiz</a>
          </li>
        </ul>
    </div>
    @endfor
  </div>

</div>

</div>


















</div>


@endsection