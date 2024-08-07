<?php

declare(strict_types=1);

namespace App\Controller;

use SilverStripe\Control\Controller;
use SilverStripe\Control\HTTPRequest;
use SilverStripe\Control\HTTPResponse;

class TestController extends Controller
{
    private static $url_segment = 'test';

    private static $allowed_actions = [
        'index'
    ];

    private static $url_handlers = [
        '$@' => 'index',
    ];

    protected function init()
    {
        parent::init();
    }

    public function index(HTTPRequest $request)
    {
        $return = [
            'params' => json_encode($this->getRequest()->params()),
            'test' => json_encode([1,2,3,5])
        ];
        return HTTPResponse::create()->setBody(json_encode($return));
    }
}
