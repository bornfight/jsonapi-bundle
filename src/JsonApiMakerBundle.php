<?php
declare(strict_types=1);

namespace Bornfight\JsonApiBundle;

use Bornfight\JsonApiBundle\DependencyInjection\JsonApiExtension;
use Symfony\Component\HttpKernel\Bundle\Bundle;

class JsonApiMakerBundle extends Bundle
{
    public function getContainerExtension()
    {
        return new JsonApiExtension();
    }
}
