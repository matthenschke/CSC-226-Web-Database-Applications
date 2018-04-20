<html>
<head> <title> First PHP Project </title>
<h1 align = "center"> Testing PHP variables </h1>
<body>
<?php
//data for the website
$name = "Matthew Henschke";
$credits = 15;
$dble = 3.91;
?>

<style>
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>
<table style="width:30% " align= "center">
<tr>
<th> 
<?php echo gettype($name); ?> </th>
<td>
<?php echo $name; ?> </td> </tr> 
<tr>
<th> 
<?php echo gettype($credits); ?> </th>
<td>
<?php echo $credits; ?> </td> </tr> 
</tr>
<tr>
<th> 
<?php echo gettype($dble); ?> </th>
<td>
<?php echo $dble;?> </td> </tr> 
</tr>
</table>
</head>
</body>
</html>