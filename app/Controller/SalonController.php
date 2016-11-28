<?php

namespace Controller;

use Model\SalonsModel;
use Model\MessagesModel;

class SalonController extends BaseController
{

	/*
	* Cette action permet de voir la liste des messages d'un salon
	* @param int $id : id du salon dont je cherche à voir les messages
	*/

	public function seeSalon($id)
	{

		/* On instancie le modèle des salons de façon à récupérer les informations du salon dont l'id est $id (passé dans l'url).
		*/

		$salonsModel = new SalonsModel();
		$salon = $salonsModel->find($id);

		/* On instancie le modèle des messages de façon à récupérer les messages du salon dont l'id est $id.
		*/

		$messagesModel = new MessagesModel();

	// -----------------------------------------------------------------------------------------
		/*
		* J'utilise la méthode 'search' qui me permet d'exécuter la requête suivante :
		* SELECT * FROM messages WHERE id = $id OR nom = $nom
		* Cette méthode me renvoie l'équivalent d'un fetchAll(), c-a-d un tableau de tableaux
		*/
		// $messages = $messagesModel->search(array('id_salon'=>$id), 'OR', FALSE);

	// -----------------------------------------------------------------------------------------

		/*
		* j'utilise une méthode propre au modèle MessagesModel qui permet de récupérer 
		* les messages avec les infos utilisateur associées
		*/

		$messages = $messagesModel->searchAllWithUserInfos($id);

		$this->show('salons/see', array('salon' => $salon, 'messages' => $messages));
	}
}