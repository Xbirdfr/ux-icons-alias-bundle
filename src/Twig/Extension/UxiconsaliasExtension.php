<?php

namespace Xbird\UxIconsAliasBundle\Twig\Extension;


use Twig\TwigFunction;
use Twig\Extension\AbstractExtension;
use Xbird\UxIconsAliasBundle\Twig\Runtime\UxiconsaliasRuntime;

/**
 * A Bundle that provides alias for Symfony UX Icons
 *
 * @author Xbird_ <contact@xbird.me>
 */
class UxiconsaliasExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('ux_icon_alias', [UxiconsaliasRuntime::class, 'uxIconsAlias'], ['is_safe' => ['html']]),
        ];
    }
}
