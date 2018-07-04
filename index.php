<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Portfolio de Elodie Pullara, développeuse web junior en Alsace" />
	<meta name="keywords" content="developpeur web, web developper, portfolio, front end developper, developpeur front end, back end developper, Elodie Pullara, Alsace, php, cv"/>
	<meta name="Content-Language" content="fr">
    <meta name="author" content="Elodie Pullara"/>
    <meta name="Copyright" content="Elodie Pullara">
    <meta name="Category" content="portfolio développeuse web">
    <title>Elodie Pullara - Portfolio</title>

    <link rel="icon" type="image/png" href="./img/space-iconeok.png"/>

	<!--****** lien UIKit css ******-->
	<link rel="stylesheet" type="text/css" href="./uikit/css/uikit.min.css">
	<link rel="stylesheet" type="text/css" href="./uikit/css/uikit-my-customs.css">
	<link rel="stylesheet" type="text/css" href="./uikit/css/uikit-ok.css">
	<link rel="stylesheet" type="text/css" href="./uikit/css/components/slidenav.min.css">
	<link rel="stylesheet" type="text/css" href="./uikit/css/components/slidenav.gradient.min.css">
	
	<!--****** lien google font ******-->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,200,300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Dancing+Script" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Iceland" rel="stylesheet">

	<!--****** lien custom css ******-->
	<link rel="stylesheet" type="text/css" href="./css/custom.css">

</head>
<body>

<!--********************* Début du HEADER *********************-->
	<header id="header">
		<nav class="uk-navbar uk-flex" data-uk-sticky>
			<!--<a href="" class="uk-navbar-brand">...</a>-->
			<a href="#offcanvas-nav" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas></a>
			<div class="uk-container uk-container-center uk-contrast">
				<ul class="uk-navbar-nav uk-hidden-small uk-flex-center">
					<li><a href="#portfolio" data-uk-smooth-scroll="{offset: 90}">Portfolio</a></li>
					<li><a href="#photos" data-uk-smooth-scroll="{offset: 90}">Photos</a></li>
					<li><a href="#aPropos" data-uk-smooth-scroll="{offset: 40}">A propos</a></li>
					<li><a href="#competences" data-uk-smooth-scroll="{offset: 90}">Compétences</a></li>
					<li><a href="#contact" data-uk-smooth-scroll="{offset: 60}">Contact</a></li>
				</ul>
				<!--<div class="uk-navbar-content">...</div>-->
				<div class="uk-navbar-content uk-navbar-center uk-visible-small"></div>
			</div>
		</nav>

		<div id="offcanvas-nav" class="uk-offcanvas">
			<div class="uk-offcanvas-bar">
				<ul class="uk-nav uk-nav-offcanvas" data-uk-nav>
					<li><a href="#portfolio" data-uk-smooth-scroll="{offset: 60}">Portfolio</a></li>
					<!--<li><a href="">Photos</a></li>-->
					<li><a href="#aPropos" data-uk-smooth-scroll="{offset: 40}">A propos</a></li>
					<li><a href="#competences" data-uk-smooth-scroll="{offset: 60}">Compétences</a></li>
					<li><a href="#contact" data-uk-smooth-scroll="{offset: 60}">Contact</a></li>
				</ul>
			</div>
		</div>
		
		<div class="header" data-uk-parallax="{bg: '-400'}">
			<div class="uk-hidden-small" id="fix">
				<!--<img id="vaisseau" src="./img/space-fighter.png">-->
				<a href="https://www.facebook.com/elodie.pullara" target="_blank">
					<img class="iconef" src="./img/icone/facebook.png">
				</a>
				<div>
					<a href="https://twitter.com/Alexiel68" target="_blank">
						<img class="iconet" src="./img/icone/twitter.png">
					</a>
				</div>
			</div>
			<div class="vaisseau">
				<img id="vaisseau" src="./img/space-fighter.png" data-parallax='{"x": 500, "from-scroll": 80, "distance": 0}' data-parallax2='{"y": 4500, "from-scroll": 10, "distance": 0, "smoothness": 300}'>
			
				<div id="titre" class="header-inner">
					<h1 class="elo" data-uk-parallax="{y: '-200'}">Elodie Pullara</h1>
					<h2 data-uk-parallax="{y: '-200'}">Développeuse Web, Classe Padawan</h2>
						<div id="ContactButton" style="text-align:center;" data-uk-parallax="{y: '-200'}">
							<a href="#contact" data-uk-smooth-scroll="{offset: 60}">
							<input class="buttonContact" type="submit" name="envoi" value="Contactez-moi !" />
						</a>
						<a href="./img/cv-Elodie-Pullara.pdf" class="buttonCv" target="_blank">
							>>> Mon C.V. ! <<<
						</a>
						</div>
					
				</div>
			</div>
		</div>
	</header>
