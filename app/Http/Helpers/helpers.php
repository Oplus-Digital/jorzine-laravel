<?php

use App\Models\Category;

/**
 * Setting Name
 *
 * @param $name
 * @return mixed
 */
function getsetting($name)
{
    $setting = \App\Models\Setting::where('name', $name)->first();
    if (!$setting) {
        return "";
    }
    return $setting->value;
}

function countries()
{
    return [
    "AF"=>"Afghanistan",
    "AX"=>"Åland Islands",
    "AL"=>"Albania",
    "DZ"=>"Algeria",
    "AS"=>"American Samoa",
    "AD"=>"Andorra",
    "AO"=>"Angola",
    "AI"=>"Anguilla",
    "AQ"=>"Antarctica",
    "AG"=>"Antigua & Barbuda",
    "AR"=>"Argentina",
    "AM"=>"Armenia",
    "AW"=>"Aruba",
    "AU"=>"Australia",
    "AT"=>"Austria",
    "AZ"=>"Azerbaijan",
    "BS"=>"Bahamas",
    "BH"=>"Bahrain",
    "BD"=>"Bangladesh",
    "BB"=>"Barbados",
    "BY"=>"Belarus",
    "BE"=>"Belgium",
    "BZ"=>"Belize",
    "BJ"=>"Benin",
    "BM"=>"Bermuda",
    "BT"=>"Bhutan",
    "BO"=>"Bolivia",
    "BQ"=>"Caribbean Netherlands",
    "BA"=>"Bosnia & Herzegovina",
    "BW"=>"Botswana",
    "BV"=>"Bouvet Island",
    "BR"=>"Brazil",
    "IO"=>"British Indian Ocean Territory",
    "BN"=>"Brunei",
    "BG"=>"Bulgaria",
    "BF"=>"Burkina Faso",
    "BI"=>"Burundi",
    "KH"=>"Cambodia",
    "CM"=>"Cameroon",
    "CA"=>"Canada",
    "CV"=>"Cape Verde",
    "KY"=>"Cayman Islands",
    "CF"=>"Central African Republic",
    "TD"=>"Chad",
    "CL"=>"Chile",
    "CN"=>"China",
    "CX"=>"Christmas Island",
    "CC"=>"Cocos (Keeling) Islands",
    "CO"=>"Colombia",
    "KM"=>"Comoros",
    "CG"=>"Congo - Brazzaville",
    "CD"=>"Congo - Kinshasa",
    "CK"=>"Cook Islands",
    "CR"=>"Costa Rica",
    "CI"=>"Côte d’Ivoire",
    "HR"=>"Croatia",
    "CU"=>"Cuba",
    "CW"=>"Curaçao",
    "CY"=>"Cyprus",
    "CZ"=>"Czechia",
    "DK"=>"Denmark",
    "DJ"=>"Djibouti",
    "DM"=>"Dominica",
    "DO"=>"Dominican Republic",
    "EC"=>"Ecuador",
    "EG"=>"Egypt",
    "SV"=>"El Salvador",
    "GQ"=>"Equatorial Guinea",
    "ER"=>"Eritrea",
    "EE"=>"Estonia",
    "ET"=>"Ethiopia",
    "FK"=>"Falkland Islands (Islas Malvinas)",
    "FO"=>"Faroe Islands",
    "FJ"=>"Fiji",
    "FI"=>"Finland",
    "FR"=>"France",
    "GF"=>"French Guiana",
    "PF"=>"French Polynesia",
    "TF"=>"French Southern Territories",
    "GA"=>"Gabon",
    "GM"=>"Gambia",
    "GE"=>"Georgia",
    "DE"=>"Germany",
    "GH"=>"Ghana",
    "GI"=>"Gibraltar",
    "GR"=>"Greece",
    "GL"=>"Greenland",
    "GD"=>"Grenada",
    "GP"=>"Guadeloupe",
    "GU"=>"Guam",
    "GT"=>"Guatemala",
    "GG"=>"Guernsey",
    "GN"=>"Guinea",
    "GW"=>"Guinea-Bissau",
    "GY"=>"Guyana",
    "HT"=>"Haiti",
    "HM"=>"Heard & McDonald Islands",
    "VA"=>"Vatican City",
    "HN"=>"Honduras",
    "HK"=>"Hong Kong",
    "HU"=>"Hungary",
    "IS"=>"Iceland",
    "IN"=>"India",
    "ID"=>"Indonesia",
    "IR"=>"Iran",
    "IQ"=>"Iraq",
    "IE"=>"Ireland",
    "IM"=>"Isle of Man",
    "IL"=>"Israel",
    "IT"=>"Italy",
    "JM"=>"Jamaica",
    "JP"=>"Japan",
    "JE"=>"Jersey",
    "JO"=>"Jordan",
    "KZ"=>"Kazakhstan",
    "KE"=>"Kenya",
    "KI"=>"Kiribati",
    "KP"=>"North Korea",
    "KR"=>"South Korea",
    "XK"=>"Kosovo",
    "KW"=>"Kuwait",
    "KG"=>"Kyrgyzstan",
    "LA"=>"Laos",
    "LV"=>"Latvia",
    "LB"=>"Lebanon",
    "LS"=>"Lesotho",
    "LR"=>"Liberia",
    "LY"=>"Libya",
    "LI"=>"Liechtenstein",
    "LT"=>"Lithuania",
    "LU"=>"Luxembourg",
    "MO"=>"Macao",
    "MK"=>"North Macedonia",
    "MG"=>"Madagascar",
    "MW"=>"Malawi",
    "MY"=>"Malaysia",
    "MV"=>"Maldives",
    "ML"=>"Mali",
    "MT"=>"Malta",
    "MH"=>"Marshall Islands",
    "MQ"=>"Martinique",
    "MR"=>"Mauritania",
    "MU"=>"Mauritius",
    "YT"=>"Mayotte",
    "MX"=>"Mexico",
    "FM"=>"Micronesia",
    "MD"=>"Moldova",
    "MC"=>"Monaco",
    "MN"=>"Mongolia",
    "ME"=>"Montenegro",
    "MS"=>"Montserrat",
    "MA"=>"Morocco",
    "MZ"=>"Mozambique",
    "MM"=>"Myanmar (Burma)",
    "NA"=>"Namibia",
    "NR"=>"Nauru",
    "NP"=>"Nepal",
    "NL"=>"Netherlands",
    "AN"=>"Curaçao",
    "NC"=>"New Caledonia",
    "NZ"=>"New Zealand",
    "NI"=>"Nicaragua",
    "NE"=>"Niger",
    "NG"=>"Nigeria",
    "NU"=>"Niue",
    "NF"=>"Norfolk Island",
    "MP"=>"Northern Mariana Islands",
    "NO"=>"Norway",
    "OM"=>"Oman",
    "PK"=>"Pakistan",
    "PW"=>"Palau",
    "PS"=>"Palestine",
    "PA"=>"Panama",
    "PG"=>"Papua New Guinea",
    "PY"=>"Paraguay",
    "PE"=>"Peru",
    "PH"=>"Philippines",
    "PN"=>"Pitcairn Islands",
    "PL"=>"Poland",
    "PT"=>"Portugal",
    "PR"=>"Puerto Rico",
    "QA"=>"Qatar",
    "RE"=>"Réunion",
    "RO"=>"Romania",
    "RU"=>"Russia",
    "RW"=>"Rwanda",
    "BL"=>"St. Barthélemy",
    "SH"=>"St. Helena",
    "KN"=>"St. Kitts & Nevis",
    "LC"=>"St. Lucia",
    "MF"=>"St. Martin",
    "PM"=>"St. Pierre & Miquelon",
    "VC"=>"St. Vincent & Grenadines",
    "WS"=>"Samoa",
    "SM"=>"San Marino",
    "ST"=>"São Tomé & Príncipe",
    "SA"=>"Saudi Arabia",
    "SN"=>"Senegal",
    "RS"=>"Serbia",
    "CS"=>"Serbia",
    "SC"=>"Seychelles",
    "SL"=>"Sierra Leone",
    "SG"=>"Singapore",
    "SX"=>"Sint Maarten",
    "SK"=>"Slovakia",
    "SI"=>"Slovenia",
    "SB"=>"Solomon Islands",
    "SO"=>"Somalia",
    "ZA"=>"South Africa",
    "GS"=>"South Georgia & South Sandwich Islands",
    "SS"=>"South Sudan",
    "ES"=>"Spain",
    "LK"=>"Sri Lanka",
    "SD"=>"Sudan",
    "SR"=>"Suriname",
    "SJ"=>"Svalbard & Jan Mayen",
    "SZ"=>"Eswatini",
    "SE"=>"Sweden",
    "CH"=>"Switzerland",
    "SY"=>"Syria",
    "TW"=>"Taiwan",
    "TJ"=>"Tajikistan",
    "TZ"=>"Tanzania",
    "TH"=>"Thailand",
    "TL"=>"Timor-Leste",
    "TG"=>"Togo",
    "TK"=>"Tokelau",
    "TO"=>"Tonga",
    "TT"=>"Trinidad & Tobago",
    "TN"=>"Tunisia",
    "TR"=>"Turkey",
    "TM"=>"Turkmenistan",
    "TC"=>"Turks & Caicos Islands",
    "TV"=>"Tuvalu",
    "UG"=>"Uganda",
    "UA"=>"Ukraine",
    "AE"=>"United Arab Emirates",
    "GB"=>"United Kingdom",
    "US"=>"United States",
    "UM"=>"U.S. Outlying Islands",
    "UY"=>"Uruguay",
    "UZ"=>"Uzbekistan",
    "VU"=>"Vanuatu",
    "VE"=>"Venezuela",
    "VN"=>"Vietnam",
    "VG"=>"British Virgin Islands",
    "VI"=>"U.S. Virgin Islands",
    "WF"=>"Wallis & Futuna",
    "EH"=>"Western Sahara",
    "YE"=>"Yemen",
    "ZM"=>"Zambia",
    "ZW"=>"Zimbabwe",
    ];
}

