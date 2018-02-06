<?php

namespace AppBundle\Type;


use Doctrine\ORM\EntityRepository;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\CountryType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\FormBuilderInterface;

class ShowType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $now = new \DateTime();
        $year = $now->format("Y");
        $builder
            ->add('name')
            ->add('category', EntityType::class, array(
                'class' => 'AppBundle:Category',
                'query_builder' => function(EntityRepository $er)
                {
                    return $er->createQueryBuilder('c')->orderBy('c.name', 'ASC');
                },
                'choice_label' => 'name',
                'expanded' => false, // Radio button - check box
                'multiple' => false, // Selection multiple
                'placeholder' => 'Choose the category'
            ))
            ->add('abstract', TextareaType::class)
            ->add('country',CountryType::class, array('preferred_choices' => 'FR'))
            ->add('author')
            ->add('releaseDate', DateType::class, array(
                'years' => range($year -10,$year +2)
            ))
            ->add('tmpPicture', FileType::class, array(
                'label' => 'Main picture'
            ))
        ;
    }
}