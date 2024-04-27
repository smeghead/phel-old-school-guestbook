<?php
use Phel\Phel;

$projectRootDir = __DIR__ . '/../';

require $projectRootDir . 'vendor/autoload.php';

$buildedEntryPoint = __DIR__ . '/../out/index.php';
if (file_exists($buildedEntryPoint)) {
  require_once($buildedEntryPoint);
} else {
  Phel::run($projectRootDir, 'old-school-guestbook\\app');
}

