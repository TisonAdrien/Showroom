<?php

namespace AppBundle\Security\Authorization;

use Symfony\Component\Security\Core\Authorization\Voter\Voter;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use AppBundle\Entity\User;

class UserVoter extends Voter
{
	const ROLE_ADMIN = 'ROLE_ADMIN';

	// Détermine si l'utilisateur à le droit de modifier/supprimer un Show
	public function voteOnAttribute($attribute, $subject, TokenInterface $token)
	{
		$user = $token->getUser();
		if(!$user instanceof User)
			return False;
		//Si l'utilisateur a le role admin "ROLE_ADMIN" revoie True sinon False
		if(self::ROLE_ADMIN === $attribute && in_array(self::ROLE_ADMIN, $user->getRoles()))
			return True;
		else
			return False;
	}

	// Détermine si les attributs sont bien du type attendu
	public function supports($attribute, $subject)
	{
		if($attribute != self::ROLE_ADMIN)
			return True;
		else
			return False;
	}
}