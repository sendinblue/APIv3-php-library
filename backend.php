<?php
/* Indiquez le chemin du dossier vers lequel vous avez stocké l'API Sendinblue */	
require_once('./APIv3-php-library-master/autoload.php')
/* Remplacez ici l'ID de liste par l'ID de la vôtre */	
$list_id = "#2";
/* Renseignez ici votre CLÉ API */	
$API_key = "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";

/*///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                                     NE PAS MODIFIER SOUS CETTE LIGNE
///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////*/

/* Connexion à Sendinblue */
SendinBlue\Client\Configuration::getDefaultConfiguration()->setApiKey('api-key', $API_key);
$api_instance = new SendinBlue\Client\Api\ContactsApi();

/* L'API SendinBlue est générée par la version 2.2.3 de swagger-codegen, qui renvoit par erreur un objet protégé sur la fonction getContactsFromList.
La fonction ci-dessous permet de dupliquer cet objet et de rendre publique la copie pour pouvoir y accéder.
Le souci a été réglé dans la version 2.3 de swagger-codegen, cf. GitHub : https://github.com/swagger-api/swagger-codegen/issues/6777 */ 
function _r($o){
	$obj  = new ReflectionObject($o);
	$r_obj = $obj->getProperty('container');
	$r_obj->setAccessible(TRUE);
	return $r_obj->getValue($o);
}

//////////////////////////////////////////////////////* LE SCRIPT EN LUI-MÊME //////////////////////////////////////////////////////*/

/* Si une adresse de parrain a bien été spécifiée... */
if( isset($_POST['parrain']) ){


	/* On récupère les informations des contacts de la liste */
	$modifiedSince = new \DateTime("2013-10-20T19:20:30+01:00"); // On choisit une date minimale d'enregistrement lointaine
	$limit = 500; // On définit le nombre maximum d'utilisateurs retournés à 500
	$offset = 0; // On définit le numéro du premier contact à 0
	try { $list_contacts = $api_instance->getContactsFromList($list_id, $modifiedSince, $limit, $offset); } catch (Exception $e) { echo "Erreur lors de la récupération des contacts de la liste"; die(); }
	
	/* On créé un tableau contenant les emails de cette liste */
	$list_emails = array();
	foreach(_r($list_contacts)["contacts"] as $c => $p){ $list_emails[] = $p["email"]; }

	/* On recupère les données du parrain... */
	$parrain_email = $_POST['parrain'];	
	
	/* ...et on vérifie s'il existe dans la liste Sendinblue */
	if( in_array($parrain_email, $list_emails) ){
		
		/* Si une adresse à inviter a bien été spécifiée... */
		if( isset($_POST['invite']) ){
			/* ...on recupère les données de l'invité... */
			$invite_email = $_POST['invite'];

			/* 
			Si l'adresse email de l'invité existe dans la liste Sendinblue,
			cela veut dire qu'elle a déjà été invitée, 
			on stoppe donc le processus. 
			*/
			if( in_array($invite_email, $list_emails) ){ echo "Cette personne a d&eacute;j&agrave; &eacute;t&eacute; invit&eacute;e"; die(); }
					
			/* On récupère les attributs du parrain */		
			try {
				$parrain_data = $api_instance->getContactInfo($parrain_email);
			
				/* ...On ajoute l'invité à la liste en spécifiant l'email de son parrain */
				$invite_create = array( 
					"email" => $invite_email,
					"attributes" => array("REF"=>$parrain_email), 				
					"listIds" => array($list_id)  
				);				
				try { $api_instance->createContact($invite_create); } catch (Exception $e) { echo "L'enregistrement de l'adresse email &agrave; inviter a &eacute;chou&eacute; : ", $e->getMessage(), PHP_EOL; die(); }
		
				/* On récupère le nombre de parrainages que le parrain a déjà effectués... */
				$parrain_data_PAR = _r($parrain_data)["attributes"]["PAR"];			
				if( !is_numeric($parrain_data_PAR) ) { $parrain_data_PAR = 0; }
				
				/*... et on l'incrémente de 1 */		
				$parrain_update = array( "attributes" => array("PAR"=>$parrain_data_PAR+1) );
				try { $api_instance->updateContact($parrain_email, $parrain_update); } catch (Exception $e) { echo "La mise &agrave; jour du nombre de parrainages a &eacute;chou&eacute; : ", $e->getMessage(), PHP_EOL; die(); }
							
			/*
			Si n'a pas réussi à récupérer les données du parrain dans la liste Sendinblue...
			*/		
			} catch (Exception $e) { echo "Erreur lors de la r&eacute;cup&eacute;ration des donn&eacute;es du parrain : ", $e->getMessage(), PHP_EOL; die(); }
		}
		else { echo "Aucun email à inviter n'a &eacute;t&eacute; sp&eacute;cifi&eacute;."; die(); }
	}
	else { echo "Cette adresse de parrainage n'existe pas."; die(); }
}
else { echo "Aucun email de parrain n'a &eacute;t&eacute; sp&eacute;cifi&eacute;."; die(); }

echo $invite_email." a &eacute;t&eacute; invit&eacute; avec succ&egrave;s !" 

?>
