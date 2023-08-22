<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\APP;
use App\Controllers\HomeController;


$app = new App();

$app->get('/', [HomeController::class, "home"]);

return $app;
