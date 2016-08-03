<?php

namespace Pixers\SalesManagoApiBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Pixers\SalesManagoApiBundle\DependencyInjection\Compiler\SetGuzzleClientCompilerPass;

/**
 * PixersSalesManagoApiBundle
 *
 * @author Michał Kanak <kanakmichal@gmail.com>
 * @copyright 2016 PIXERS Ltd
 */
class PixersSalesManagoApiBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new SetGuzzleClientCompilerPass());
    }
}