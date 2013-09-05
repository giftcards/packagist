<?php

namespace Omni\WebBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * This is the class that validates and merges configuration from your app/config files
 *
 * To learn more see {@link http://symfony.com/doc/current/cookbook/bundles/extension.html#cookbook-bundles-extension-config-class}
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritDoc}
     */
    public function getConfigTreeBuilder()
    {
        $validation = array(
            'protocol' => array(
                'http',
                'https',
                'ssh',
            ),
        );
        
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('stash');

        $rootNode
            ->children()
                ->scalarNode('protocol')
                    ->validate()
    					->ifNotInArray($validation['protocol'])
    						->thenInvalid('Invalid protocol %s')
    					->end()
					->defaultValue('http')
					->info('Configures the protocol used to communicate with Stash.')
					->example('http')
                ->end()
                ->scalarNode('domain')
                    ->defaultValue('stash.localhost')
                    ->info('Domain that Stash uses.')
                    ->example('stash.localhost')
                ->end()
            ->end()
        ;

        return $treeBuilder;
    }
}
