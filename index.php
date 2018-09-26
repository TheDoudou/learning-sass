<?php
require_once "assets/scssphp/scss.inc.php";
use Leafo\ScssPhp\Compiler;

$md5_scss = md5_file("assets/sass/main.scss");
$md5_data = file_get_contents("assets/data/data_md5", FILE_USE_INCLUDE_PATH);

if ($md5_scss != $md5_data) {
	$scss = new Compiler();
	$scss->setImportPaths('assets/sass/');
	$css = $scss->compile('@import "main.scss";');

	$file_css = fopen("assets/css/main.css", "w");
	$file_data = fopen("assets/data/data_md5", "w");
	fwrite($file_css, $css);
	fwrite($file_data, $md5_scss);
	print_r("Compile");
} else
	print_r("Compile pas");


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title></title>
	<link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<link rel="stylesheet" href="assets/css/main.css">
</head>
<body>
	<div class="nav_bar_background">
		<nav class="nav_bar">
			<ul class="nav_ul">
				<li><a href="">Turlututu.com</a></li>
				<li><a href="">Features</a></li>
				<li><a href="">Docs</a></li>
				<li><a href="">Blog</a></li>
				<li><a href="">Templates</a></li>
				<li><a href="">Pricing</a></li>
				<li><a href="">Contact</a></li>
				<li><a href="">Sign Up</a></li>
				<li><img src="assets/img/icon-login.svg" height="20" width="20"> <a href="">Login</a></li>
			</ul>
			
		</nav>
	</div>
	
	<div class="div_header">
		<header>
			<div class="picture1">
				<img src="assets/img/logoget.JPG">
			</div>
			<div class="title">
				<h1>Turlututu.com</h1>
				<p>The Plug and Play Database service</p><br>
				<a href="" class="b_ b_start">Start building NOW >></a>
			</div>
		</header>
	</div>
	<main>
		<section>
			<h2 class="title2">For awesome projects with deadlines</h2>
			<div class="content_txt">
				<div class="row">
					<div class="content">
						<h2>Simple to use</h2>
						<p>lorm lorel lorem lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis praesentium cum eaque error ipsum! Tempore veniam amet consequuntur! Tempora nulla aut quaerat distinctio minima perspiciatis molestias esse itaque doloremque dignissimos?</p>
					</div>
					<div class="content">
						<h2>Built for the modern web</h2>
						<p>lorm lorel lorem lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis praesentium cum eaque error ipsum! Tempore veniam amet consequuntur! Tempora nulla aut quaerat distinctio minima perspiciatis molestias esse itaque doloremque dignissimos?</p>

					</div>
					<div class="content">
						<h2>Productive</h2>
						<p>lorm lorel lorem lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis praesentium cum eaque error ipsum! Tempore veniam amet consequuntur! Tempora nulla aut quaerat distinctio minima perspiciatis molestias esse itaque doloremque dignissimos?</p>

					</div>
					<div class="content">
						<h2>More than a database</h2>
						<p>lorm lorel lorem lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis praesentium cum eaque error ipsum! Tempore veniam amet consequuntur! Tempora nulla aut quaerat distinctio minima perspiciatis molestias esse itaque doloremque dignissimos?</p>
					</div>
				</div>
			</div>
		</section>
		<center><p><H2>Innovative teams gets more done with Turlututu.com</H2></p></center>
		<section class="partners">
			
			<div class="div_partners">
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
				<a href=""><img src="http://placekitten.com/200/100"></a>
			</div>
		</section>
	</main>
	<div class="div_footer">
		<footer>
			<div class="b_foot">
				<a href="" class="b_ b_end1">Start building NOW >></a>
				<a href="" class="b_ b_end2">Start building NOW >></a>
				<a href="" class="b_ b_end3">Start building NOW >></a>
			</div>
			<div class="menu_foot">
				<a href="">Home</a> | <a href="">About</a> | <a href="">Contact</a> | <a href="">Terms & Conditions</a> | <a href="">Private Policy</a> <a href="" class="copyright">© 2017 turlututu</a>
			</div>
		</footer>
	</div>
</body>
</html>