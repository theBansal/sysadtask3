<?php
$username=$_POST['username'];
$password=$_POST['password'];

$dbc = mysqli_connect('127.0.0.1','root','Y123y123','db1'); 
if ($stmt = $mysqli->prepare("SELECT username,fullname,email FROM formdata WHERE username=$username and password=SHA1($password)")) {
 
    // Bind the variables to the parameter as strings. 
    $stmt->bind_param("ssss", $username, $cryptpass,$fullname,$email);
 
    // Execute the statement.
    $stmt->execute();
     
    // Get the variables from the query.
    $stmt->bind_result($un,$fn,$email);
 
    // Fetch the data.
    $stmt->fetch();
 
    // Display the data.
    printf(" Hello %s your username is  %s and your email is \n", $fn, $un, %email);
	
    // Close the prepared statement.
    $stmt->close();
}
mysqli_close();
?>
