<?php
$text = "Beyond these basic elements, a complete sentence must also express a complete thought.";
function checkInText($word, $text){
	return preg_match("/\b".$word."\b/", $text);
}
echo "_____1. ______\n";
echo "To exit loop press Enter without input.\n";
echo "\$text = \"Beyond these basic elements, a complete sentence must also express a complete thought.\"\n";
echo "Find word in \$text, function example:\n";
echo "______________\n";
while(1){
	$line = readline("Word: ");
	if($line == "")break;
	echo checkInText($line, $text) ? "Match found.\n" : "Match not found.\n";
}
echo "_____2. ______\n";
for($i = 1; $i <= 100; $i++){
	$val = 0;
	if($i % 3 == 0) $val += 1;
	if($i % 5 == 0) $val += 10;
	switch ($val){
		case 0:
			echo $i."\n";
			break;
		case 1:
			echo "Fizz\n";
			break;
		case 10:
			echo "Buzz\n";
			break;
		case 11:
			echo "FizzBuzz\n";
			break;
	}
}
