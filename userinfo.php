<?php

$con = mysqli_connect('localhost:3306', 'root');

if($con){
    // echo "Connection successful";
}else{
    //  echo "No connection";
}

mysqli_select_db($con, 'youtubeuserdata');

$user = $_POST['user'];
$email = $_POST['email'];
$mobile = $_POST['mobile'];
$comments = $_POST['comments'];

$query = " insert into userinfodata (user, email, mobile, comment)
values ('$user', '$email', '$mobile', '$comments') ";

//echo "$query";

mysqli_query($con, $query);


echo '<script>alert("Saved Succesfully"); 
window.location.href="index.php"</script>';


// header('location:index.php');



?>


