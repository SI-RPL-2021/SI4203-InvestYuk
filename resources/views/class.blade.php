<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Class</title>

    <style>
     .container{
        max-width: 1100px;
    }
    .card {
      box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
      transition: 0.3s;
      width: 12%;
    }
    .card:hover {
      box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
    }
    </style>

  </head>
  <body>

  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <ul class="navbar-nav ">
            <li class="nav-item ">
                <a class="navbar-brand" href="#">Invest Yuk!</a>
            </li>
        </ul>
    </nav>


<div class="container">
<br>
<div class="card-group">
  <div class="card">
    
    <div class="card-body">
      <h5 class="card-title">Artikel / Berita / Highlights</h5>
      <p class="card-text">isi.</p>
    </div>
  </div>
</div>
</div>

<br>

</div>

<div class="card-group">
  <div class="container">
    <div class="row-grup">
      <div class="card">
        <div class="container">
          <h4><a class="class1" href="{{ route('class-join')}}">Kelas</a></h4> 
            <p>Investasi Dunia</p> 
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="container">
          <h4><a class="class2" href="{{ route('kelas-join')}}">Kelas</a></h4> 
            <p>Saham</p> 
        </div>
      </div>
      &nbsp;
      <div class="card">
        <div class="container">
          <h4><a class="class3" href="{{ route('kelas-join')}}">Kelas</a></h4> 
            <p>Trading</p> 
        </div>
      </div>
    </div>
  </div>
</div>

</body>
</html>


