<?php

namespace Xbird\UxIconsAliasBundle\Twig\Runtime;

use Symfony\UX\Icons\IconRendererInterface;
use Twig\Extension\RuntimeExtensionInterface;

/**
 * A Bundle that provides alias for Symfony UX Icons
 *
 * @author Xbird_ <contact@xbird.me>
 */
class UxiconsaliasRuntime implements RuntimeExtensionInterface
{
    public function __construct(
        private IconRendererInterface $renderer,
        private array $alias
    ) {}

    public function uxIconsAlias(string $name, array $attributes = []): string
    {
        if (array_key_exists($name, $this->alias)) $name = $this->alias[$name];
        return $this->renderer->renderIcon($name, $attributes);
    }    
}
