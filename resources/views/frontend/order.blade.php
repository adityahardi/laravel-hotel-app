<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="img/icons/icon-48x48.png" />
	<script src="https://kit.fontawesome.com/c2feacf569.js" crossorigin="anonymous"></script>
	<link rel="canonical" href="https://demo-basic.adminkit.io/pages-sign-up.html" />

	<title>Order | Hotel Aditya</title>

	<link href="adminkit/css/app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
	<main class="d-flex w-100">
		<div class="container d-flex flex-column">
			<div class="row vh-100">
				<div class="col-sm-10 col-md-8 col-lg-6 mx-auto d-table h-100">
					<div class="d-table-cell align-middle">

						<div class="text-center mt-4">
							<h1 class="h1">Form Pemesanan</h1>
                            <br>
							<p class="lead">
								Selamat Datang di Hotel Aditya!<br> Silahkan Isi Form Pemesanan Kamar di Bawah Ini.
							</p>
						</div>

						<div class="card">
							<div class="card-body">
								<div class="m-sm-4">
									<form method="POST" action="/order-sukses">
                                        @csrf
										<div class="mb-4">
                                            <label for="exampleInputEmail1">Nama User</label>
                                            <input type="text" class="form-control" id="exampleInputEmail1" name="nama_user" placeholder="Nama Kamu" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Jenis Kelamin</label>
                                            <select class="form-control" name="jenis_kelamin">
                                                <option value="">- Jenis Kelamin
                                                <option value="Laki-Laki">Laki-Laki</option>
                                                <option value="Perempuan">Perempuan</option>
                                            </select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">No Telepon</label>
                                            <input type="number" class="form-control" id="exampleInputEmail1" name="no_telepon" placeholder="No Telepon" aria-describedby="emailHelp" >
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Masukkan Email" aria-describedby="emailHelp">
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Alamat</label>
                                            <textarea class="form-control" name="alamat" rows="3" placeholder="Masukkan Alamat Lengkap"></textarea>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Nama Kamar</label>
                                            <select name="" id="" class="form-control">
												<option value="">- Pilih Kamar
												@foreach ($kamar as $item)
													<option value="{{ $item->id }}" >{{ $item->nama_kamar }}</option>
												@endforeach
											</select>
                                        </div>
                                        <div class="mb-4">
                                            <label for="exampleInputEmail1">Fasilitas Kamar</label>
                                            <input class="form-control" name="namas_fasilitas" rows="3" placeholder="Masukkan Fasilitas Kamar">
                                        </div>
										<div class="mb-4">
											<label for="exampleInputEmail1">Harga Kamar</label>
											<input type="number" class="form-control" name="harga" rows="3" placeholder="Harga Kamar">
										</div>
										<div class="text-center mt-3">
											<button type="submit" class="btn btn-lg btn-primary">Pesan Sekarang!</button>
											<!-- <button type="submit" class="btn btn-lg btn-primary">Sign up</button> -->
										</div>
										<br>
										<div class="position-relative">
											<div class="position-absolute top-50 start-50 translate-middle">
												<i class="fas fa-book fa-2xl fa-beat"></i>
											</div>
										</div>
									</form>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</main>

	<script src="js/app.js"></script>

</body>

</html>