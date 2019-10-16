<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
	<meta charset="utf-8">
	<title>MyBlog</title>
</head>

<style media="screen">
	*{
		margin: 0px;
		font-family: Arial, Helvetica, sans-serif;
	}
	.header {
		padding-top: 20px;
		padding-bottom: 20px;
		text-align: center;
		background: #1abc9c;
		color: white;
		font-size: 40px;
		height: auto;
		width: 100%;
		overflow: hidden;
		position: relative;
	}
	.footer {
		padding-top: 10px;
		padding-bottom: 10px;
		text-align: center;
		background: #1abc9c;
		color: white;
		font-size: 10px;
		height: auto;
		width: 100%;
		overflow: hidden;
		position: fixed;
		bottom: 0;
		left: 0;
	}
	.nav {
		background-color: #333;
		position: static; /* Set the navbar to fixed position */
		width: 100%; /* Full width */
		padding-top: 5px;
		padding-bottom: 5px;
		overflow: hidden;
	}
	.nav ul li{
		display: block;
	}
	.nav ul li a{
		float: left;
		padding: 10px 15px;
		display: block;
		width: auto;
		height: auto;
		color: #f2f2f2;
		text-align: center;
		text-decoration: none;
	}
	.nav ul li a:hover{
		background: #ddd;
		color: black;
	}
	.content{
		font-family: Arial, Helvetica, sans-serif;
		width: 80%;
		margin: 0 auto;
		/* transform: scale(0.95,0.95); */
	}
	.blog {
		float:left;
		margin: 5px;
		font-family: Arial, Helvetica, sans-serif;
	}
	.conteudo {
		width:600px;
		padding:25px;
		margin:25px auto;
		background: #fff;
		border:1px solid #dedede;
		-webkit-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
		-moz-box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
		box-shadow: 1px 1px 1px 0px rgba(204,204,204,0.35);
		margin-bottom: 0px;
	}
	.conteudo img {
		min-width: 650px;
		margin:0 0 25px -25px;
		max-width: 650px;
	}
	.conteudo h1 {
		padding:0;
		margin:0 0 15px;
		font-weight: normal;
		color: #666;
		font-family: Georgia;
	}
	.conteudo p:last-child {
		margin: 0;
	}
	.conteudo .continue-lendo {
		color:#000;
		transition: all 0.5s ease;
		text-decoration: none;
		font-weight: 700;
	}
	.conteudo .continue-lendo:hover {
		margin-left:10px;
	}
	.post-info {
		float: right;
		font-size: 12px;
		margin: -10px 0 15px;
		text-transform: uppercase;
	}
	.action
	{
		position: static; /* Set the navbar to fixed position */
		width: auto; /* Full width */
		overflow: hidden;
		height: auto;
	}
	.action ul li {
		display: block;
	}
	.action ul li a{
		float: right;
		padding: 5px;
		display: block;
		width: auto;
		height: auto;
		color: white;
		text-align: center;
		text-decoration: none;
		background-color: grey;
	}
	.action ul li a:hover{
		background: #ddd;
		color: black;
	}
</style>
<body>
	<div class="background">

	</div>
	<div class="header">
		welcome to my blog!
	</div>

	<div class="nav">

		<ul>
			<li><a href="<?php echo base_url();?>">HOME</a></li>
			<li><a href="<?php echo base_url();?>post">POST</a></li>
			<li><a href="">LOGIN</a></li>
		</ul>

	</div>
	<div class="headerBreak"></div>
	<div class="content">
