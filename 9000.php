<?php
 $username=$_POST['username'];
 $password=$_POST['password'];
 $fullname=$_POST['FullName'];
 $email=$_POST['email'];
 
 $cryptpass=SHA1($password);
$dbc = mysqli_connect('127.0.0.1','root','Y123y123','db1'); 
if ($stmt = $mysqli->prepare("INSERT INTO formdata (username,password,fullname,email) VALUES ($username,$cryptpass,$fullname,$email)")) {
 
    // Bind the variables to the parameter as strings. 
    $stmt->bind_param("ssss", $username, $cryptpass,$fullname,$email);
 
    // Execute the statement.
    $stmt->execute();
 
    // Close the prepared statement.
    $stmt->close();
}
mysqli_close();
?>
