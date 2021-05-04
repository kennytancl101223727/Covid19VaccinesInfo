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
    <!-- <div class=""> -->
        <div class="container ">
            <div class="row">
                <h3 class="heading">COVID-19 Vaccine Registration Check</h3>
            </div>
        </div>
    </div>

    <!-- Menu / Navigation bar buttons -->
    <div id="cdc-meganav-wrapper">
        
        <div class="container" id="cdc-meganav-bar">
            
            <nav class="navbar navbar-expand-xl yamm">
            
                <ul class="nav navbar-nav nav-justified w-100">
                  
                    <li class="nav-item" id="menu_home">
                        <a class="nav-link active" href="home.html">
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

    <?php
        
        // echo $_POST['input_nric'];
        
        if (file_exists('data/' . $_POST['input_nric'] . '.txt')){
            echo '<h3>You are already registered!</h3>';
        }
        else{
            echo '<h3>You have not registered!</h3><br>';
            echo '<a href ="register.html">Register here</a>';
        }

    ?>

<div class ="container-fluid site-title footer">
        <footer>
            <table id="footer_table">
                <tr>
                    <th>
                        Enquiries
                    </th>
                    <th>
                        Relative Information
                    </th>
                    <th>
                        Connect With Us
                    </th>
                </tr>
                <tr>
                    <td>
                        Visit Us
                    </td>
                    <td>
                        <a href="home.html">COVID-19 Info</a>
                    </td>
                    <td rowspan="5">
                        <img src="images/connect_us.png" alt="Clipboard with checkmarks" class="card-img-top img-fluid p-0 bg-primary card-img-orig d-none d-md-block rounded-0">
                    </td>
                </tr>
                <tr>
                    <td>
                        Call 03-234-4553
                    </td>
                    <td>
                        <a href="page1.html">Pfizer-BioNTech</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        <a href="mailto:COVID_INFO@gmail.com">Email Us</a>
                    </td>
                    <td>
                        <a href="page2.html">AstraZeneca</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Open 24/7
                    </td>
                    <td>
                        <a href="page3.html">Sinovac</a>
                    </td>
                </tr>
                <tr>
                    <td>
                        Locate Us
                    </td>
                    <td>
                        <a href="page3.html">Sputnik</a>
                    </td>
                </tr>
            </table>
            <p>&#169;2021 Development Project Tools 1 Group 7</p>
        </footer>
    </div>
   
</body>
</html>