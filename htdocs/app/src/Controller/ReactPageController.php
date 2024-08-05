<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\View\Requirements;
use SilverStripe\CMS\Controllers\ContentController;

class ReactPageController extends ContentController
{
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();

        Requirements::javascript('themes/react/javascript/react.jsx');
        Requirements::css('themes/react/css/main.css');

        Requirements::set_force_js_to_bottom(true);
    }
}
