<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register</title>

  <!-- General CSS Files -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

  <!-- CSS Libraries -->
  <link rel="stylesheet" href="{{ asset('node_modules/selectric/public/selectric.css') }}">

  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/css/components.css') }}">
</head>

<body>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">

            <div class="card card-primary">
              <div class="card-header"><h4>Daftar Vaksinasi</h4></div>

              <form action="{{ url('pendaftars/store') }}" method="POST" enctype='multipart/form-data'>
              @csrf
                <div class="card-body">
                    <div class="row">
                      <div class="form-group col-12">
                        <label for="nama">Nama Lengkap</label>
                        <input id="nama" type="text" class="form-control" required="required" name="nama" autofocus>
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label for="nik">NIK</label>
                        <input id="nik" type="text" class="form-control" required="required" name="nik">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-12">
                        <label for="alamat">Alamat</label>
                        <input id="alamat" type="text" class="form-control" required="required" name="alamat">
                      </div>
                    </div>


                    <div class="row">
                      <div class="form-group col-6">
                        <label>Pekerjaan</label>
                        <input type="text" name="pekerjaan" class="form-control" required="required">
                        <input type="hidden" name="tgl_vaksin" class="form-control" required="required" value=<?= date('Y-m-d');?>">
                      </div>
                      <div class="form-group col-6">
                        <label>NO HP</label>
                        <input type="number" name="no_hp" class="form-control" required="required">
                      </div>
                    </div>
                    <div class="row">
                      <div class="form-group col-6">
                        <label>Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" class="form-control" required="required">
                      </div>
                      <div class="form-group col-6">
                        <label>Gambar</label>
                        <input type="file" name="gambar" required="required">
                      </div>
                    </div>

                    <div class="form-group">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">
                        Register
                      </button>
                    </div>
                </div>
              </form>
            </div>
            <div class="simple-footer">
              Copyright &copy; Ananda Arya 2021
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <!-- General JS Scripts -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
  <script src="../assets/js/stisla.js"></script>

  <!-- JS Libraies -->
  <script src="{{ asset('node_modules/jquery-pwstrength/jquery.pwstrength.min.js') }}"></script>
  <script src="{{ asset('node_modules/selectric/public/jquery.selectric.min.js') }}"></script>

  <!-- Template JS File -->
  <script src="{{ asset('assets/js/scripts.js') }}"></script>
  <script src="{{ asset('assets/js/custom.js') }}"></script>

  <!-- Page Specific JS File -->
  <script src="{{ asset('assets/js/page/auth-register.js') }}"></script>

  <script>
    function showPassword() {
      let x = document.getElementById('password');
      if (x.type === "password") {
        x.type = "text";
      } else {
        x.type = "password";
      }
    }
  
  </script>
</body>
</html>
