<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vets</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css2?family=Nunito&display=swap" rel="stylesheet">

<style>
    /* Nav bar */

    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');
    .navbar {
            background-color: black;
            /* pastel light green */
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
            color:#c59958;
            
        }

        .navbar a {
            text-decoration: none;
            color:#c59958;
            font-size:15px;
        }

       

        .dropdown {
            position: relative;
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: black;
            color: #c59958;;
            /* pastel light green */
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
            padding-left:0px;
        }
        .logo1{
            margin-right: 2px;
            margin: 0;
            padding: 0;
        }

        /* Style for the image */

    .header-image{
        position: relative;

    }    
    .header-image img {
      width: 100%;
      height: 70vh; /* Set the height to 20% of the viewport height */
      object-fit: cover;
      object-position: center;
      
    }



    .header-image .image-heading {
      position: absolute;
      top: 40%;
      left: 50%;
      transform: translate(-50%, -50%);
      color: white;
      font-size: 60px;
      text-align: center;
      width: 100%;
      font-family: 'Poppins', sans-serif;
      
    }

    .header-image .image-heading2 {
      position: absolute;
      top: 60%;
      left: 60%;
      transform: translate(-60%, -60%);
      color: black;
      font-size: 60px;
      text-align: center;
      width: 100%;
      font-family: 'Poppins', sans-serif;
      
    }



    /* Card css */

    *, *::before, *::after {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

html {
    font-family: sans-serif;
    font-size: 10px;
}

.container1 {
    width: 100%;
    /* height: 100vh; */
    height: 61vh;
    display: flex;
    align-items: center;
    justify-content: center;
    /* background-color: #eee; */
    padding: 0 1.5rem;
    /* margin: 0; */
    
   
}

.container2 {
    
    /* margin-top: 934px; */
    margin-top: 2199px;
}

/* .container2 h2 {
    letter-spacing: 1px;
    font-size: 50px;
    color: #6968aa;
    padding: 10px;
    text-transform: uppercase;
    border-radius: 10px;
    display: inline-block;
    cursor: pointer;
    text-align: center;
    margin-left: 375px;
} */

.blog-post {
    width: 100%;
    max-width: 98rem;
    padding: 5rem;
    background-color: #dbf4ff21;
    box-shadow: 0 1.4rem 8rem rgba(0, 0, 0, 0.2);
    display: flex;
    align-items: center;
    border-radius: .8rem;
    /* margin: 10px; */
    margin: 15px;
   
}

.blog-post_img {
    min-width: 35rem;
    max-width: 35rem;
    height: 30rem;
    transform: translateX(-8rem);
    position: relative;
}

.blog-post_img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: .8rem;
    display: block;
}

.blog-post_img img::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: .5rem .5rem 3rem 1px rgba(0, 0, 0, 0.5);
    border-radius: .8rem;
}

.blog-post_img iframe {
    width: 100%;
    height: 100%;
    object-fit: cover;
    border-radius: .8rem;
    display: block;
    filter: invert(100%);
}

.blog-post_img iframe::before {
    content: '';
    width: 100%;
    height: 100%;
    position: absolute;
    top: 0;
    left: 0;
    box-shadow: .5rem .5rem 3rem 1px rgba(0, 0, 0, 0.5);
    border-radius: .8rem;
}

.blog-post_date span {
    display: block;
    color: #00000080;
    font-size: 1.6rem;
    font-weight: 600;
    margin: .5rem 0;
}

.blog-post_title {
    font-size: 2.5rem;
    margin: 1.5rem 0 2rem;
    text-transform: uppercase;
    color: #4facfe;
}

.blog-post_text {
    margin-bottom: 3rem;
    font-size: 1.4rem;
    color: #000000b3;
}

