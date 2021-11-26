<?php

declare(strict_types=1);

use Rector\Core\Configuration\Option;
use Rector\Core\ValueObject\PhpVersion;
use Symfony\Component\DependencyInjection\Loader\Configurator\ContainerConfigurator;

return static function (ContainerConfigurator $containerConfigurator): void {
    // get parameters
    $parameters = $containerConfigurator->parameters();

    /*
    $parameters->set(Option::BOOTSTRAP_FILES, [
        __DIR__.'/phpstan-bootstrap.php',
    ]);
    */

    // get services (needed for register a single rule)
    $services = $containerConfigurator->services();

    /*
    $parameters->set(Option::PATHS, [
        __DIR__.'/lib/',
        __DIR__.'/models/',
    ]);
    $services->set(Rector\TypeDeclaration\Rector\ClassMethod\AddVoidReturnTypeWhereNoReturnRector::class);
    */

    $parameters->set(Option::PATHS, [
        __DIR__.'/view.php',
    ]);

    // $services->set(ViewScopeRector\ViewScopeRector::class);
};
