<?php

$strings = ["Hello", "World", "PHP", "Programming"];

function countVowelAndWordReverse($strigArray) {
    $arrayLength = count($strigArray);
    for ($i = 0; $i < $arrayLength; $i++) {
        $word = $strigArray[$i];
        $wordLength = strlen($word) . "\n";

        $vowel = [];

        for ($j = 0; $j < $wordLength; $j++) {

            if (in_array($word[$j], ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'])) {
                array_push($vowel, $word[$j]);
            }
        }
        $vowelCount = count($vowel);
        $revString = strrev($word);
        echo "Original String: $word, Vowel Count: $vowelCount, Reversed String: $revString \n";
    }
}

countVowelAndWordReverse($strings);