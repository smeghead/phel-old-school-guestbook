<?php

declare(strict_types=1);

use Phel\Config\PhelConfig;
use Phel\Config\PhelExportConfig;
use Phel\Config\PhelBuildConfig;

return (new PhelConfig())
    ->setSrcDirs(['src'])
    ->setTestDirs(['tests'])
    ->setVendorDir('vendor')
    ->setErrorLogFile(__DIR__ . '/data/error.log')
    ->setBuildConfig((new PhelBuildConfig())
        ->setMainPhelNamespace('old-school-guestbook\app')
        ->setMainPhpPath('out/index.php'))
    ->setExportConfig((new PhelExportConfig())
        ->setFromDirectories(['src/phel'])
        ->setNamespacePrefix('PhelGenerated')
        ->setTargetDirectory('src/PhelGenerated'))
    ->setIgnoreWhenBuilding(['local.phel'])
    ->setNoCacheWhenBuilding(['old_school_guestbook'])
    ->setKeepGeneratedTempFiles(false)
    ->setFormatDirs(['src', 'tests'])
;
