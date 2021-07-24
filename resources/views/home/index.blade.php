@extends('layout/main')
@section('php')
<?php 
	// use App\Email;
	use App\Pendaftar;
    use App\Vaksin;

	// use App\Web;

	$totalPendaftars = Pendaftar::count();
    $vaksinasi = Vaksin::all();
	// $totalGames = Game::where('users_id', auth()->user()->id)->count();
	// $totalWebs = Web::where('users_id', auth()->user()->id)->count();

	// $totalAccounts = $totalEmails + $totalGames + $totalWebs;

?>
@endsection


@section('css-libraries')
<!-- CSS Libraries -->
@endsection

@section('header-title', 'Dashboard')

@section('content-body')
		<!-- <div class="main-content"> -->
			<section class="section">
				<div class="row">
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-success">
								<i class="fas fa-circle"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Stok Vaksin</h4>
								</div>
                                @foreach($vaksinasi as $vaksin)
								<div class="card-body">
                                    {{ $vaksin->stok }}
                                </div>
                                @endforeach
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-6 col-12">
						<div class="card card-statistic-1">
							<div class="card-icon bg-warning">
								<i class="far fa-user"></i>
							</div>
							<div class="card-wrap">
								<div class="card-header">
									<h4>Total Pendaftar</h4>
								</div>
								<div class="card-body">
                                    {{ $totalPendaftars }}
								</div>
							</div>
						</div>
					</div>
					

				<!-- </div> -->
@endsection