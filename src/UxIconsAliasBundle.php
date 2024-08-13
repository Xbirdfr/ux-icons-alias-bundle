<?php

namespace Xbird\UxIconsAliasBundle;

use Symfony\Component\HttpKernel\Bundle\AbstractBundle;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\Config\Definition\Configurator\DefinitionConfigurator;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

/**
 * A Bundle that provides alias for Symfony UX Icons
 *
 * @author Xbird_ <contact@xbird.me>
 */
class UxIconsAliasBundle extends AbstractBundle
{
    public function loadExtension(array $config, ContainerConfigurator $container, ContainerBuilder $builder): void
    {
        $container->import('../config/services.yaml');
        $container->parameters()
            ->set('ux_icons_alias.alias', $config['alias']);
    }

    public function configure(DefinitionConfigurator $definition): void
    {
        $definition->rootNode()
            ->children()
            ->arrayNode('alias')
            ->prototype('scalar')->end()
        ;
    }
}
