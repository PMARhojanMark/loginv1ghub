<?php

@include 'config.php';

session_start();

if(!isset($_SESSION['user_name'])){
   header('location:login_form.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <!----======== CSS ======== -->
    <link rel="stylesheet" href="css/style1.css"> 

    <!----===== Iconscout CSS ===== -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>CIS Admin Dashboard</title>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
               <img src="https://upload.wikimedia.org/wikipedia/commons/thumb/7/7f/Philippine_Military_Academy_%28PMA%29.svg/1200px-Philippine_Military_Academy_%28PMA%29.svg.png" alt="">
            </div>

            <span class="logo_name">CIS</span>
        </div>

        <div class="menu-items">
            <div class="nav-links">
                <a href="#">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Dashboard</span>
                </a>
            </div>
            
            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    File Maintenance
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div>
                    <a href="cadet.html" class="link-name">Cadet</a>
                    <a href="faculty.html" class="link-name">Faculty</a>
                    <a href="department.html" class="link-name">Department</a>
                    <a href="courses.html" class="link-name">Courses</a>
                </div>
            </div>

            <div class="nav-links">
                <a href="#">
                    <i class="uil uil-process"></i>
                    Initial Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <div class="nav-links">
                        <a href="#">
                            <i class="uil uil-gear">
                                Term Settings
                            </i>
                            <i class="uil uil-angle-right dropdown"></i>
                        </a>
                        <div class="sub-menu">
                            <a href="cadet.html" class="link-name">ACAD</a>
                            <a href="faculty.html" class="link-name">Tactics</a>
                            <a href="department.html" class="link-name">Conduct</a>
                            <a href="courses.html" class="link-name">Aptitude</a>
                        </div>
                    </div>
                    <a href="#" class="link-name">Course Offerings</a>
                    <a href="#" class="link-name">Sectioning</a>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div>
                    <a href="cadet.html" class="link-name">Scheduling</a>
                    <a href="faculty.html" class="link-name">ACAD Grades Entry</a>
                    <a href="department.html" class="link-name">Conduct</a>
                    <a href="courses.html" class="link-name">Aptitude</a>
                    <a href="courses.html" class="link-name">SPDO</a>
                    <a href="courses.html" class="link-name">Report</a>
                </div>
            </div>

            <div class="nav-links">
                <a class="sub-btn">
                    <i class="uil uil-folder"></i>
                    Evaluation
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div>
                    <a href="cadet.html" class="link-name">Faculty</a>
                    <a href="faculty.html" class="link-name">Course</a>
                </div>
            </div>

            <div class="nav-links">
                <a href="#">
                    <i class="uil uil-process"></i>
                    End Term Processing
                    <i class="uil uil-angle-right dropdown"></i>
                </a>
                <div class="sub-menu">
                    <a href="#" class="link-name">Reports</a>
                    <div class="nav-links">
                        <a href="#">
                            <i class="uil uil-gear">
                                Awards
                            </i>
                            <i class="uil uil-angle-right dropdown"></i>
                        </a>
                        <div class="sub-menu">
                            <a href="cadet.html" class="link-name">Dean's List</a>
                            <a href="faculty.html" class="link-name">Comm's List</a>
                        </div>
                        <div class="nav-links">
                            <a href="#">
                                <i class="uil uil-gear">
                                    Graduation Reports
                                </i>
                                <i class="uil uil-angle-right dropdown"></i>
                            </a>
                            <div class="sub-menu">
                                <a href="cadet.html" class="link-name">Awards</a>
                                <a href="faculty.html" class="link-name">Latin Awards</a>
                            </div>
                        </div>
                </div>
            </div>

                <li><a href="#">
                    <i class="uil uil-folder"></i>
                    <span class="link-name">File Maintenance</span>
                    <!--uil uil-folder-open-->
                </a></li>

                <li><a href="#">
                    <i class="uil uil-process"></i>
                    <span class="link-name">Initial Term Processing</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-paperclip"></i>
                    <span class="link-name">Term Processing</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-comments"></i>
                    <span class="link-name">Evaluation</span>
                </a></li>
                <li><a href="#">
                    <i class="uil uil-graph-bar"></i>
                    <span class="link-name">End Term Processing</span>
                </a></li>
            </ul>
            
            <ul class="logout-mode">
                <li><a href="logout.php">
                    <i class="uil uil-signout"></i>
                    <span class="link-name">Logout</span>
                </a></li>

                <li class="mode">
                    <a href="#">
                        <i class="uil uil-moon"></i>
                    <span class="link-name">Dark Mode</span>
                </a>

                <div class="mode-toggle">
                  <span class="switch"></span>
                </div>
            </li>
            </ul>
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>

            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
            <img src="image/profile1.png" alt="">
        </div>

        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>

                

            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Activity</span>
                </div>

                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Rhojan Mark</span>
                        <span class="data-list">Deepa Chand</span>
                        <span class="data-list">Manisha Chand</span>
                        <span class="data-list">Pratima Shahi</span>
                        <span class="data-list">Man Shahi</span>
                        <span class="data-list">Ganesh Chand</span>
                        <span class="data-list">Bikash Chand</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Email</span>
                        <span class="data-list">premshahi@gmail.com</span>
                        <span class="data-list">deepachand@gmail.com</span>
                        <span class="data-list">prakashhai@gmail.com</span>
                        <span class="data-list">manishachand@gmail.com</span>
                        <span class="data-list">pratimashhai@gmail.com</span>
                        <span class="data-list">manshahi@gmail.com</span>
                        <span class="data-list">ganeshchand@gmail.com</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Joined</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-12</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-13</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-14</span>
                        <span class="data-list">2022-02-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Type</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                        <span class="data-list">New</span>
                        <span class="data-list">Member</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                        <span class="data-list">Liked</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="script.js"></script>
    <script src="navbar.js"></script>
</body>
</html>