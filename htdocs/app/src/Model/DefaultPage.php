<?php

declare(strict_types=1);

namespace App\Model;

use Page;
use App\Controller\DefaultPageController;

class DefaultPage extends Page
{
    private static $db = [];
    private static string $controller_name =  DefaultPageController::class;
}
