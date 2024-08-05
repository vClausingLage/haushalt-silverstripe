<?php

declare(strict_types=1);

namespace App\Admin;

use SilverStripe\Dev\CsvBulkLoader;

class AccountCsvLoader extends CsvBulkLoader
{


    // public function __construct($objectClass)
    // {
    //     $this->delimiter = ';';

    //     $this->columnMap = [
    //         'Date' => 'Date',
    //         'PaymentParty' => 'PaymentParty',
    //         'IBAN' => 'IBAN',
    //         'PurposeOfUse' => 'PurposeOfUse',
    //         'Amount' => 'Amount',
    //     ];

    //     parent::construct($objectClass);
    // }

    // public function __construct($objectClass)
    // {
    //     $this->delimiter = ';';

    //     $this->columnMap = [
    //         'Name Zahlungsbeteiligter' => 'PaymentParty',
    //         'IBAN Zahlungsbeteiligter' => 'IBAN',
    //         'Verwendungszweck' => 'PurposeOfUse',
    //         'Betrag' => 'Amount',
    //     ];

    //     // $this->duplicateChecks = [
    //     //     'Number' => 'PlayerNumber',
    //     // ];

    //     // $this->relationCallbacks = [
    //     //     'Team.Title' => [
    //     //         'relationname' => 'Team',
    //     //         'callback' => 'getTeamByTitle',
    //     //     ],
    //     // ];

    //     parent::construct($objectClass);
    // }

    // public static function importFirstAndLastName(&$obj, $val, $record)
    // {
    //     $parts = explode(' ', $val);
    //     if (count($parts) != 2) {
    //         return false;
    //     }
    //     $obj->FirstName = $parts[0];
    //     $obj->LastName = $parts[1];
    // }

    // public static function getTeamByTitle(&$obj, $val, $record)
    // {
    //     // return FootballTeam::get()->filter('Title', $val)->First();
    // }
}

// <?php

// namespace Site\Dev;

// use SilverStripe\Dev\CsvBulkLoader;
// use Site\DataObjects\Country;
// use Site\DataObjects\ExploreCategory;
// use Site\DataObjects\Facility;
// use Site\DataObjects\TravelCategory;
// use Site\HotelPage;
// use Site\HotelSectionPage;

// class HotelPageCsvBulkLoader extends CsvBulkLoader
// {
//     private $hotel_field_mapping = [
//         'Hotelname' => 'Title',
//         'HotelTitle1' => 'HotelTitle1',
//         'HotelTitle2' => 'HotelTitle2',
//         'Url Segment' => 'URLSegment',
//         'Kontaktperson' => 'ContactPerson',
//         'Straße' => 'Street',
//         'PLZ' => 'Zip',
//         'Land' => 'CountryID',
//         'Stadt' => 'City',
//         'Telefon' => 'Phone',
//         'MateIsoPhone' => 'MateIsoPhone',
//         'RomantikEmailAddress' => 'RomantikEmailAddress',
//         'Email' => 'EmailAddress',
//         'Gmap Longitude' => 'Longitude',
//         'Gmap Latitude' => 'Latitude',
//         'Web' => 'Website',
//         'Features' => 'Features',
//         'Explore' => 'Experience-Worlds',
//         'Travel' => 'Travel-Worlds',
//         'Währung' => 'PriceFromCurrency',
//         'Preis ab' => 'PriceFromAmount',
//         'Dirs21ID' => 'Dirs21ID',
//         'Synxis ID' => 'SynxisID'
//     ];

//     private $facility_mapping = [
//         'Wifi Free' => 5,
//         'Parking Area' => 11,
//         'Child Friendly' => 2,
//         'Pets Allowed' => 13,
//         'Parking Garage' => 12,
//         'Sauna' => 15,
//         'Fitness' => 4,
//         'Outdoor Pool' => 10,
//         'Indoor Pool' => 7,
//         'Quiet Location' => 14,
//         'Central Location' => 1,
//         'Smoking Lounge' => 16,
//         'Meeting Facilities' => 9,
//         'Terrace' => 17,
//         'Lift' => 8,
//         'Handicapped Friendly' => 6,
//         'Electric car charger' => 3
//     ];
//     private $explore_mapping = [
//         // 'ActivitiesNatureTime' => ,
//         'Bike' => 10,
//         'Golf' => 1,
//         'Backpacking' => 9,
//         'Winter sports' => 2,
//         'Oldtimer' => 7,
//         'Relax time' => 4,
//         // 'Family & friends time' => ,
//         'Culinary enjoyment time' => 5,
//         'Culture time' => 8,
//         'Romantic time' => 3,
//         // 'Business time' => ,
//         // 'Expercience time' =>
//     ];
//     private $travel_mapping = [
//         'Mountain hotel' => 1,
//         'Country hotel' => 2,
//         'City hotel' => 3,
//         'Seaside hotel' => 4,
//         'Manor house' => 5,
//         'Wellness hotel' => 6,
//     ];

