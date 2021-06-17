@extends('layouts.blank')
@section('title', 'Materi Pembelajaran')
@component('components.topbar')
@endcomponent
@section('content')

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

.frame1{
position: absolute;
width: 1220px;
height: 650px;
left: 5px;
top: 25px;

border: 1px solid #000000;
box-sizing: border-box;
border-radius: 12px;
}

.card2{
position: absolute;
width: 200px;
height: 35px;
left: 1400px;
top: 875px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

.card3{
position: absolute;
width: 150px;
height: 35px;
left: 1000px;
top: 575px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;
}

</style>

<div class="container">
<br>
    <div class="card-body">
        <div class="col text-center">
            <div class="frame1">

                @if(Session::get('numSoal') <= $kuis->count_kuis)

                <h4 for="soal_kuis">Soal</h4>
                <p>{{ Session::get('arrSoal')[Session::get('numSoal') - 1] }}</p>
                
                
                <div class="container">
                    <form method="post" id="form" action="{{ route('kelas.result.kuis', $kelas->id) }}" enctype='multipart/form-data'>
                    @csrf
                        @if($kuis->jenis_kuis == 'pilgan')
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option1">
                            <label class="form-check-label" for="jawaban_kuis">
                                Pilihan A
                            </label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option2">
                        <label class="form-check-label" for="jawaban_kuis">
                            Pilihan B
                        </label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option3">
                        <label class="form-check-label" for="jawaban_kuis">
                            Pilihan C
                        </label>
                        </div>

                        <div class="form-check">
                        <input class="form-check-input" type="radio" name="jawaban_kuis" id="jawaban_kuis" value="option4">
                        <label class="form-check-label" for="jawaban_kuis">
                            Pilihan D
                        </label>
                        </div>
                        @else
                        <input type="hidden" value="id" name="{{$kelas->id}}">
                        <div class="form-group">
                            <h4 for="jawaban_kuis">Jawaban</h4>
                            <textarea class="form-control" id="jawaban_kuis" name="jawaban_kuis" placeholder="Tuliskan jawaban di sini" rows="3"></textarea>
                        </div>
                        @endif

                        <button class="btn btn-primary test" id="jawaban_kuis" 
                        data-id="jawaban_kuis" >
                        Soal Selanjutnya</button>
                    </form>
                </div>

                <div class="card3">
                    <div class="col text-center">
                        <p><a class="class1" href="{{ route('kelas.show.kuis', $kelas->id) }}">
                        Soal Selanjutnya</a></p>
                    </div>
                </div>

                @else

                <h4 for="hasil_kuis">Hasil Kuis</h4>

                <div class="container">
                    <p>Jawaban benar = {{ Session::get('totBenar')}}</p>
                </div>

                <div class="container w-75">
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center">Jawaban Anda</th>
                            <th scope="col" class="text-center">Jawaban Benar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @for ($i = 0; $i < count(Session::get('arrJawaban')); $i++)
                            <tr>
                            <th scope="row">{{ Session::get('cocokJawaban')[$i] }}</th>
                            <td>{{ Session::get('arrJawaban')[$i] }}</td>
                            </tr>
                            @endfor
                        </tbody>
                    </table>
                </div>

                @endif            
            
            </div>
        </div>
    </div>
</div>


<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card2">
        <div class="container">
          <div class="col text-center">
            <h5><a class="class1" href="{{ route('kelas.show', $kelas->id) }}">
            Kembali</a></h5>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


@endsection