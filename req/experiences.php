<section class="bloc" id="experiences">
	<div class="bloc-title">
		<h2>Expériences</h2>
	</div>

	<p class="infos">&#8595; Cliquez sur les bulles pour plus de détails &#8595;</p>
	
	<section class="timeline">
  		<ul>
		    <li>
		      <div class="open-modal" data-open="modal1">
		        <time>Décembre 2018 - Mars 2019</time>
		        <p>
	    			Projet fil-rouge 1ère année (Webstart)
				</p>
		      </div>
		    </li>
		    <li>
		    	<div class="open-modal" data-open="modal2">
		    		<time>Mars 2019 - Mai 2019</time>
		    		<p>
	    				Stage chez Willow Création
					</p>
		    	</div>
		    </li>
		</ul>
	</section>

	<div class="modal" id="modal1">
		<div class="modal-dialog">
		    <div class="modal-header">
		      <h3>Projet fil-rouge 1ère année (Webstart)</h3>
		      <button class="close-modal" aria-label="close modal" data-close>
		        ✕  
		      </button>
		    </div>
		    <div class="modal-content">
		      <p>Réalisation d’un projet de groupe à l’école Webstart (année 2018-2019) consistant à développer une plate-forme de dropshipping.</p>

		      <h4>Compétences développées</h4>
		      <ul>
		      	<li>Intégration d’une page selon une maquette</li>
		      	<li>Responsive</li>
		      	<li>Utilisation de JS pour afficher un contenu de page différent selon un bouton appuyé</li>
		      	<li>Mise en ligne du site avec FileZilla</li>
		      </ul>

		      <h4>Actions menées</h4>
		      <ul>
		      	<li>Recherches sur les plugins utiles pour le dropshipping</li>
		      	<li>Intégration de la maquette de la page d’accueil produite par les UX-UI designers</li>
		      	<li>Explication écrite et orale des outils utilisés</li>
		      </ul>

		      <h4>Environnements techniques</h4>
		      <p>Windows, SublimeText, WAMP, FileZilla, navigateurs Internet.</p>
		    </div>
		  </div>
	</div>

	<div class="modal" id="modal2">
	  <div class="modal-dialog">
	    <div class="modal-header">
	      <h3>Stage chez Willow Création</h3>
	      <button class="close-modal" aria-label="close modal" data-close>
	        ✕  
	      </button>
	    </div>
	    <div class="modal-content">
	      <p>Stage chez Willow Création pendant 2 mois (du 18/03/2019 au 17/05/2019).</p>

	      <h4>Compétences développées</h4>
	      <ul>
	      	<li>Intégration de pages selon une maquette Photoshop</li>
	      	<li>Responsive des pages</li>
	      	<li>Wordpress : création et utilisation d’ACF, rédaction d’articles, création de modèles de page</li>
	      	<li>Utilisation des frameworks Symfony et Materialize</li>
	      	<li>Mise en ligne d’un site avec Phpstorm</li>
	      	<li>Utilisation de Phpstorm</li>
	      	<li>Utilisation de GIT (récupération de projet, commit/push…)</li>
	      	<li>Utilisation de Woocommerce</li>
	      	<li>Utilisation de JS pour modifier des autorisations dans un formulaire</li>
	      	<li>Utilisation de Slick pour produire des sliders</li>
	      </ul>

	      <h4>Actions menées</h4>
	      <ul>
	      	<li>Intégration de pages et changement de contenu selon la langue pour IKKS</li>
	      	<li>Changement de la couleur principale pour la version pro de Amsterdam Air</li>
	      	<li>Responsive du site pour IBC (Ingénierie Bois Construction)</li>
	      	<li>Refonte du header et du footer, intégration et affichage des commentaires laissés sur le site sur une page, affichage des 5 derniers commentaires sur un slider sur la page d’accueil pour Vita Confort</li>
	      	<li>Intégration d’une page 404 pour Accior</li>
	      	<li>Ajout de sliders et changement des dispositions de la page d’accueil pour Esprit Jardin</li>
	      	<li>Intégration d’une page 404 et produit responsive pour C2 Loisirs</li>
	      	<li>Intégration d’une page 404, ajout d’un slider, affichage de la description des catégories de produit, ajout d’un menu latéral, affichage des derniers produits sur un slider pour CPL (Compagnie Portugaise des Lièges)</li>
	      	<li>Intégration d’une page de maintenance pour Willow</li>
	      	<li>Passage de la version 0.100 à la 1.00 du framework Materialize pour le manager de Willow</li>
	      	<li>Conception d’un configurateur pour créer des portes pour Menuiseries Elva</li>
	      </ul>

	      <h4>Environnements techniques</h4>
	      <p>Windows, Phpstorm, WAMP, Koala, navigateurs Internet, Wordpress, Photoshop.</p>
	    </div>
	  </div>
	</div>
	
</section>

<!-- TIMELINE -->
<script type="text/javascript">
	(function() {

		'use strict';

		// define variables
		var items = document.querySelectorAll(".timeline li");

		// check if an element is in viewport
		// http://stackoverflow.com/questions/123999/how-to-tell-if-a-dom-element-is-visible-in-the-current-viewport
		function isElementInViewport(el) {
		var rect = el.getBoundingClientRect();
		return (
		  rect.top >= 0 &&
		  rect.left >= 0 &&
		  rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
		  rect.right <= (window.innerWidth || document.documentElement.clientWidth)
		);
		}

		function callbackFunc() {
		for (var i = 0; i < items.length; i++) {
		  if (isElementInViewport(items[i])) {
		    items[i].classList.add("in-view");
		  }
		}
		}

		// listen for events
		window.addEventListener("load", callbackFunc);
		window.addEventListener("resize", callbackFunc);
		window.addEventListener("scroll", callbackFunc);

	})();
</script>

<!-- MODALS-->
<script type="text/javascript">
	const openEls = document.querySelectorAll("[data-open]");
	const closeEls = document.querySelectorAll("[data-close]");
	const isVisible = "is-visible";

	for (const el of openEls) {
	  el.addEventListener("click", function() {
	    const modalId = this.dataset.open;
	    document.getElementById(modalId).classList.add(isVisible);
	  });
	}

	for (const el of closeEls) {
	  el.addEventListener("click", function() {
	    this.parentElement.parentElement.parentElement.classList.remove(isVisible);
	  });
	}

	document.addEventListener("click", e => {
	  if (e.target == document.querySelector(".modal.is-visible")) {
	    document.querySelector(".modal.is-visible").classList.remove(isVisible);
	  }
	});

	document.addEventListener("keyup", e => {
	  // if we press the ESC
	  if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
	    document.querySelector(".modal.is-visible").classList.remove(isVisible);
	  }
	});
</script>