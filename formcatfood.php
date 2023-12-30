<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';
$message = ""; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $requiredKeys = ['vendorname', 'vendorcontact', 'fooddesc', 'foodtype', 'foodweight', 'foodbrand', 'foodprice'];
    foreach($requiredKeys as $key) {
        if(!array_key_exists($key, $_POST)) {
            $message = "Key '$key' missing in form data!";
            die($message);
        }
    }

    $vendorName = mysqli_real_escape_string($con, $_POST['vendorname']);
    $vendorContact = mysqli_real_escape_string($con, $_POST['vendorcontact']);
    $foodDescription = mysqli_real_escape_string($con, $_POST['fooddesc']);
    $foodType = mysqli_real_escape_string($con, $_POST['foodtype']);
    $foodWeight = mysqli_real_escape_string($con, $_POST['foodweight']);
    $foodBrand = mysqli_real_escape_string($con, $_POST['foodbrand']);
    $foodPrice = mysqli_real_escape_string($con, $_POST['foodprice']);

    // $target_file = "";

    // if(isset($_FILES['foodimage']) && $_FILES['foodimage']['error'] == 0) {
    //     $foodImage = $_FILES['foodimage']['name'];
    //     $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/"; 

    //     $target_file = $target_dir . basename($foodImage);
    //     move_uploaded_file($_FILES["foodimage"]["tmp_name"], $target_file);
    // } else {
    //     $message = 'File upload error!';
    //     die($message);
    // }

    $target_file = "";
$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/";

if(isset($_FILES['foodimage']) && $_FILES['foodimage']['error'] == 0) {
    $foodImage = $_FILES['foodimage']['name'];
    
    $target_file = "/felinefinds/uploads/" . basename($catImage);
    $target_dir_file = $target_dir . basename($catImage);
    
    if (move_uploaded_file($_FILES["foodimage"]["tmp_name"], $target_dir_file)) {
        // File uploaded successfully
    } else {
        $message = 'File upload error!';
        die($message);
    }
} else {
    $message = 'File upload error!';
    die($message);
}

    $vendorIdQuery = "SELECT MAX(CAST(SUBSTRING(vendorid, 2) AS UNSIGNED)) AS max_vendor_id FROM vendor";
    $vendorIdResult = mysqli_query($con, $vendorIdQuery);
    $vendorIdRow = mysqli_fetch_assoc($vendorIdResult);
    $maxVendorId = $vendorIdRow["max_vendor_id"];
    $nextVendorId = $maxVendorId + 1;
    $vendorId = "V" . $nextVendorId;

    $vendorQuery = "INSERT INTO vendor (vendorid, vendorname, vendorcontact) VALUES ('$vendorId', '$vendorName', '$vendorContact')";
    $vendorResult = mysqli_query($con, $vendorQuery);

    $foodIdQuery = "SELECT MAX(CAST(SUBSTRING(foodid, 2) AS UNSIGNED)) AS max_food_id FROM catfood";
    $foodIdResult = mysqli_query($con, $foodIdQuery);
    $foodIdRow = mysqli_fetch_assoc($foodIdResult);
    $maxFoodId = $foodIdRow["max_food_id"];
    $nextFoodId = $maxFoodId + 1;
    $foodId = "F" . $nextFoodId;

    $catFoodQuery = "INSERT INTO catfood (foodid, fooddesc, foodtype, foodweight, foodbrand, foodprice, foodimage, vendorid) VALUES ('$foodId', '$foodDescription', '$foodType', '$foodWeight', '$foodBrand', '$foodPrice', '$target_file', '$vendorId')";
    $catFoodResult = mysqli_query($con, $catFoodQuery);

    if ($vendorResult && $catFoodResult) {
        $message = "Data inserted successfully!";
    } else {
        $message = "Data insertion failed!";
    }

    mysqli_close($con);
}

header("Location: catfood.php?message=" . urlencode($message));

?>

