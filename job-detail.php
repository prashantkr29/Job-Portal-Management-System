<?php
include_once('php/db.php');
$sql = "Select * from `job-post` where jobid=1";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>JobEntry - Job Portal Website Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="container-xxl bg-white p-0">
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->


        <!-- Job Detail Start -->
        <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
            <div class="container">
                <div class="row gy-5 gx-4">
                    <div class="col-lg-8">
                        <div class="d-flex align-items-center mb-5">
                            <img class="flex-shrink-0 img-fluid border rounded" src="img/com-logo-2.jpg" alt=""
                                style="width: 80px; height: 80px;">
                            <div class="text-start ps-4">
                                <h3 class="mb-3"><?php
                                echo $row['designation'];
                                ?></h3>
                                <span class="text-truncate me-3"><i
                                        class="fa fa-map-marker-alt text-primary me-2"></i><?php
                                echo $row['location'];
                                ?></span>
                                <span class="text-truncate me-3"><?php
                                echo $row['company'];
                                ?></span>
                                <span class="text-truncate me-0"><i
                                        class="far fa-money-bill-alt text-primary me-2"></i><?php  echo $row["salary"];?></span>
                            </div>
                        </div>

                        <div class="mb-5">
                            <h4 class="mb-3">Job description</h4>
                            <p><?php
                                echo $row['description'];
                                ?></p>
                           
                        </div>

                        <div class="">
                            <h4 class="mb-4">Apply For The Job</h4>
                            <form action="php/apply.php" method="post">
                                <div class="row g-3">
                                    <div class="col-12 col-sm-6">
                                        <input type="text" class="form-control" placeholder="Your Name" name="name">
                                    </div>
                                    <div class="col-12 col-sm-6">
                                        <input type="email" class="form-control" placeholder="Your Email" name="email">
                                    </div>
                                    <div class="col-12">
                                    <input type="tel" id="phone" name="contact" placeholder="123-45-678" required>                                    </div>
                        
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100" type="submit">Apply Now</button>
                                    </div>

                                </div>
                            </form>
                            <br>
                            <div class="row g-3">
                                <div class="col-12">
                                    <button class="btn btn-primary w-100" onclick="window.location.href='dashboard-job.php'">Go Back</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="bg-light rounded p-5 mb-4 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Job Summery</h4>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Published On: 01 Jan, 2045</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Vacancy: 123 Position</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Job Nature: Full Time</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Salary: $123 - $456</p>
                            <p><i class="fa fa-angle-right text-primary me-2"></i>Location: New York, USA</p>
                            <p class="m-0"><i class="fa fa-angle-right text-primary me-2"></i>Date Line: 01 Jan, 2045
                            </p>
                        </div>
                        <div class="bg-light rounded p-5 wow slideInUp" data-wow-delay="0.1s">
                            <h4 class="mb-4">Company Detail</h4>
                            <p class="m-0">Ipsum dolor ipsum accusam stet et et diam dolores, sed rebum sadipscing elitr
                                vero dolores. Lorem dolore elitr justo et no gubergren sadipscing, ipsum et takimata
                                aliquyam et rebum est ipsum lorem diam. Et lorem magna eirmod est et et sanctus et, kasd
                                clita labore.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Job Detail End -->




        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/login.js"></script>
        <script src="js/main.js"></script>

</body>

</html>