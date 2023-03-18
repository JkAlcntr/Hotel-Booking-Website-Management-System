<?php

  $servername = 'localhost';
  $username = 'root';
  $password = '';
  $database = 'hbms';

  $conn = mysqli_connect($servername,$username,$password,$database);

  if(!$conn){
  	die("Cannot connect to Database" . mysqli_connect_error());
  }

  function filteration($data){
  	foreach ($data as $key => $value) {
  		$data[$key] = trim($value);
  		$data[$key] = stripcslashes($value);
  		$data[$key] = htmlspecialchars($value);	
  		$data[$key] = strip_tags($value);
  	}
  	return $data;
  }

  function select($sql,$values,$datatypes)
  {
  	$conn = $GLOBALS["conn"];
  	if($stmt = mysqli_prepare($conn,$sql))
	{
  		mysqli_stmt_bind_param($stmt,$datatypes,...$values);
  		if(mysqli_stmt_execute($stmt)){
  			$res = mysqli_stmt_get_result($stmt);
  			mysqli_stmt_close($stmt);
  			return $res;
  		}
  		else{
  			mysqli_stmt_close($stmt);
  			die("Query cannot be executed - Select");
  		}
  	}
  	else{
  		die("Query cannot be executed - Select");
  	}
  }

  function update($sql,$values,$datatypes)
  {
  	$conn = $GLOBALS["conn"];
  	if($stmt = mysqli_prepare($conn,$sql))
	{
  		mysqli_stmt_bind_param($stmt,$datatypes,...$values);
  		if(mysqli_stmt_execute($stmt)){
  			$res = mysqli_stmt_affected_rows($stmt);
  			mysqli_stmt_close($stmt);
  			return $res;
  		}
  		else{
  			mysqli_stmt_close($stmt);
  			die("Query cannot be executed - Update");
  		}
  	}
  	else{
  		die("Query cannot be executed - Update");
  	}
  }

?>