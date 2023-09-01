<?php

declare(strict_types=1);

require __DIR__ . "/../../vendor/autoload.php";

use Framework\App;
use App\Config\Path;
use Dotenv\Dotenv;

use function App\Config\{registerRoutes, registerMiddleware};

$dotenv = Dotenv::createImmutable(Path::ROOT);
$dotenv->load();

$app = new App(Path::SOURCE . "App/container-definitions.php");

registerRoutes($app);
registerMiddleware($app);

return $app;
