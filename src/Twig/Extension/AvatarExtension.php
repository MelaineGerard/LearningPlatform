<?php

namespace App\Twig\Extension;

use App\Twig\Runtime\AvatarExtensionRuntime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AvatarExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('get_avatar', [AvatarExtensionRuntime::class, 'getAvatar']),
        ];
    }
}
