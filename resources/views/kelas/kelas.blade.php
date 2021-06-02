@extends('layouts.blank')
@section('title', 'Kelas')
@component('components.topbar')
@endcomponent
@section('content')

<!-- 

masukkan desain halaman Anda di sini

 -->

<style>

.card-body{
position: absolute;
width: 758px;
height: 569px;
left: 430px;
top: 96px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
}

.card1{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 276px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card2{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 425px;

background: rgba(196, 196, 196, 0.22);
border: 1px solid #000000;
box-sizing: border-box;
border-radius: 15px;

}

.card3{
position: absolute;
width: 183px;
height: 74px;
left: 181px;
top: 574px;

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


<div class="card">
  <div class="card">
    <div class="card-body">
      <h5 class="card-title">Riset: Kinerja OJK di Mata Publik Dapat Nilai 78</h5>
      <p class="card-text">Riset yang dilakukan Indonesia Indicator menunjukkan, kinerja Otoritas Jasa Keuangan (OJK) pada 2020 mencapai nilai 78 dari 100 di mata publik.
      Direktur Komunikasi Indonesia Indicator Rustika Herlambang mengatakan, pemberitaan terkait OJK di media massa sebagian besar bernada positif di tengah pandemi Covid-19, begitu pula dengan respon publik.
      "Framing terhadap berita OJK lebih positif dibandingkan negatif. Ini berarti OJK punya penyampaian yang cukup positif diterima oleh media," ungkap Rustika dalam Media Briefing OJK di Hotel Fairmont, Jakarta, Jumat (15/1/2021).
      Adapun, selama 1 tahun, pemberitaan mengenai OJK mencapai 93.239 berita yang berasal dari 2.289 media online. Sementara, isu terbesar yang menarik perhatian publik terkait kinerja OJK meliputi restrukturisasi kredit, kasus Jiwasraya, dan Jouska.
      Kendati telah menjalankan fungsi terhadap pemberdayaan dan peraturan sektor jasa keuangan yang cukup baik, Rustika menilai OJK perlu tanggap dalam penyampaian informasi terkait isu yang banyak disorot oleh media ke depannya, karena tentu akan mempengaruhi persepsi masyarakat terhadap kinerja OJK ke depan.
      "OJK banyak disorot oleh netizen baik di Twitter maupun Facebook. Pada saat Maret 2020 lalu di mana terjadi pandemi, isu relaksasi merupakan hal yang paling direspon oleh netizen. Selain itu, isu pembubaran OJK juga menjadi sorotan netizen," jelasnya.
      Dalam kesempatan yang sama, Deputi Komisioner Hubungan Masyarakat dan Logistik OJK Anto Prabowo mengatakan akan terus memperhatikan persepsi publik yang muncul sebagi bahan evaluasi untuk kinerja ke depannya.
      "Kami cukup gembira bahwa publik masih melihat OJK sebagai lembaga yang diberikan kewenangan untuk mengatur, mengawasi dan melindungi sektor jasa keuangan sehingga persepsi ini penting," katanya.</p>
    </div>
  </div>
</div>
</div>

<br>

</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      
      <div class="card1">
        <div class="container">
          <h4><a class="class1" href="#">Kelas</a></h4> 
            <p>Investasi Dunia</p> 
        </div>
      </div>
      &nbsp;
      <div class="card2">
        <div class="container">
          <h4><a class="class2" href="#">Kelas</a></h4> 
            <p>Saham</p> 
        </div>
      </div>
      &nbsp;
      <div class="card3">
        <div class="container">
          <h4><a class="class3" href="#">Kelas</a></h4> 
            <p>Trading</p> 
        </div>
      </div>


    </div>
  </div>
</div>

@endsection
