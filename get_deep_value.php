<?php

/**
 * retrieve a value from a deeply nested array using "dot" notation
 */
function get_deep_value($array, $path, $default="")  {

}


$product = [
	"id" => 1,
	"feature_image" => [
		'large' => 'http://example.com/images/large.jpg',
		'medium' => 'http://example.com/images/medium.jpg',
		'small' => 'http://example.com/images/small.jpg',
	]
];

// example usage
get_deep_value($product, 'not.exist'); // "" 
get_deep_value($product, 'feature_image.large'); // http://example.com/images/large.jpg
get_deep_value($product, 'feature_image.small'); // http://example.com/images/small.jpg