<!--********************* Fin du HEADER *********************-->

<!--********************* Début Div PORTFOLIO *********************-->
	<div class="divRef uk-block uk-contrast">
		<div class="uk-container uk-container-center">
			<h1 id="portfolio">Portfolio</h1>
			<!-- package -->
			<div class="uk-grid">
				<div class="uk-width-medium-1-3">
					<div id="panel" class="uk-panel uk-panel-box uk-margin-large-top">
						<div class="uk-panel-teaser">
							<img src="./img/projets/mymeetic.png" width="500px" height="300px">
						</div>
						<h3 id="h3Portfolio" class="uk-panel-title">Projet 1</h3>
						<p>
							My Meetic
						</p>
						<p>
								<a href="#projet1" class="uk-button uk-button-primary uk-button-large" data-uk-modal>Voir plus !</a>

								<div id="projet1" class="uk-modal">
									<div class="titreModal uk-modal-dialog">
										<a class="uk-modal-close uk-close"></a>
										<div class="uk-modal-header">
											<h2 style="color:inherit;">Projet My Meetic</h2>
										</div>
										<p>Un projet codé en PHP, router maison, travail en groupe</p>
										<img src="./img/projets/mymeetic.png">
										<div class="uk-modal-footer uk-text-right">
											<button class="buttonContact uk-button uk-modal-close">Fermer</button>
										</div>
									</div>
								</div>
						</p>
					</div>
				</div>

				<div class="uk-width-medium-1-3">
					<div id="panel" class="uk-panel uk-panel-box uk-margin-large-top">
						<div class="uk-panel-teaser">
							<img src="./img/projets/tweeter/connexion.png" width="500px" height="300px">
						</div>
						<h3 id="h3Portfolio" class="uk-panel-title">Projet 2</h3>
							<p>
								My Tweeter
							</p>
						<p>
							<a href="#projet2" class="uk-button uk-button-primary uk-button-large" data-uk-modal>Voir plus !</a>

							<div id="projet2" class="uk-modal">
									<div class="titreModal uk-modal-dialog">
										<a class="uk-modal-close uk-close"></a>
										<div class="uk-modal-header">
											<h2 style="color:inherit;">Projet My Tweeter</h2>
										</div>
										<p>Un projet codé en PHP, bootstrap ...</p>
										<div class="uk-overflow-container">
											<img src="./img/projets/tweeter/connexion.png"><br/>
											<img src="./img/projets/tweeter/index.png"><br/>
											<img src="./img/projets/tweeter/profil.png"><br/>
											<img src="./img/projets/tweeter/editprofil.png"><br/>
										</div>
										<div class="uk-modal-footer uk-text-right">
											<button class="buttonContact uk-button uk-modal-close">Fermer</button>
										</div>
									</div>
							</div>
						</p>
					</div>
				</div>

				<div class="uk-width-medium-1-3">
					<div id="panel" class="uk-panel uk-panel-box uk-margin-large-top">
						<div class="uk-panel-teaser">
							<img src="./img/projets/piephp/piephp.png" width="500px" height="300px">
						</div>
						<h3 id="h3Portfolio" class="uk-panel-title">Projet 3</h3>
						<p>
							PiePHP
						</p>
						<p>
							<a href="#projet3" class="uk-button uk-button-primary uk-button-large" data-uk-modal>Voir plus !</a>

							<div id="projet3" class="uk-modal">
									<div class="titreModal uk-modal-dialog">
										<a class="uk-modal-close uk-close"></a>
										<div class="uk-modal-header">
											<h2 style="color:inherit;">Projet PiePHP</h2>
										</div>
										<p>Un projet codé en PHP, bootstrap ...</p>

										<div class="uk-overflow-container">
											<img src="./img/projets/piephp/inscription.png"><br/>
											<img src="./img/projets/piephp/piephp.png"><br/>
										</div>

										<div class="uk-modal-footer uk-text-right">
											<button class="buttonContact uk-button uk-modal-close">Fermer</button>
										</div>
									</div>
							</div>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
