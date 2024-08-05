<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\CMS\Controllers\ContentController;

class ReactPageController extends ContentController
{
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();
    }


}
