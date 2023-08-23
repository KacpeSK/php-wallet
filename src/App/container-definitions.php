<?php

declare(strict_types=1);

use Framework\TemplateEngine;
use App\Config\Path;

return [
    TemplateEngine::class => fn () => new TemplateEngine(Path::VIEW)
];
