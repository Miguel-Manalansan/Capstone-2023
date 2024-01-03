<?php
session_start();
// Connect to the database
$servername = "db.luddy.indiana.edu";
$username = "i494f22_team09";
$password = "my+sql=i494f22_team09";
$dbname = "i494f22_team09";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Group Page</title>
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

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details">
<div class="rvt-layout__sidebar [ rvt-p-top-xxl-md-up rvt-p-left-md rvt-bg-black-000 ]" id="section-nav">
    <nav class="rvt-sidenav" aria-labelledby="sidenav-label" data-rvt-sidenav>
      <span class="rvt-sidenav__label" id="sidenav-label">Section pages</span>
      <ul class="rvt-sidenav__list">
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/group.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link" aria-current="page">About</a>
        </li>
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/grouppostspage.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link">Posts</a>
        </li>
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/groupmembers.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link">Members</a>
        </li>
      </ul>
    </nav>
</div>

        
        <!-- ******************************************************************
            Page content
        ******************************************************************* -->
<div class="rvt-layout__content [ rvt-p-top-xxl rvt-p-lr-md rvt-p-lr-xxl-md-up ]">
    <div class="rvt-prose rvt-grow-1">
        <div class="rvt-billboard">
            <div class="rvt-billboard__image">
                <img src="https://rivet.iu.edu/img/placeholder/billboard-2.jpg" alt="Student in vintage-style Indiana University t-shirt">
            </div>
            <div class="rvt-billboard__body">
                
                    <?php 
                    $id = intval($_GET["id"]);

                    $sql = "SELECT * FROM groups WHERE id = $id";
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();

                    echo '<h2 class="rvt-billboard__title">'.$row['groupname'].'</h2>'


                    ?>
                
                <div class="rvt-billboard__content [ rvt-flow ]">
                <?php 
                    $id = intval($_GET["id"]);

                    $sql = "SELECT * FROM groups WHERE id = $id";
                    $result = $conn->query($sql);

                    $row = $result->fetch_assoc();

                    echo '<p>'.$row['description'].'</p>';

                    ?>
                </div>
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
