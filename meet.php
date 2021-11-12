<?php
header("Content-Type: application/json; charset=UTF-8");

function get_random_words() {
	$adjectives = file('adjectives.txt');
	$adverbs = file('adverbs.txt');
	$nouns = file('nouns.txt');
	$verbs = file('verbs.txt');

	shuffle($adjectives);
	shuffle($adverbs);
	shuffle($nouns);
	shuffle($verbs);

	return trim($adjectives[0]).trim($adverbs[0]).trim($nouns[0]).trim($verbs[0]);
}


$uniq_id = get_random_words();
$randomizer = mt_rand(1111, 9999);

$base_url = 'https://kmeet.infomaniak.com/';

$ret = array(
	'response_type' => 'in_channel',
	'text' => "Hey ! Let's meet :grinning: $base_url$uniq_id$randomizer"
);

echo json_encode($ret);
