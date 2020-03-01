<?php
     $name = $_POST['name'];
	 $email= $_POST['email'];
	 $password = $_POST['password'];
	 $re_password = $_POST['re_password'];
	 
	 $conn = new mysqli('localhost','root','','reg');
	 if($conn->connect_error){
	  die('Connection Failed  : '.$conn->connect_erro);
	  }
	  else{
	  $stmt = $conn->prepare("insert into registration(name, email, password, re_password) values(?, ?, ?, ?)");
	  $stmt->bind_param("ssss",$name, $email, $password, $re_password);
	  $stmt->execute();
	  echo "registration Successfully...";
	  $stmt->close();
	  $conn->close();
	  }
	  
?>