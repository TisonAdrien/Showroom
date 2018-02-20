<?php

namespace AppBundle\Security\Authorization;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use AppBundle\Entity\Show;

class ShowVoter extends Voter
{
	// Détermine si l'utilisateur à le droit de modifier/supprimer un Show
	public function voteOnAttribute($attribute, $subject, TokenInterface $token)
	{
		//Récupérer l'utilisateur
		$user = $token->getUser();
		//Récupérer le show
		$show = $subject;
		//Si l'auteur du show est l'utilisateur courant on renvoie True sinon je retourne False
		if($show->getAuthor() === $user)
			return True;
		else
			return False;
	}

	// Détermine si les attributs sont bien du type attendu
	public function supports($attribute, $subject)
	{
		if($subject instanceof Show)
			return True;
		else
			return False;
	}
}