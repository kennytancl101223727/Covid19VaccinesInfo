<!DOCTYPE html>
<html class="theme-cyan cdc-page-type-content cdc-2020" lang="en-us">

<head>
    <!-- This is the file declaration and will not shown the browser webpage -->
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    
    <!-- Links to CSS -->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="stylesheet" href="home_files/bootstrap.css">
    <link rel="stylesheet" href="home_files/app.css">
    <link rel="stylesheet" href="home_files/style.css">
    
    <!-- Website Title -->
    <title>MWE | Register</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
</head>

<body>

    <!-- Header Title -->
    <div class="container-fluid site-title">
        <a href="home.html"><img src="images/logo.png" alt="Website logo"></a>
        <div class="container ">
            <div class="team-number">
                <h1>L1-team07</h1>
            </div>
            <h3 class="heading">COVID-19 Vaccine Information</h3>
            <div class="register-buttons">
                <a href="register.html"><button>Register</button></a>
                <a href="check_registration.html"><button>Check Registration</button></a>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <!-- Menu / Navigation bar buttons -->
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link" href="home.html">
                            Home</a>
                    </li>

                    <li class="nav-item" id="menu1">
                        <a class="nav-link" href="page1.html">
                            Pfizer</a>
                    </li>

                    <li class="nav-item" id="menu2">
                        <a class="nav-link" href="page2.html">
                            AstraZeneca</a>
                    </li>

                    <li class="nav-item" id="menu3">
                        <a class="nav-link" href="page3.html">
                            Sinovac<a>
                    </li>

                    <li class="nav-item" id="menu4">
                        <a class="nav-link" href="page4.html">
                            Sputnik</a>
                    </li>

                </ul>
            </nav>
        </div>
    </div>

    <!-- Content details -->
    <!-- Page Content Wrap -->
    <div class="container d-flex flex-wrap body-wrapper bg-white">
        <!-- Content -->
        <main class="col-xl-9 order-xl-2">
            <div class="row">
                <div class="col-md-12">
                    <div class="card border-0 rounded-0">
                        <div class="card-body bg-quaternary">
                            <?php
                            if (file_exists('data/' . $_POST['input_nric'] . '.txt')) {
                                echo '<h3>You are already registered!</h3>';
                            } else {
                                echo '<h3>You have not registered!</h3><br>';
                                echo '<a href ="register.html">Register here</a>';
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>

    <?php include 'footer.php';?>
   
</body>
</html>