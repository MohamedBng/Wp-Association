<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial-scale=1.0">
	<?php wp_head() ?>
</head>
<body id="body">
	<header id="header">
	<div id="logo">
	<img src="http://localhost/wp_courGrafikart/wordpress/wp-content/uploads/2021/10/208107aaef594f30985d6ee6d44438a6.png">
	</div>
<nav class="navbar navbar-expand-lg navbar-dark " style="background-color: transparent;">
 <div class="container-fluid">
 <button style=" margin-bottom: 5%; border: 2px solid white;" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon" ></span>
    </button>
<?php wp_nav_menu([
    'menu' => 'header',
    'menu_class' => 'navbar-nav me-auto mb-2 mb-lg-0',
    'container_class' => 'collapse navbar-collapse',
]); ?>


	      <?= get_search_form() ?>
	    </div>
	  </div>

</nav>
<div id="texteHeader">
 <h1>Protection des animaux</h1>
 <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce ultricies facilisis diam quis dapibus. Morbi tristique ligula ut arcu cursus, a semper metus vestibulum. Morbi et ultricies massa.</p>
 </div>
 <div id="imgHeaderAndButton">
<button id="buttonDon">Faire un Don</button>
<p>Ou</p>
<button id="buttonBenevole">Bénévole</button>
</div>
</header>


