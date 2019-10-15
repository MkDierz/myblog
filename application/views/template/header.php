<!DOCTYPE html>
<html lang="en" dir="ltr">
	<head>
		<meta charset="utf-8">
		<title>MyBlog</title>
		<style media="screen">
			*{
				margin: 0px;
			}
			.crop header{
				width: 100%;
				height: 200px;

			}
			.header img {
				position: relative;
				background-size: auto 100%;


			}
			.nav ul{
				background-color: grey;
				height: 25px;
				padding: 10px;


			}
			.nav ul li{
				display: inline-block;

			}
			.nav ul li a{
				text-decoration: none;
				color : white;
				font-family: sans-serif;

			}
			.nav ul li a:hover{
				background: #ddd;
				color: black;

			}
			.content{
				margin: 0 auto;
				margin-top: 30px;
				width: 80%;

			}

		</style>
		<div class="header">
			<img src="<?php echo base_url("asset/image/bg.jpg")?> " alt="bg-image">
		</div>

		<div class="nav">
			<ul>
				<li><a href="<?php echo base_url();?>">HOME</a></li>
				<li><a href="<?php echo base_url();?>post">POST</a></li>
				<li><a href="">LOGIN</a></li>
			</ul>
		</div>

		<div class="content">
