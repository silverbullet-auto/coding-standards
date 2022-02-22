<?php

require __DIR__ . '/vendor/autoload.php';

return (new Jubeki\LaravelCodeStyle\Config())
    ->setFinder(
        PhpCsFixer\Finder::create()
            ->in(app_path())
            ->in(config_path())
            ->in(database_path('factories'))
            ->in(database_path('migrations'))
            ->in(database_path('seeders'))
            ->in(resource_path('lang'))
            ->in(resource_path('views'))
            ->in(base_path('routes'))
            ->in(base_path('tests'))
    )
    ->setRules([
        '@Laravel' => true,
        '@Laravel:risky' => true,
    ])
    ->setRiskyAllowed(true);
