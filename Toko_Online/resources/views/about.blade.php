<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>My web </title>
  </head>
  <body>
  <!-- navbar -->
  <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark" style="padding-left: 40px ;" >
    
    <a class="navbar-brand" href="index.html">My Web</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-item nav-link active" href="/home">Home <span class="sr-only">(current)</span></a>
        
    </div>

</nav>
  <!-- akhir navbar -->

  <!-- jumbotron profile -->
<div class="jumbotron jumbotron-fluid">
  <div class="container text-center">
    <img src="{{asset('assets/dist/img/foto.jpeg')}}" width="280" class="rounded-circle">
    <h1 class="display-4" style="font-size: 45px ;">M.Gentha Arya Pratama</h1>
    <p class="lead">UNIVERSITAS DIAN NUSWANTORO<br>SEMARANG</p>
  </div>
</div>
  <!-- akhir jumbotron -->

  <!-- konten -->
<div class="container">
  <div class="row">
    <div class="col text-center">
      <h1 style="padding-bottom: 40px ; ">Overview</h1>
      <p style="font-size: 20px ; padding-bottom: 30px ;">Hi saya adalah seorang Mahasiswa , saat ini saya sedang belajar php dengan menggunkan framework Laravel. </p>
    </div>
  </div>

<!-- table -->
  <div class="row">
    <div class="col">
      <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
          <thead>
            <tr>
             <th style="text-align:center">Skill</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <ul>
                  <li>HTML (Expert) </li>
                  <li>CSS (Beginner) </li>
                  <li>Menggunakan Bootstrap (Beginner) </li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <div class="col">
      <div style="max-width: 600px; margin: 3em auto">
        <table border="1" width="100%">
          <thead>
            <tr>
             <th style="text-align:center">Pengalaman</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <ul>
                  <li>Pernah bekerja di EA Company sebagai developer applikasi dan web </li>
                  <li>Menjadi Leader di berbagai komunitas web developer </li>
                  <li>Mendesign web dengan menggunakan bootstrap </li>
                </ul>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

<!-- footer -->
<div class="footer">
  <footer style="text-align: center;">
    <p>Copyright &copy; 2020 Gentha.</p>
  </footer>
</div>
 
</body>

</html>
