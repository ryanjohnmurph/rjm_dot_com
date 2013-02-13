<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html>
	<head>
		<meta http-equiv="content-type" content="text/html;charset=utf-8" /> <!-- this is to fix the punctuation marks that show up weird -->
		
		<title><?php echo $title ?> - Ryan John Murphy</title>
		
		<link rel="stylesheet" href="<?php echo asset_url()?>style.css" type="text/css" />
	</head>
	
	<body id="body">
		<div id="header">
			<div id="logo">rjm</div>
			<div id="logo2">ryan john murphy</div>
			<div id="nav-bar">
				<a href="<?php echo base_url().'index.php/'?>home" class="nav">HOME</a>
				<a href="<?php echo base_url().'index.php/'?>me" class="nav">ME</a>
				<a href="<?php echo base_url().'index.php/'?>blog" class="nav">BLOG</a>
				<a href="<?php echo base_url().'index.php/'?>portfolio" class="nav">PORTFOLIO</a>
			</div>
		</div>