@extends('layout/main')

@section('css-libraries')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
@endsection

@section('header-title', 'Data Pendaftar')

@section('content-body')
    <div class="col-lg col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4 class="text-info">Searching</h4>
        </div>
        <div class="card-body p-0">
          <div class="row px-4 py-3">
              <div class="col-8">
              <form action="{{ url('pendaftars/search') }}" method="get">
                  <input type="text" class="form-control" name="search" id="search" placeholder="Masukan Pencarian...">
              </div>
              <div class="col-4">
                  <button type="submit" class="btn btn-info p-2">Search</button>
              </form>
              </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-lg col-md-12 col-12 col-sm-12">
      <div class="card">
        <div class="card-header">
          <h4>Latest Posts</h4>
          <div class="card-header-action">
            <a href="{{ url('/pendaftars/create') }}" class="btn btn-primary px-1">+ Tambah</a>
          </div>
        </div>
        <div class="card-body p-0">
          <div class="table-responsive">
            <table class="table table-striped mb-0">
              <thead>
                <tr>
                  <th>Nama</th>
                  <th>NIK</th>
                  <th>NO_HP</th>
                  <th>Pekerjaan</th>
                  <th>Tanggal Daftar</th>
                  <th>Status</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
              @foreach($pendaftars as $pendaftar)
                <tr>
                  <td>{{ $pendaftar->nama }}</td>
                  <td>{{ $pendaftar->nik }}</td>
                  <td>{{ $pendaftar->no_hp }}</td>
                  <td>{{ $pendaftar->pekerjaan }}</td>
                  <td>{{ $pendaftar->tgl_vaksin }}</td>
                  <td>{{ $pendaftar->status }}</td>
                  <td>
                    <a href="{{ url('pendaftars/'.$pendaftar->id.'/detail') }}" class="btn btn-success btn-action" data-toggle="tooltip" title="Detail"><i class="fas fa-eye"></i></a>
                    <a href="{{ url('pendaftars/'.$pendaftar->id.'/edit') }}" class="btn btn-primary btn-action mr-1" data-toggle="tooltip" title="Edit"><i class="fas fa-pencil-alt"></i></a>
                    <form action="{{ url('pendaftars/'.$pendaftar->id) }}" method="post" class="d-inline">
                                @method('DELETE')
                                @csrf
                      <!-- <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete" data-confirm="Apa anda yakin ingin menghapus data?" data-confirm-yes="alert('Deleted')"><i class="fas fa-trash"></i></button> -->
                      <button type="submit" class="btn btn-danger btn-action" data-toggle="tooltip" title="Delete"><i class="fas fa-trash"></i></button>
                    </form>
                  </td>
                </tr>
              @endforeach

              </tbody>
              {{ $pendaftars->links() }}
            </table>
          </div>
        </div>
      </div>
    </div>
  @endsection
