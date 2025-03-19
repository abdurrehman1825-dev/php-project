<?php

/* $arr = [1,2,3];
$arr2 = array(1,2,3);
$arrInsid = [1,[2,3]];

var_dump($arr); // to check or debug the array elements
echo "<br/>";
var_dump($arr2);
echo "<br/>";
var_dump($arrInsid);
echo "<br/>";
echo $arrInsid[0] */

//Associative array: array of key value paires
//one dimentional array

/* $response = [
    "employee"=>[
        "id"=>1,
        "name"=>"Abdur Rehman",
        "contacts"=>[
            "email"=>"abck@yahoo.com",
            "phone"=>"123456",
            "address"=>"dik",
        ]
    ]
        ];

echo $response["employee"]["contacts"]["address"];


//multi dimentional array
$prodcucts = [
    ["name"=>"Laptop","brand"=>"Dell","quantity"=>3,"price"=>4500],
    ["name"=>"Laptop","brand"=>"HP","quantity"=>3,"price"=>9000]
];
echo $prodcucts[1]["brand"]; */

$pop_arr = array("id"=>2,"name"=>"Abdur","address"=>"dik");
echo $pop_arr["address"];
echo "<br/>";
//echo array_pop($pop_arr);
echo "<br/>";
//echo $pop_arr["address"]; // it will give error
print_r(array_values($pop_arr)) ;
?>