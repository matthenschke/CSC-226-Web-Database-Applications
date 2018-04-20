<html>
<body>
<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<?php

//Part 1

echo '<h1 align= "center">'. " Part I </h1> </br>";
//one dimensional array
$food = array( "g" => "grapes",  "c"=> "cake", "a"=> "apples",  
"e" => "eggs", "h" => "hamburger" , "d" => "donuts", "f" => "french fries", "b" => "bananas" );

//function calls
echo '<b> Unsorted Array </b> </br>';
printTable($food); //unsorted array function call
echo '<b> Sorted Array </b> </br>';
asort($food);
printTable($food);
unset($food[1]);
arsort($food);
echo '<b> Reverse Sorted Array </b> </br>';
printTable($food);
ksort($food);
echo '<b> Array Sorted by Key </b> </br>';
printTable($food);


//function that prints out table
function printTable($arr){
echo '<table style="width:30%">';
foreach($arr as $key => $value){
echo '<tr>';
echo '<td>' . $key . '</td>';
echo '<td>' . $value . '</td>';
echo '</tr>';
}
echo '</table>';
echo '</br>';
}

echo '<h1 align= "center">'. " Part II </h1> </br>";
?>

<pre>
<?php
//Part 2
//two dimensional array
$arr = array( array("username" => "joeDoe", "tweets" => 20000, "followers" => 45, "following" => 8), 
array("username" => "JohnD", "tweets" => 62000, "followers" => 123, "following" => 160),
 array("username" => "computerSavy", "tweets" => 75, "followers" => 1, "following" => 25), 
 array("username" => "myTwitterAccount", "tweets" => 1800, "followers" => 15, "following" => 6));


usort($arr, "tweets");
echo '<b> Array Sorted By Tweets </b> </br>';
print_r($arr);
echo '</br>';
usort($arr, "afollowers");
echo '<b> Ascending Array Sort based on Followers  </b> </br>';
print_r($arr);
echo '</br>';

//check to see if any array has less than 10 followers
for ($i = 0; $i < count($arr); $i++)
	if ($arr[$i]["followers"] < 10)
		unset($arr[$i]);
	


usort($arr, "dfollowers");
echo '<b> Descending Array Sort based on Followers and if followers are greater than 10 </b> </br>';
print_r($arr);
echo '</br>';

//sorting functions
function tweets($a, $b){
 if ($a["tweets"] == $b["tweets"])
	 return 0;
  if($a["tweets"] > $b["tweets"])
	 return 1;
  if($a["tweets"] < $b["tweets"])
 return -1;
}
function afollowers($a, $b){
	 if ($a["followers"] == $b["followers"])
	 return 0;
  if($a["followers"] > $b["followers"])
	 return 1;
  if($a["followers"] < $b["followers"])
      return -1;

}
function dfollowers($a, $b){
  	 if ($a["followers"] == $b["followers"])
	 return 0;
  if($a["followers"] > $b["followers"])
	 return -1;
  if($a["followers"] < $b["followers"])
      return 1;

}
?>
 <?php


if (isset($_POST["submit"])){
		  $user = htmlspecialchars($_POST['username']);
		  trim($user); //trimming the username
		  
		  

		  $found = false;
		  for($i =0; $i < count($arr); $i++)
			  if ($user === $arr[$i]['username']){
				  $found = true;
				  break;
				  
			  }
			  if ($found === false){
	$ar = array("username"=> $user, "tweets" => 0, "followers" => 0, "following" => 0);

	array_push($arr, $ar);
	echo '<b> Updated Array </b> </br>';
print_r($arr);
}
}
?>
 <form action = "<?php echo $_SERVER['PHP_SELF']; ?>"  method = "post">
<p> Username:
<input type= "text" name="username"  size = "15" 
maxlength= "30" /></p>
<p><input type= "submit" value="Submit" name= "submit" /> </p>








</form>

</pre>
</body>
</html>