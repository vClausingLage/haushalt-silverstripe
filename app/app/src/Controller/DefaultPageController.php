<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\CMS\Controllers\ContentController;

class DefaultPageController extends ContentController
{
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();
    }


}
