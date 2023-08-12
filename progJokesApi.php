<?php
// Random programming jokes generator
// Coded by: Bill Lugo
// API: https://official-joke-api.appspot.com
// Created: 8/2023

const URL = "https://official-joke-api.appspot.com/jokes/programming/random";

class joke
{
	public $setup = "";
	public $punchline = "";
}

$joke1 = new joke;

// ------ hard-coded test or fallback values
$joke1->setup = "Where did the API go to eat?";
$joke1->punchline = "To the RESTaurant.";

$response = file_get_contents(URL);
$responseObject = json_decode($response);

// ------- store downloaded joke data into object
$joke1->setup = $responseObject[0]->{"setup"};
$joke1->punchline = $responseObject[0]->{"punchline"};


// ----- Output
echo $joke1->setup;
echo "<br>";
echo $joke1->punchline;
?>