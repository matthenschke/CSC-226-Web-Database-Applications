<html>
<head>
  <title>Web Page Search Results</title>
</head>
<body>
<h1>Web Page Search Results</h1>
<?php
	
		include("loginPage.php");
  // create short variable names
  $searchtype=$_POST['searchtype'];
  $searchterm=trim($_POST['searchterm']);

  if (!$searchtype || !$searchterm) {
     echo 'You have not entered search details.  Please go back and try again.';
     exit;
  }
switch($searchtype) {
	case 'page_name':
	case 'request_method':
		break;
	default:
		echo '<p>That is not a valid search type <br />
			Please go back and try again!</p>';
		exit;
}

	$db = login();
  if (mysqli_connect_errno()) {
     echo 'Error: Could not connect to database.  Please try again later.';
     exit;
  }

  
  $query = "select page_name, visit_date, visit_time, previous_page,
           request_method, remote_host, remote_port
			FROM visitInfo where $searchtype = ?";
			


			
  $stmt = $db -> prepare($query);
  $stmt->bind_param('s',$searchterm);
  $stmt->execute();
  $stmt->store_result();
  $stmt->bind_result($name,$date,$time,$prev, $request, $host, $port);
  if ($stmt->num_rows == 0)
	  echo "No records found!";
  else
  echo "<p> Number of books found: ".$stmt->num_rows."</p>";
  while ($stmt->fetch()) {
     echo "<p><strong> Page Name: ".$name."</strong><br />";
     echo "Visit Date: ".$date."<br />";
	 echo "Visit Time: ". $time."<br />";
	 echo "Previous Page Name: ". $prev."<br />";
	 echo "Request Method: ". $request."<br />";
	 echo "Remote Host: ". $host."<br />";
	 echo "Remote Port: ". $port."<br />";
	 
  }

  $stmt->free_result();
  $db->close();

?>
</body>
</html>
