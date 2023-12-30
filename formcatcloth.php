<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';
$message = ""; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $requiredKeys = ['vendorname', 'vendorcontact', 'clothdesc', 'clothtype', 'clothcolor','clothage', 'clothsize','clothmaterial', 'clothprice'];
    foreach($requiredKeys as $key) {
        if(!array_key_exists($key, $_POST)) {
            $message = "Key '$key' missing in form data!";
            die($message);
        }
    }
    $vendorName = mysqli_real_escape_string($con, $_POST['vendorname']);
    $vendorContact = mysqli_real_escape_string($con, $_POST['vendorcontact']);
    $clothDescription = mysqli_real_escape_string($con, $_POST['clothdesc']);
    $clothType = mysqli_real_escape_string($con, $_POST['clothtype']);
    $clothColor = mysqli_real_escape_string($con, $_POST['clothcolor']);
    $clothAge = mysqli_real_escape_string($con, $_POST['clothage']);
    $clothSize = mysqli_real_escape_string($con, $_POST['clothsize']);
    $clothMaterial = mysqli_real_escape_string($con, $_POST['clothmaterial']);
    $clothPrice = mysqli_real_escape_string($con, $_POST['clothprice']);

    // $target_file = "";

    // if(isset($_FILES['clothimage']) && $_FILES['clothimage']['error'] == 0) {
    //     $clothImage = $_FILES['clothimage']['name'];
    //     $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/"; 

    //     $target_file = $target_dir . basename($clothImage);
    //     move_uploaded_file($_FILES["clothimage"]["tmp_name"], $target_file);
    // } else {
    //     $message = 'File upload error!';
    //     die($message);
    // }

    $target_file = "";
$target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/";

if(isset($_FILES['clothimage']) && $_FILES['clothimage']['error'] == 0) {
    $clothImage = $_FILES['clothimage']['name'];
    
    $target_file = "/felinefinds/uploads/" . basename($clothImage);
    $target_dir_file = $target_dir . basename($clothImage);
    
    if (move_uploaded_file($_FILES["clothimage"]["tmp_name"], $target_dir_file)) {
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

    $clothIdQuery = "SELECT MAX(CAST(SUBSTRING(clothid, 2) AS UNSIGNED)) AS max_cloth_id FROM catcloth";
    $clothIdResult = mysqli_query($con, $clothIdQuery);
    $clothIdRow = mysqli_fetch_assoc($clothIdResult);
    $maxclothId = $clothIdRow["max_cloth_id"];
    $nextclothId = $maxclothId + 1;
    $clothId = "C" . $nextclothId;

    $catclothQuery = "INSERT INTO catcloth (clothid, clothdesc, clothtype, clothcolor, clothsize,clothage,clothmaterial, clothprice, clothimage, vendorid) VALUES ('$clothId', '$clothDescription', '$clothType', '$clothColor', '$clothSize','$clothAge','$clothMaterial', '$clothPrice', '$target_file', '$vendorId')";
    $catclothResult = mysqli_query($con, $catclothQuery);

    if ($vendorResult && $catclothResult) {
        $message = "Data inserted successfully!";
    } else {
        $message = "Data insertion failed!";
    }

    mysqli_close($con);
}

header("Location: catcloth.php?message=" . urlencode($message));


?>