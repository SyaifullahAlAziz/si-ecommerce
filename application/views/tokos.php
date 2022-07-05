<?php $this->load->view('layouts/landsite/beforeContent') ?>

<head>
	<title>
		Daftar Toko
	</title>
</head>
<div class="container-xxl flex-grow-1 container-p-y">
	<div class="row mt-4">
		<div class="col">
			<h3>Daftar Toko</h3>
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
						<p class="card-text my-1 mb-2">
							Kripik Balado Mahkota
						</p>
						<a href="#" class="btn btn-outline-primary d-block">Lihat</a>
					</div>
				</div>
			</div>
		<?php endfor; ?>
	</div>
</div>
<?php $this->load->view('layouts/landsite/afterContent') ?>
