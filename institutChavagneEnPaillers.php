<!DOCTYPE HTML>
<html>

<head>
	<title>Institut de beauté Harmonie et Aqualigne - Chavagne en paillers</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
	<link rel="stylesheet" href="assets/css/main.css" />
	<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->

	<style>
			/* jssor slider loading skin oval css */

			.jssorl-oval img {
					animation-name: jssorl-oval;
					animation-duration: 1.2s;
					animation-iteration-count: infinite;
					animation-timing-function: linear;
			}

			@keyframes jssorl-oval {
					from {
							transform: rotate(0deg);
					}

					to {
							transform: rotate(360deg);
					}
			}


			/* jssor slider bullet navigator skin 05 css */
			/*
			.jssorb05 div           (normal)
			.jssorb05 div:hover     (normal mouseover)
			.jssorb05 .av           (active)
			.jssorb05 .av:hover     (active mouseover)
			.jssorb05 .dn           (mousedown)
			*/
			.jssorb05 {
					position: absolute;
			}
			.jssorb05 div, .jssorb05 div:hover, .jssorb05 .av {
					position: absolute;
					/* size of bullet elment */
					width: 16px;
					height: 16px;
					background: url('images/b05.png') no-repeat;
					overflow: hidden;
					cursor: pointer;
			}
			.jssorb05 div { background-position: -7px -7px; }
			.jssorb05 div:hover, .jssorb05 .av:hover { background-position: -37px -7px; }
			.jssorb05 .av { background-position: -67px -7px; }
			.jssorb05 .dn, .jssorb05 .dn:hover { background-position: -97px -7px; }

			/* jssor slider arrow navigator skin 22 css */
			/*
			.jssora22l                  (normal)
			.jssora22r                  (normal)
			.jssora22l:hover            (normal mouseover)
			.jssora22r:hover            (normal mouseover)
			.jssora22l.jssora22ldn      (mousedown)
			.jssora22r.jssora22rdn      (mousedown)
			.jssora22l.jssora22lds      (disabled)
			.jssora22r.jssora22rds      (disabled)
			*/
			.jssora22l, .jssora22r {
					display: block;
					position: absolute;
					/* size of arrow element */
					width: 40px;
					height: 58px;
					cursor: pointer;
					background: url('images/a22.png') center center no-repeat;
					overflow: hidden;
			}
			.jssora22l { background-position: -10px -31px; }
			.jssora22r { background-position: -70px -31px; }
			.jssora22l:hover { background-position: -130px -31px; }
			.jssora22r:hover { background-position: -190px -31px; }
			.jssora22l.jssora22ldn { background-position: -250px -31px; }
			.jssora22r.jssora22rdn { background-position: -310px -31px; }
			.jssora22l.jssora22lds { background-position: -10px -31px; opacity: .3; pointer-events: none; }
			.jssora22r.jssora22rds { background-position: -70px -31px; opacity: .3; pointer-events: none; }
	</style>
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

				<section id="banner" class="chavagne">
					<div class="content">
						<p>Chavagne en paillers</p>
						</br>
						<p>Institut HARMONY </br> 102 r Gén de Gaulle – 85250 CHAVAGNES EN PAILLERS </br> Tel: 02 51 42 30 46 </br> Horaires d’ ouverture : </br> mardi,mercredi, jeudi et vendredi : 9h30 – 12h30  14h30 – 19h </br> samedi : 8h-13h </br> possibilité de  prendre rendez-vous entre 12h30 et 14h30
					</div>
				</section>

				<section id="banner" class="acceuil">
          <div id="jssor_1" style="position:relative;margin:0 auto;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;visibility:hidden;">
              <!-- Loading Screen -->
              <div data-u="loading" class="jssorl-oval" style="position:absolute;top:0px;left:0px;text-align:center;background-color:rgba(0,0,0,0.7);">
                  <img style="margin-top:-19.0px;position:relative;top:50%;width:38px;height:38px;" src="images/oval.svg" />
              </div>
              <div data-u="slides" style="cursor:default;position:relative;top:0px;left:0px;width:1500px;height:600px;overflow:hidden;">
                  <div>
                      <img data-u="image" src="images/android.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="images/windows.jpg" />
                  </div>
                  <div>
                      <img data-u="image" src="images/thumb.jpg" />
                  </div>
              </div>
              <!-- Bullet Navigator -->
              <div data-u="navigator" class="jssorb05" style="bottom:16px;right:16px;" data-autocenter="1">
                  <!-- bullet navigator item prototype -->
                  <div data-u="prototype" style="width:16px;height:16px;"></div>
              </div>
              <!-- Arrow Navigator -->
              <span data-u="arrowleft" class="jssora22l" style="top:0px;left:8px;width:40px;height:58px;" data-autocenter="2"></span>
              <span data-u="arrowright" class="jssora22r" style="top:0px;right:8px;width:40px;height:58px;" data-autocenter="2"></span>
          </div>
				</section>

				<section id="banner" class="acceuil">
					<div class="content">
						<header>
							<h2>Chavagnes en paillers</h2>
						</header>
					</div>
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
								<li><a href="#" id="menuchavagne">Chavagne en paillers</a></li>
								<li><a href="#" id="menugeorges">St Georges de Montaigu</a></li>
								<li><a href="#" id="menuessarts">Les essarts</a></li>
								<li><a href="#" id="menufulgent">St Fulgent</a></li>
							</ul>
						</li>
						<li><a href="#">Nos préstations</a></li>
						<li>
							<span class="opener">Tarif</span>
							<ul>
								<li><a href="#">Tarif aqualigne</a></li>
								<li><a href="#">tarif harmony et alyzé</a></li>
							</ul>
						</li>
						<li><a href="#">Actualité</a></li>
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
							<a href="#" class="image"><img src="images/pic07.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic08.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
						<article>
							<a href="#" class="image"><img src="images/pic09.jpg" alt="" /></a>
							<p>Aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore aliquam.</p>
						</article>
					</div>
					<ul class="actions">
						<li><a href="#" class="button">More</a></li>
					</ul>
				</section>

				<!-- Section -->
				<section>
					<header class="major">
						<h2>Get in touch</h2>
					</header>
					<p>Sed varius enim lorem ullamcorper dolore aliquam aenean ornare velit lacus, ac varius enim lorem ullamcorper dolore. Proin sed aliquam facilisis ante interdum. Sed nulla amet lorem feugiat tempus aliquam.</p>
					<ul class="contact">
						<li class="fa-envelope-o"><a href="#">information@untitled.tld</a></li>
						<li class="fa-phone">(000) 000-0000</li>
						<li class="fa-home">1234 Somewhere Road #8254<br /> Nashville, TN 00000-0000</li>
					</ul>
				</section>

				<!-- Footer -->
				<footer id="footer">
					<p class="copyright">&copy; Untitled. All rights reserved. Demo Images: <a href="https://unsplash.com">Unsplash</a>. Design: <a href="https://html5up.net">HTML5 UP</a>.</p>
				</footer>

			</div>
		</div>

	</div>

	<!-- Scripts -->
	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/skel.min.js"></script>
	<script src="assets/js/util.js"></script>
	<script src="assets/js/onglets.js"></script>
  <script src="assets/js/jssor.slider-22.2.16.mini.js" type="text/javascript"></script>
	<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
	<script src="assets/js/main.js"></script>

  <script type="text/javascript">
      jQuery(document).ready(function ($) {

          var jssor_1_options = {
            $AutoPlay: true,
            $SlideDuration: 800,
            $SlideEasing: $Jease$.$OutQuint,
            $ArrowNavigatorOptions: {
              $Class: $JssorArrowNavigator$
            },
            $BulletNavigatorOptions: {
              $Class: $JssorBulletNavigator$
            }
          };

          var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

          /*responsive code begin*/
          /*remove responsive code if you don't want the slider scales while window resizing*/
          function ScaleSlider() {
              var refSize = jssor_1_slider.$Elmt.parentNode.clientWidth;
              if (refSize) {
                  refSize = Math.min(refSize, 1920);
                  jssor_1_slider.$ScaleWidth(refSize);
              }
              else {
                  window.setTimeout(ScaleSlider, 30);
              }
          }
          ScaleSlider();
          $(window).bind("load", ScaleSlider);
          $(window).bind("resize", ScaleSlider);
          $(window).bind("orientationchange", ScaleSlider);
          /*responsive code end*/
      });
  </script>

</body>

</html>
