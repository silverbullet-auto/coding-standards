<?php

namespace SilverBulletAuto\CodingStandards;

use Spatie\LaravelPackageTools\Package;
use Spatie\LaravelPackageTools\PackageServiceProvider;
use SilverBulletAuto\CodingStandards\Commands\CodingStandardsCommand;

class CodingStandardsServiceProvider extends PackageServiceProvider
{
    public function configurePackage(Package $package): void
    {
        /*
         * This class is a Package Service Provider
         *
         * More info: https://github.com/spatie/laravel-package-tools
         */
        $package
            ->name('silverbullet-coding-standards')
            ->hasConfigFile()
            ->hasViews()
            ->hasMigration('create_silverbullet-coding-standards_table')
            ->hasCommand(CodingStandardsCommand::class);
    }
}