<!--********************* Fin Div PORTFOLIO *********************-->

	<!--****************** Début Div Parallax ******************-->
					<div class="second-parallax" data-uk-parallax="{bg: '-400'}">

					</div>
	<!--****************** Fin Div parallax ******************-->

<!--********************* Début Div Photos *********************-->
	<div class="divRef uk-block uk-hidden-small">
		
			<div class="uk-container uk-container-center">
			<h1 id="photos">Photos</h1>
				<div id="photocarou" class="uk-grid uk-margin-large-top">
			
					<div class="uk-grid uk-margin-large-top" style="margin-left: 70px">
					    <div class="carousel">
						  <img src="./img/photo/bourdon.jpg" width="600px" height="350px" alt="Image 1, bourdon" />
						  <img src="./img/photo/voiture.jpg" width="600px" height="350px" alt="Image 2, voiture" />
						  <img src="./img/photo/goutte.jpg" width="600px" height="350px" alt="Image 3, goutte" />
						  <img src="./img/photo/edward.jpg" width="600px" height="350px" alt="Image 4, edward aux mains d'argent" />
						  <img src="./img/photo/papillon.jpg" width="600px" height="350px" alt="Image 5, papillon" />
						  <img src="./img/photo/paysage.jpg" width="600px" height="350px" alt="Image 6, paysage" />
						  <img src="./img/photo/butterfly.jpg" width="600px" height="350px" alt="Image 7, papillon" />
						  <img src="./img/photo/feuillegoutte.jpg" width="600px" height="350px" alt="Image 8, feuille et gouttes" />
						  <img src="./img/photo/rosee.jpg" width="600px" height="350px" alt="Image 9, rosée du matin" />
						</div>
					</div>
				</div>
			
		</div>
	</div>
<!--********************* Fin Div Photos *********************-->

	<!--****************** Début Div A propos ******************-->
	<div class="second-parallax2" data-uk-parallax="{bg: '-400'}">
		<h1 id="aPropos" style="padding-top: 70px; margin-bottom: -20px;">à propos</h1>
		<div class="test">
		<div class="divApropos">
			<div class="uk-block uk-container uk-margin-large-top">
				<div class="parag uk-grid" style="margin-left: 22px; margin-top: 48px; font-weight: 500">
					<p>
					Bonjour, je m'appelle &Eacute;lodie, et je suis actuellement en formation Développeur Intégrateur Web au sein de la Web@académie, à Strasbourg.
					</p>
					<p>
					Je suis issue d'une formation d'infographiste en Multimédia ou j'ai appris à maîtriser les logiciels de la suite Adobe.
					</p>
					<p>
					Curieuse et passionnée par les nouvelles technologies, ma reconversion dans le développement web me permet aujourd'hui d'exprimer ma créativité.
					</p>
					<p>
					J'apprécie particulièrement la découverte et l'apprentissage de nouveaux languages.
					</p>
					<p>
					J'aime travailler sur des projets variés, et j'aime aussi beaucoup travailler en équipe.
					</p>
					<p>
					Je pratique aussi la photographie (beaucoup beaucoup), le dessin, la peinture, ...
					</p>
				</div>
			</div>
		</div>
		<div class="divApropos">
			<div class="uk-block uk-container uk-margin-large-top">
				<div class="uk-grid uk-margin-large-top">
					<img id="elophoto" src="./img/elo.jpg">
				</div>
			</div>
		</div>
	</div>
	</div>
	<!--****************** Fin Div A propos ******************-->

