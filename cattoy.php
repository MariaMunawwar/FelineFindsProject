<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=PT+Sans&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Cats Toys</title>
    <style>
        * {
            overflow-x: hidden;
        }
        body {
            background-color: #f0ebeb;
        }

        /* navbar */
        .navbar {
            background-color: #000000;
            height: 60px;
            display: flex;
            align-items: center;
            padding-left: 20px;
            z-index: 2;
            font-family: 'Nunito', sans-serif;
        }

        .navbar ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
        }

        .navbar li {
            margin-right: 20px;
        }

        .navbar a {
            text-decoration: none;
            color: #c59958;
        }

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            color: #c59958;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.2);
            z-index: 1;
            top: 100%;
            left: 0;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }

        .dropdown-content a {
            display: block;
            padding: 10px;
        }

        .logo {
            font-weight: bold;
            padding-right: 15px;
            font-size: 25px;
            padding-left: 0px;
        }

        .logo1 {
            margin-right: 2px;
            margin: 0;
            padding: 0;
        }

        /* footer */
        .footer {
            background-color: black;
            margin-top: 50px;
            padding: 35px 0;
            text-align: center;
            position: scroll;
            width: 100%;
        }

        .footer-content {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
        }

        .footer-section {
            margin: 25px;
        }

        .footer-section h3 {
            color: #c59958;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer-section a {
            color: #c59958;
            text-decoration: none;
            margin: 10px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #D7B996;
            /* light brown */
        }

        .footer-text {
            color: #c59958;
            font-size: 14px;
            margin-top: 20px;
        }

        /* sorting and filters */
        .header {
            display: flex;
            align-items: center;
            background-color: #e1dddd;
            padding: 6px;
        }

        .filter-icon {
            flex: 0 0 auto;
            padding: 10px;
            color: #555;
            cursor: pointer;
        }

        .total-products {
            flex: 1 1 auto;
            text-align: center;
            font-size: 18px;
        }

        .sort-options {
            flex: 0 0 auto;
        }

        .sort-select {
            background-color: #a8bda8;
            width: 230px;
            color: black;
            border: 2.5px solid black;
            border-radius: 5px;
            padding: 5px;
            height: 50px;
            cursor: pointer;
            font-family: 'Montserrat', sans-serif;
        }

        .sort-options {
            font-size: 18px;
            padding: 2px;
        }

        /* carousel */
        .carousel {
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-image: url(cattoy.jpeg);
            background-color: rgb(235,233,234);
            background-repeat: no-repeat;
            /* background-size: 100% 100%; */
            background-position: right;
            background-attachment: scroll;
            height: 520px;
            padding-top: 0px;
            border-bottom: 5px solid black;
        }

        .pheader {
            padding-left: 10px;
            max-width: 50vw;
            color: #000000;
            font-family: 'Raleway', sans-serif;
        }

        .pheader h2 {
            font-size: 50px;
            font-weight: 600;
        }

        .pheader p {
            font-size: 30px;
        }

        /* all items */
        .items {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            grid-gap: 35px;
            padding: 10px 20px;
            margin-top:12px;
        }
        .box1,
        .box2,
        .box3,
        .box4,
        .box5,
        .box6 {
    padding: 10px;
    width: 95%;  /* Set a width */
    height: 95%;  /* Set a height */
}


        .box1 {
            grid-row: 1/2;
            grid-column: 1/2;
            border: 2px solid black;
            margin: 10px;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

        .box1:hover,
        .box2:hover,
        .box3:hover,
        .box4:hover,
        .box5:hover,
        .box6:hover{
            transform: scale(1.1);
        }

        .box2 {
            grid-row: 1/2;
            grid-column: 2/3;
            border: 2px solid black;
            margin: 10px;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

        .box3 {
            grid-row: 1/2;
            margin: 10px;
            grid-column: 3/4;
            border: 2px solid black;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

        .box4 {
            grid-row: 2/3;
            margin: 10px;
            grid-column: 1/2;
            border: 2px solid black;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

        .box5 {
            grid-row: 2/3;
            grid-column: 2/3;
            border: 2px solid black;
            margin: 10px;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

        .box6 {
            grid-row: 2/3;
            grid-column: 3/4;
            border: 2px solid black;
            margin: 10px;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }

    
        .vmore {
            float: right;
            border: 2px solid black;
            background-color: #c59958;
            color: #000000;
            border-radius: 5px;
            font-size: 20px;
            margin-right: 4px;
            font-family: 'Poppins', sans-serif;
        }

        .pdesc {
            font-family: 'PT Sans', sans-serif;
            font-size: 15px;
        }

        .prpice {
            font-family: 'PT Sans', sans-serif;
            font-size: 32px;
            font-weight: 400;
        }
    </style>
</head>

<body>
<navbar>
        <div class="navbar">
            <ul>
                <li class="logo1"><a href="#"><img src="logo1.png" height="45px" alt="FelineFinds Logo"></a></li>
                <li class="logo"><a href="#"><strong>FelineFinds</strong></a></li>
                <li><a href="main.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="http://localhost/felinefinds/cats.php">Cats</a></li>
                <li class="dropdown">
                    <a href="http://localhost/felinefinds/catcloth.php">Accessories</a>
                    <div class="dropdown-content">
                        <a href="http://localhost/felinefinds/catfood.php">Food</a>
                        <a href="http://localhost/felinefinds/cattoy.php">Toys</a>
                        <a href="http://localhost/felinefinds/catcloth.php">Clothing</a>
                    </div>
                </li>
                <li><a href="blog1.html">Blogs</a></li>
                <li><a href="http://127.0.0.1:5001">Meow Medic</a></li>
                <li><a href="http://localhost/felinefinds/vets.php">Vets</a></li>
                <li><a href="contact.html">Contact Us</a></li>
            </ul>
            <div class="mx-2">
                <button type="button" class="btn btn-secondary" data-bs-toggle="modal" data-bs-target="#catsalemodal">
                    Create listing
                </button>
            </div>
        </div>

        
    </navbar>

    <!-- FILTER MODAL -->
    <div class="modal fade" id="filtermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Filter Options</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <!-- Filter options -->
                    <div class="form-group">
                        <label for="breedFilter">Type:</label>
                        <select class="form-select" id="breedFilter">
                            <option value="">All Products</option>
                            <option value="persian">Feather toys</option>
                            <option value="siamese">Ball toys</option>
                            <option value="siamese">Plush toys</option>
                            <!-- Add more breed options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="colorFilter">Color:</label>
                        <select class="form-select" id="colorFilter">
                            <option value="">All Colors</option>
                            <option value="black">Black</option>
                            <option value="white">White</option>
                            <option value="white">Red</option>
                            <option value="white">Blue</option>
                            <option value="white">Pink</option>
                            <option value="white">Yellow</option>
                            <option value="white">Orange</option>
                            <!-- Add more color options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="priceFilter">Price:</label>
                        <select class="form-select" id="priceFilter">
                            <option value="">All Prices</option>
                            <option value="low">Rs 500 - Rs 1000</option>
                            <option value="low">Rs 1000 - Rs 1500</option>
                            <option value="low">Rs 1500 - Rs 2000</option>
                            <option value="low">Rs 2000 and higher</option>
                            <!-- Add more price options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genderfilter">Material</label>
                        <select class="form-select" id="genderfilter">
                            <option value="">All materials</option>
                            <option value="low">Rubber</option>
                            <option value="high">Fabric</option>
                            <option value="high">Rope</option>
                            <option value="high">Plastic</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agefilter">Activity Level:</label>
                        <select class="form-select" id="agefilter">
                            <option value="">All levels</option>
                            <option value="low">Active Toys</option>
                            <option value="high">Moderate Toys</option>
                            <option value="high">Calm Toys</option>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Apply Filter</button>
                </div>
            </div>
        </div>
    </div>
   <!-- PHP FOR CAT TOYS MODAL 1 -->
   <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal1" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>

                <!-- PHP FOR CAT TOYS MODAL 2 -->
    <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 1,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal2" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>

                <!-- PHP FOR CAT TOYS MODAL 3 -->
    <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 2,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal3" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>

                <!-- PHP FOR CAT TOYS MODAL 4 -->
    <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 3,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal4" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>


                <!-- PHP FOR CAT TOYS MODAL 5 -->
    <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 4,1";
$result=mysqli_query($con, $query);
// if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal5" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                // }else {
                //     echo "No data found";
                // }
                mysqli_free_result($result);
            ?>

                <!-- PHP FOR CAT TOYS MODAL 6 -->
    <?php
include 'connection.php';
$query="SELECT cattoy.*, vendor.vendorcontact
FROM cattoy
INNER JOIN vendor ON cattoy.vendorid = vendor.vendorid
LIMIT 5,1";
$result=mysqli_query($con, $query);
// if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toyid=$row['toyid'];
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
    $toytype=$row['toytype'];
    $toycolor=$row['toycolor'];
    $toymaterial=$row['toymaterial'];
    $toysize=$row['toysize'];
    $toyactivitylevel=$row['toyactivitylevel'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS TOYS -->
    <div class="modal fade modal-xl" id="catstoymodal6" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Product Description</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    
                        <div class="row">
                          <div class="col-md-6">
                            <img src="<?php echo $toyimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $toyprice ?></h3>
                            <p>Description: <?php echo $toydesc ?></p>
                            <p>Type: <?php echo $toytype ?></p>
                            <p>Material: <?php echo $toymaterial ?></p>
                            <p>Activity Level: <?php echo $toyactivitylevel ?></p>
                            <p>Color: <?php echo $toycolor ?></p>
                            <p>Size: <?php echo $toysize ?></p>
                          </div>
                        </div>
                      

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">
                    <a id="anchor1" href="https://web.whatsapp.com/send?phone=<?php echo $vendorContact ?>" target="_blank" rel="noopener noreferrer" class="btn btn-success">Chat with Vendor</a>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <?php
                // }else {
                //     echo "No data found";
                // }
                mysqli_free_result($result);
            ?>

<?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = ""; // Initialize the $message variable

// Check if a message is passed
if(isset($_GET['message'])) {
    $message = $_GET['message'];
}

?>

<!-- listings for cats modal -->
<div class="modal fade" id="catsalemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Want to sell Cat toys?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="formcattoy.php" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="vendorname">Vendor's Name</label>
                            <input type="text" class="form-control" id="vendorname" name="vendorname">
                        </div>
                        <div class="form-group">
                            <label for="vendorcontact">Vendor's Contact Number</label>
                            <input type="text" class="form-control" id="vendorcontact" name="vendorcontact">
                        </div>
                        <div class="form-group">
                            <label for="toydesc">Description</label>
                            <input type="text" class="form-control" id="toydesc" name="toydesc">
                        </div>
                        <div class="form-group">
                            <label for="toytype">Type</label>
                            <input type="text" class="form-control" id="toytype" name="toytype">
                        </div>
                        <div class="form-group">
                            <label for="toycolor">Color</label>
                            <input type="text" class="form-control" id="toycolor" name="toycolor">
                        </div>
                        <div class="form-group">
                            <label for="toysize">Size</label>
                            <input type="text" class="form-control" id="toysize" name="toysize">
                        </div>
                        <div class="form-group">
                            <label for="toymaterial">Material</label>
                            <input type="text" class="form-control" id="toymaterial" name="toymaterial">
                        </div>
                        <div class="form-group">
                            <label for="toyprice">Price</label>
                            <input type="number" class="form-control" id="toyprice" name="toyprice">
                        </div>
                        <div class="form-group">
                            <label for="toyactivitylevel">Activity Level</label>
                            <input type="text" class="form-control" id="toyactivitylevel" name="toyactivitylevel">
                        </div>
                        <div class="form-group">
                            <label for="toyimage">Add Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="toyimage" name="toyimage" accept="image/*">
                            </div>
                        </div>
                        <button type="submit" name="savechanges" value="submit" class="btn btn-success">Save changes</button>
                        <p><?php echo $message; ?></p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
    
    <main>
        <div class="carousel">
            <div class="pheader">
                <h2>Ready to unleash toys that make your kitty's heart skip a beat?</h2>
                <p>Step into the enchanting world of FelineFinds, where kitty dreams are made of whimsical play!</p>
            </div>
        </div>
        <div class="header">
            <div class="filter-icon" data-bs-toggle="modal" data-bs-target="#filtermodal">
                <img src="filter2.png" alt="Filter" height="45px">
            </div>
            <div class="total-products">
                Total Products: <span class="count">6</span>
            </div>
            <div class="sort-options">
                <select class="sort-select">
                    <option value="default">Sort By</option>
                    <option value="featured">Featured</option>
                    <option value="htol">Price,High to Low</option>
                    <option value="ltoh">Price,Low to High</option>
                </select>
            </div>
        </div>
        <div class="items">
                <!-- box 1 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];

        ?>
            <div class="box1">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice; ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal1">View More</button>
            </div>
            <?php
                }else {
                    echo "No dataset found";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 2 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 1,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];

        ?>
            <div class="box2">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice; ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal2">View More</button>
            </div>
            <?php
                }else {
                    echo "No dataset found";
                }
                mysqli_free_result($result);
            ?>

            <!-- box 3 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 2,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];

        ?>
            <div class="box3">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal3">View More</button>
            </div>
            <?php
                }else {
                    echo "No dataset found";
                }
                mysqli_free_result($result);
            ?>

            <!-- box 4 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 3,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];

        ?>
            <div class="box4">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice; ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal4">View More</button>
            </div>
            <?php
                }else {
                    echo "No dataset found";
                }
                mysqli_free_result($result);
            ?>

            <!-- box 5 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 4,1 ";
