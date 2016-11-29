<!DOCTYPE html>
<html lang="fr">
    <head>
        <title><?php echo $this->e($title);?></title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- $this->assetUrl('css/style.css') vaudra 'assets/css/style.css' -->
        <link rel="stylesheet" href="<?php echo $this->assetUrl('css/reset.css'); ?>" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $this->assetUrl('css/style.css'); ?>" type="text/css"/>
    </head>
	<body>
		<header>
    		<h1><?php echo $this->e($title); ?></h1>
		</header>
		
		<aside>
			<h3><a href="<?php echo $this->url('default_home') ?>" title="Revenir à l'accueil">Les salons</a></h3>
			<nav>
			    <ul id="menu-salons">
			    	<!-- On parcourt les noms des salons pour afficher me menu -->
					<?php foreach ($salons as $salon) : ?>
						<!-- ici $salon est équivalent à $salons[$i] dans la boucle for -->
						<!-- mon href va pointer vers une nouvelle page (salon.php)
						   dans laquelle je vais pouvoir récupérer ma variable "id" 
							grâce à $_GET['id']
						-->
						<li> <a href="<?php echo $this->url('see_salon', array('id'=>$salon['id']))?>"><?php echo $this->e($salon['nom']); ?></a></li>
					<?php endforeach; ?>
			    	<li><a href="<?php echo $this->url('default_home') ?>" title="Revenir à l'accueil">Retour à l'accueil</a></li>
			    	<li><a href="<?php echo $this->url('users_list')?>" title="Liste des utilisateurs">Liste des utilisateurs</a>
			    	</li>
			    	<li><a href="<?php echo $this->url('logout'); ?>" title="Se déconnecter de T'Chat">Déconnexion</a>
			    	</li>
			    </ul>			
			</nav>
		</aside><main>

			<section>
				<?= $this->section('main_content') ?>
			</section>
		</main>

		<footer>
		</footer>
	</body>
</html>