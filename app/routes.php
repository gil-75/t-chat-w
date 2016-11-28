<?php
	
	//  Quand on essaie d'accéder à 'localhost/t-chat/public/'
	//  l'url réellement reçue est : 'localhost/t-chat/index.php/'

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/test', 'Test#monAction', 'test_index'],
		['GET', '/users', 'User#listUsers', 'users_list'],
		['GET|POST', '/salon/[i:id]', 'Salon#seeSalon', 'see_salon']
	);

