		<meta charset="utf-8" />

		<link rel="apple-touch-icon" sizes="76x76" href="{{ asset('img/logo4.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('img/logo3.png') }}">

		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />

		<!--   Core JS Files   -->
		<script src="{{ asset('js/core/jquery.min.js')  }}">></script>
		<script src="{{ asset('js/core/popper.min.js')  }}">></script>
		<script src="{{ asset('js/core/bootstrap.min.js')  }}">></script>
		<script src="{{ asset('js/plugins/perfect-scrollbar.jquery.min.js')  }}">></script>
		<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
		<script src="{{ asset('js/plugins/bootstrap-switch.js')  }}">></script>

		<!-- Chart JS -->
		<script src="{{ asset('js/plugins/chartjs.min.js')  }}">></script>
		<!--  Notifications Plugin    -->
		<script src="{{ asset('js/plugins/bootstrap-notify.js')  }}">></script>
		<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
		<script src="{{ asset('js/now-ui-dashboard.js?v=1.0.0')  }}">></script>

		<!-- CSS Files -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/now-ui-dashboard.css?v=1.0.0') }}" rel="stylesheet" />

		<!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="{{ asset('demo/demo.css') }}" rel="stylesheet" />

		<!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet"/>

		<link href="{{ asset('css/all.css') }}" rel="stylesheet" />
		<link href="{{ asset('css/montserrat.css') }}" rel="stylesheet" />

		<script type ='text/javascript'>
				$(document).ready(function(){
					$('.container-fluid').hide(5);
					$('.container-fluid').fadeIn(500);
				});
		</script>
