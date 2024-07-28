<?php

declare(strict_types=1);

namespace App\Admin;

use App\Model\Data\Account;
use SilverStripe\Admin\ModelAdmin;

class AccountAdmin extends ModelAdmin
{
    private static $menu_title = 'Accounts';

    private static $url_segment = 'accounts';

    private static $managed_models = [
        Account::class,
    ];

    // private static $model_importers = [
    //     'Account' => AccountCsvLoader::class,
    //   ];

}


// https://docs.silverstripe.org/en/5/developer_guides/integration/csv_import/