$result=mysqli_query($con, $query);
    if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];

        ?>
            <div class="box5">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice; ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal5">View More</button>
            </div>
            <?php
                }else {
                 echo "";
                }
                mysqli_free_result($result);
            ?>

            <!-- box 6 php -->
        <?php
include 'connection.php';
$query="SELECT * from cattoy limit 5,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $toydesc=$row['toydesc'];
    $toyimage=$row['toyimage'];
    $toyprice=$row['toyprice'];
        ?>
            <div class="box6">
                <img src="<?php echo $toyimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $toyprice; ?></h5>
                <p class="pdesc"><?php echo $toydesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catstoymodal6">View More</button>
            </div>
            <?php
                }else {
                    echo "";
                }
                mysqli_free_result($result);
            ?>
            
        </div>
    </main>

    <footer>
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About</h3>
                    <a href="about.html">Mission</a>
                    <a href="about.html#s1">Team</a>
                </div>
                <div class="footer-section">
                    <h3>Services</h3>
                    <a href="blogs.html">Cat Grooming</a>
                    <a href="cats.html">Cat Adoption</a>
                    <a href="accessories.html">Cat Accessories</a>
                </div>
                <div class="footer-section">
                    <h3>Contact</h3>
                    <a href="contact.html">Email</a>
                    <a href="contact.html">Phone</a>
                    <a href="contact.html">Address</a>
                </div>
            </div>
            <p class="footer-text">&copy; 2023 FelineFinds. All rights reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8"
        crossorigin="anonymous"></script>


</body>

</html>