<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php $this->load->view('layouts/dashboard/partials/head') ?>;

<head>
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/sneat-v1.0.1/css/pages/page-auth.css" />
	<title>Register</title>
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register Card -->
				<div class="card">
					<div class="card-body">
						<!-- Logo -->
						<div class="app-brand justify-content-center">
							<a href="<?= base_url('/') ?>" class="">
								<h2 class="text-primary m-0">
									Olemi<span class="text-muted">.com</span>
								</h2>
							</a>
						</div>
						<!-- /Logo -->
						<h4 class="mb-2">Pendaftaran 🚀</h4>
						<p class="mb-4">Silahkan mengisi form isian dibawah ini!</p>

						<div class="nav-align-top mb-4">
							<ul class="nav nav-tabs nav-fill" role="tablist">
								<li class="nav-item">
									<button type="button" class="nav-link active" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-home" aria-controls="navs-justified-home" aria-selected="true">
										<i class='bx bx-user'></i> Member
									</button>
								</li>
								<li class="nav-item">
									<button type="button" class="nav-link" role="tab" data-bs-toggle="tab" data-bs-target="#navs-justified-profile" aria-controls="navs-justified-profile" aria-selected="false">
										<i class='bx bx-cart-alt'></i> Penjual
									</button>
								</li>
							</ul>
							<div class="tab-content px-0 pb-0 shadow-none">
								<div class="tab-pane fade show active" id="navs-justified-home" role="tabpanel">

									<p class="text-center">Mendaftar sebagai <b class="text-primary">member</b></p>

									<form id="formMember" class="mb-3" action="index.html" method="POST">
										<div class="mb-3">
											<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
											<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan name lengkapmu" autofocus />
										</div>
										<div class="mb-3">
											<label for="emailField" class="form-label">Email</label>
											<input type="text" class="form-control" id="emailField" name="email" placeholder="Masukan emailmu" />
										</div>
										<div class="mb-3 form-password-toggle">
											<label class="form-label" for="passwordField">Password</label>
											<div class="input-group input-group-merge">
												<input type="password" id="passwordField" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
												<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mb-3">
													<label for="provinsi1" class="form-label">Provinsi</label>
													<select class="form-select" id="provinsi1" aria-label="Default select example" name="provinsi">
														<option selected="" disabled>Pilih salah satu</option>
														<?php foreach ($wilayah as $key => $value) : ?>
															<option value="<?= $key ?>"><?= $value['name'] ?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
											<div class="col">
												<div class="mb-3">
													<label for="kota1" class="form-label">Kota</label>
													<select class="form-select" id="kota1" aria-label="Default select example" name="kota">
														<option selected="" disabled>Pilih salah satu</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="alamat" class="form-label">Alamat</label>
											<textarea class="form-control" id="alamat" rows="2" name="alamat"></textarea>
										</div>
										<div class="row">
											<div class="col">
												<div class="mb-3">
													<label for="telp" class="form-label">Telp</label>
													<input class="form-control" type="tel" placeholder="+628-xxxx-xxxx" id="telp" name="telp">
												</div>
											</div>
											<div class="col-5">
												<div class="mb-3 ">
													<label for="kodepos" class="form-label">Kode Pos</label>
													<input class="form-control" type="number" value="18" id="kodepos" name="kodepos">
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="foto" class="form-label">Foto</label>
											<input class="form-control" type="file" id="foto" name="foto">
										</div>
										<!-- <div class="mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
												<label class="form-check-label" for="terms-conditions">
													Saya setuju dengan
													<a href="javascript:void(0);">syarat dan ketentuan</a>
													yang berlaku.
												</label>
											</div>
										</div> -->
										<button class="btn btn-primary d-grid w-100">Mendaftar</button>
									</form>

								</div>
								<div class="tab-pane fade" id="navs-justified-profile" role="tabpanel">

									<p class="text-center">Mendaftar sebagai <b class="text-primary">penjual</b></p>


									<form id="formPenjual" class="mb-3" action="index.html" method="POST">
										<div class="mb-3">
											<label for="nama_lengkap" class="form-label">Nama Lengkap</label>
											<input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" placeholder="Masukan name lengkapmu" autofocus />
										</div>
										<div class="mb-3">
											<label for="emailField" class="form-label">Email</label>
											<input type="text" class="form-control" id="emailField" name="email" placeholder="Masukan emailmu" />
										</div>
										<div class="mb-3 form-password-toggle">
											<label class="form-label" for="passwordField">Password</label>
											<div class="input-group input-group-merge">
												<input type="password" id="passwordField" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
												<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
											</div>
										</div>
										<div class="row">
											<div class="col">
												<div class="mb-3">
													<label for="provinsi2" class="form-label">Provinsi</label>
													<select class="form-select" id="provinsi2" aria-label="Default select example" name="provinsi">
														<option selected="" disabled>Pilih salah satu</option>
														<?php foreach ($wilayah as $key => $value) : ?>
															<option value="<?= $key ?>"><?= $value['name'] ?></option>
														<?php endforeach; ?>
													</select>
												</div>
											</div>
											<div class="col">
												<div class="mb-3">
													<label for="kota2" class="form-label">Kota</label>
													<select class="form-select" id="kota2" aria-label="Default select example" name="kota">
														<option selected="" disabled>Pilih salah satu</option>
													</select>
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="alamat" class="form-label">Alamat</label>
											<textarea class="form-control" id="alamat" rows="2" name="alamat"></textarea>
										</div>
										<div class="row">
											<div class="col">
												<div class="mb-3">
													<label for="telp" class="form-label">Telp</label>
													<input class="form-control" type="tel" placeholder="+628-xxxx-xxxx" id="telp" name="telp">
												</div>
											</div>
										</div>
										<div class="mb-3">
											<label for="foto" class="form-label">Foto</label>
											<input class="form-control" type="file" id="foto" name="foto">
										</div>
										<!-- <div class="mb-3">
											<div class="form-check">
												<input class="form-check-input" type="checkbox" id="terms-conditions" name="terms" />
												<label class="form-check-label" for="terms-conditions">
													Saya setuju dengan
													<a href="javascript:void(0);">syarat dan ketentuan</a>
													yang berlaku.
												</label>
											</div>
										</div> -->
										<button class="btn btn-primary d-grid w-100">Mendaftar</button>
									</form>

								</div>
							</div>
						</div>

						<p class="text-center">
							<span>Sudah punya akun?</span>
							<a href="<?= base_url('/user/login') ?>">
								<span>Login</span>
							</a>
						</p>
					</div>
				</div>
				<!-- Register Card -->
			</div>
		</div>
	</div>

	<!-- / Content -->


	<?php $this->load->view('layouts/dashboard/partials/script') ?>;

</body>
<script>
	// Handler for province change
	var wilayah = JSON.parse('<?= json_encode($wilayah) ?>');
	$('#provinsi1').change(function() {

		$('#kota1').html('<option selected="" disabled>Pilih salah satu</option>');

		var kota = wilayah[$(this).val()].kota
		for (const key in kota) {
			$('#kota1').append(`<option value="${key}">${kota[key]}</option>`);
		}
	});
	$('#provinsi2').change(function() {

		$('#kota2').html('<option selected="" disabled>Pilih salah satu</option>');

		var kota = wilayah[$(this).val()].kota
		for (const key in kota) {
			$('#kota2').append(`<option value="${key}">${kota[key]}</option>`);
		}
	});
</script>

</html>
