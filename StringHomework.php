<?php

//Practice with Strings

$haystack = "<table><tr><th>PHP Coding</th>";
$needle = "<th>";
//1. print the position of the $needle in $haystack
echo "Question 1: </br>";
$pos = strpos($haystack, $needle);
echo $pos;
echo "</br>";


$haystack = "<table><tr><th>PHP Coding</th><th>Output</th>";
$needle = "<th>";
//2. print the position of the last time $needle is found in $haytack
echo "</br>";
echo "Question 2: </br>";
echo strrpos($haystack, $needle);
echo "</br>";



//3. How long is $haystack? Print the length.
echo "</br>";
echo "Question 3: </br>";
echo strlen($haystack);
echo "</br>";


$haystack = "<table><tr><th>PHP Coding</th><th>Output</th>";
$newneedle = '</th>';


//4. Use answer 1. (the position of <th>), and strlen on the 
//$needle from answer 1., and another call to strpos with $newneedle
// to get
//the length of the first table header in $haystack (length of 'PHP Coding')
echo "</br>";
echo "Question 4: </br>";
$len = strlen($needle);
$newneedle = "PHP Coding";
$pos1 = strpos($haystack, $newneedle, $pos);
echo strlen(substr($haystack, $pos1, strlen($newneedle))); 
echo "</br>";


//let us look at a DNA example
$haystack = "ACAAGACACATGCCACATTGTCC";
$needle = "ACA";

//4. print out the number of times $needle
//occurs (nonoverlapping) in haystack
//TT occurs once in TTT!

echo substr_count($haystack, $needle);
echo "</br>";


//5. Print out the number of time $needle occurs in 
//$haystack. Count overlapping examples as well!
//so TT occurs two times in TTT, for example!
//NOTE: This is exactly the code we reveiwed in class
echo "</br>";
echo "Question 5: </br>";
$haystack = "AAAAACAAAACAAGAAAAA";
$needle = "AAA";

$offset = 0;
$count = 0;
while(($offset = strpos($haystack, $needle, $offset)) !== FALSE){
$count++;
$offset++;

}
echo $count . "</br>";



$subject = "Cloud computing works!";

//7. Print out the $subject with
//all  letter 'o' replaced with the letter 'e'
echo "</br>";
echo "Question 7: </br>";
$phrase1 = str_replace('o', 'e', $subject);
echo $phrase1 . "</br>";

//8. print out $subject where replace any two 
//spaces in a row '  ' with a - and
// any single space ' ' with a *
//so the example above prints
//Keep*your--spacing-*perfect!";
echo "</br>";
echo "Question 8: </br>";
$subject = "Keep your    spacing   perfect!";
$subject = str_replace("  ", "-", $subject);
$subject = str_replace(" ", "*", $subject);
echo $subject . "</br>";




//9. create an array that has the colors of the above string
//in reverse order (so $colors[0] is 'violet')
//You might need the array_reverse function
//look it up on php.net
   echo "</br>";
    echo "Question 9: </br>";
  $string = "red orange yellow green blue indigo violet";
 $pieces = array_reverse(explode(' ', $string));
 echo "<pre>";
  print_r($pieces);
 
echo "</pre>";
//10. Print out the newly created array in the new order using
//foreach, in UPPER CASE
echo "</br>";
echo "Question 10: </br>";
foreach ($pieces as $values){
  echo strtoupper($values);
   echo "</br>";
  }



?>
