<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';
$message = ""; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $requiredKeys = ['vendorname', 'vendorcontact', 'catdesc', 'catbreed', 'catcolor', 'catage','catgender', 'catprice'];
    foreach($requiredKeys as $key) {
        if(!array_key_exists($key, $_POST)) {
            $message = "Key '$key' missing in form data!";
            die($message);
        }
    }
    $vendorName = mysqli_real_escape_string($con, $_POST['vendorname']);
    $vendorContact = mysqli_real_escape_string($con, $_POST['vendorcontact']);
    $catDescription = mysqli_real_escape_string($con, $_POST['catdesc']);
    $catBreed = mysqli_real_escape_string($con, $_POST['catbreed']);
    $catColor = mysqli_real_escape_string($con, $_POST['catcolor']);
    $catAge = mysqli_real_escape_string($con, $_POST['catage']);
    $catGender = mysqli_real_escape_string($con, $_POST['catgender']);
    $catPrice = mysqli_real_escape_string($con, $_POST['catprice']);



    // $target_file = "";

    // if(isset($_FILES['catimage']) && $_FILES['catimage']['error'] == 0) {
    //     $catImage = $_FILES['catimage']['name'];
    //     $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/"; 

    //     $target_file = $target_dir . basename($catImage);
    //     move_uploaded_file($_FILES["catimage"]["tmp_name"], $target_file);
    // } else {
    //     $message = 'File upload error!';
    //     die($message);
    // }

$target_file = "";
$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/";

if(isset($_FILES['catimage']) && $_FILES['catimage']['error'] == 0) {
    $catImage = $_FILES['catimage']['name'];
    
    $target_file = "/felinefinds/uploads/" . basename($catImage);
    $target_dir_file = $target_dir . basename($catImage);
    
    if (move_uploaded_file($_FILES["catimage"]["tmp_name"], $target_dir_file)) {
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

    $catIdQuery = "SELECT MAX(CAST(SUBSTRING(catid, 4) AS UNSIGNED)) AS max_cat_id FROM cats";
    $catIdResult = mysqli_query($con, $catIdQuery);
    $catIdRow = mysqli_fetch_assoc($catIdResult);
    $maxcatId = $catIdRow["max_cat_id"];
    $nextcatId = $maxcatId + 1;
    $catId = "CAT" . $nextcatId;

    $catQuery = "INSERT INTO cats (catid, catdesc, catbreed, catcolor, catage,catgender, catprice, catimage, vendorid) VALUES ('$catId', '$catDescription', '$catBreed', '$catColor', '$catAge','$catGender', '$catPrice', '$target_file', '$vendorId')";
    $catResult = mysqli_query($con, $catQuery);

    if ($vendorResult && $catResult) {
        $message = "Data inserted successfully!";
    } else {
        $message = "Data insertion failed!";
    }

    mysqli_close($con);
}

header("Location: cats.php?message=" . urlencode($message));

?>

