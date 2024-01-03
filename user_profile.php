<?php
session_start();

if (!isset($_SESSION['username'])) {
    
    // Set the alert message in the session
    $_SESSION['alert_message'] = 'You must be logged in to access user profile.';
  
    // Redirect the user to home.php
    header('Location: home.php');
    exit();
  }

include('includes/connect.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Class Buddy - User Profile</title>
    <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.2.0/css/rivet.min.css">
    
</head>


<body class="rvt-layout">

    <!-- **************************************************************************
    PROFILE
*************************************************************************** -->

    <!-- **********************************************************************
    Heading
 -->

    <header class="rvt-header-wrapper">


        <!-- **********************************************************************
        "Skip to main content" link for keyboard users
    *********************************************************************** -->

        <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>

        <!-- **********************************************************************
        Global header area
    *********************************************************************** -->

                            <!-- ******************************************************
                            Primary navigation
                        ******************************************************* -->
                        <?php include "includes/nav.php"?>


    <!-- **************************************************************************
    Main content area
*************************************************************************** -->

    <main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details rvt-container-lg">


        <!-- **********************************************************************
        Content
    *********************************************************************** -->

        <div class="rvt-layout__content">

            <!-- ******************************************************************
            Breadcrumb navigation
        ******************************************************************* -->

            <nav class="rvt-flex rvt-items-center" role="navigation" aria-label="Breadcrumb">
                <ol class="rvt-breadcrumbs rvt-grow-1">
                    <li>
                        <a href="https://cgi.luddy.indiana.edu/~team09/home.php">
                            <span class="rvt-sr-only">Home</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" id="rvt-icon-home">
                                <path fill="currentColor" d="M15.6 6.4l-7-5.19a.76.76 0 0 0-.19-.12A1 1 0 0 0 8 1a1 1 0 0 0-.42.09.76.76 0 0 0-.19.12L.4 6.4a1 1 0 0 0-.4.8 1 1 0 0 0 .2.6 1 1 0 0 0 1.4.2l.4-.3V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7.7l.4.3a1 1 0 0 0 .6.2 1 1 0 0 0 .6-1.8zM12 13H9V9H7v4H4V6.22l4-3 4 3z"></path>
                            </svg>
                        </a>
                    </li>
                </ol>
                <a class="rvt-hide-md-up rvt-text-regular rvt-ts-14 rvt-inline-flex rvt-items-center rvt-p-tb-xxs rvt-p-lr-xs rvt-link-bold rvt-border-radius rvt-bg-blue-000 rvt-shrink-0" href="#section-nav">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" id="rvt-icon-arrow-down">
                        <path fill="currentColor" d="M12.71 10.29a1 1 0 0 0-1.41 0L9 12.59V1a1 1 0 0 0-2 0v11.59l-2.29-2.3A1 1 0 0 0 3.3 11.7l4 4a1 1 0 0 0 1.42 0l4-4a1 1 0 0 0-.01-1.41z"></path>
                    </svg>
                    <span class="rvt-m-left-xs">Section navigation</span>
                </a>
            </nav>

            <!-- ******************************************************************
            Headshot, name, and title
        ******************************************************************* -->
    <!-- ******************************************************************
             Headshot, name, and title
         ******************************************************************* -->

         <div class="rvt-flex-md-up rvt-items-center-md-up rvt-m-top-xxl rvt-m-top-md-md-up">

<div class="rvt-avatar rvt-avatar--xl rvt-m-right-lg-md-up">
    <img class="rvt-avatar__image" src="https://rivet.iu.edu/img/placeholder/avatar-7.jpg" alt="">
</div>
<div class="rvt-prose rvt-flow">
    <?php
    include('includes/user.php');
    echo '<h1>'.$user['firstname'].' '.$user['lastname'].'</h1>'
    ?>
    
    <p class="rvt-ts-20 rvt-color-black-500"> Luddy Informatics Student <a href="edit_user_profile.php"><i class="fa fa-edit"></i> </a>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <style>
            .fa {
                font-size: 18px;
                margin-right: 5px;
            }
        </style>
    </p>
</div>
</div>
<div class="rvt-prose rvt-flow rvt-border-top rvt-p-top-lg rvt-m-top-xl">
<div class="rvt-layout__feature-slot">

           
                    <div class="rvt-card rvt-card--raised">
                        <div class="rvt-card__body">
                            <dl class="rvt-list-description rvt-m-all-none">
                                <dt>Email:</dt>
                                <dd>
                                <?php
                                    include('includes/user.php');
                                    echo '<a href="#0">'.$user['email'].'</a>'
                                ?>
                                </dd>
                            </dl>
                        </div>
                    </div>


                    <div aria-labelledby="social-heading" class="rvt-footer-social" role="complementary">
                        <div class="rvt-container-lg">
                            <h2 class="rvt-sr-only" id="social-heading">Social media</h2>
                            <ul class="rvt-footer-social__list">
                                <li>
                                    <a href="https://www.facebook.com/IndianaUniversity">
                                        <span class="rvt-sr-only rvt-color-white">Facebook for IU</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                                            <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                                            <path d="M24.8996 9.99982V13.1998H23.0996C23.0996 13.1998 21.4996 12.9998 21.4996 14.4998V16.9998H24.7996L24.3996 20.3998H21.4996V29.9998H17.6996V20.2998H15.0996V16.9998H17.7996V14.0998C17.7996 14.0998 17.4996 12.4998 18.8996 11.1998C20.2996 9.89982 22.1996 9.99982 22.1996 9.99982H24.8996Z" fill="#F7F7F8"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.linkedin.com/company/indiana-university/">
                                        <span class="rvt-sr-only rvt-color-white">Linkedin for IU</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                                            <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                                            <path d="M11.3 16H15V28H11.3V16ZM13.2 10C14.4 10 15.4 11 15.4 12.2C15.4 13.4 14.4 14.4 13.2 14.4C12 14.4 11 13.4 11 12.2C11 11 12 10 13.2 10Z" fill="#F7F7F8"></path>
                                            <path d="M17.3999 16.0002H20.9999V17.6002C21.4999 16.7002 22.6999 15.7002 24.4999 15.7002C28.2999 15.7002 28.9999 18.2002 28.9999 21.4002V28.0002H25.2999V22.2002C25.2999 20.8002 25.2999 19.0002 23.3999 19.0002C21.4999 19.0002 21.1999 20.5002 21.1999 22.1002V28.0002H17.4999V16.0002H17.3999Z" fill="#F7F7F8"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://twitter.com/IndianaUniv">
                                        <span class="rvt-sr-only rvt-color-white">Twitter for IU</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                                            <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                                            <path d="M30.0002 13.7998C29.3002 14.0998 28.5002 14.2998 27.6002 14.3998C28.4002 13.8998 29.1002 13.0998 29.4002 12.0998C28.6002 12.5998 27.7002 12.8998 26.8002 13.0998C26.1002 12.2998 25.0002 11.7998 23.8002 11.7998C21.5002 11.7998 19.7002 13.5998 19.7002 15.8998C19.7002 16.1998 19.7002 16.4998 19.8002 16.7998C16.4002 16.5998 13.4002 14.9998 11.3002 12.4998C10.9002 13.0998 10.7002 13.7998 10.7002 14.5998C10.7002 15.9998 11.4002 17.2998 12.5002 17.9998C11.8002 17.9998 11.2002 17.7998 10.6002 17.4998C10.6002 17.4998 10.6002 17.4998 10.6002 17.5998C10.6002 19.5998 12.0002 21.1998 13.9002 21.5998C13.6002 21.6998 13.2002 21.6998 12.8002 21.6998C12.5002 21.6998 12.3002 21.6998 12.0002 21.5998C12.5002 23.1998 14.0002 24.3998 15.8002 24.3998C14.4002 25.4998 12.6002 26.1998 10.7002 26.1998C10.4002 26.1998 10.0002 26.1998 9.7002 26.0998C11.5002 27.2998 13.7002 27.8998 16.0002 27.8998C23.5002 27.8998 27.7002 21.5998 27.7002 16.1998C27.7002 15.9998 27.7002 15.7998 27.7002 15.6998C28.8002 15.2998 29.4002 14.5998 30.0002 13.7998Z" fill="#F7F7F8"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.instagram.com/iubloomington/">
                                        <span class="rvt-sr-only rvt-color-white">Instagram for IU</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                                            <path d="M20 40C31.0457 40 40 31.0457 40 20C40 8.9543 31.0457 0 20 0C8.9543 0 0 8.9543 0 20C0 31.0457 8.9543 40 20 40Z" fill="#7A1705"></path>
                                            <path d="M24.3004 29.9999H15.6004C12.5004 29.9999 9.90039 27.4999 9.90039 24.2999V15.5999C9.90039 12.4999 12.4004 9.8999 15.6004 9.8999H24.3004C27.4004 9.8999 30.0004 12.3999 30.0004 15.5999V24.2999C30.0004 27.4999 27.5004 29.9999 24.3004 29.9999ZM24.3004 28.4999C25.4004 28.4999 26.5004 28.0999 27.2004 27.2999C27.9004 26.4999 28.4004 25.4999 28.4004 24.3999V15.6999C28.4004 14.5999 28.0004 13.4999 27.2004 12.7999C26.4004 11.9999 25.4004 11.5999 24.3004 11.5999H15.6004C14.5004 11.5999 13.4004 11.9999 12.7004 12.7999C11.9004 13.5999 11.5004 14.5999 11.5004 15.6999V24.3999C11.5004 25.4999 11.9004 26.5999 12.7004 27.2999C13.5004 27.9999 14.5004 28.4999 15.6004 28.4999H24.3004Z" fill="#F7F7F8"></path>
                                            <path d="M25.4006 19.9C25.4006 22.9 23.0006 25.3 20.0006 25.3C17.0006 25.3 14.6006 22.9 14.6006 19.9C14.6006 16.9 17.0006 14.5 20.0006 14.5C23.0006 14.5 25.4006 17 25.4006 19.9ZM20.0006 16.4C18.1006 16.4 16.5006 18 16.5006 19.9C16.5006 21.8 18.1006 23.4 20.0006 23.4C21.9006 23.4 23.5006 21.8 23.5006 19.9C23.5006 18 21.9006 16.4 20.0006 16.4Z" fill="#F7F7F8"></path>
                                            <path d="M25.5002 15.8002C26.2182 15.8002 26.8002 15.2182 26.8002 14.5002C26.8002 13.7822 26.2182 13.2002 25.5002 13.2002C24.7822 13.2002 24.2002 13.7822 24.2002 14.5002C24.2002 15.2182 24.7822 15.8002 25.5002 15.8002Z" fill="#F7F7F8"></path>
                                        </svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="https://www.youtube.com/user/iu">
                                        <span class="rvt-sr-only rvt-color-white">Youtube for IU</span>
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" height="40" viewBox="0 0 40 40" width="40">
                                            <path d="M20,40A20,20,0,1,0,0,20,20,20,0,0,0,20,40Z" fill="#7A1705"></path>
                                            <path d="M29.58,15.17a2.49,2.49,0,0,0-1.77-1.78C26.25,13,20,13,20,13s-6.25,0-7.81.42a2.49,2.49,0,0,0-1.77,1.78A26.26,26.26,0,0,0,10,20a26.23,26.23,0,0,0,.42,4.84,2.47,2.47,0,0,0,1.77,1.75C13.75,27,20,27,20,27s6.25,0,7.81-.42a2.47,2.47,0,0,0,1.77-1.75A26.23,26.23,0,0,0,30,20,26.26,26.26,0,0,0,29.58,15.17ZM18,23V17l5.23,3Z" fill="#F7F7F8"></path>
                                        </svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>

                <h2>Bio
                </h2>
                <?php
                    include('includes/user.php');
                    echo '<p>'.$user['bio'].'</p>'
                ?>
                
                <h2>Academics</h2>
                <dl class="rvt-list-description">
                    <dt>B.S.
                    </dt>
                    <dd>Indiana University - Bloomington, 2020 - Present</dd>
                    <dt>GED
                    </dt>
                    <dd>Maine South High School, 2015 - 2020 </dd>
                </dl>
                <h2>Interests
                </h2>
                <p> Fishing, hanging out with friends, and going on walks!</p>
                <h2> List of All Friends
                </h2>
                <p><a href="https://cgi.luddy.indiana.edu/~team09/friends-page.php" class="rvt-cta">Friends</a></p>
                <h2> Schedule </h2>
                <div>
                    <style scoped>
                        /* @import url("css/style.css"); */
                    </style>
                    <?php include "includes/calander.php"?>
                </div>
                <div class="rvt-file" data-rvt-file-input="singleFileInput">
                    <input type="file" data-rvt-file-input-button="singleFileInput" id="singleFileInput" aria-describedby="file-description">
                    <label for="singleFileInput" class="rvt-button">
                        <span>Upload a file</span>
                        <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
                            <path fill="currentColor" d="M10.41,1H3.5A1.3,1.3,0,0,0,2.2,2.3V13.7A1.3,1.3,0,0,0,3.5,15h9a1.3,1.3,0,0,0,1.3-1.3V4.39ZM11.8,5.21V6H9.25V3h.34ZM4.2,13V3h3V6.75A1.25,1.25,0,0,0,8.5,8h3.3v5Z" />
                        </svg>
                    </label>
                    <div class="rvt-file__preview" data-rvt-file-input-preview="singleFileInput" id="file-description">
                        No file selected
                    </div>
                </div>
            </div>
        </div>

    </main>



    <!-- **************************************************************************
    Footer

    -> rivet.iu.edu/components/footer/
**************************************************************************** -->

    <footer class="rvt-footer-base">
        <div class="rvt-container-lg">
            <div class="rvt-footer-base__inner">
                <div class="rvt-footer-base__logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                        <polygon fill="currentColor" points="15.3 3.19 15.3 5 16.55 5 16.55 15.07 13.9 15.07 13.9 1.81 15.31 1.81 15.31 0 8.72 0 8.72 1.81 10.12 1.81 10.12 15.07 7.45 15.07 7.45 5 8.7 5 8.7 3.19 2.5 3.19 2.5 5 3.9 5 3.9 16.66 6.18 18.98 10.12 18.98 10.12 21.67 8.72 21.67 8.72 24 15.3 24 15.3 21.67 13.9 21.67 13.9 18.98 17.82 18.98 20.09 16.66 20.09 5 21.5 5 21.5 3.19 15.3 3.19" fill="#231f20" />
                    </svg>
                </div>
                <ul class="rvt-footer-base__list">
                    <li class="rvt-footer-base__item">
                        <a class="rvt-footer-base__link" href="https://accessibility.iu.edu/assistance/">Accessibility</a>
                    </li>
                    <li class="rvt-footer-base__item">
                        <a class="rvt-footer-base__link" href="#0">Privacy Notice</a>
                    </li>
                    <li class="rvt-footer-base__item">
                        <a class="rvt-footer-base__link" href="#0">Copyright</a> © 2021 The Trustees of <a class="rvt-footer-base__link" href="https://www.iu.edu">Indiana University</a>
                    </li>
                </ul>
            </div>
        </div>
    </footer>
    <script src="https://unpkg.com/rivet-core@2.2.0/js/rivet.min.js"></script>
    <script>
        Rivet.init();
    </script>
</body>

</html>