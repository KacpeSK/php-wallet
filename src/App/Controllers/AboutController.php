<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;
use App\Config\Path;

class AboutController
{
    private TemplateEngine $view;

    public function __construct()
    {
        $this->view = new TemplateEngine(Path::VIEW);
    }

    public function about()
    {
        echo $this->view->render("/about.php", [
            "title" => "About",
            "dangerousData" => "<script>alert(123)</script>"
        ]);
    }
}
