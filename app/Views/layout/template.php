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

			<?= view('layout/app_header'); ?> 
			<?= view('layout/app_sidebar'); ?>

			<?= $this->renderSection('content'); ?> 
		</div>
		<?= view('layout/footer'); ?>
	</div>


	<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script> -->

	<!-- BACK-TO-TOP -->
	<a href="#top" id="back-to-top"><i class="fa fa-angle-up"></i></a>

	<!-- JQUERY JS -->
	<script src="<?= base_url(); ?>/assets/js/jquery.min.js"></script>

	<!-- BOOTSTRAP JS -->
	<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/popper.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

	<!-- SPARKLINE JS-->
	<script src="<?= base_url(); ?>/assets/js/jquery.sparkline.min.js"></script>

	<!-- Sticky js -->
	<script src="<?= base_url(); ?>/assets/js/sticky.js"></script>

	<!-- CHART-CIRCLE JS-->
	<script src="<?= base_url(); ?>/assets/js/circle-progress.min.js"></script>

	<!-- PIETY CHART JS-->
	<script src="<?= base_url(); ?>/assets/plugins/peitychart/jquery.peity.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/peitychart/peitychart.init.js"></script>

	<!-- SIDEBAR JS -->
	<script src="<?= base_url(); ?>/assets/plugins/sidebar/sidebar.js"></script>

	<!-- Perfect SCROLLBAR JS-->
	<script src="<?= base_url(); ?>/assets/plugins/p-scroll/perfect-scrollbar.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/p-scroll/pscroll.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/p-scroll/pscroll-1.js"></script>

	<!-- INTERNAL CHARTJS CHART JS-->
	<script src="<?= base_url(); ?>/assets/plugins/chart/Chart.bundle.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/chart/rounded-barchart.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/chart/utils.js"></script>

	<!-- INTERNAL SELECT2 JS -->
	<script src="<?= base_url(); ?>/assets/plugins/select2/select2.full.min.js"></script>

	<!-- INTERNAL Data tables js-->
	<script src="<?= base_url(); ?>/assets/plugins/datatable/js/jquery.dataTables.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/datatable/js/dataTables.bootstrap5.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/datatable/dataTables.responsive.min.js"></script>

	<!-- INTERNAL APEXCHART JS -->
	<script src="<?= base_url(); ?>/assets/js/apexcharts.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/apexchart/irregular-data-series.js"></script>

	<!-- C3 CHART JS -->
	<script src="<?= base_url(); ?>/assets/plugins/charts-c3/d3.v5.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/charts-c3/c3-chart.js"></script>

	<!-- CHART-DONUT JS -->
	<script src="<?= base_url(); ?>/assets/js/charts.js"></script>

	<!-- INTERNAL Flot JS -->
	<script src="<?= base_url(); ?>/assets/plugins/flot/jquery.flot.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/flot/jquery.flot.fillbetween.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/flot/chart.flot.sampledata.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/flot/dashboard.sampledata.js"></script>

	<!-- INTERNAL Vector js -->
	<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js"></script>
	<script src="<?= base_url(); ?>/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>

	<!-- SIDE-MENU JS-->
	<script src="<?= base_url(); ?>/assets/plugins/sidemenu/sidemenu.js"></script>

	<!-- INTERNAL INDEX JS -->
	<script src="<?= base_url(); ?>/assets/js/index1.js"></script>

	<!-- Color Theme js -->
	<script src="<?= base_url(); ?>/assets/js/themeColors.js"></script>

	<!-- CUSTOM JS -->
	<script src="<?= base_url(); ?>/assets/js/custom.js"></script>
</body>
</html>