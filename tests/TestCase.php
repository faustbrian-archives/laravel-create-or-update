<?php

declare(strict_types=1);

/*
 * This file is part of CreateOrUpdate.
 *
 * (c) KodeKeep <hello@kodekeep.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace KodeKeep\CreateOrUpdate\Tests;

use KodeKeep\CreateOrUpdate\Facades\CreateOrUpdate;
use KodeKeep\CreateOrUpdate\Providers\CreateOrUpdateServiceProvider;
use Orchestra\Testbench\TestCase as Orchestra;

abstract class TestCase extends Orchestra
{
    protected function getPackageProviders($app): array
    {
        return [CreateOrUpdateServiceProvider::class];
    }

    protected function getPackageAliases($app): array
    {
        return ['CreateOrUpdate' => CreateOrUpdate::class];
    }
}
