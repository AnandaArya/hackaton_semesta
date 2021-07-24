@extends('layout/main')

@section('css-libraries')
  <!-- CSS Libraries -->
  <link rel="stylesheet" href="../node_modules/jqvmap/dist/jqvmap.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons.min.css">
  <link rel="stylesheet" href="../node_modules/weathericons/css/weather-icons-wind.min.css">
  <link rel="stylesheet" href="../node_modules/summernote/dist/summernote-bs4.css">
@endsection

@section('header-title', 'Data Vaksin')

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
                @foreach($vaksins as $vaksin)
                <div class="col-3">
                    <div class="card" style="width: 14rem;">
                        <img src="{{ asset('img/'.$vaksin->gambar) }}" class="card-img-top" alt="menu">
                        <div class="card-body">
                            <h5 class="card-title">{{ $vaksin->jenis }}</h5>
                            <p class="card-text">{{ $vaksin->deksripsi }}</p>
                            <span class="badge badge-{{ $vaksin->stok == 'Tersedia' ? 'success':'danger' }} d-block p-1 my-2">{{ $vaksin->stok }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
              {{ $vaksins->links() }}
            </table>
          </div>
        </div>
      </div>
    </div>
  @endsection
