<?php

namespace AstroStore\PageGrid;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use AstroStore\PageGrid\Commands\PageGridCommand;

class PageGridServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('page-grid')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_page-grid_table')
            ->hasCommand(PageGridCommand::class);
    }
}
