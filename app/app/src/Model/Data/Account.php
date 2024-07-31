<?php

declare(strict_types=1);

namespace App\Model\Data;

use SilverStripe\Forms\Tab;
use SilverStripe\Forms\TabSet;
use SilverStripe\ORM\DataObject;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\TextField;

class Account extends DataObject
{
    private static $table_name = 'Account';

    private static $db = [
        'Date' => 'Date',
        'PaymentParty' => 'Varchar(255)',
        'IBAN' => 'Varchar(255)',
        'PurposeOfUse' => 'Varchar(255)',
        'Amount' => 'Int',
    ];

    private static $summary_fields = [
        'Date',
        'PaymentParty',
        'IBAN',
        'PurposeOfUse',
        'Amount',
    ];

    private static $default_sort = 'Date DESC';

    public function getCMSFields(): FieldList
    {
        $fields = FieldList::create();

        $mainTab = Tab::create('Main')
            ->setTitle(_t(self::class . '.MAIN', 'Main'));
        $fields->push(TabSet::create('Root', $mainTab));

        $date = TextField::create('Buchungstag')
            ->performReadonlyTransformation()
            ->setTitle($this->fieldLabel('Buchungstag'));
        $fields->addFieldToTab('Root.Main', $date);

        $paymentParty = TextField::create('Name Zahlungsbeteiligter')
        ->performReadonlyTransformation()
        ->setTitle($this->fieldLabel('Name Zahlungsbeteiligter'));
        $fields->addFieldToTab('Root.Main', $paymentParty);

        $iban = TextField::create('IBAN Zahlungsbeteiligter')
        ->performReadonlyTransformation()
        ->setTitle($this->fieldLabel('IBAN Zahlungsbeteiligter'));
        $fields->addFieldToTab('Root.Main', $iban);

        $purposeOfUse = TextField::create('Verwendungszweck')
        ->performReadonlyTransformation()
        ->setTitle($this->fieldLabel('Verwendungszweck'));
        $fields->addFieldToTab('Root.Main', $purposeOfUse);

        $amount = TextField::create('Betrag')
        ->performReadonlyTransformation()
        ->setTitle($this->fieldLabel('Betrag'));
        $fields->addFieldToTab('Root.Main', $amount);

        $this->extend('updateCMSFields', $fields);

        return $fields;
    }
}
