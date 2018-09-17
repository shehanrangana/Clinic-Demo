<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!-- VENDOR CSS -->
	<link rel="stylesheet" href="/admin_dashboard/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="/admin_dashboard/vendor/font-awesome/css/font-awesome.min.css">
	
	<!-- MAIN CSS -->
	<link rel="stylesheet" href="/admin_dashboard/css/main.css">

	<!-- GOOGLE FONTS -->
	<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">

	<!-- ICONS -->
	<!-- <link rel="apple-touch-icon" sizes="76x76" href="./admin_dahsboard/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="./admin_dashboard/img/favicon.png"> -->
</head>
<body>

    <!-- WRAPPER -->
	<div id="wrapper">

        <!-- NAVBAR -->
		@section('navbar')
			@include('./layouts/navbar')
        @show
        <!-- END NAVBAR -->
        
        <!-- LEFT SIDEBAR -->
		@section('sidebar')
			@include('./layouts/sidebar')
        @show
        <!-- END LEFT SIDEBAR -->
        
        <div class="container">
            @yield('content')
        </div>
        
        <div class="clearfix"></div>
		<footer>
			<div class="container-fluid">
				
			</div>
		</footer>
	</div>
    <!-- END WRAPPER -->
    
<!-- Javascript -->
<script src="/admin_dashboard/vendor/jquery/jquery.min.js"></script>
<script src="/admin_dashboard/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="/admin_dashboard/vendor/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="/admin_dashboard/scripts/klorofil-common.js"></script>


    <script>
	$(function() {
		var data, options;

		// headline charts
		data = {
			labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
			series: [
				[23, 29, 24, 40, 25, 24, 35],
				[14, 25, 18, 34, 29, 38, 44],
			]
		};

		options = {
			height: 300,
			showArea: true,
			showLine: false,
			showPoint: false,
			fullWidth: true,
			axisX: {
				showGrid: false
			},
			lineSmooth: false,
		};


		// visits trend charts
		data = {
			labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
			series: [
				{
					name: 'series-real',
					data: [200, 380, 350, 320, 410, 450, 570, 400, 555, 620, 750, 900],
				},
				{
					name: 'series-projection',
					data: [240, 350, 360, 380, 400, 450, 480, 523, 555, 600, 700, 800],
				}
			]
		};

		options = {
			fullWidth: true,
			lineSmooth: false,
			height: "270px",
			low: 0,
			high: 'auto',
			series: {
				'series-projection': {
					showArea: true,
					showPoint: false,
					showLine: false
				},
			},
			axisX: {
				showGrid: false,

			},
			axisY: {
				showGrid: false,
				onlyInteger: true,
				offset: 0,
			},
			chartPadding: {
				left: 20,
				right: 20
			}
		};

	});
</script>

</body>
</html>