<?php 

namespace YDID\PageCreatorBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\Config\Resource\DirectoryResource;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\ExtensionInterface;
use YDID\PageCreatorBundle\DependencyInjection\YdidPageCreatorExtension;

class YdidPageCreatorBundle extends AbstractBundle
{
    public function getPath(): string
    {
        return dirname(__DIR__);
    }

    public function getContainerExtension(): ?ExtensionInterface
    {
        return new YdidPageCreatorExtension();
    }

    public function build(ContainerBuilder $container)
    {
        parent::build($container);
        $container->addResource(new DirectoryResource(__DIR__.'\\..\\Resources\\public'));
    }
}