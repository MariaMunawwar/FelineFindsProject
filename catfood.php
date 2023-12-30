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
    <title>Cats Food</title>
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
            background-image: url("foodss (1).jpeg");
            background-color: rgba(251,251,251,255);
            background-repeat: no-repeat;
            /* background-size: 100% 100%; */
            background-position: right;
            background-attachment: scroll;
            height: 520px;
            padding-top: 0px;
            border-bottom: 5px solid black;
        }

        .pheader {
            padding-left: 20px;
            max-width: 65vw;
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

        .box1 {
            grid-row: 1/2;
            grid-column: 1/2;
            border: 2px solid black;
            margin: 10px;
            transition: transform 0.3s;
            background-color: #a8bda8;
        }
        .box1,
        .box2,
        .box3,
        .box4,
        .box5,
        .box6 {
    border: 2px solid black;
    transition: transform 0.3s;
    background-color: #a8bda8;
    padding: 10px;
    width: 95%;  /* Set a width */
    height: 95%;  /* Set a height */
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
                    <a href="http://localhost/felinefinds/cattoy.php">Accessories</a>
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
                            <option value="persian">Dry Food</option>
                            <option value="siamese">Wet Food</option>
                            <option value="siamese">Frozen Food</option>
                        </select>
                    </div>
                    
                    <div class="form-group">
                        <label for="priceFilter">Price:</label>
                        <select class="form-select" id="priceFilter">
                            <option value="">All Prices</option>
                            <option value="low">Rs 200 - Rs 1000</option>
                            <option value="low">Rs 1000 - Rs 3000</option>
                            <option value="low">Rs 3000 - Rs 5000</option>
                            <option value="low">Rs 5000 and higher</option>
                            <!-- Add more price options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genderfilter">Brand</label>
                        <select class="form-select" id="genderfilter">
                            <option value="">All brands</option>
                            <option value="low">Whiskas</option>
                            <option value="high">Me-O</option>
                            <option value="high">Josera</option>
                            <option value="high">Felix</option>
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
    <!-- PHP FOR CAT FOOD MODAL 1 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 1-->
    <div class="modal fade modal-xl" id="catsmodal1" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

        <!-- PHP FOR CAT FOOD MODAL 2 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 1,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 2-->
    <div class="modal fade modal-xl" id="catsmodal2" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

        <!-- PHP FOR CAT FOOD MODAL 3 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 2,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 3-->
    <div class="modal fade modal-xl" id="catsmodal3" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

            <!-- PHP FOR CAT FOOD MODAL 4 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 3,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 4-->
    <div class="modal fade modal-xl" id="catsmodal4" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

            <!-- PHP FOR CAT FOOD MODAL 5 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 4,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 5-->
    <div class="modal fade modal-xl" id="catsmodal5" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

            <!-- PHP FOR CAT FOOD MODAL 6 -->
    <?php
include 'connection.php';
$query="SELECT catfood.*, vendor.vendorcontact
FROM catfood
INNER JOIN vendor ON catfood.vendorid = vendor.vendorid
LIMIT 5,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $foodid=$row['foodid'];
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];
    $foodtype=$row['foodtype'];
    $foodbrand=$row['foodbrand'];
    $foodweight=$row['foodweight'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS FOOD 6-->
    <div class="modal fade modal-xl" id="catsmodal6" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $foodimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $foodprice ?></h3>
                            <p>Description: <?php echo $fooddesc ?></p>
                            <p>Type: <?php echo $foodtype ?></p>
                            <p>Brand: <?php echo $foodbrand ?></p>
                            <p>Weight: <?php echo $foodweight ?></p>
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

    

    <!-- listings for cats Food modal -->
    <!-- <div class="modal fade" id="catsalemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Want to sell Cat Food?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="form-group">
                            <label for="exampleInputColor">Vendor's Name</label>
                            <input type="text" class="form-control" id="exampleInputage">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputColor">Vendor's Contact Number</label>
                            <input type="number" class="form-control" id="exampleInputage">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputdescription">Food Description</label>
                            <input type="text" class="form-control" id="exampleInputdescription">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputBreed">Food Type</label>
                            <input type="text" class="form-control" id="type">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputColor">Weight</label>
                            <input type="text" class="form-control" id="sizetoy">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputmaterial">Brand</label>
                            <input type="text" class="form-control" id="exampleInputbrand">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputColor">Price</label>
                            <input type="number" class="form-control" id="exampleInputPrice">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputColor">Add Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleimage" accept="image/*">
                            </div>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-success">Save changes</button>
                </div>
            </div>
        </div>
    </div>
 -->
 <?php

error_reporting(E_ALL);
ini_set('display_errors', 1);

$message = ""; // Initialize the $message variable

// Check if a message is passed
if(isset($_GET['message'])) {
    $message = $_GET['message'];
}

?>

<!-- listings for cats Food modal -->
<div class="modal fade" id="catsalemodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Want to sell Cat Food?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="formcatfood.php" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="vendorname">Vendor's Name</label>
                            <input type="text" class="form-control" id="vendorname" name="vendorname">
                        </div>
                        <div class="form-group">
                            <label for="vendorcontact">Vendor's Contact Number</label>
                            <input type="text" class="form-control" id="vendorcontact" name="vendorcontact">
                        </div>
                        <div class="form-group">
                            <label for="fooddesc">Food Description</label>
                            <input type="text" class="form-control" id="fooddesc" name="fooddesc">
                        </div>
                        <div class="form-group">
                            <label for="foodtype">Food Type</label>
                            <input type="text" class="form-control" id="foodtype" name="foodtype">
                        </div>
                        <div class="form-group">
                            <label for="foodweight">Weight</label>
                            <input type="text" class="form-control" id="foodweight" name="foodweight">
                        </div>
                        <div class="form-group">
                            <label for="foodbrand">Brand</label>
                            <input type="text" class="form-control" id="foodbrand" name="foodbrand">
                        </div>
                        <div class="form-group">
                            <label for="foodprice">Price</label>
                            <input type="number" class="form-control" id="foodprice" name="foodprice">
                        </div>
                        <div class="form-group">
                            <label for="foodimage">Add Image</label>
                            <div class="custom-file">
                            <input type="file" class="custom-file-input" id="foodimage" name="foodimage" accept="image/*">
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



    <!-- MAIN PAGE CONTENT -->
    <main>
        <div class="carousel">
            <div class="pheader">
                <h2>Are you looking for nutritious and flavorful cat food to satisfy your furry friend's cravings?</h2>
                <p>Discover the purrfect cat food options at Feline Finds.</p>
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
                    <option value="oton">Date,Old to New</option>
                    <option value="ntoo">Date,New to Old</option>
                </select>
            </div>
        </div>
        <div class="items">

        <!-- box 1 php -->
        <?php
include 'connection.php';
$query="SELECT * from catfood limit 1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>
            <div class="box1">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal1">View More</button>
            </div>
            <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 2 php -->
            <?php
include 'connection.php';
$query="SELECT * from catfood limit 1,1";
$result=mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>

            <div class="box2">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal2">View More</button>
            </div>
            <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 3 php -->
            <?php
include 'connection.php';
$query="SELECT * from catfood limit 2,1";
$result=mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>

            <div class="box3">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal3">View More</button>
            </div>
            <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 4 php -->
            <?php
include 'connection.php';
$query="SELECT * from catfood limit 3,1";
$result=mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>
            <div class="box4">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal4">View More</button>
            </div>
            <?php
                }else {
                    echo "No data found";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 5 php -->
            <?php
include 'connection.php';
$query="SELECT * from catfood limit 4,1";
$result=mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>
            <div class="box5">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal5">View More</button>
            </div>
            <?php
                }else {
                    echo " ";
                }
                mysqli_free_result($result);
            ?>
            <!-- box 6 php -->
            <?php
include 'connection.php';
$query="SELECT * from catfood limit 5,1";
$result=mysqli_query($con,$query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $fooddesc=$row['fooddesc'];
    $foodimage=$row['foodimage'];
    $foodprice=$row['foodprice'];

        ?>
            <div class="box6">
                <img src="<?php echo $foodimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $foodprice; ?></h5>
                <p class="pdesc"><?php echo  $fooddesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsmodal6">View More</button>
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