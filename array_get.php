<?php

// PHP online Sandbox: https://onlinephp.io/  

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
echo array_get($product, 'not.exist'); // expect "" 
echo array_get($product, 'price.pro'); // expect: 6999
echo array_get($product, 'price.pro_max._512'); // expect: 8999 
