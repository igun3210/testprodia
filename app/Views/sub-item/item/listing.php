<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content app-content mt-0">
	<div class="side-app">
		<!-- CONTAINER -->
		<div class="main-container container-fluid">

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<h1 class="page-title">Menu</h1>
				<div>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Menu</li>
					</ol>
				</div>
			</div>
			<!-- PAGE-HEADER END -->

			<div class="row">
				<div class="col-12 col-sm-12">
					<div class="input-group mb-5">
						<input type="text" class="form-control" placeholder="Search">
						<div class="input-group-text btn btn-primary">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div>

					<div class="card">
						<div class="card-header">
							<h3 class="card-title mb-0">Daftar Menu</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover border text-nowrap text-md-nowrap">
									<thead>
										<tr>
											<td>No</td>
											<td class="text-center">&nbsp;</td>
											<td>Menu</td>
											<td class="text-end">Harga</td>
											<td>Kategori</td>
										</tr>
									</thead>
									<tbody>
									<?php $no=1; foreach ($data as $v) : ?>
										<tr>
											<td class="text-muted"><?= $no++; ?></td>
											<td class="text-center">
												<?=	($v['item_status']==0?'<i class="fa fa-circle text-warning"></i>':'<i class="fa fa-circle text-success"></i>'); ?>
											</td>
											<td class="text-primary"><small class="text-muted"><?=	$v['item_code']; ?> </small><?=	$v['item_name']; ?></td>
											<td class="text-end"><?= $v['item_price']; ?></td>
											<td><?=	$v['item_cat_name']; ?></td>
										</tr>
									<?php endforeach; ?>
									</tbody>
								</table>
							</div>

						</div>
					</div>
					<!-- PAGING -->
					<div class="mb-5 mx-auto"  style="width: 200px;">
						<ul class="pagination">
							<li class="page-item page-prev disabled">
								<a class="page-link" href="javascript:void(0)" tabindex="-1">Prev</a>
							</li>
							<li class="page-item active"><a class="page-link" href="javascript:void(0)">1</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">2</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">3</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">4</a></li>
							<li class="page-item"><a class="page-link" href="javascript:void(0)">5</a></li>
							<li class="page-item page-next">
								<a class="page-link" href="javascript:void(0)">Next</a>
							</li>
						</ul>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>
<?= $this->endSection(); ?>