function country_code()
{
    return [
        '962' => '962',
        '965' => '965',
    ];
}

function location()
{
    return [
        'fixed' => 'ثابت',
        'moving' => 'متحرك',
    ];
}

function banners_type()
{
    return [
        'normal' => 'عادية',
        'splash' => 'اسبلاش',
    ];
}

function device_type()
{
    return [
        'android' => 'اندرويد',
        'ios' => 'ايفون',
    ];
}
function reviewed()
{
    return [
        '1' => 'تم مراجعته',
        '0' => 'لم يتم مراجعته',
    ];
}
function countryCode(){
    return \App\Models\Country::whereNotNull('country_code')->pluck('ar_name','country_code');
}
function verify_status()
{
    $array = [
        'approved' => 'قبول',
        'rejected' => 'رفض',
    ];

    return $array;
}

function promoTypes()
{
    $array = [
        'flat' => 'Flat',
        'percentage' => 'Percentage',
    ];
    return $array;
}
function sectionNames()
{
    $array = [
        'Mid-Eastern Metal News' => 'Mid-Eastern Metal News',
        'International Metal News' => 'International Metal News',
    ];
    return $array;
}

function order_status()
{
    return [
        'pending' => 'قيد الانتظار',
        'confirmed' => 'مؤكد',
        'rejected' => 'مرفوض',
        'canceled' => 'لاغي',
        'wait_for_rate' => 'في انتظار التقييم',
        'finished' => 'منتهي',
        'on_the_way' => 'فى الطريق',
    ];
}

