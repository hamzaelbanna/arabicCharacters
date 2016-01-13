<?php

function firstUnicodeCharacter($str) {
    $string = mb_substr(trim($str), 0, 2);
    return $string;
}

function arUnicode() {
    $array = array(
        'class_of_1' =>
        array(
            0 => 'أ',
            1 => 'ﺄ',
            2 => 'ﺎ',
            3 => 'ء',
            4 => 'آ',
            5 => 'ﺂ',
            6 => 'ؤ',
            7 => 'ﺋ',
            8 => 'ا',
            9 => 'إ',
        ),
        'class_of_2' =>
        array(
            0 => 'ب',
            1 => 'ﺑ',
        ),
        'class_of_3' =>
        array(
            0 => 'ت',
            1 => 'ﺗ',
            2 => 'ة',
        ),
        'class_of_4' =>
        array(
            0 => 'ث',
            1 => 'ﺛ',
        ),
        'class_of_5' =>
        array(
            0 => 'ج',
            1 => 'ﺟ',
        ),
        'class_of_6' =>
        array(
            0 => 'ح',
            1 => 'ﺣ',
        ),
        'class_of_7' =>
        array(
            0 => 'خ',
            1 => 'ﺧ',
        ),
        'class_of_8' =>
        array(
            0 => 'د',
        ),
        'class_of_9' =>
        array(
            0 => 'ذ',
        ),
        'class_of_10' =>
        array(
            0 => 'ر',
        ),
        'class_of_11' =>
        array(
            0 => 'ز',
        ),
        'class_of_12' =>
        array(
            0 => 'س',
            1 => 'ﺳ',
        ),
        'class_of_13' =>
        array(
            0 => 'ش',
            1 => 'ﺷ',
        ),
        'class_of_14' =>
        array(
            0 => 'ص',
            1 => 'ﺻ',
        ),
        'class_of_15' =>
        array(
            0 => 'ض',
            1 => 'ﺿ',
        ),
        'class_of_16' =>
        array(
            0 => 'ط',
        ),
        'class_of_17' =>
        array(
            0 => 'ظ',
        ),
        'class_of_18' =>
        array(
            0 => 'ع',
            1 => 'ﻋ',
            2 => 'ﻊ',
            3 => 'ﻌ',
        ),
        'class_of_19' =>
        array(
            0 => 'غ',
            1 => 'ﻎ',
            2 => 'ﻏ',
            3 => 'ﻐ',
        ),
        'class_of_20' =>
        array(
            0 => 'ف',
            1 => 'ﻓ',
        ),
        'class_of_21' =>
        array(
            0 => 'ق',
            1 => 'ﻗ',
        ),
        'class_of_22' =>
        array(
            0 => 'ك',
            1 => 'ﻛ',
        ),
        'class_of_23' =>
        array(
            0 => 'ل',
            1 => 'ﻸ',
            2 => 'ﻻ',
            3 => 'ﻼ',
            4 => 'ﻟ',
            5 => 'ﻵ',
            6 => 'ﻶ',
            7 => 'ﻷ',
        ),
        'class_of_24' =>
        array(
            0 => 'م',
            1 => 'ﻣ',
        ),
        'class_of_25' =>
        array(
            0 => 'ن',
            1 => 'ﻧ',
        ),
        'class_of_26' =>
        array(
            0 => 'ﻫ',
            1 => 'ه',
            2 => 'ﻬ',
        ),
        'class_of_27' =>
        array(
            0 => 'و',
        ),
        'class_of_28' =>
        array(
            0 => 'ي',
            1 => 'ﻰ',
            2 => 'ﻲ',
            3 => 'ﻳ',
            4 => 'ى',
        ),
    );
    return $array;
}

//Example
header('Content-Type: text/html; charset=utf-8');
$array = arUnicode();
$result = array(0 => array('name' => "أحمد"), 2 => array('name' => "اشرف"), 3 => array('name' => "ثومة"),);
foreach ($array as $key => $val) {
    foreach ($result as $name) {
        if (in_array(firstUnicodeCharacter($name['name']), $val)) {
            $data[$val[0]][] = $name['name'];
        }
    }
}
print_r($data);
?>