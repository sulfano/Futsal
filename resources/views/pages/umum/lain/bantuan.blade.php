@extends('layout.umum')
@section('content')
<div class="content-wrapper">
	<div class="container">
		<section class="content-header">
			<h1>Bantuan</h1>
			<ol class="breadcrumb">
				<li><a href="#">Beranda</a></li>
				<li class="active">Bantuan</li>
				</ol>
		</section>

		<section class="content">
			<div class="row">
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-body">
							<div class="dividerHeading">
			                 	<h4><span>Member</span></h4>
			                </div>
			                <div class="col-md-12">
			                	<ol>
			                		<li>Member Acara</li>
			                		<p>
			                			Member acara adalah orang yang ingin mengunggah informasi acara/event futsal pada sistem ini.
			                		</p>
			                		<li>Member Lapangan</li>
			                		<p>
			                			Member lapangan adalah pemilik lapangan, petugas lapangan atau orang yang akan bertugas untuk mengelola lapangan pada sistem ini. Orang yang mendaftar sebagai member lapangan harus mengunggah informasi lapangan miliknya setelah login. Member lapangan juga dapat mengunggah informasi mengenai acara/event futsal.
			                		</p>
			                	</ol>
			                </div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-body">
							<div class="dividerHeading">
								<h4><span>Latitude & Longitude</span></h4>
							</div>
							<div class="col-md-12">
								<ol>
									<li>Latitude</li>
									<p>
										Latitude adalah garis yang horisontal / mendatar. Titik 0 adalah sudut ekuator, tanda + menunjukan arah ke atas menuju kutub utara, sedangkan tanda minus di koordinat Latitude menuju ke kutub selatan.
									</p>
									<li>Longitude</li>
									<p>
										Longitude adalah garis lintang . Angka dari sudut bundar bumi horisontal. Titik diawali dari 0 ke 180 derajat, dan 0 ke-180 ke arah sebaliknya.
									</p>
									<p>
										Untuk lebih jelas, silahkan lihat sumber.
									</p>
								</ol>
							</div>
						</div>
						<div class="box-footer">
							Sumber : <a href="http://obengplus.com/artikel/articles/161/1/Membaca-Koordinat-GPS-dengan-Latitude-dan-Longitude.html" target="_blank">Obengplus.com</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="box box-primary">
						<div class="box-body">
							<div class="dividerHeading">
			                 	<h4><span>Mendapatkan Latitude dan Longitude</span></h4>
			                </div>
			                <div class="col-md-12">			                	
		                		<ol>
			                		<li>Pada komputer Anda, buka <a href="https://www.google.co.id/maps/" target="_blank">Google Maps</a>. Jika menggunakan Maps dalam Mode Ringan, Anda akan melihat tanda petir di bagian bawah dan Anda tidak akan bisa mendapatkan koordinat tempat.</li>
									<li>Klik kanan tempat atau area pada peta.</li>
									<li>Pilih Ada apa di sini?</li>
									<li>Di bagian bawah, Anda akan melihat kartu dengan koordinat.</li>
									<li>Seperti gambar disamping; Latitude = -0.9140005 dan Longitude = 100.468368</li>
			                	</ol>
			                	
			                </div>
						</div>
						<div class="box-footer">
							Sumber : <a href="https://support.google.com/maps/answer/18539?co=GENIE.Platform%3DDesktop&hl=id" target="_blank">Google Support</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<a href="{{route('image','pnp.png')}}" target="_blank">
					<img src="{{Storage::url('upload/pnp.png')}}" style="width:100%;">
					</a>
				</div>
			</div>
		</section>
	</div>
</div>
@endsection