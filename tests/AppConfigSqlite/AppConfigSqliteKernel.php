<?php

declare(strict_types=1);

/*
 * This file is part of the Liip/TestFixturesBundle
 *
 * (c) Lukas Kahwe Smith <smith@pooteeweet.org>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Liip\Acme\Tests\AppConfigSqlite;

use Liip\Acme\Tests\App\AppKernel;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

class AppConfigSqliteKernel extends AppKernel
{
    protected function configureContainer(ContainerConfigurator $container): void
    {
        // Load the default file.
        parent::configureContainer($container);

        // Load the file with SQLite configuration
        $container->import(__DIR__.'/config.yml');
    }
}
