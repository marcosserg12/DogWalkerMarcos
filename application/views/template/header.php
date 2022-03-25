<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<!-- <link rel="icon" href="<?php echo base_url(); ?>public/favicon.ico"> -->
	<title>DogWalker</title>
	<!-- Bootstrap core CSS -->
	<link href="<?php echo base_url(); ?>public/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<!-- Custom styles for this template -->
	<link href="<?php echo base_url(); ?>public/css/owl.carousel.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/owl.theme.default.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>public/css/style.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/css/style.css" rel="stylesheet">

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<script src="<?php echo base_url(); ?>public/js/ie-emulation-modes-warning.js"></script>
	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

		<![endif]-->


	<?php if (isset($styles)) {
		foreach ($styles as $style_name) {
			$href = base_url() . "public/css/" . $style_name; ?>
			<link href="<?= $href ?>" rel="stylesheet">
	<?php }
	} ?>
</head>

<body id="page-top">
	<!-- Navigation -->
	<nav class="navbar navbar-default navbar-shrink navbar-fixed-top">
		<div class="container">
			<div class="navbar-header page-scroll">
				<h1 class="titulo"><a href="<?php echo base_url(); ?>Home">dog walker</a></h1>

				<!-- <a class="navbar-brand page-scroll" href="<?php echo base_url(); ?>Home"><img src="<?php echo base_url(); ?>public/images/dog.png" class="logo" alt="Lattes theme logo"></a> -->
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li>
						<a class="page-scroll"  href="<?php echo base_url(); ?>Home/anuncios"><i class="fa fa-search"></i>Anuncios</a>

					</li>
					<!-- <li>
							<a class="page-scroll" href="<?php echo base_url(); ?>Home/anunciar_dogwalker"><i class="fas fa-scroll"></i>    Anunciar</a>

						</li> -->
					<!-- <li>
							<a class="page-scroll" href="<?php echo base_url(); ?>Home/anunciar"><i class="far fa-calendar-check"></i>    Datas</a>

						</li> -->
					<!-- <li>
							<a class="page-scroll" href="<?php echo base_url(); ?>chat" ><i class="far fa-comment"></i>   Chat</a>
						</li> -->
					<li>
						<a  class="page-scroll"  href="<?php echo base_url(); ?>restrito"><i class="far fa-user-circle"></i>Conta</a>
					</li>
				</ul>
			</div>
			<!-- /.navbar-collapse -->
		</div>
		<!-- /.container-fluid -->
	</nav>
	<!-- Header -->

