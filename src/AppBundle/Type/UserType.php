<?php

namespace AppBundle\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\CallbackTransformer;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\Extension\Core\Type\EmailType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;


class UserType extends AbstractType
{
	public function buildForm(FormBuilderInterface $builder, array $options)
	{
		$builder
			->add('fullname')
			->add('username', EmailType::class, array(
				'label' => 'Email'
			))
			->add('password', RepeatedType::class, array(
				'type' => PasswordType::class,
				'first_options' => ['label' => 'Password'],
				'second_options' => ['label' => 'Repeat Password'],
				'invalid_message' => 'The password fields must match'
			))
			->add('roles', TextType::class, ['label' => 'Roles (separated by ", ")'])
		;

		$builder->get('roles')
			->addModelTransformer(new CallbackTransformer(
				function($rolesAsArray)
				{
					if(!empty($rolesAsArray))
						return implode(', ', $rolesAsArray);
				},
				function($rolesAsString)
				{
					if(!empty($rolesAsString))
						return explode(', ', $rolesAsString);
				}
			))
		;

	}
}