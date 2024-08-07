<?php

declare(strict_types=1);

namespace App\Model;

use Page;
use App\Controller\ReactPageController;

class ReactPage extends Page
{
    private static $db = [];
    private static string $controller_name =  ReactPageController::class;
}
