<?php

/**
 * retrieve a value from a deeply nested array using "dot" notation
 */
function array_get($array, $path, $default="")  {

}


$product = [
	"id" => 1,
	"title" => "iPhone 16",
	"price" => [
		"default" => 5999,
		"pro" => 6999,
		"pro_max" => [
			"_256" => 7999,
			"_512" => 8999
		]
	]
];

// example usage
array_get($product, 'not.exist'); // expect "" 
array_get($product, 'price.pro'); // expect: 6999
array_get($product, 'price.pro_max._512'); // expect: 8999 
