<?php

$text = "The quick brown fox jumps over the lazy dog.";
 //$resultText = strtolower($text);

  $resultText = (str_replace("brown","red",$text,$i));

 print_r(strtolower($resultText));
