<?php
$promos = [
    "data 8" => [
        "number_of_student" => 20,
        "diplomation" => "bac+8",

    ],

    "starting-dev" => [
        "number_of_student" => 14,
        "diplomation" => "bac+2",
    ],

    "devops" => [
        "number_of_student" => 16,
        "diplomation" => "bac+2",
    ],
];

foreach($promos as $key => $promo){
    echo " \n La promo : $key a \n" . $promo["number_of_student"]  . "eleves";
    echo " \n La formation est diplomante d'un niveau \n" . $promo["diplomation"];
}