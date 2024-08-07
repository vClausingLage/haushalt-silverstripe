<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\View\Requirements;
use PageController;

class ReactPageController extends PageController
{
    private static $allowed_actions = [];

    protected function init()
    {
        parent::init();

        $this->getRequirements();
    }

    private function getRequirements(): void
    {
        // Custom head tags
        // Requirements::insertHeadTags($this->owner->renderWith('App\Includes\CustomHeadTags'));

        // Css files
        Requirements::css('themes/react/dist/css/main.css');

        // Js Files
        Requirements::set_force_js_to_bottom(true);
        Requirements::javascript('themes/react/dist/javascript/index.js');
    }
}
