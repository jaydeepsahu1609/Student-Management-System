<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME::Studentportal.com</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/style.css" rel="stylesheet" type="text/css">
    <style>
        a {
            text-decoration: none;
            color: inherit;
        }

        a:hover {
            color: aquamarine;
        }

        .followme {
            padding-top: 2px;
            font-size: 20px;
        }

        .content {
            text-align: left;
            color: darkcyan;
            font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;
            font-size: 23px;
            line-height: 3px;
            padding-left: 10px;
        }

        @media only screen and (max-width: 768px) {
            .followme {
                padding: 5px;
                margin-bottom: 5px;
                margin-left: 5px;
                margin-right: 5px;
            }

            .addBorder {
                border: 1px solid white;
            }
        }

        @media only screen and (min-width:768px) {
            .rows_distance {
                margin-top: 35px;
                margin-bottom: 50px;
            }

            hr {
                margin: 15px 0;
            }
        }
    </style>

</head>

<body>
    <?php
    include_once("header.php");
    ?>
    <div class="container-fluid rows_distance">
        <div class="row bg-info  font-weight-bolder font-italic" style="border-radius:10px; margin:10px 3px;">
            <div class="col-lg-12 col-md-12 col-sm-10 text-sm-center text-lg-center text-md-center ">
                <h3 class="text-light text-capitalize">Know Our Develpers</h3>
            </div>
        </div>
        <div class="row" style="margin-top:10px;">
            <div class="col-lg-4 col-md-4 col-sm-10 text-center">
                <img src="images/jds.jpeg" alt="Jaydeep Sahu" class="img-thumbnail img-responsive img-fluid h-100 w-50">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-10" title="Jaydeep Sahu">
                <h2>Jaydeep Sahu</h2>
                <p class="content">
                    <ul>
                        <li>
                            Philomath || Programmer || Quick-Learner
                        </li>
                        <li>
                            Persuing B.Tech (2019-2023) From IES-IPS Academy Indore
                        </li>
                        <li>
                            Knows C, C++, Python and JAVA languages
                        </li>
                        <li>
                            Knows HTML, CSS, BOOTSTRAPS, PHP, MYSQL, JAVASCRIPT for web development.
                        </li>
                        <li>
                            Believes in- "A little progress everyday leads to great success.";
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="row" title="Follow Jaydeep">
            <div class="container text-center text-light bg-secondary followme">
                <div class="row">
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.facebook.com/jaydeep.sahu.7543" target="_blank" rel="noopener noreferrer">
                            <p>FACEBOOK</p>
                        </a>
                    </div>
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.linkedin.com/in/jaydeep-sahu-0b8951177/" target="_blank" rel="noopener noreferrer">
                            <p>LINKED-IN</p>
                        </a>
                    </div>
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.instagram.com/___jaydeep.sahu/?hl=en" target="_blank" rel="noopener noreferrer">
                            <p>INSTAGRAM</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-10 text-center">
                <img src="images/kds.jpg" alt="Kuldeep Sahu" class="img-thumbnail img-responsive rounded-circle img-fluid h-100 w-50">
            </div>
            <div class="col-lg-8 col-md-8 col-sm-10" title="Kuldeep Sahu">
                <h2>Kuldeep Sahu</h2>
                <p class="content">
                    <ul>
                        <li>
                            Software Engineer at Impetus Technologies Indore
                        </li>
                        <li>
                            B.E. (2016-2019) From SVCE Indore
                        </li>
                        <li>
                            Knows C, C++, Python and JAVA languages
                        </li>
                        <li>
                            Knows HTML, CSS, BOOTSTRAPS, PHP,JAVASCRIPT, AJAX for web development.
                        </li>
                        <li>
                            Scala, Spark, Devops, React, Angular
                        </li>
                        <li>
                            Cloud Computing: AWS, GCP
                        </li>
                    </ul>
                </p>
            </div>
        </div>
        <div class="row" title="Follow Kuldeep">
            <div class="container text-center text-light bg-secondary followme">
                <div class="row">
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.facebook.com/kuldeep.sahu.9256" target="_blank" rel="noopener noreferrer">
                            <p>FACEBOOK</p>
                        </a>
                    </div>
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.linkedin.com/in/kuldeep-sahu-0511/" target="_blank" rel="noopener noreferrer">
                            <p>LINKED-IN</p>
                        </a>
                    </div>
                    <div class="col-lg-4 addBorder">
                        <a href="https://www.instagram.com/kuldeep_sahu1105/?hl=en" target="_blank" rel="noopener noreferrer">
                            <p>INSTAGRAM</p>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <hr>
        <div class="row bg-info  font-weight-bolder font-italic" title="About the project" style="border-radius:10px; margin:15px 3px;">
            <div class="col-lg-12 col-md-12 col-sm-10 text-sm-center text-lg-center text-md-center ">
                <h5 class="text-light text-capitalize text-center">Our Project: STUDENT MANAGEMENT SYSTEM</h5>
            </div>
        </div>
    </div>
    <div class="container-fluid rows_distance">
        <div class="row">
            <div class="container container-lg">
                <div class="col-lg-12 text-justified font-weight-bold font-italic text-lg-left text-md-left text-sm-center">
                    <p>
                        This project has been made as a project to practise Full-Stack Web Development.
                        This website uses HTML, CSS-BOOTSTRAPS and JavaSCRIPT FOR FRONT-END DEVELOPMENT and PHP as a server-side-language.
                        Database Management has been done with MySQL.
                    </p>
                    <p>
                        Features:
                        <ul>
                            <li>
                                Student Management
                                <ul>
                                    <li>
                                        Add Student
                                    </li>
                                    <li>
                                        Manage Student Details
                                    </li>
                                    <li>
                                        View Fee Status
                                    </li>
                                    <li>
                                        Record Attendance
                                    </li>
                                    <li>
                                        Notice-Board
                                    </li>
                                    <li>
                                        Record Test Results
                                    </li>
                                    <li>
                                        And many more features to come........
                                    </li>
                                </ul>
                            </li>
                            <li>
                                Library Management
                                <ul>
                                    <li>
                                        Create a library account
                                    </li>
                                    <li>
                                        Manage Transaction(incharge)
                                    </li>
                                    <li>
                                        View and submit Fine
                                    </li>
                                    <li>
                                        View issued books with due dates
                                    </li>
                                    <li>
                                        Access virtual-library
                                    </li>
                                    <li>
                                        Search availabilty of books
                                    </li>
                                    <li>
                                        And many more features to come........
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </p>
                    <p>
                        The Source-code of this project has been made publicly available by the developers
                        in the following git-repositery.
                        <p class="alert alert-secondary text-center font-italic">
                            Click <strong><a herf="https://github.com/jaydeepsahu1609" class="alert-link" target="_blank" title="Click here to see the source-code on Github" style="cursor:auto;">here</a> </strong> see the Source Code.
                        </p>
                        Dont forget to star if you like the project. You are free to use/modify source to create your own project.
                        <br>
                        <blockquote>
                            <h4>Cheers</h4>
                            <cite>Jaydeep Sahu, Kuldeep Sahu</cite>
                        </blockquote>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <?php
    include_once("footer.php");
    ?>
    <script src="js/bootstrap.min.js" type="text/js"></script>
</body>

</html>