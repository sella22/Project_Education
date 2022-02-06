<!doctype html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<link rel="shortcut icon" href="<?= base_url('assets/') ?>./assets/images/gt_favicon.png">

	<!-- Bootstrap -->
	<link href="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.no-icons.min.css" rel="stylesheet">
	<!-- Icons -->
	<linkS href="http://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
		<!-- Fonts -->
		<link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Alice|Open+Sans:400,300,700">
		<!-- Custom styles -->

		<link rel="stylesheet" href="<?= base_url('assets/') ?>./assets/css/styles.css">
		<link rel="apple-touch-icon" sizes="76x76" href="<?= base_url('assets2/') ?>./assets/img/apple-icon.png">
		<link rel="icon" type="image/png" href="<?= base_url('assets/') ?>./assets/img/logo.png" style="width:300px;hight:300px;">
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
		<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
		<!--     Fonts and icons     -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
		<link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
		<!-- CSS Files -->
		<link href="<?= base_url('assets/') ?>./assets/css/bootstrap.min.css" rel="stylesheet" />
		<link href="<?= base_url('assets/') ?>./assets/css/nav.css" rel="stylesheet" />
		<link href="<?= base_url('assets/') ?>./assets/css/paper-dashboard.css?v=2.0.1" rel="stylesheet" />
		<!-- CSS Just for demo purpose, don't include it in your project -->
		<link href="<?= base_url('assets/') ?>./assets/demo/demo.css" rel="stylesheet" />
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/css/ol.css" type="text/css">
		<link rel="stylesheet" href="<?= base_url('assets/') ?>./assets/css/style.css" type="text/css">

		<script src="https://cdn.jsdelivr.net/gh/openlayers/openlayers.github.io@master/en/v6.9.0/build/ol.js"></script>
</head>

<body class="">
	<div class="wrapper ">
		<div class="sidebar" data-color="white" data-active-color="danger">
			<div class="logo">
				<a href="https://www.creative-tim.com" class="simple-text logo-mini">
					<!-- <div class="logo-image-small">
            <img src="./assets/img/logo-small.png">
          </div> -->
					<!-- <p>CT</p> -->
				</a>
				<a>
					<center>
						<img src="<?= base_url('icon/') ?>img/edu/logo_edu.png" style="width:150px; height:150px; margin-left:-50px;" />
					</center>
				</a>
			</div>
			<div class="sidebar-wrapper">
				<b>
					<ul class="nav">
						<li>
							<a href="<?php echo site_url('tentang/'); ?>">
								<i class="nc-icon nc-single-02"></i>
								<p>Tentang</p>
							</a>
						</li><br>
						<li>
							<a href="<?php echo site_url('peta/'); ?>">
								<i class="nc-icon nc-pin-3"></i>
								<p>Peta</p>
							</a>
						</li><br>
						<li>
							<a href="<?php echo site_url('berita/'); ?>">
								<i class="nc-icon nc-zoom-split"></i>
								<p>Berita</p>
							</a>
						</li><br>
						<li>
							<a href="<?php echo site_url('beasiswa/'); ?>">
								<i class="nc-icon nc-spaceship"></i>
								<p>Beasiswa</p>
							</a>
						</li>
					</ul>
				</b>
			</div>
		</div>
		<div class="main-panel" style="height: 100vh;">
			<!-- Navbar -->
			<nav class="navbar navbar-expand-lg navbar-absolute fixed-top navbar-transparent">
				<div class="container-fluid">
					<div class="navbar-wrapper">
						<div class="navbar-toggle">
							<button type="button" class="navbar-toggler">
								<span class="navbar-toggler-bar bar1"></span>
								<span class="navbar-toggler-bar bar2"></span>
								<span class="navbar-toggler-bar bar3"></span>
							</button>
						</div>
						<img src="<?= base_url('assets/') ?>assets/img/earth.png" width="42px" />
						<b><a class="navbar-brand" href="javascript:;" style="color:black">Bengkel Sistem Informasi Geografis</a></b>

					</div>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
						<span class="navbar-toggler-bar navbar-kebab"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-end" id="navigation">
						<form>
							<div class="input-group no-border">

								<div class="input-group-append">

								</div>
							</div>
						</form>

					</div>
				</div>
			</nav>
