<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar" style="z-index: 99999;">
	<div class="navbar-nav-right d-flex align-items-center container-xxl" id="navbar-collapse">
		<div class="text-primary me-4">
			Olemi<span class="text-muted">.com</span>
		</div>
		<!-- Search -->
		<div class="navbar-nav align-items-center">
			<div class="nav-item d-flex align-items-center">
				<i class="bx bx-search fs-4 lh-0"></i>
				<form action="<?= base_url('/') ?>search" method="get">
					<input type="text" class="form-control border-0 shadow-none" placeholder="Search..." aria-label="Search..." name="keyword" />
				</form>
			</div>
		</div>
		<!-- /Search -->

		<ul class="navbar-nav flex-row align-items-center ms-auto gap-4">
			<li class="nav-item">
				<a href="" class="text-dark">
					<i class='bx bx-file'></i> Katalog
				</a>
			</li>
			<li class="nav-item navbar-dropdown dropdown-user dropdown">
				<a class="nav-link dropdown-toggle hide-arrow text-dark" href="javascript:void(0);" data-bs-toggle="dropdown">
					<i class='bx bx-chevron-down'></i> Kategory
				</a>
				<ul class="dropdown-menu dropdown-menu-end">
					<!-- <li>
						<div class="dropdown-divider"></div>
					</li> -->
					<li>
						<a class="dropdown-item text-dark" href="#">
							<i class="bx bx-user me-2"></i>
							<span class="align-middle">Kategory 1</span>
						</a>
					</li>
				</ul>
			</li>
			<li class="nav-item">
				<a href="" class="text-dark">
					<i class='bx bx-cart'></i> Keranjang
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url() ?>user" class="text-dark">
					<i class='bx bx-user'></i> Akun
				</a>
			</li>
		</ul>
	</div>
</nav>
<nav class="layout-navbar navbar navbar-expand-xl align-items-center bg-navbar-theme" id="layout-navbar" style="z-index: 9999;">
	<div class="navbar-nav-left d-flex align-items-center container-xxl" id="navbar-collapse">
		<ul class="navbar-nav flex-row align-items-center gap-4">
			<li class="nav-item">
				<a href="<?= base_url('/') ?>produk" class="<?= ($parent == "produk") ? 'text-white bg-primary p-2' : 'text-dark' ?>">
					<i class='bx bxs-package'></i> Produk
				</a>
			</li>
			<li class="nav-item">
				<a href="<?= base_url('/') ?>toko" class="<?= ($parent == "toko") ? 'text-white bg-primary p-2' : 'text-dark' ?>">
					<i class='bx bx-store'></i> Toko
				</a>
			</li>
		</ul>
	</div>
</nav>
