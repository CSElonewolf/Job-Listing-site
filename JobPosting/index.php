<?php
include_once('config.php');
$query ="SELECT * FROM alljobs";
$result = mysqli_query($link,$query);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Hiring Website</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div id="demo" class="carousel slide mt-1" data-ride="carousel">



        <!-- The slideshow -->
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="images/img1.jpg" class="image_style" alt="img1">
            </div>
            <div class="carousel-item">
                <img src="images/img2.jpeg" class="image_style" alt="img2">
            </div>
            <div class="carousel-item">
                <img src="images/img3.jpg" class="image_style" alt="img3">
            </div>
        </div>
        <!-- Left and right controls -->
        <a class="carousel-control-prev" href="#demo" data-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </a>
        <a class="carousel-control-next" href="#demo" data-slide="next">
            <span class="carousel-control-next-icon"></span>
        </a>
        <hr>
        <div class="text-center mt-5">
            <h1>Current Openings</h1>
        </div>
    </div>

    <div class="container mt-5 ">
        <div class="job-display">
            <!-- Loop to fetch all the job data from the dtabase and then populate the site -->
            <?php
            while($rows = mysqli_fetch_assoc($result))
            {
                ?>
            <div class="job-listing mb-4" style="border:2px solid black;padding:20px;">
                <h3><?php echo $rows['jobtitle']; ?></h3>
                <p>Job Id:-<?php echo $rows['jobid']; ?></p>
                <p>Job Location:-<?php echo $rows['joblocation']; ?></p>
                <p>Job Qualification:<?php echo $rows['jobqualification']; ?></p>
                <p>Job Details:-<?php echo $rows['jobdetails']; ?></p>
                <br>
                <a class="btn btn-primary mb-1" href="form.php">Apply</a>
            </div>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- footer -->
    <div class="jumbotron text-center mb-0">
        <a href="contact.php">Contact Us</a>
        <span>|</span>
        <a href="login.php">HR Login</a>
    </div>
</body>

</html>