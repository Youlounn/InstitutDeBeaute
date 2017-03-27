<!DOCTYPE HTML>
<html>

<head>
	<title>Institut de beauté Harmonie et Aqualigne - Acceuil</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<link rel="stylesheet" href="assets/css/jquery.bxslider.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

</head>

<body>

	<!-- Wrapper -->
	<div id="wrapper">

		<!-- Main -->
		<div id="main">
			<div class="inner">

				<!-- Header -->
				<header id="header">
					<a href="index.php" class="logo"><strong>Institut de beauté</strong></a>
				</header>

				<!-- Banner -->
				<section id="banner" class="acceuil">
					<div class="content">

						<ul class="bxslider" style="width: auto; position: relative;">
							<li><img src="images/pic01.jpg" title="Institut de beauté de Chavagnes en Paillers" /></li>
							<li><img src="images/pic02.jpg" title="Institut de Beauté Aqualigne des Essarts" /></li>
							<li><img src="images/pic03.jpg" title="Institut de beauté à St Georges de Montaigu" /></li>
							<li><img src="images/pic04.jpg" title="Institut de beauté de St Fulgent" /></li>
						</ul>
						<header>
							<h2>St Fulgent – Chavagnes en paillers – Les Essarts – St Georges de Montaigu</h2>
						</header>
						<p>
							L institut Harmony regroupe 4 centres où le savoir-faire et le professionnalisme se conjuguent au bénéfice de la beauté et du bien-etre.
						</p>
						<blockquote>
							Retrouvez au sein de chaque centre une équipe de professionnelles de l esthétique diplômées et régulièrement formées afin de vous proposer les nouveautés et innovations en matière de beauté
						</blockquote>
						<p>
							Un collectif dynamique à votre écoute pour tous renseignements et conseils Nous vous proposons une large gamme de prestations parmi les soins visage, soins du corps, modelages relaxants, épilation, beauté des mains et des pieds, maquillage… Venez les
							découvrir pour améliorer votre capital beauté et vous relaxer Attention certaines prestations ne sont réalisées que sur certains sites nous contactez.
						</p>
					</div>
				</section>

				<section>
				<h2>Contact</h2>
				<p>Certaines de vos questions n'ont pas de réponses ? Contactez nous.</p>
				<ul class="contact">
					<li class="fa-envelope-o"><a href="mailto:institutharmonychavagnes@gmail.com">institutharmonychavagnes@gmail.com</a></li>
					<li class="fa-phone">02 51 42 70 42</li>
					<li class="fa-home">HARMONY <br /> 93 bis route nationale <br /> Saint Fulgent, 85250</li>
				</ul>
				<!-- Footer -->
					<p class="copyright">&copy; 2017. Institut de Beauté 85. </p>
				</section>

			</div>
		</div>

		<!-- Sidebar -->
		<div id="sidebar">
			<div class="inner">

				<!-- Search -->
				<section id="search" class="alt">
					<form method="post" action="#">
						<input type="text" name="query" id="query" placeholder="Search" />
					</form>
				</section>

				<!-- Menu -->
				<nav id="menu">
					<header class="major">
						<h2>Menu</h2>
					</header>
					<ul>
						<li><a id="menuacceuil">Acceuil</a></li>
						<li>
							<span class="opener">Nos instituts</span>
							<ul>
								<li><a href="institutChavagneEnPaillers.php" id="menuchavagne">Chavagne en paillers</a></li>
								<li><a href="#" id="menugeorges">St Georges de Montaigu</a></li>
								<li><a href="#" id="menuessarts">Les essarts</a></li>
								<li><a href="#" id="menufulgent">St Fulgent</a></li>
							</ul>
						</li>
						<li><a href="#">Nos préstations</a></li>
						<li>
							<span class="opener">Tarif</span>
							<ul>
								<li><a href="tarifAqualigne.php">Tarif aqualigne</a></li>
								<li><a href="#">tarif harmony et alyzé</a></li>
							</ul>
						</li>
						<li>
							<span class="opener">Bon cadeau</span>
							<ul>
								<li><a href="#">Chèque cadeau harmony et alyzé</a></li>
								<li><a href="#">Chèque cadeau aqualigne</a></li>
							</ul>
						</li>
					</ul>
				</nav>



				<!-- Section -->
				<section>
					<header class="major">
						<h2>Actualité</h2>
					</header>
					<div class="mini-posts">
						<article>
							<a href="#" class="image"><img src="images/pic01.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic02.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic03.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
					</div>
					<ul class="actions">
						<li><a href="actualite.php" class="button">Plus</a></li>
					</ul>
				</section>



			</div>
		</div>

	</div>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/onglets.js"></script>
	<script src="assets/js/jquery.bxslider.min.js"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>
	<script>
	$(document).ready(function(){
		$('.bxslider').bxSlider({
  mode: 'fade',
  captions: true,
  auto: true,
  autoControls: true
});
	});
	</script>

</body>

</html>
