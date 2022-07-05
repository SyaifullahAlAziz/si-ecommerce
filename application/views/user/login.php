<!DOCTYPE html>

<html lang="en" class="light-style customizer-hide" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php $this->load->view('layouts/dashboard/partials/head') ?>;

<head>
	<!-- Page -->
	<link rel="stylesheet" href="<?= base_url('assets') ?>/vendor/sneat-v1.0.1/css/pages/page-auth.css" />
	<title>Login</title>
</head>

<body>
	<!-- Content -->

	<div class="container-xxl">
		<div class="authentication-wrapper authentication-basic container-p-y">
			<div class="authentication-inner">
				<!-- Register -->
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
						<h4 class="mb-2">Selamat datang! 👋</h4>
						<p class="mb-4">Silahkan login terlebih dahulu</p>

						<form id="formAuthentication" class="mb-3" action="<?= base_url('/user/aksilogin') ?>" method="POST">
							<div class="mb-3">
								<label for="email" class="form-label">Email</label>
								<input type="text" class="form-control" id="email" name="email-username" placeholder="Masukan emailmu" autofocus />
							</div>
							<div class="mb-3 form-password-toggle">
								<div class="d-flex justify-content-between">
									<label class="form-label" for="password">Password</label>
									<!-- <a href="auth-forgot-password-basic.html">
										<small>Lupa Password?</small>
									</a> -->
								</div>
								<div class="input-group input-group-merge">
									<input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
									<span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
								</div>
							</div>
							<!-- <div class="mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" id="remember-me" />
									<label class="form-check-label" for="remember-me"> Ingat Saya </label>
								</div>
							</div> -->
							<div class="mb-3">
								<button class="btn btn-primary d-grid w-100" type="submit">Masuk</button>
							</div>
						</form>

						<p class="text-center">
							<span>Tidak memilik akun?</span>
							<a href="<?= base_url('/user/register') ?>">
								<span>Buat akun baru</span>
							</a>
						</p>
					</div>
				</div>
				<!-- /Register -->
			</div>
		</div>
	</div>

	<!-- / Content -->


	<?php $this->load->view('layouts/dashboard/partials/script') ?>

</body>

</html>
