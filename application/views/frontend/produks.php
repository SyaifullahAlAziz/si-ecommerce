<?php require_once('layouts/beforeContent.php') ?>

<head>
	<title>
		Daftar Produk
	</title>
</head>
<div class="container-xxl flex-grow-1 container-p-y">
	<!-- Carousel -->
	<div class="row">
		<div class="col">
			<div id="carousel" class="carousel carousel-dark slide carousel-fade mb-4" data-bs-ride="carousel" style="height: 500px;">
				<ol class="carousel-indicators">
					<li data-bs-target="#carousel" data-bs-slide-to="0" class="active"></li>
					<li data-bs-target="#carousel" data-bs-slide-to="1"></li>
					<li data-bs-target="#carousel" data-bs-slide-to="2"></li>
				</ol>
				<div class="carousel-inner" style="height: 500px;">
					<div class="carousel-item active" style="height: 500px;">
						<img class="d-block w-100" src="<?= base_url('assets') ?>/img/banners/1.jpg" alt="First slide" />
						<div class="carousel-caption d-none d-md-block">
							<h3 class="text-white">First slide</h3>
							<p class="text-white">Eos mutat malis maluisset et, agam ancillae quo te, in vim congue pertinacia.</p>
						</div>
					</div>
					<div class="carousel-item" style="height: 500px;">
						<img class="d-block w-100" src="<?= base_url('assets') ?>/img/banners/2.jpg" alt="Second slide" />
						<div class="carousel-caption d-none d-md-block">
							<h3 class="text-white">Second slide</h3>
							<p class="text-white">In numquam omittam sea.</p>
						</div>
					</div>
					<div class="carousel-item" style="height: 500px;">
						<img class="d-block w-100" src="<?= base_url('assets') ?>/img/banners/3.jpg" alt="Third slide" />
						<div class="carousel-caption d-none d-md-block">
							<h3 class="text-white">Third slide</h3>
							<p class="text-white">In numquam omittam sea.</p>
						</div>
					</div>
				</div>
				<a class="carousel-control-prev" href="#carousel" role="button" data-bs-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Previous</span>
				</a>
				<a class="carousel-control-next" href="#carousel" role="button" data-bs-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="visually-hidden">Next</span>
				</a>
			</div>
		</div>
	</div>
	<!--/ Carousel -->
	<div class="row mt-4">
		<div class="col">
			<h3>Produk Terlaris</h3>
		</div>
	</div>
	<div class="row">
		<?php for ($i = 1; $i <= 4; $i++) : ?>
			<div class="col-md-6 col-lg-3 mb-3">
				<div class="card h-100">
					<img class="card-img-top" src="<?= base_url('assets') ?>/img/banners/<?= $i % 3 + 1 ?>.jpg" alt="Card image cap" />
					<div class="card-body">
						<h4 class="card-title m-0">Sanjai Bambu Kuning</h4>
						<div class="my-1">
							<?= star(rand(0, 5)) ?>
						</div>
						<p class="card-text my-1">
							Kripik Balado Mahkota
						</p>
						<h4 class="my-3">
							<?= idr(rand(999999, 9999999)) ?>
						</h4>
						<a href="#" class="btn btn-outline-primary d-block">Lihat</a>
					</div>
				</div>
			</div>
		<?php endfor; ?>
	</div>
	<div class="row mt-4">
		<div class="col">
			<h3>Semua Produk</h3>
		</div>
	</div>
	<div class="row">
		<?php for ($i = 1; $i <= 4; $i++) : ?>
			<div class="col-md-6 col-lg-3 mb-3">
				<div class="card h-100">
					<img class="card-img-top" src="<?= base_url('assets') ?>/img/banners/<?= $i % 3 + 1 ?>.jpg" alt="Card image cap" />
					<div class="card-body">
						<h4 class="card-title m-0">Sanjai Bambu Kuning</h4>
						<div class="my-1">
							<?= star(rand(0, 5)) ?>
						</div>
						<p class="card-text my-1">
							Kripik Balado Mahkota
						</p>
						<h4 class="my-3">
							<?= idr(rand(999999, 9999999)) ?>
						</h4>
						<a href="#" class="btn btn-outline-primary d-block">Lihat</a>
					</div>
				</div>
			</div>
		<?php endfor; ?>
	</div>
</div>
<?php require_once('layouts/afterContent.php') ?>
