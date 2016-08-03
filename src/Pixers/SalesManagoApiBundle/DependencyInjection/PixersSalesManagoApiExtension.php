<?php

namespace Pixers\SalesManagoApiBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\DependencyInjection\Extension;
use Pixers\SalesManagoAPI\Client as SalesManagoApiClient;
use Pixers\SalesManagoAPI\SalesManago;
use Symfony\Component\DependencyInjection\Reference;

/**
 * PixersSalesManagoApiExtension
 *
 * @author Michał Kanak <kanakmichal@gmail.com>
 * @copyright 2016 PIXERS Ltd
 */
class PixersSalesManagoApiExtension extends Extension
{
    /**
     * {@inheritdoc}
     */
    public function load(array $configs, ContainerBuilder $container)
    {
        $configuration = new Configuration();
        $config = $this->processConfiguration($configuration, $configs);

        $container->setParameter('pixers_salesmanago_api', $config);

        $container->register('pixers_salesmanago.client', SalesManagoApiClient::class)
            ->addArgument($config['client_id'])
            ->addArgument($config['endpoint'])
            ->addArgument($config['api_secret'])
            ->addArgument($config['api_key']);

        $container->register('salesmanago', SalesManago::class)
            ->addArgument(new Reference('pixers_salesmanago.client'));
    }
}