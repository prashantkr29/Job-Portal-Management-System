


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="css/dashboard.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap"
      rel="stylesheet"
    />

    <!-- Icon Font Stylesheet -->
    <link
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
      crossorigin="anonymous"
    />
    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet" />
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
      integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />

    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <nav>
        <div class="navbar">
          <div class="logo">
            <img src="img/logo.jpg" alt="" />
            <h1 style="font-size: 25px">Portal</h1>
          </div>
          <ul>
            <li>
              <a href="dashboard.php"
                ><i class="fas fa-user"></i>
                <span class="nav-item">Dashboard</span></a
              >
            </li>
            <li>
              <a href="dashboard-job.php"
                ><i class="fas fa-chart-bar"></i>
                <span class="nav-item">Job Listing</span></a
              >
            </li>
           
            <li>
              <a href="login.html" class="Logout"
                ><i class="fas fa-sign-out-alt"></i>
                <span class="nav-item">Log Out</span></a
              >
            </li>
          </ul>
        </div>
      </nav>
      <section class="main">
        <div class="main-top">
          <p>Explore the opportunites</p>
        </div>
        <div class="main-body">
          <h1>User Name</h1>
        </div>
        <div class="user-profile">
          <img src="img/profile.png" />
        </div>
        <div class="description-container">
          <div class="description">
            <p style="padding: 32px">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam
              modi a maxime eligendi fugiat quidem molestias. Cumque facere
              distinctio non eius laboriosam atque ad inventore repellendus,
              facilis corrupti, debitis earum.
            </p>
          </div>
          <h4>About Me</h4>
        </div>
        <div class="skills-container">
          <div class="skills">
            <p style="padding: 32px">
              Lorem, ipsum dolor sit amet consectetur adipisicing elit. Totam
              modi a maxime eligendi fugiat quidem molestias. Cumque facere
              distinctio non eius laboriosam atque ad inventore repellendus,
              facilis corrupti, debitis earum.
            </p>
          </div>
          <h4>Skills</h4>
        </div>

        <section class="attendance" style="margin-left: 30px">
          <div class="attendance-list">
            <h1 style="text-align: center;">Applied Jobs</h1>
            <table class="table">
              <thead>
                <tr>
                  <th>ID</th>
                  <th>Company</th>
                  <th>Designation</th>
               
                  <th>Salary</th>
                  <th>Location</th>
                 
                </tr>
              </thead>
              <?php
               include_once('php/db.php');
               $sql = "Select * from `job-post` where jobid=(select jobid from `applied` where userid = 4)";
               $result = $conn->query($sql);
               while($row = $result->fetch_assoc()){
                echo "<tr><td>". $row["jobid"]."</td><td>". $row["company"]."</td><td>". $row["designation"]."</td><td>". $row["salary"]."</td><td>".$row["location"];
               }
               echo "</table>";
              ?>
            </table>
          </div>
        </section>
      </section>
    </div>
  </body>
</html>
