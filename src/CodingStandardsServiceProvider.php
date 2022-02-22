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
        $package
            ->name('silverbullet-coding-standards');
    }

    public function boot()
    {
        // Publish Code Standard Rules
        $this->publishes([
            __DIR__ . '/../tools/coding-standard-tools/.php-cs-fixer.dist.php' => base_path('.php-cs-fixer.dist.php'),
            __DIR__ . '/../tools/coding-standard-tools/phpstan.neon.dist' => base_path('phpstan.neon.dist'),
            __DIR__ . '/../tools/coding-standard-tools/phpcs.xml' => base_path('phpcs.xml'),
            __DIR__ . '/../tools/coding-standard-tools/phpunit.xml.dist' => base_path('phpunit.xml.dist'),
        ], 'coding-standards');

        // Publish Code Enforcement GitHub workflows
        $this->publishes([
            __DIR__ . '/../tools/github-workflows/check_style.yml' => base_path('.github/workflows/code-standards/check_style.yml'),
        ], 'github-workflows');
    }
}
