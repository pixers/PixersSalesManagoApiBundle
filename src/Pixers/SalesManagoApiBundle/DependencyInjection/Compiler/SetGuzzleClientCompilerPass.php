<?php

namespace Pixers\SalesManagoApiBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\Reference;

/**
 * SetGuzzleClientCompilerPass
 *
 * @author Michał Kanak <kanakmichal@gmail.com>
 * @copyright 2016 PIXERS Ltd
 */
class SetGuzzleClientCompilerPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!isset($container->getParameter('pixers_salesmanago_api')['guzzle_client'])) {
            return;
        }

        $salesManagoClient = $container->findDefinition('pixers_salesmanago.client');
        $salesManagoClient->addMethodCall(
            'setGuzzleClient',
            [new Reference($container->getParameter('pixers_salesmanago_api')['guzzle_client'])]
        );
    }
}
