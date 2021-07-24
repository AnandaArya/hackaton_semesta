
<?php 

function get_CURL($url) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
    $result = curl_exec($curl);
    curl_close($curl);
    
    return json_decode($result, true); 
}

$global = get_CURL('https://api.kawalcorona.com');

$positif = get_CURL('https://api.kawalcorona.com/positif/');

$sembuh = get_CURL('https://api.kawalcorona.com/sembuh/');

$meninggal = get_CURL('https://api.kawalcorona.com/meninggal/');

$provinsi = get_CURL('https://api.kawalcorona.com/indonesia/provinsi/');

$indonesia = get_CURL('https://api.kawalcorona.com/indonesia/');
$rumahsakit = get_CURL('https://dekontaminasi.com/api/id/covid19/hospitals');
$indonesia = $indonesia[0];


?>  

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- font assets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700;800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Sans|Roboto|Roboto+Mono&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/ec96cf5f4a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <title>CORONA</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
      <div class="container">
        <a class="navbar-brand" href="#"><i class="fas fa-shield-alt">CEGAH CORONA</i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-item nav-link text-dark" href="#"><i class="far fa-file-alt"> Data</i></a>
            <a class="nav-item nav-link text-dark" href="#"><i class="far fa-address-card"> Layanan_Darurat</i></a>
            <a class="nav-item nav-link text-dark" href="#"><i class="far fa-envelope"> Hubungi Kami</i></a>
          </div>
        </div>
      </div>
    </nav>

    <!-- ================== About ==================== -->

   
    <section class="about">
      <div class="container">
        
        <div class="row judul">
          <div class="col mt-4">
            <h2 class="text-center">CEGAH CORONA</h2>
            <p class="text-center">Data COVID-19 Global dan Indonesia Realtime</p>
          </div>
        </div>

        <!-- <div class="row vaksinasi">
          <div class="col">
            <div class="card">
              <div class="card">
                <div class="row justify-content-center">
                  <div class="col-md-6">
                    <h5 class="text-info mt-5">Ayo daftar vakasinasi sekarang!</h5>
                    <p>Klik tombol dibawah untuk melakukan<br> pendaftaran vaksinasi</p>
                    <a href="" class="btn btn-info">Daftar</a>
                  </div>
                  <div class="col-md-5 d-none d-md-block">
                    <img src="{{ asset('img/vaksinasi-1.jpg') }}" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
        </div> -->

        <div class="row mt-3">
          <div class="col">
            <div class="card">
              <div class="card-body">
                <div class="row justify-content-center">
                  <div class="col-lg-5 text-center text-lg-left">
                    <h5 class="text-info mt-5 text-center text-lg-left">Ayo Daftar Vaksinasi Sekarang</h5>
                    <p class="text-center text-lg-left">Klik tombol dibawah untuk melakukan<br> pendaftaran vaksinasi</p>
                    <a href="{{ url('/daftar') }}" class="btn btn-info text-center text-lg-left">Daftar</a>
                  </div>
                  <div class="d-none d-lg-block col-lg-4">
                    <img src="{{ asset('img/vaksinasi-1.jpg') }}" class="img-fluid">
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
            <div class="card">
              <div class="card-body">
                <h5 class="text-center">TOTAL POSITIF</h5>
                <h3 class="card-text text-center text-warning mt-3"><?= $positif["value"]; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
            <div class="card">
              <div class="card-body">
                <h5 class="text-center">TOTAL SEMBUH</h5>
                <h3 class="card-text text-center text-success mt-3"><?= $sembuh["value"]; ?></h3>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
            <div class="card">
              <div class="card-body">
                <h5 class="text-center">TOTAL MENINGGAL</h5>
                <h3 class="card-text text-center text-danger mt-3"><?= $meninggal["value"]; ?></h3>
              </div>
            </div>
          </div>

          <div class="col-lg-3 col-md-6 mt-3 mt-lg-0">
            <div class="card">
              <div class="card-body">
                <h3 class="text-center">INDONESIA</h3>
                <p class="card-text text-center"><span class="text-warning"><?= $indonesia["positif"]; ?></span> POSITIF, <span class="text-success"><?= $indonesia["sembuh"]; ?></span> SEMBUH, <span class="text-danger"><?= $indonesia["meninggal"]; ?></span> MENINGGAL</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ================== About =================== -->

    <!-- ================== Provinsi Data ================== -->
    <section class="provinsi mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h6 class="mb-3">Daftar Kasus Corona Berdasarkan Provinsi</h6>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="table tableFixHead">
                <table>
                  <thead>
                    <tr class="judulTable">
                      <th>NO</th>
                      <th>Provinsi</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i= 1; ?>
                    @foreach($provinsi as $row)
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>{{ $row["attributes"]["Provinsi"] }}</td>
                      <td>{{ $row["attributes"]["Kasus_Posi"] }}</td>
                      <td>{{ $row["attributes"]["Kasus_Semb"] }}</td>
                      <td>{{ $row["attributes"]["Kasus_Meni"] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>
    <!-- ================== END Provinsi Data ================== -->

        <!-- ================= Data Rumah Sakit Rujukan ============== -->
        <section class="rumahsakit mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h6 class="mb-3">Daftar Rumah Sakit Rujukan</h6>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="table tableFixHead">
                <table>
                  <thead>
                    <tr class="judulTable">
                      <th>NO</th>
                      <th>Rumah Sakit</th>
                      <th>Provinsi</th>
                      <th>Kota</th>
                      <th>Alamat</th>
                      <th>NO Telepon</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i= 1; ?>
                    @foreach($rumahsakit as $row)
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>{{ $row["name"] }}</td>
                      <td>{{ $row["province"] }}</td>
                      <td>{{ $row["region"] }}</td>
                      <td>{{ $row["address"] }}</td>
                      <td>{{ $row["phone"] }}</td>
                    
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- ================= END Rumah Sakit Data ============== -->


    <!-- ================= Global Data ============== -->
    <section class="global mt-5">
      <div class="container">
        <div class="row">
          <div class="col">
            <h6 class="mb-3">Daftar Kasus Corona Global</h6>
          </div>
        </div>
        <div class="row">
          <div class="col">
            <div class="table tableFixHead">
                <table>
                  <thead>
                    <tr class="judulTable">
                      <th>NO</th>
                      <th>Negara</th>
                      <th>Positif</th>
                      <th>Sembuh</th>
                      <th>Meninggal</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php $i= 1; ?>
                    @foreach($global as $row)
                    <tr>
                      <td><?= $i++; ?></td>
                      <td>{{ $row["attributes"]["Country_Region"] }}</td>
                      <td>{{ $row["attributes"]["Confirmed"] }}</td>
                      <td>{{ $row["attributes"]["Recovered"] }}</td>
                      <td>{{ $row["attributes"]["Deaths"] }}</td>
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
        </div>
      </div>
    </section>

    <!-- ================= END Global Data ============== -->




    <!-- ================ info ==================== -->
    <section class="infoPanel">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 col-md-6 my-2">
            <div class="card bg-danger">
              <div class="card-body text-light">
                <h5>Gejala Virus Corona</h5>
                <ul>
                  <li>Demam (suhu tubuh di atas 38 derajat Celcius)</li>
                  <li>Batuk</li>
                  <li>Sesak Napas</li>
                  <li>Sakit tenggorokan</li>
                  <li>Mengalami gangguan pada bagian perut dan kehilangan nafsu makan</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 my-2">
            <div class="card bg-success">
              <div class="card-body text-light">
                <h5>Cara Mencegah Virus Corona</h5>
                <ul>
                    <li>Mencuci tangan dengan benar</li>
                    <li>Menggunakan masker</li>
                    <li>Menjaga daya tahan tubuh</li>
                    <li>Minum vitamin C</li>
                    <li>Konsumsi gizi seimbang, perbanyak sayur dan buah</li>
                    <li>Rajin olahraga dan istirahat cukup</li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 my-2">
            <div class="card bg-info daftarRS">
              <a href="https://www.kompas.com/tren/read/2020/03/03/183500265/infografik-daftar-100-rumah-sakit-rujukan-penanganan-virus-corona" class="card-body text-light" target="_blank">
                <h5>Daftar Rumah Sakit Rujukan Virus Corona</h5>
                <p class="card-text">Kompas</p>
              </a>
            </div>
          </div>
          <div class="col-lg-6 col-md-6 my-2">
            <div class="card bg-warning infoPenyakit">
              <a href="https://www.who.int/emergencies/diseases/novel-coronavirus-2019/advice-for-public" class="card-body text-light" target="_blank">
                <h5>Media Informasi Resmi Penyakit Emerging</h5>
                <p class="card-text">Kementerian Kesehatan</p>
              </a>
            </div>
          </div>

        </div>
      </div>
    </section>
    <!-- ================ END info ==================== -->

    <!-- ================ Footer ====================== -->
    <footer class="bg-dark text-white mt-5">
      <div class="container">
        <div class="row">
          <div class="col text-center p-3">
            <!-- <small class="text-light">&copy Copyright 2020 <a href="https://github.com/AnandaArya">Ananda Arya</a> | All Right Reservered</small> -->
          </div>
        </div>
      </div>
    </footer>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="js/script.js"></script>
  </body>
</html>