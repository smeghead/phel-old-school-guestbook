<?php
use Phel\Phel;

$projectRootDir = __DIR__ . '/../';

require $projectRootDir . 'vendor/autoload.php';

Phel::run($projectRootDir, 'old-school-guestbook\\app');
