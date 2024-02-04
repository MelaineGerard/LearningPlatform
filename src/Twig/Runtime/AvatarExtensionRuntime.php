<?php

namespace App\Twig\Runtime;

use Twig\Extension\RuntimeExtensionInterface;

class AvatarExtensionRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // Inject dependencies if needed
    }

    public function getAvatar(string $value)
    {
        $gravatarUri = "https://gravatar.com/avatar/";
        $hash = hash('sha256', strtolower(trim($value)));

        return $gravatarUri . $hash;
    }
}
