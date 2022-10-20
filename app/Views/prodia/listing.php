<?= $this->extend('prodia/template'); ?>

<?= $this->section('content'); ?>
<div class="main-content app-content mt-0">
	<div class="side-app">
		<!-- CONTAINER -->
		<div class="main-container container-fluid">

			<!-- PAGE-HEADER -->
			<div class="page-header">
				<h1 class="page-title">Open Weather Map</h1>
			</div>
			<!-- PAGE-HEADER END -->

			<div class="row">
				<div class="col-12 col-sm-12">
					<form id="f-form" method="POST" action="<?= base_url(); ?>/prodia/save">
						<input id="i-data" type="text" name="new_data" class="form-control">
					</form>

					<!-- <div class="input-group mb-5">
						<div class="input-group-text btn btn-primary">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div> -->

					<div class="card">
						<div class="card-header">
							<h3 id="city-name" class="card-title mb-0"></h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover border text-nowrap text-md-nowrap">
									<thead>
										<tr>
											<td>No</td>
											<td>Time</td>
											<td class="text-end">Pressure</td>
											<td class="text-end">Humidity</td>
											<td class="text-end">Wind speed</td>
										</tr>
									</thead>
									<tbody id="data-list">
									</tbody>
								</table>
							</div>

						</div>
					</div>

				</div>

			</div>

		</div>
	</div>
</div>
<?= $this->endSection(); ?>