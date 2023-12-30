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
    <title>Cats Clothing</title>
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
            background-image: url(clothing3.jpeg);
            background-color: rgba(2,2,2,255);
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
            color: #fffdfd;
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
        .product{
            margin: 0;
            padding: 0;
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
                    <a href="#">Accessories</a>
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
                            <option value="persian">T-Shirts</option>
                            <option value="siamese">Sweaters</option>
                            <option value="siamese">Hoodies</option>
                            <option value="siamese">Dresses</option>
                            <option value="siamese">Costumes</option>
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
                            <option value="low">Rs 1500 - Rs 2500</option>
                            <option value="low">Rs 2500 - Rs 3500</option>
                            <option value="low">Rs 3500 - Rs 4500</option>
                            <option value="low">Rs 4500 and higher</option>
                            <!-- Add more price options here -->
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="genderfilter">Material</label>
                        <select class="form-select" id="genderfilter">
                            <option value="">All materials</option>
                            <option value="low">Cotton</option>
                            <option value="high">Fleece</option>
                            <option value="high">Wool</option>
                            <option value="high">Polyseter</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="agefilter">Age</label>
                        <select class="form-select" id="agefilter">
                            <option value="">All ages</option>
                            <option value="low">3-6 months</option>
                            <option value="high">6-9 months</option>
                            <option value="high">9-12 months</option>
                            <option value="high">1-2 years</option>
                            <option value="high">2-4 years</option>
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

    <!-- PHP FOR CAT CLOTHES MODAL 1 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal1" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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

            <!-- PHP FOR CAT CLOTHES MODAL 2 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 1,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal2" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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

            <!-- PHP FOR CAT CLOTHES MODAL 3 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 2,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal3" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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

            <!-- PHP FOR CAT CLOTHES MODAL 4 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 3,1";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal4" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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

            <!-- PHP FOR CAT CLOTHES MODAL 5 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 4,1";
$result=mysqli_query($con, $query);
// if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal5" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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

            <!-- PHP FOR CAT CLOTHES MODAL 6 -->
    <?php
include 'connection.php';
$query="SELECT catcloth.*, vendor.vendorcontact
FROM catcloth
INNER JOIN vendor ON catcloth.vendorid = vendor.vendorid
LIMIT 5,1";
$result=mysqli_query($con, $query);
// if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothid=$row['clothid'];
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
    $clothtype=$row['clothtype'];
    $clothcolor=$row['clothcolor'];
    $clothmaterial=$row['clothmaterial'];
    $clothsize=$row['clothsize'];
    $clothage=$row['clothage'];
    $vendorContact = $row['vendorcontact'];
        ?>
    <!-- MODAL FOR CATS CLOTHES -->
    <div class="modal fade modal-xl" id="catsclothmodal6" tabindex="-1" aria-labelledby="exampleModalLabel"
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
                            <img src="<?php echo $clothimage ?>" alt="Cat Image" class="img-fluid">
                          </div>
                          <div class="col-md-6">
                            <h3>Rs <?php echo $clothprice ?></h3>
                            <p>Description: <?php echo $clothdesc ?></p>
                            <p>Type: <?php echo $clothtype ?></p>
                            <p>Material: <?php echo $clothmaterial ?></p>
                            <p>Suitable for Age: <?php echo $clothage ?></p>
                            <p>Color: <?php echo $clothcolor ?></p>
                            <p>Size: <?php echo $clothsize ?></p>
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
                    <h5 class="modal-title" id="exampleModalLabel">Want to sell Cat Clothes?</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form method="POST" action="formcatcloth.php" enctype="multipart/form-data">
                    <div class="form-group">
                            <label for="vendorname">Vendor's Name</label>
                            <input type="text" class="form-control" id="vendorname" name="vendorname">
                        </div>
                        <div class="form-group">
                            <label for="vendorcontact">Vendor's Contact Number</label>
                            <input type="text" class="form-control" id="vendorcontact" name="vendorcontact">
                        </div>
                        <div class="form-group">
                            <label for="clothdesc">Description</label>
                            <input type="text" class="form-control" id="clothdesc" name="clothdesc">
                        </div>
                        <div class="form-group">
                            <label for="clothtype">Type</label>
                            <input type="text" class="form-control" id="clothtype" name="clothtype">
                        </div>
                        <div class="form-group">
                            <label for="clothcolor">Color</label>
                            <input type="text" class="form-control" id="clothcolor" name="clothcolor">
                        </div>
                        <div class="form-group">
                            <label for="clothsize">Size</label>
                            <input type="text" class="form-control" id="clothsize" name="clothsize">
                        </div>
                        <div class="form-group">
                            <label for="clothmaterial">Material</label>
                            <input type="text" class="form-control" id="clothmaterial" name="clothmaterial">
                        </div>
                        <div class="form-group">
                            <label for="clothprice">Price</label>
                            <input type="number" class="form-control" id="clothprice" name="clothprice">
                        </div>
                        <div class="form-group">
                            <label for="clothage">Age</label>
                            <input type="text" class="form-control" id="clothage" name="clothage">
                        </div>
                        <div class="form-group">
                            <label for="clothimage">Add Image</label>
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="clothimage" name="clothimage" accept="image/*">
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
                <h2>Are you ready to transform your cat into the ultimate fashionista? </h2>
                <p>Explore our stunning cat clothing collection at FelineFinds and let them steal the spotlight!</p>
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
$query="SELECT * from catcloth limit 1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box1">
                <img class="product" src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal1">View More</button>
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
$query="SELECT * from catcloth limit 1,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box2">
                <img src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal2">View More</button>
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
$query="SELECT * from catcloth limit 2,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box3">
                <img src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal3">View More</button>
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
$query="SELECT * from catcloth limit 3,1 ";
$result=mysqli_query($con, $query);
if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box4">
                <img src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal4">View More</button>
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
$query="SELECT * from catcloth limit 4,1 ";
$result=mysqli_query($con, $query);
    if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box5">
                <img src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal5">View More</button>
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
$query="SELECT * from catcloth limit 5,1 ";
$result=mysqli_query($con, $query);
    if($result && mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $clothdesc=$row['clothdesc'];
    $clothimage=$row['clothimage'];
    $clothprice=$row['clothprice'];
        ?>
            <div class="box6">
                <img src="<?php echo $clothimage; ?>" width="347px" height="390px">
                <h5 class="prprice">Rs <?php echo $clothprice; ?></h5>
                <p class="pdesc"><?php echo $clothdesc; ?></p>
                <button class="vmore" data-bs-toggle="modal" data-bs-target="#catsclothmodal6">View More</button>
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