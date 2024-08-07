<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\View\Requirements;
use PageController;

class DefaultPageController extends PageController
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
        // Requirements::insertHeadTags($this->owner->renderWith('App\Model\DefaultPage|HeadTags'));

        // Css files
        Requirements::themedCSS('dist/css/main');

        // Js Files
        Requirements::set_force_js_to_bottom(true);
        Requirements::themedJavascript('dist/javascript/index');
    }

    public function MOEP()
    {
        return 'MOEP';
    }
}
