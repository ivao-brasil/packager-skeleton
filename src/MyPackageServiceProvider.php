<?php

namespace :uc:vendor\:uc:package;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;

/**
 * Provides the :lc:package services
 */
class :uc:packageServiceProvider extends PackageServiceProvider
{
    /**
     * Configues the package
     *
     * @param Package $package
     * @return void
     */
    public function configurePackage(Package $package): void
    {
        $package->name(':lc:package');
    }
}
