<?php

namespace Pixers\SalesManagoApiBundle\DependencyInjection;

use Symfony\Component\Config\Definition\Builder\TreeBuilder;
use Symfony\Component\Config\Definition\ConfigurationInterface;

/**
 * Configuration
 *
 * @author Michał Kanak <kanakmichal@gmail.com>
 * @copyright 2016 PIXERS Ltd
 */
class Configuration implements ConfigurationInterface
{
    /**
     * {@inheritdoc}
     */
    public function getConfigTreeBuilder()
    {
        $treeBuilder = new TreeBuilder();
        $rootNode = $treeBuilder->root('pixers_sales_manago_api')
            ->children()
                ->scalarNode('client_id')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('endpoint')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('api_secret')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('api_key')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('owner')->isRequired()->cannotBeEmpty()->end()
                ->scalarNode('guzzle_client')->cannotBeEmpty()->end()
            ->end();

        return $treeBuilder;
    }
}