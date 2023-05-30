<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<title>Labb 1</title>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/bootstrap.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/font-awesome.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css">
	<script src="js/jquery.js"></script>
</head>
<body>

<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="/">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" />
								<input type="submit" value="Sök" />
							</div>
						</form>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>