/**
 * Upload Path
 *
 * @return string
 */
function uploadpath()
{
    return 'photos';
}

/**
 * Get Image
 *
 * @param $filename
 * @return string
 */
function getimg($filename)
{
    return asset($filename);
}


function distanceCalculation($point1_lat, $point1_long, $point2_lat, $point2_long, $unit = 'km', $decimals = 2)
{
    // Calculate the distance in degrees
    $degrees = rad2deg(acos((sin(deg2rad($point1_lat)) * sin(deg2rad($point2_lat))) + (cos(deg2rad($point1_lat)) * cos(deg2rad($point2_lat)) * cos(deg2rad($point1_long - $point2_long)))));

    // Convert the distance in degrees to the chosen unit (kilometres, miles or nautical miles)
    switch ($unit) {
        case 'km':
            $distance = $degrees * 111.13384; // 1 degree = 111.13384 km, based on the average diameter of the Earth (12,735 km)
            break;
        case 'mi':
            $distance = $degrees * 69.05482; // 1 degree = 69.05482 miles, based on the average diameter of the Earth (7,913.1 miles)
            break;
        case 'nmi':
            $distance = $degrees * 59.97662; // 1 degree = 59.97662 nautic miles, based on the average diameter of the Earth (6,876.3 nautical miles)
    }

    return round($distance, $decimals);
}


////////////////////////////////////////////////////////////////////////

function uploadImage($file, $img)
{
    return '/storage/' . \Storage::disk('public')->putFile($file, $img);
}

function deleteImage($file, $img)
{
    \Storage::disk('public')->delete($file, $img);

    return true;
}

function getImgPath($img)
{
    return asset($img);
}

/////////////////////////////////////////////////////////////////////////////////////////////
class responder
{
    public static function success($data)
    {
        return response()->json(['status' => true, 'data' => $data]);
    }

    public static function error($data)
    {
        return response()->json(['status' => false, 'msg' => $data]);
    }
}

function orderStatusEn($status)
{
    return [
        'pending' => 'pending',
        'confirmed' => 'confirmed',
        'rejected' => 'rejected',
        'canceled' => 'canceled',
        'wait_for_rate' => 'waiting for rate',
        'finished' => 'finished'
    ][$status];
}

function orderStatusAr($status)
{
    return [
        'pending' => 'معلقة',
        'confirmed' => 'مؤكد',
        'rejected' => 'مرفوض',
        'canceled' => 'لاغي',
        'wait_for_rate' => 'في انتظار التقييم',
        'finished' => 'منتهي'
    ][$status];
}

function sendSms($phone,$message){
//    http://www.smsapril.com/api.php?comm=sendsms&user=ealtreeqcompany&pass=OPasd456!&to=' . $to . '&message=' . $sms_message . '&sender=3altareeq

    $result=Http::get('http://www.smsapril.com/api.php',[
        'comm'=>'sendsms',
        'user'=>'ealtreeqcompany',
        'pass'=>'OPasd456!',
        'to'=>$phone,
        'message'=>$message,
        'sender'=>'3altareeq'
    ]);

}
function arrayToSelect($arr): array
{
    $selectArray=[];
    foreach ($arr as $key=>$item) {
        $selectArray[$item]=$item;
    }
    return $selectArray;
}

function SMSBalance(){
//    http://www.smsapril.com/api.php?comm=sendsms&user=ealtreeqcompany&pass=OPasd456!&to=' . $to . '&message=' . $sms_message . '&sender=3altareeq

    $result=Http::get('http://www.smsapril.com/api.php',[
        'comm'=>'chk_balance',
        'user'=>'ealtreeqcompany',
        'pass'=>'OPasd456!',
    ]);

    return $result->body();
}
