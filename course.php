<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Course Detail - INFO-I101</title>
    <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.2.0/css/rivet.min.css">
    
</head>


<body class="rvt-layout">
<!-- **************************************************************************
    BLANK - MARKETING SINGLE-COLUMN LAYOUT
    
    -> rivet.iu.edu/layouts/blank-page/
*************************************************************************** -->

<!-- **************************************************************************
    Base header

    -> rivet.iu.edu/components/header/
*************************************************************************** -->

<?php include "includes/nav.php"?>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--single rvt-container-sm">
    <div class="rvt-layout__content">

        <!-- ******************************************************************
            Page content
        ******************************************************************* -->
        <div class="rvt-billboard">
            <div class="rvt-billboard__image">
                <img src="https://rivet.iu.edu/img/placeholder/billboard-2.jpg" alt="Student in vintage-style Indiana University t-shirt">
            </div>
            <div class="rvt-billboard__body">
                <h2 class="rvt-billboard__title">INFO-I101: INTRODUCTION TO INFORMATICS</h2>
                <div class="rvt-billboard__content [ rvt-flow ]">
                    <p>Problem solving with information technology; introduction to information representation, relational databases, system design, propositional logic, cutting edge technologies; CPU, operating systems, networks; laboratory emphasizing information technology including webpage design, word processing, and databases using tools available on campus.</p>
                    <a class="rvt-cta" href="https://luddy.indiana.edu/academics/courses/class/iub-spring-2023-info-i101">Go to Course Page</a>
                </div>
            </div>
        </div>

        
    </div>
</main>

<!-- **************************************************************************
    Base footer

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
</body>
</html>