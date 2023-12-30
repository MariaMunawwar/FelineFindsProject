<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

include 'connection.php';
$message = ""; 

if($_SERVER['REQUEST_METHOD'] == 'POST') {

    $requiredKeys = ['vendorname', 'vendorcontact', 'toydesc', 'toytype', 'toycolor','toyactivitylevel', 'toysize','toymaterial', 'toyprice'];
    foreach($requiredKeys as $key) {
        if(!array_key_exists($key, $_POST)) {
            $message = "Key '$key' missing in form data!";
            die($message);
        }
    }
    $vendorName = mysqli_real_escape_string($con, $_POST['vendorname']);
    $vendorContact = mysqli_real_escape_string($con, $_POST['vendorcontact']);
    $toyDescription = mysqli_real_escape_string($con, $_POST['toydesc']);
    $toyType = mysqli_real_escape_string($con, $_POST['toytype']);
    $toyColor = mysqli_real_escape_string($con, $_POST['toycolor']);
    $toyActivityLevel = mysqli_real_escape_string($con, $_POST['toyactivitylevel']);
    $toySize = mysqli_real_escape_string($con, $_POST['toysize']);
    $toyMaterial = mysqli_real_escape_string($con, $_POST['toymaterial']);
    $toyPrice = mysqli_real_escape_string($con, $_POST['toyprice']);

    $target_file = "";
    $target_dir = "/Applications/XAMPP/xamppfiles/htdocs/felinefinds/uploads/";
    
    if(isset($_FILES['toyimage']) && $_FILES['toyimage']['error'] == 0) {
        $toyImage = $_FILES['toyimage']['name'];
        
        $target_file = "/felinefinds/uploads/" . basename($toyImage); // full file system path
        $target_dir_file = $target_dir . basename($toyImage); //web-relative path in the database
        
        if (move_uploaded_file($_FILES["toyimage"]["tmp_name"], $target_dir_file)) {
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

    $toyIdQuery = "SELECT MAX(CAST(SUBSTRING(toyid, 2) AS UNSIGNED)) AS max_toy_id FROM cattoy";
    $toyIdResult = mysqli_query($con, $toyIdQuery);
    $toyIdRow = mysqli_fetch_assoc($toyIdResult);
    $maxtoyId = $toyIdRow["max_toy_id"];
    $nexttoyId = $maxtoyId + 1;
    $toyId = "T" . $nexttoyId;

    $cattoyQuery = "INSERT INTO cattoy (toyid, toydesc, toytype, toycolor, toysize,toyactivitylevel,toymaterial, toyprice, toyimage, vendorid) VALUES ('$toyId', '$toyDescription', '$toyType', '$toyColor', '$toySize','$toyActivityLevel','$toyMaterial', '$toyPrice', '$target_file', '$vendorId')";
    $cattoyResult = mysqli_query($con, $cattoyQuery);

    if ($vendorResult && $cattoyResult) {
        $message = "Data inserted successfully!";
    } else {
        $message = "Data insertion failed!";
    }

    mysqli_close($con);
}

header("Location: cattoy.php?message=" . urlencode($message));

?>