<?php
namespace AppBundle\DependencyInjection;

use AppBundle\ShowFinder\ShowFinder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Reference;

class ShowFinderCompilerPass implements CompilerPassInterface
{
	public function process(ContainerBuilder $container)
	{
		// Récupérer la définition du service ShowFinder afin de lui ajouter les services taggués plus bas
		$showFinderDefinition = $container->findDefinition(ShowFinder::class);
		// Récupérer tous les noms des services (appelé id dans Symfony) ayant comme tag 'show.finder'
		$showFinderTaggedServices = $container->findTaggedServiceIds('show.finder');
		// Pour tous les id de services ayant pour tag 'show.finder'
		foreach ($showFinderTaggedServices as $showFinderTaggedServiceId => $showFinderTaggedService) {
			//Créer une référence (représentation d'un service dans Symfony) à partir de l'id du service
			$service = new Reference($showFinderTaggedServiceId);
			//Appel de la method addFinder sur le service ShowFinder afin d'y injecter le service taggué
			$showFinderDefinition->addMethodCall('addFinder', [$service]);
		}
	}
}