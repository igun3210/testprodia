<!DOCTYPE html>
<html lang="en">
<head>
	<!-- META DATA -->
	<meta charset="UTF-8">
	<meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="Sash – Bootstrap 5  Admin & Dashboard Template">
	<meta name="author" content="Spruko Technologies Private Limited">
	
	<!-- FAVICON -->
	<link rel="shortcut icon" type="image/x-icon" href="<?= base_url(); ?>/assets/images/brand/favicon.ico" />

	<!-- TITLE -->
	<title>Laris</title>

	<!-- BOOTSTRAP CSS 5.2-->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous"> -->
	<link id="style" href="<?= base_url(); ?>/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

	<!-- STYLE CSS -->
	<link href="<?= base_url(); ?>/assets/css/style.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/assets/css/dark-style.css" rel="stylesheet" />
	<link href="<?= base_url(); ?>/assets/css/transparent-style.css" rel="stylesheet">
	<link href="<?= base_url(); ?>/assets/css/skin-modes.css" rel="stylesheet" />

	<!--- FONT-ICONS CSS -->
	<link href="<?= base_url(); ?>/assets/css/icons.css" rel="stylesheet" />

	<!-- COLOR SKIN CSS -->
	<link id="theme" rel="stylesheet" type="text/css" media="all" href="<?= base_url(); ?>/assets/colors/color1.css" />
</head>

<body class="app sidebar-mini ltr light-mode">
	<!-- GLOBAL-LOADER -->
	<div id="global-loader">
		<img src="<?= base_url(); ?>/assets/images/loader.svg" class="loader-img" alt="Loader">
	</div>
	<!-- /GLOBAL-LOADER -->

	<!-- PAGE -->
	<div class="page">
		<div class="page-main">
			
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
					<div class="card">
						<div class="card-header">
							<h3 id="city-name" class="card-title mb-0">New Data</h3>
						</div>
						<div class="card-body">
							<form id="f-form" method="POST" action="<?= base_url(); ?>/prodia/save">
								<div class="col">
									Lat <input id="i-lat" type="text" class="form-control">
								</div>
								<div class="col">
									Lon <input id="i-lon" type="text" class="form-control">
								</div>
								<div class="col">
									<button  id="b-data" type="button" class="btn btn-success">Add new</button>
								</div>
								<input id="i-data" type="text" name="new_data" class="form-control" hidden>
							</form>
						</div>
					</div>

					<!-- <div class="input-group mb-5">
						<div class="input-group-text btn btn-primary">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div> -->

					<div class="card">
						<div class="card-header">
							<h3 id="city-name" class="card-title mb-0">City</h3>
						</div>
						<div class="card-body">
							<div class="table-responsive">
								<table class="table table-hover border text-nowrap text-md-nowrap">
									<thead>
										<tr>
											<td>No</td>
											<td>ID</td>
											<td>Name</td>
											<td class="text-end">Lat</td>
											<td class="text-end">Lon</td>
										</tr>
									</thead>
									<tbody id="data-list">
										<?php $i=1; foreach ($data as $c) : ?>
										<tr>
											<td><?= $i; ?></td>
											<td><?= $c['city_id']; ?></td>
											<td><?= $c['city_name']; ?></td>
											<td class="text-end"><?= $c['city_lat']; ?></td>
											<td class="text-end"><?= $c['city_lon']; ?></td>
											<td>
											<?php if ($c['city_del']==0) : ?>
												<a href="/prodia/show/<?= $c['city_id']; ?>" class="btn btn-sm btn-primary">Show</a>
											<?php else : ?>
												<button  id="b-reload" type="button" class="btn  btn-sm btn-warning" attr-lat="<?= $c['city_lat']; ?>" attr-lon="<?= $c['city_lon']; ?>">Reload</button>
											<?php endif; ?>
											</td>
										</tr>
										<?php endforeach; ?>
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

		</div>
	</div>


	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- JQUERY JS -->
	<script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>


	<!-- INTERNAL INDEX JS -->
	<script src="<?= base_url(); ?>/assets/js/index1.js"></script>

	<!-- Color Theme js -->
	<script src="<?= base_url(); ?>/assets/js/themeColors.js"></script>

	<!-- CUSTOM JS -->
	<script src="<?= base_url(); ?>/assets/js/custom.js"></script>

	<script type="text/javascript">
		$(`#b-data`).click(function() {
			var lat = $(`#i-lat`).val();
			var lon = $(`#i-lon`).val();
			var uri = "https://api.openweathermap.org/data/2.5/forecast?lat="+lat+"&lon="+lon+"&appid=2f3c9db4f9d3264692968c7c3898c52d";

			if (lat != '' && lon != '') get_data(uri);
		});

		$(`#b-reload`).click(function() {
			var lat = $(this).attr('attr-lat');
			var lon = $(this).attr('attr-lon');
			var uri = "https://api.openweathermap.org/data/2.5/forecast?lat="+lat+"&lon="+lon+"&appid=2f3c9db4f9d3264692968c7c3898c52d";

			if (lat != '' && lon != '') get_data(uri);
		});

		function get_data(uri='') {
			$.ajax({
				type: 'GET',
				url: uri,

				success: function(data) {
					$(`#i-data`).val(JSON.stringify(data));
					$(`#f-form`).submit();
				}
			});
		}
	</script>
</body>
</html>