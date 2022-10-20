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
					<a href="/prodia" class="btn btn-primary">Home</a>

					<hr>

					<!-- <div class="input-group mb-5">
						<div class="input-group-text btn btn-primary">
							<i class="fa fa-search" aria-hidden="true"></i>
						</div>
					</div> -->

					<div class="card">
						<div class="card-header">
							<h3 id="city-name" class="card-title mb-0">
								<?= $city['city_name']; ?><br><span class="text-muted">lat : <?= $city['city_lat']; ?>, lon :<?= $city['city_lon']; ?></span>
							</h3>


						</div>
						<div class="card-body">
							<a href="/prodia/clear/<?= $city['city_id']; ?>" class="btn btn-danger pull-right">Clear data</a>
							<div class="clearfix"></div>
							<hr>
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
										<?php $i=1; foreach ($data as $l) : ?>
										<tr>
											<td><?= $i++; ?></td>
											<td><?= $l['forecast_time']; ?></td>
											<td class="text-end"><?= $l['forecast_pressure']; ?> hPa</td>
											<td class="text-end"><?= $l['forecast_humidity']; ?>%</td>
											<td class="text-end"><?= $l['forecast_wind']; ?></td>
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
		// $(document).ready(function() {
		// 	$.ajax({
		// 		type: 'GET',
		// 		url: "https://api.openweathermap.org/data/2.5/forecast?lat=-6.1750&lon=106.8266&appid=2f3c9db4f9d3264692968c7c3898c52d",

		// 		success: function(data) {
		// 				$(`#i-data`).val(JSON.stringify(data));
		// 				$(`#f-form`).submit();

		// 			$(`#city-name`).empty().html(
		// 				data.city.name+`<br><span class="text-muted">lat : `+data.city.coord.lat+`, lon :`+data.city.coord.lon+`</span>`
		// 				);

		// 			$(data.list).each(function(k, v) {
		// 				$(`#data-list`).append(
		// 					`
		// 					<tr>
		// 						<td>`+(k+1)+`</td>
		// 						<td>`+v.dt_txt+`</td>
		// 						<td class="text-end">`+v.main.pressure+` hPa</td>
		// 						<td class="text-end">`+v.main.humidity+` %</td>
		// 						<td class="text-end">`+v.wind.speed+`</td>
		// 					</tr>
		// 					`
		// 					);
		// 			})
		// 		},
		// 		error: function(data) {
		// 			console.log(data.responseJSON.cod);
		// 			console.log(data.responseJSON.message);
		// 		}
		// 	});
		// });
	</script>
</body>
</html>