//     public function __construct($objectClass = null)
//     {
//         if (!$objectClass) {
//             $objectClass = HotelPage::class;
//         }

//         parent::__construct($objectClass);
//     }

//     public $duplicateChecks = [
//         'Dirs21ID' => 'Dirs21ID',
//     ];

//     public function processRecord($record, $columnMap, &$results, $preview = false)
//     {
//         $hotelSection = HotelSectionPage::get()->first();
//         $objID = 0;
//         if ($hotelSection) {
//             $mappedRecord = [];

//             // Mapping records
//             foreach ($this->hotel_field_mapping as $csvFieldName => $dbFieldName) {
//                 if (array_key_exists($csvFieldName, $record)) {
//                     $mappedRecord[$dbFieldName] = $record[$csvFieldName];

//                     // Country mapping
//                     if ($csvFieldName === 'Land') {
//                         $country = Country::get()->filter(['Code:EndsWith' => $record[$csvFieldName]]);
//                         if ($country->exists()) {
//                             $mappedRecord[$dbFieldName] = $country->first()->ID;
//                         }
//                     }
//                 }

//                 if ($csvFieldName === 'Features') {
//                     $mappedRecord[$csvFieldName] = $record[$dbFieldName];
//                 }

//                 if ($csvFieldName === 'Explore') {
//                     $mappedRecord[$csvFieldName] = $record[$dbFieldName];
//                 }

//                 if ($csvFieldName === 'Travel') {
//                     $mappedRecord[$csvFieldName] = $record[$dbFieldName];
//                 }
//             }

//             $mappedRecord['ParentID'] = $hotelSection->ID;

//             // do not import chc hotels
//             // if ($record['CHC'] === 'Nein') {
//                 $objID = $this->processHotelPageRecord($mappedRecord, $columnMap, $results, $preview);
//             // }
//         } else {
//             throw new \Exception('Missing HotelSectionPage');
//         }

//         return $objID;
//     }

//     private function processHotelPageRecord($record, $columnMap, &$results, $preview = false)
//     {
//         $class = $this->objectClass;

//         $existingObj = $this->findExistingObject($record, $columnMap);
//         $obj = ($existingObj) ? $existingObj : new $class();

//         foreach ($record as $fieldName => $val) {
//             if ($this->isNullValue($val)) {
//                 continue;
//             }

//             // Facilities mapping
//             if ($fieldName === 'Features') {
//                 $facilities = explode(',', $val);
//                 foreach ($facilities as $facility) {
//                     if (array_key_exists($facility, $this->facility_mapping)) {
//                         $facilityID = $this->facility_mapping[$facility];

//                         if ($facilityID) {
//                             $facility = Facility::get()->byID($facilityID);
//                             if ($facility) {
//                                 $obj->Facilities()->add($facility);
//                             }
//                         }
//                     }
//                 }
//             }

//             // Explore mapping
//             if ($fieldName === 'Explore') {
//                 $explores = explode(',', $val);
//                 foreach ($explores as $explore) {
//                     if (array_key_exists($explore, $this->explore_mapping)) {
//                         $exploreID = $this->explore_mapping[$explore];

//                         if ($exploreID) {
//                             $exploreCategory = ExploreCategory::get()->byID($exploreID);
//                             if ($exploreCategory) {
//                                 $obj->ExploreCategories()->add($exploreCategory);
//                             }
//                         }
//                     }
//                 }
//             }

//             // Travel mapping
//             if ($fieldName === 'Travel') {
//                 $travels = explode(',', $val);

//                 foreach ($travels as $travel) {
//                     if (array_key_exists($travel, $this->travel_mapping)) {
//                         $travelID = $this->travel_mapping[$travel];

//                         if ($travelID) {
//                             $travelCategory = TravelCategory::get()->byID($travelID);
//                             if ($travelCategory) {
//                                 $obj->TravelCategories()->add($travelCategory);
//                             }
//                         }
//                     }
//                 }
//             }
//         }


//         foreach ($record as $fieldName => $val) {
//             if ($preview) {
//                 break;
//             }
//             $mapped = $this->columnMap && isset($this->columnMap[$fieldName]);

//             if ($mapped && strpos($this->columnMap[$fieldName], '->') === 0) {
//                 $funcName = substr($this->columnMap[$fieldName], 2);

//                 $this->$funcName($obj, $val, $record);
//             } elseif ($obj->hasMethod("import{$fieldName}")) {
//                 $obj->{"import{$fieldName}"}($val, $record);
//             } else {
//                 $obj->update([$fieldName => $val]);
//             }
//         }

//         $isChanged = $obj->isChanged();

//         if (!$preview) {
//             $obj->write();
//         }

//         $message = '';

//         if ($existingObj) {
//             $results->addUpdated($obj, $message);
//         } else {
//             $results->addCreated($obj, $message);
//         }

//         $objID = $obj->ID;
//         $obj->destroy();
//         unset($existingObj, $obj);

//         return $objID;
//     }
// }
