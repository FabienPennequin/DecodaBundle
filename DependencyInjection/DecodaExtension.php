<?php

namespace Bundle\DecodaBundle\DependencyInjection;

use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\XmlFileLoader;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * DecodaExtension.
 *
 * @author Fabien Pennequin <fabien@pennequin.me>
 */
class DecodaExtension extends Extension
{
    /**
     * Loads bundle configuration
     *
     * @return void
     */
    public function configLoad($config, ContainerBuilder $container)
    {
        $loader = new XmlFileLoader($container, __DIR__.'/../Resources/config');
        $loader->load('decoda.xml');
    }

    /**
     * @see Symfony\Component\DependencyInjection\Extension\Extension
     */
    public function getXsdValidationBasePath()
    {
        return null;
    }

    /**
     * @see Symfony\Component\DependencyInjection\Extension\Extension
     */
    public function getNamespace()
    {
        return 'http://www.symfony-project.org/schema/dic/symfony';
    }

    /**
     * @see Symfony\Component\DependencyInjection\Extension\Extension
     */
    public function getAlias()
    {
        return 'decoda';
    }
}
