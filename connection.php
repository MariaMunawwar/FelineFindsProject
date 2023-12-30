<?php
$con=mysqli_connect("localhost","root","");
// if(!$con){
//     echo"<h1>Unable to connect to web server</h1>";
//     die();
// }
// else{
//     echo"Conected to web server successfully";
// }
$db="Felinefinds";
$results=mysqli_select_db($con,$db);
// if(!$results){
//     echo"<h1>Unable to connect to database</h1>";
//     die();
// }
// else{
//     echo"Conected to database successfully";
// }

?>