.blog-post_cta {
    display: inline-block;
    padding: 1.5rem 3rem;
    letter-spacing: 1px;
    text-transform: uppercase;
    font-size: 1.2rem;
    color: #fff;
    text-decoration: none;
    border-radius: .8rem;
    background: linear-gradient(to right, #c945cf 0%, #04a6bd 100%);
}

.blog-post_cta:hover {
    background: linear-gradient(to right, #04a6bd 0%, #c945cf 100%);
}


/* Footer */
.footer {
            background-color: black;
            /* margin-top: 600px; */
            margin-top: 2191px;
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
            color:#c59958;
            font-size: 18px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .footer-section a {
            color:#c59958;
            text-decoration: none;
            margin: 10px;
            transition: color 0.3s ease;
        }

        .footer-section a:hover {
            color: #D7B996;
            /* light brown */
        }

        .footer-text {
            color:#c59958;
            font-size: 14px;
            margin-top: 20px;
        }





</style>
 

</head>
<body>

     <!-- Navbar -->
     <navbar>
        <div class="navbar">
            <ul>
                <li class="logo1"><a href="#"><img src="logo1.png" height="45px" alt="FelineFinds Logo"></a></li>
                <li class="logo"><strong>FelineFinds</strong></li>
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
        </div>
    </navbar>

     

    <div class="header-image">
        <h1 class="image-heading">BEST FELINE VET SERVICES  </h1>
        
        <h2 class="image-heading2"> IN KARACHI </h2>
        <img src="vets2.jpeg" alt="Header Image">
    </div>


<div class="container1">
    <div class="container2">
        <!-- <h2>Maps</h2> -->
        <!-- blog1 php -->
        <?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>


        <!-- 1 -->
        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.6647808218704!2d67.10477357455612!3d24.90941354329853!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb338d9d229817b%3A0x99a846ac99fadd40!2sAnimal%20Care%20Clinic!5e0!3m2!1sen!2s!4v1688199319662!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Closes 8 pm</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>     
                </p>
                <a href="https://goo.gl/maps/JA2j2z4oGZJAs1Pq6" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>


<!-- blog 2 php -->
<?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 1,1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>

<!-- 2 -->
        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3621.804040930332!2d67.07233697455257!3d24.802162747589403!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33dd454274035%3A0x9807bacc92b888d9!2sPets%20Care%20N%20Cure%20(%20Vet%20Clinic%20in%20Karachi)!5e0!3m2!1sen!2s!4v1688199437791!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Closes 10 PM</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>
                </p>
                <a href="https://goo.gl/maps/pGDNa6Jx63rhHEAo8" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>


<!-- blog 3 php -->
<?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 2,1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>

<!-- 3 -->

        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3618.5901984573165!2d67.07970147455626!3d24.91195634319664!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f9381d8f467%3A0x8989cdf63c94fe0e!2sVeto%20pet%20hospital!5e0!3m2!1sen!2s!4v1688199759942!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Open 24 hours</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>
                </p>
                <a href="https://goo.gl/maps/uQZ2SreXodoHHJgr7" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>


<!-- blog 4 php -->
<?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 3,1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>
        <!-- 4 -->
        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.9930767164483!2d67.05208207455463!3d24.864086045114014!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f1f7a2103ef%3A0x513dea779b010cef!2sPet%20Master%20Veterinary%20clinic!5e0!3m2!1sen!2s!4v1688200091989!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Closes 1 Am</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>
                </p>
                <a href="https://goo.gl/maps/ynnsQPXBRkcvrC8v6" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>

<!-- blog 5 php -->
<?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 4,1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>
<!-- 5 -->

        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.459349284349!2d67.0587742745553!3d24.882308544384497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33f4a5b4c31d7%3A0xc973c3846c5a6a23!2sPet%20Planet%20Hospital!5e0!3m2!1sen!2s!4v1688200270864!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Open 24 hours</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>
                </p>
                <a href="https://goo.gl/maps/ftxGLY3kvyu8tgSZ6" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>


        <!-- blog 5 php -->
<?php
        include 'connection.php';
        // Retrieve vet hospitals from the 'vet_hospitals' table
$sql = "SELECT * FROM vets Limit 5,1"; // Fetching only 2 rows
$result = mysqli_query($con, $sql);

// Check if there are any rows returned
if (mysqli_num_rows($result) > 0) {
    $counter = 0;
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['clinicname'];
        $contact = $row['cliniccontact'];
        $address = $row['clinicaddress'];
        ?>
        <!-- 6 -->

        <div class="blog-post">
            <div class="blog-post_img">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3622.0327477498154!2d67.06318217455227!3d24.794332147901944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb33cec734abcf1%3A0x3bf3eb511b4928ca!2sSurgVet%20Pet%20Hospital%20-%20Veterinary%20Clinic%20%26%20Home%20Care!5e0!3m2!1sen!2s!4v1688200354941!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="blog-post_info">
                <div class="blog-post_date">
                    <span>Phone: <?php echo $contact; ?></span>
                    <span>Closes 10 Pm</span>
                </div>
                <h1 class="blog-post_title"><?php echo $name; ?></h1>
                <p class="blog-post_text">
                <?php echo $address; ?>
                </p>
                <a href="https://goo.gl/maps/wBVmvv4aagC7JnHq9" class="blog-post_cta">Visit Map</a>
            </div>
        </div>
        <?php
    
    }
    }
 else {
    echo "No vet hospitals found.";
}
        mysqli_close($con);
        ?>
    </div>
</div>


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