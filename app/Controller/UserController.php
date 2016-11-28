<?php

namespace Controller;

use Model\UtilisateursModel;

class UserController extends BaseController
{

	/**
	 * Cette fonction sert à afficher la liste des utilisateurs
	 */

	public function listUsers()
	{
		// $usersList = array (
		// 	'Googleman', 'Pausewoman', 'Pauseman', 'Roland');


		// Ici j'instancie depuis l'action du contrôleur un modèle d'utilisateurs pour accéder à la liste des utilisateurs
		$usersModel = new UtilisateursModel();

		$usersList = $usersModel->findAll();
	
		// Je transmets cette liste à ma vue : $file = chemin ; $data = données à transmettre
		// Cette ligne affiche la vue présente dans app/Views/users/list.php et y injecte le tableau '$usersList' sous un nouveau nom '$listUsers'
		$this->show('users/list', array('listUsers' => $usersList));
	}	

}