<!--********************* Début Div Compétences *********************-->
	<div class="divRef uk-block uk-contrast">
		<div class="uk-container uk-container-center">
			<h1 id="competences">Compétences</h1>
			<div class="uk-grid uk-margin-large-top">
				<!-- circle bar -->
		      	<div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Html 5</h2>
			        <svg class="radial-progress" data-percentage="76" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">76%</text>
			        </svg>
			    </div>
			      
			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Css 3</h2>
			        <svg class="radial-progress" data-percentage="85" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 147.3406954533613;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Javascript</h2>
			        <svg class="radial-progress" data-percentage="68" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 63.774330867872806;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">68%</text>
			        </svg>
			    </div>
			      
			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Php</h2>
			        <svg class="radial-progress" data-percentage="51" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 167.13272917097697;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">51%</text>
			        </svg>
			    </div>
			      
			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Symfony</h2>
			        <svg class="radial-progress" data-percentage="52" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 0;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">52%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Laravel</h2>
			        <svg class="radial-progress" data-percentage="36" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 219.91148575129;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">36%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Wordpress</h2>
			        <svg class="radial-progress" data-percentage="68" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 219.91148575129;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">68%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Prestashop</h2>
			        <svg class="radial-progress" data-percentage="49" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 219.91148575129;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">49%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Illustrator</h2>
			        <svg class="radial-progress" data-percentage="78" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 219.91148575129;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">78%</text>
			        </svg>
			    </div>

			    <div class="uk-width-medium-1-5 uk-width-small-1-2">
		      		<h2>Photoshop</h2>
			        <svg class="radial-progress" data-percentage="87" viewBox="0 0 80 80">
			            <circle class="incomplete" cx="40" cy="40" r="35"></circle>
			            <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 219.91148575129;"></circle>
			            <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">87%</text>
			        </svg>
			    </div>

		    </div>
	    </div>
	</div>
<!--********************* Fin Div Compétences *********************-->

	<!--****************** Début Div Parallax ******************-->
					<div class="second-parallax" data-uk-parallax="{bg: '-400'}">

					</div>
	<!--****************** Fin Div parallax ******************-->

<!--********************* Début Div Contact *********************-->
	<div class="divRef uk-block uk-contrast">
		<div class="uk-container uk-container-center">
			<h1 id="contact">Contact</h1>

				<form method="post" action="https://formspree.io/elodiepullara@gmail.com">

						<fieldset><legend> Vos coordonnées : </legend>
							<p><input type="text" id="nom" name="nom" placeholder="Nom" tabindex="1"/></p>
							<p><input type="text" id="email" name="email" placeholder="Email" tabindex="2" /></p>
						</fieldset>
 
						<fieldset><legend> Votre message : </legend>
							<p><input type="text" id="objet" name="objet" placeholder="Objet" tabindex="3" /></p>
							<p><textarea id="message" name="message" placeholder="Message" tabindex="4" cols="30" rows="8"></textarea></p>
						</fieldset>
 
						<div id="formButton" style="text-align:center;"><input id="button" type="submit" name="envoi" value="Envoyer le formulaire !" /></div>

				</form>

			<img id="vaisseau" src="./img/space-fighter-haut.png" data-uk-smooth-scroll="{offset: 90}" style="height: 60px; width: auto; text-align: center;">

		</div>
	</div>
	</div>
<!--********************* Fin Div Contact *********************-->

<!--********************* Debut du FOOTER *********************-->
	<footer class="pad-footer uk-block uk-block-secondary uk-contrast">
		<div class="uk-container uk-container-center">
			<div class="uk-grid">
				<div class="uk-width-1-2">
					<a href="https://twitter.com/Alexiel68" target="_blank"><i class="icones uk-icon-twitter"></i></a>
					<a href="https://www.facebook.com/elodie.pullara" target="_blank"><i class="icones uk-icon-facebook"></i></a>
					<a href="#"><i class="uk-icon-linkedin"></i></a>
				</div>
				<div class="uk-width-1-2 uk-text-right">
					&copy; Copyright <span id="eloFooter">Elodie Pullara</span> 2018
				</div>
			</div>
		</div>	
	</footer>
<!--********************* Fin du FOOTER *********************-->

	<!-- lien JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="./js/jquery-2.1.3.min.js"></script>
	<script src="./js/jquery.easing.1.3.js"></script>
	<script src="./js/jquery.parallax-scroll.js"></script>

	<!-- lien UIKit js-->
	<script type="text/javascript" src="./uikit/js/uikit.min.js"></script>
	<script type="text/javascript" src="./uikit/js/components/parallax.min.js"></script>
	<script type="text/javascript" src="./uikit/js/components/sticky.min.js"></script>
	<script type="text/javascript" src="./uikit/js/components/lightbox.min.js"></script>
	<script type="text/javascript" src="./uikit/js/components/slider.min.js"></script>

	<!-- lien Javascript -->
	<script type="text/javascript" src="./js/circle-bar.js"></script>
	<script type="text/javascript" src="./js/carousel.js"></script>
</body>
</html>