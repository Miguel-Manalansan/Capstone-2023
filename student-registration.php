<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="robots" content="noindex">
  <title>Student Registration</title>
  <link rel="stylesheet" href="https://unpkg.com/rivet-core@2.3.1/css/rivet.min.css">
</head>
<body class="rvt-layout">

<!-- **************************************************************************
    APP CREATE/EDIT RESOURCE - SINGLE-COLUMN LAYOUT
    
    -> rivet.iu.edu/layouts/app-create-or-edit-resource-page/
*************************************************************************** -->

<!-- **************************************************************************
    Header

    -> rivet.iu.edu/components/header/
*************************************************************************** -->

<header class="rvt-header-wrapper">
    
    <!-- **********************************************************************
        "Skip to main content" link for keyboard users
    *********************************************************************** -->

    <a class="rvt-header-wrapper__skip-link" href="#main-content">Skip to main content</a>
    
    <!-- **********************************************************************
        Global header area
    *********************************************************************** -->
    
    <div class="rvt-header-global">
        <div class="rvt-container-lg">
            <div class="rvt-header-global__inner">
            
                              <!-- **************************************************
                               navigation
                            *************************************************** -->
                           
            <?php include "includes/nav.php"?>
                       
            </div>
        </div>
    </div>
</header>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-flex rvt-flex-column rvt-grow-1">
    <div class="rvt-bg-black-000 rvt-border-bottom rvt-p-top-xl">
        <div class="rvt-container-lg rvt-prose rvt-flow rvt-p-bottom-xl">
            

            <!-- **************************************************************
                Page title
            *************************************************************** -->
            
            <h1 class="rvt-m-top-xs">Registration</h1>
        </div>
    </div>

    <!-- **********************************************************************
        Content
    *********************************************************************** -->
    
    <div class="rvt-layout__wrapper [ rvt-p-tb-xxl ]">
        <div class="rvt-container-lg">
            <div class="rvt-row">
                <div class="rvt-cols-8-md rvt-flow rvt-prose">

                    <!-- ******************************************************
                        Create/edit form
                    ******************************************************* -->

                        <form method="POST" action="includes/registration.php">

                        <!-- **************************************************
                            Grouped set of fields
                        *************************************************** -->

                        <fieldset class="rvt-fieldset">
                            <legend class="rvt-legend [ rvt-ts-18 rvt-border-bottom rvt-p-bottom-xs ]">Enter Information:</legend>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="username"> Username:</label>
                                <input class="rvt-input" type="text" name="username" id="username" value="<?php echo $_SESSION['username']; ?>">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="firstname">First Name:</label>
                                <input class="rvt-input" type="text" name="firstname" id="firstname">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="lastname">Last Name:</label>
                                <input class="rvt-input" type="text" name="lastname" id="lastname">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="school">School:</label>
                                <div class="rvt-select-wrapper">
                                    <select class="rvt-select" id="school" name="school">
                                        <?php
                                            $db = new PDO("mysql:host=db.luddy.indiana.edu;dbname=i494f22_team09", "i494f22_team09", "my+sql=i494f22_team09");

                                            $query = "SELECT * FROM school";
                                            $stmt = $db->query($query);
                                            $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                            foreach ($options as $option) {
                                                echo '<option value="' . $option['name'] . '" data-id="' . $option['id'] . '">' . $option['name'] . '</option>';
                                            }
                                        ?>
                                    </select>
                                    <span class="rvt-select__icon"></span>
                                </div>
                            </div>
                            <div class="rvt-m-top-sm">
                                <fieldset class="rvt-fieldset">
                                    <legend class="rvt-sr-only">Are you a student or a professor?</legend>
                                    <div class="rvt-button-group">
                                    <div class="rvt-button-group__item">
                                        <input class="rvt-radio-button" type="radio" name="usertype" id="student" value="student" checked>
                                        <label class="rvt-label" for="student">Student</label>
                                    </div>
                                    <div class="rvt-button-group__item">
                                        <input class="rvt-radio-button" type="radio" name="usertype" id="professor" value="professor">
                                        <label class="rvt-label" for="professor">Professor</label>
                                    </div>
                                    </div>
                                </fieldset>
                                </div>
                                <div class="rvt-m-top-sm" id="major-dropdown">
                                <label class="rvt-label" for="studentmajor">Major:</label>
                                <div class="rvt-select-wrapper">
                                    <select class="rvt-select" id="studentmajor" name="studentmajor">
                                    <?php
                                        $db = new PDO("mysql:host=db.luddy.indiana.edu;dbname=i494f22_team09", "i494f22_team09", "my+sql=i494f22_team09");

                                        $query = "SELECT * FROM major";
                                        $stmt = $db->query($query);
                                        $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($options as $option) {
                                        echo '<option value="' . $option['id'] . '">' . $option['name'] . '</option>';
                                        }
                                    ?>
                                    </select>
                                    <span class="rvt-select__icon"></span>
                                </div>
                            </div>
                            <div class="rvt-m-top-sm" id="year-dropdown" style="display:none;">
                                <label class="rvt-label" for="yearid">Year:</label>
                                <div class="rvt-select-wrapper">
                                    <select class="rvt-select" id="yearid" name="yearid">
                                    <?php
                                        $db = new PDO("mysql:host=db.luddy.indiana.edu;dbname=i494f22_team09", "i494f22_team09", "my+sql=i494f22_team09");

                                        $query = "SELECT * FROM year";
                                        $stmt = $db->query($query);
                                        $options = $stmt->fetchAll(PDO::FETCH_ASSOC);

                                        foreach ($options as $option) {
                                        echo '<option value="' . $option['id'] . '">' . $option['standing'] . '</option>';
                                        }
                                    ?>
                                    </select>
                                    <span class="rvt-select__icon"></span>
                                </div>
                            </div>
                                <script>
                               
                                const studentRadio = document.querySelector('#student');
                                const professorRadio = document.querySelector('#professor');
                                const majorDropdown = document.querySelector('#major-dropdown');
                                const yearDropdown = document.querySelector('#year-dropdown');

                              
                                studentRadio.addEventListener('change', (event) => {
                                    
                                    majorDropdown.style.display = 'inline';
                                    yearDropdown.style.display = 'inline';
                                });

                                professorRadio.addEventListener('change', (event) => {
                                    
                                    majorDropdown.style.display = 'none';
                                    yearDropdown.style.display = 'none';
                                });
                                </script>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="email">School Email:</label>
                                <input class="rvt-input" type="text" name = "email" id="email">
                            </div>
                            <div class="rvt-m-top-sm">
                                <label class="rvt-label" for="bio">Bio:</label>
                                <input class="rvt-input rvt-input--textarea" type="textarea" name="bio" id="bio" style="height: 100px;">
                            </div>
                            
                        </fieldset>

                        
                        <div class="rvt-button-group [ rvt-m-top-xl ]">
                            <button class="rvt-button">Create Account</button>
                            <button class="rvt-button rvt-button--danger">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</main>

<!-- **************************************************************************
    Footer

    -> rivet.iu.edu/components/footer/
**************************************************************************** -->

<footer class="rvt-footer-base rvt-footer-base--light">
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
<script src="https://unpkg.com/rivet-core@2.3.1/js/rivet.min.js"></script>
<script>
  Rivet.init();
</script>
</body>
</html>