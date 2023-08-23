<?php

declare(strict_types=1);

include __DIR__ . "/../src/App/functions.php";

require __DIR__ . "/../vendor/autoload.php";

use App\Controllers\AboutController;
use Framework\App;

$app = new App();

$app->get('/about.php', [AboutController::class, "home"]);

$app->run();
