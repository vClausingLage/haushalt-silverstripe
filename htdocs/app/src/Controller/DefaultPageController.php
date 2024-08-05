<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\View\Requirements;
use SilverStripe\CMS\Controllers\ContentController;

class DefaultPageController extends ContentController
{
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();

        Requirements::javascript('themes/default/javascript/default.js');
        Requirements::css('themes/default/css/main.css');

        Requirements::set_force_js_to_bottom(true);
    }
}
