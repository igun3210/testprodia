<!--APP-SIDEBAR-->
<div class="sticky">
	<div class="app-sidebar__overlay" data-bs-toggle="sidebar"></div>
	<div class="app-sidebar">
		<div class="side-header">
			<a class="header-brand1" href="index.html">
				<img src="<?= base_url(); ?>/assets/images/brand/logo.png" class="header-brand-img desktop-logo" alt="logo">
				<img src="<?= base_url(); ?>/assets/images/brand/logo-1.png" class="header-brand-img toggle-logo" alt="logo">
				<img src="https://www.larispos.com/assets_web/img/logo-laris2.png" class="header-brand-img light-logo" alt="logo">
				<img src="https://www.larispos.com/assets_web/img/logo-laris2.png" class="header-brand-img light-logo1" alt="logo">
			</a>
			<!-- LOGO -->
		</div>

		<div class="main-sidemenu">
			<ul class="side-menu">
				<li class="sub-category">
					<h3>Main</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fe fe-home"></i>
						<span class="side-menu__label">Dashboard</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fa fa-clock-o"></i>
						<span class="side-menu__label">Closing</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fa fa-circle-thin"></i>
						<span class="side-menu__label">Kas Kecil</span>
					</a>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fa fa-exchange"></i>
						<span class="side-menu__label">Transaki</span>
						<small><i class="angle fa fa-chevron-right"></i></small>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="/">Daftar Transaksi</a></li>
						<li><a class="slide-item" href="/">Transaksi Aktif</a></li>
					</ul>
				</li>

				<li class="sub-category">
					<h3>Menu</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fa fa-glass"></i>
						<span class="side-menu__label">Pengaturan Menu</span>
						<small><i class="angle fa fa-chevron-right"></i></small>
					</a>
					<ul class="slide-menu">
						<li><a class="slide-item" href="/">Kategori Produk</a></li>
						<li><a class="slide-item" href="/">Master Produk</a></li>
						<li><a class="slide-item" href="/">Daftar Darup</a></li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)">
								<span class="sub-side-menu__label">Modifier</span><small><small><i class="sub-angle fa fa-chevron-right"></i></small></small>
							</a>
							<ul class="sub-slide-menu">
								<li><a class="sub-slide-item" href="/">Daftar Modifier</a></li>
								<li><a class="sub-slide-item" href="/">Pasangan Modifier</a></li>
							</ul>
						</li>
						<li><a href="/" class="slide-item">Tingkat Harga</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="/">
						<i class="side-menu__icon fa fa-percent"></i>
						<span class="side-menu__label">Daftar Promo</span>
					</a>
				</li>

				<li class="sub-category">
					<h3>Inventori / Stock</h3>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
						<i class="side-menu__icon fe fe-folder"></i>
						<span class="side-menu__label">File Manager</span>
						<span class="badge bg-pink side-badge">4</span>
						<i class="angle fe fe-chevron-right hor-angle"></i>
					</a>
					<ul class="slide-menu">
						<li class="side-menu-label1"><a href="javascript:void(0)">File Manager</a></li>
						<li><a href="file-manager.html" class="slide-item"> File Manager</a></li>
						<li><a href="filemanager-list.html" class="slide-item"> File Manager List</a></li>
						<li><a href="filemanager-details.html" class="slide-item"> File Details</a></li>
						<li><a href="file-attachments.html" class="slide-item"> File Attachments</a></li>
					</ul>
				</li>
				<li class="slide">
					<a class="side-menu__item" data-bs-toggle="slide" href="javascript:void(0)">
						<i class="side-menu__icon fe fe-users"></i>
						<span class="side-menu__label">Submenu</span>
						<i class="angle fe fe-chevron-right"></i>
					</a>
					<ul class="slide-menu">
						<li class="side-menu-label1"><a href="javascript:void(0)">Authentication</a></li>
						<li><a href="login.html" class="slide-item"> Login</a></li>
						<li><a href="register.html" class="slide-item"> Register</a></li>
						<li><a href="forgot-password.html" class="slide-item"> Forgot Password</a></li>
						<li><a href="lockscreen.html" class="slide-item"> Lock screen</a></li>
						<li class="sub-slide">
							<a class="sub-side-menu__item" data-bs-toggle="sub-slide" href="javascript:void(0)">
								<span class="sub-side-menu__label">Error Pages</span>
								<i class="sub-angle fe fe-chevron-right"></i>
							</a>
							<ul class="sub-slide-menu">
								<li><a href="400.html" class="sub-slide-item"> 400</a></li>
								<li><a href="401.html" class="sub-slide-item"> 401</a></li>
								<li><a href="403.html" class="sub-slide-item"> 403</a></li>
								<li><a href="404.html" class="sub-slide-item"> 404</a></li>
								<li><a href="500.html" class="sub-slide-item"> 500</a></li>
								<li><a href="503.html" class="sub-slide-item"> 503</a></li>
							</ul>
						</li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</div>