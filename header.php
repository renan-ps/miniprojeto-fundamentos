<?php
	include "conn.php";
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>CORNout Viagens</title>

		<!-- ALERTIFY -->
		<link rel="stylesheet" href="node_modules/alertifyjs/build/css/alertify.min.css" />
		<link rel="stylesheet" href="node_modules/alertifyjs/build/css/themes/default.min.css" />

		
			<!-- Font Awesome -->
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
		<!-- Bootstrap core CSS -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
		<!-- Material Design Bootstrap -->
		<link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.9/css/mdb.min.css" rel="stylesheet">
		<link href='https://fonts.googleapis.com/css?family=Syncopate' rel='stylesheet' type='text/css'>

		<!-- JQUERY -->
		<script src="jquery-3.4.1.min.js"></script>
		<!-- ALERTIFY -->
		<script src="node_modules/alertifyjs/build/alertify.min.js"></script>

		
		<style type="text/css" media="screen">
			
			.intro-2 {
				background: url("imgs/background.jpg")no-repeat center center;
				background-size: cover;
				width: 100%;
			}

			.navbar {
				background-color: transparent;
			}

			.top-nav-collapse {
				background-color: #4285F4;
			}

			@media only screen and (max-width: 768px) {
				.navbar {
					background-color: #4285F4;
				}
			}

		html, body, header,
		.view {
			height: 100%;
		}

		.background-inicio img{
			filter: blur(2);
			background-repeat: no-repeat;
			width: 1920px;
			height: 400px;
			z-index: -1;
			background-attachment: fixed;
		}

		.itens_flutuantes{
			z-index: 1;
			padding-bottom: 100px;
		}

		.contrast,
		.contrast nav,
		.contrast div,
		.contrast li,
		.contrast ol,
		.contrast header,
		.contrast footer,
		.contrast section,
		.contrast main,
		.contrast aside,
		.contrast article {
			background: black !important;
			color: white !important;
		}

		.contrast h1,
		.contrast h2,
		.contrast h3,
		.contrast h4,
		.contrast h5,
		.contrast h6,
		.contrast p,
		.contrast label,
		.contrast strong,
		.contrast em,
		.contrast cite,
		.contrast q,
		.contrast i,
		.contrast b,
		.contrast u,
		.contrast span {
			color: white !important;
		}

		.contrast a{
			color: yellow !important;
		}

		.contrast button,
		.contrast input[type=button],
		.contrast input[type=reset],
		.contrast input[type=submit] {
			background: black !important;
			color: yellow !important;
			border: none !important;
		}

		.contrast img.on-contrast-force-gray {
			filter: grayscale(100%) contrast(120%);
		}

		.contrast img.on-contrast-force-white {
			filter: brightness(0) invert(1);
		}

		.contrast input[type=text],
		.contrast input[type=password],
		.contrast input[type=url],
		.contrast input[type=search],
		.contrast input[type=email],
		.contrast input[type=tel],
		.contrast input[type=date],
		.contrast input[type=month],
		.contrast input[type=week],
		.contrast input[type=datetime],
		.contrast input[type=datetime-local],
		.contrast textarea,
		.contrast input[type=number] {
			background: black !important;
			border: 1px solid white !important;
			color: white !important;
		}

		.acess{
			padding-top: 50px;
			z-index: 1;
			position: absolute;
			right: 0px;
			left: 0px;
		}

		.acess h1{
			padding-top: 300px;
		}

		.shadow-pop-tr :hover {
			-webkit-animation: shadow-pop-tr 0.3s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;
							animation: shadow-pop-tr 0.3s cubic-bezier(0.470, 0.000, 0.745, 0.715) both;
		}

		@-webkit-keyframes shadow-pop-tr {
			0% {
				-webkit-box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
				box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
				-webkit-transform: translateX(0) translateY(0);
								transform: translateX(0) translateY(0);
			}


			100% {
				-webkit-box-shadow: 1px -1px #3e3e3e, 2px -2px #3e3e3e, 3px -3px #3e3e3e, 4px -4px #3e3e3e, 5px -5px #3e3e3e, 6px -6px #3e3e3e, 7px -7px #3e3e3e, 8px -8px #3e3e3e;
					box-shadow: 1px -1px #3e3e3e, 2px -2px #3e3e3e, 3px -3px #3e3e3e, 4px -4px #3e3e3e, 5px -5px #3e3e3e, 6px -6px #3e3e3e, 7px -7px #3e3e3e, 8px -8px #3e3e3e;
				-webkit-transform: translateX(-8px) translateY(8px);
					transform: translateX(-8px) translateY(8px);
			}
		}

		@keyframes shadow-pop-tr {
			0% {
				-webkit-box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
								box-shadow: 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e, 0 0 #3e3e3e;
				-webkit-transform: translateX(0) translateY(0);
								transform: translateX(0) translateY(0);
			}
			100% {
				-webkit-box-shadow: 1px -1px #3e3e3e, 2px -2px #3e3e3e, 3px -3px #3e3e3e, 4px -4px #3e3e3e, 5px -5px #3e3e3e, 6px -6px #3e3e3e, 7px -7px #3e3e3e, 8px -8px #3e3e3e;
								box-shadow: 1px -1px #3e3e3e, 2px -2px #3e3e3e, 3px -3px #3e3e3e, 4px -4px #3e3e3e, 5px -5px #3e3e3e, 6px -6px #3e3e3e, 7px -7px #3e3e3e, 8px -8px #3e3e3e;
				-webkit-transform: translateX(-8px) translateY(8px);
								transform: translateX(-8px) translateY(8px);
			}
		}
		</style>
	</head>


	<body>
		<nav class="navbar fixed-top  navbar-expand-lg navbar-dark scrolling-navbar justify-content-center">
			<a class="navbar-brand" href="#"><strong><img src="imgs/Icone_site.png" width="30" height="30" alt=""></strong></a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			
			<div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
				<ul class="navbar-nav  justify-content-center">
					<li class="nav-item active">
						<a class="nav-link" href="#">Passeios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="#">Contato</a>
					</li>

					<li class="nav-item">
						<a class="nav-link" data-toggle="modal" data-target="#modalLRForm">Entre ou Cadastre-se</a>
					</li>
				</ul>
			</div>
		</nav>