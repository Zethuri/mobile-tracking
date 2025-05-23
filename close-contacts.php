<?php
session_start();
include 'conn.php';




if(!isset($_SESSION['valid_user']))
{
    $admin_error = "Your session has timed out, please log in again.";
    include("login.php");
    exit;
}

$email = $_SESSION['valid_user'];

// $username = $_SESSION['valid_user'];

?>


<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="description" content="">
        <meta name="author" content="">

        <title>Mobile Tracker - Close Contact Page</title>

        <!-- CSS FILES -->      
        <link rel="preconnect" href="https://fonts.googleapis.com">
        
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        <link href="https://fonts.googleapis.com/css2?family=Unbounded:wght@300;400;700&display=swap" rel="stylesheet">

        <link href="css/bootstrap.min.css" rel="stylesheet">

        <link href="css/bootstrap-icons.css" rel="stylesheet">

        <link href="css/tooplate-mini-finance.css" rel="stylesheet">

<!--

Tooplate 2135 Stars and Bloom 

https://www.tooplate.com/view/2135-mini-finance

Bootstrap 5 Courses Admin Template

-->
    </head>
    
    <body>
        <header class="navbar sticky-top flex-md-nowrap">
            <div class="col-md-3 col-lg-3 me-0 px-3 fs-6">
                <a class="navbar-brand" href="dashboard.php">
                    <i class="bi-box"></i>
                    Zethuri Tracker
                </a>
            </div>

            <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <form class="custom-form header-form ms-lg-3 ms-md-3 me-lg-auto me-md-auto order-2 order-lg-0 order-md-0" action="#" method="get" role="form">
                <input class="form-control" name="search" type="text" placeholder="Search" aria-label="Search">
            </form>

            <div class="navbar-nav me-lg-2">
                <div class="nav-item text-nowrap d-flex align-items-center">
                    <div class="dropdown ps-3">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-bell"></i>
                            <span class="position-absolute start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                <span class="visually-hidden">New alerts</span>
                            </span>
                        </a>

                        <ul class="dropdown-menu notifications-block-wrap bg-white shadow">
                            <small>Notifications</small>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-success">
                                        <i class="notifications-icon bi-check-circle-fill"></i>
                                    </div>

                                    <div>
                                        <span>Your account has been created successfuly.</span>

                                        <p>12 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block border-bottom pb-2 mb-2">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-info">
                                        <i class="notifications-icon bi-folder"></i>
                                    </div>

                                    <div>
                                        <span>Please check. We have sent a Daily report.</span>

                                        <p>10 days ago</p>
                                    </div>
                                </a>
                            </li>

                            <li class="notifications-block">
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="notifications-icon-wrap bg-danger">
                                        <i class="notifications-icon bi-question-circle"></i>
                                    </div>

                                    <div>
                                        <span>Account verification failed.</span>

                                        <p>1 hour ago</p>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <div class="dropdown ps-1">
                        <a class="nav-link dropdown-toggle text-center" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="bi-three-dots-vertical"></i>
                        </a>

                        <div class="dropdown-menu dropdown-menu-social bg-white shadow">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/search.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Google</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/spotify.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Spotify</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/telegram.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Telegram</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/snapchat.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Snapchat</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/tiktok.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Tiktok</span>
                                        </a>
                                    </div>

                                    <div class="col-lg-4 col-md-4 col-4">
                                        <a class="dropdown-item text-center" href="#">
                                            <img src="images/social/youtube.png" class="profile-image img-fluid" alt="">
                                            <span class="d-block">Youtube</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="dropdown px-3">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid" alt="">
                        </a>
                        <ul class="dropdown-menu bg-white shadow">
                            <li>
                                <div class="dropdown-menu-profile-thumb d-flex">
                                    <img src="images/medium-shot-happy-man-smiling.jpg" class="profile-image img-fluid me-3" alt="">

                                    <div class="d-flex flex-column">
                                        <small>Thomas</small>
                                        <a href="#">thomas@site.com</a>
                                    </div>
                                </div>
                            </li>

                            <li>
                                <a class="dropdown-item" href="profile.php">
                                    <i class="bi-person me-2"></i>
                                    Profile
                                </a>
                            </li>

                            <li>
                                <a class="dropdown-item" href="setting.php">
                                    <i class="bi-gear me-2"></i>
                                    Settings
                                </a>
                            </li>

                            <li class="border-top mt-3 pt-2 mx-4">
                                <a class="dropdown-item ms-0 me-0" href="#">
                                    <i class="bi-box-arrow-left me-2"></i>
                                    Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row">
                <?php
                    include("nav.php");
                ?>
                <main class="main-wrapper col-md-9 ms-sm-auto py-4 col-lg-9 px-md-4 border-start">
                    <div class="title-group mb-3">
                        <h1 class="h2 mb-0">Close Contacts</h1>
                    </div>

                    <div class="row my-4">
                        <div class="col-lg-7 col-12">
                            <div class="custom-block custom-block-profile">
                                <div class="updateProfile">
                                    <?php
                                    
                                        if (isset($error)) {
                                            echo "<div class= 'alert alert-danger' style ='text-align: center;'>  $error  </div>";
                                        }
                                        if (isset($success)) {
                                            echo "<div class= 'alert alert-success' style ='text-align: center;'>  $success  </div>";
                                        }
                                    
                                    ?>
                                    <form action="proc-contact.php" class="updateForm" method="post">
                                        <label for="fullname"> Fullname</label>
                                        <input type="text" name="fullname">
                                        <label for="phone"> Phone</label>
                                        <input type="text" name="phone">
                                        <input type="hidden" name="user_email" id="user_id"  class="form-control" placeholder="Confirm Password" required="" value="<?php echo $_SESSION['valid_user']; ?>">

                                        <button class="update-button">Add Close Contact</button>
                                    </form>
                                </div>
                            </div>

                                        <style>
                                            .updateButton{
                                                margin-top: 20px;
                                                background-color: red;
                                                color: white;
                                                font-size: 14px;
                                                border-radius: 10px;
                                            }

                                            .updateButton:hover{
                                                background-color: darkred;
                                                cursor: pointer;
                                            }

                                            .update-button{
                                                margin-top: 20px;
                                                height: 30px;
                                                background-color: red;
                                                color: white;
                                                font-size: 14px;
                                                border-radius: 10px;
                                                font-size: 15px;
                                            }


                                            .update-button:hover{
                                                background-color: darkred;
                                                cursor: pointer;
                                            }


                                            .updateForm{
                                                display: flex;
                                                flex-direction: column;
                                                gap: 5px;
                                            }

                                            input{
                                                border-radius: 10px;
                                                height: 40px;
                                                border: 1px solid ;
                                            }

                                            .close-contacts{
                                                display: flex;
                                                flex-direction: column;
                                                margin-top: 34px;
                                            }
                                        </style>
                            <div class="custom-block custom-block-profile bg-white">
                            <?php
                            $query_chk= "select * from close_contact where user_email = '$email'";
                            $result_chk = mysqli_query($conn, $query_chk);
                            $num_chk = mysqli_num_rows($result_chk);
                            for ($i=0; $i < $num_chk; $i++) { 
                                $row = mysqli_fetch_array($result_chk);
                            
                            ?>    
                            
                            <div class="close-contacts">
                                    <h6 class="mb-4">Close Contacts</h6>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>User ID:</strong>

                                        <span><?php echo $row['user_id'];?></span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Fullname:</strong>

                                        <span><?php echo $row['contact_name'];?></span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Phone:</strong>

                                        <span><?php echo $row['contact_phone'];?></span>
                                    </p>

                                    <p class="d-flex flex-wrap mb-2">
                                        <strong>Date Created:</strong>

                                        <span><?php echo $row['date_created'];?></span>
                                    </p>
                                    <!-- <button class="update-button">Delete</button> -->

                                    <a onClick="return confirm('Are you sure you want to delete this user?');" href="del_btn.php?id=<?php echo base64_encode($row['id']); ?>"><input type="button" class="update-button" value="Delete" /></a>
                                    </div>
                                    
                                   <?php }?>
                                </div>
                                
                            </div>
                        </div>

                        <div class="col-lg-5 col-12">
                            <div class="custom-block custom-block-contact">
                                <h6 class="mb-4">Still can’t find what you looking for?</h6>

                                <p>
                                    <strong>Call us:</strong>
                                    <a href="tel: 305-240-9671" class="ms-2">
                                        (60) 
                                        305-240-9671
                                    </a>
                                </p>

                                <a href="#" class="btn custom-btn custom-btn-bg-white mt-3">
                                    Chat with us
                                </a>
                            </div>
                        </div>
                    </div>

                    <footer class="site-footer">
                        <div class="container">
                            <div class="row">
                                
                                <div class="col-lg-12 col-12">
                                    <p class="copyright-text">Copyright © Stars and Bloom  2048 
                                    - Design: <a rel="sponsored" href="https://www.tooplate.com" target="_blank">Tooplate</a></p>
                                </div>

                            </div>
                        </div>
                    </footer>
                </main>

            </div>
        </div>

        <!-- JAVASCRIPT FILES -->
        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.bundle.min.js"></script>
        <script src="js/custom.js"></script>

    </body>
</html>