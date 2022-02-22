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
         * More-info: https://github.com/spatie/laravel-package-tools
         */
//        $package
//            ->name('silverbullet-coding-standards')
//            ->hasConfigFile()
//            ->hasViews()
//            ->hasMigration('create_silverbullet-coding-standards_table')
//            ->hasCommand(CodingStandardsCommand::class);
    }

    public function boot()
    {
        $this->publishes([
            __DIR__.'/../coding-standard-tools/.php-cs-fixer.dist.php' => base_path('.php-cs-fixer.dist.php'),
            __DIR__.'/../coding-standard-tools/phpstan.neon.dist' => base_path('phpstan.neon.dist'),
            __DIR__.'/../coding-standard-tools/phpcs.xml' => base_path('phpcs.xml'),
        ], 'coding-standards');
    }
}
