<?php
namespace Omni\WebBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Packagist\WebBundle\DependencyInjection\Compiler\RepositoryPass;

class OmniWebBundle extends Bundle
{
    public function build(ContainerBuilder $container)
    {
        parent::build($container);

        $container->addCompilerPass(new RepositoryPass());
    }
}
