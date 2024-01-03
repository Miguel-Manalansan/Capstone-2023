
<!-- **************************************************************************
    BLANK - APP TWO-COLUMN LAYOUT (DEFAULT SIDEBAR)
    
    -> rivet.iu.edu/layouts/blank-page/
*************************************************************************** -->

<!-- **************************************************************************
    Header

    -> rivet.iu.edu/components/header/
*************************************************************************** -->

<header class="rvt-header-wrapper">
    

                        <?php include('includes/nav.php') ?>

                            <!-- **************************************************
                                Avatar and "log out" link
                            *************************************************** -->


                        </nav>
                    </div>
                </div>
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
                Breadcrumb navigation
            *************************************************************** -->

            <nav class="rvt-flex rvt-items-center" role="navigation" aria-label="Breadcrumb">
                <ol class="rvt-breadcrumbs rvt-grow-1">
                    <li>
                        <a href="#0">
                            <span class="rvt-sr-only">Home</span>
                            <svg width="16" height="16" viewBox="0 0 16 16" id="rvt-icon-home">
                                <path fill="currentColor" d="M15.6 6.4l-7-5.19a.76.76 0 0 0-.19-.12A1 1 0 0 0 8 1a1 1 0 0 0-.42.09.76.76 0 0 0-.19.12L.4 6.4a1 1 0 0 0-.4.8 1 1 0 0 0 .2.6 1 1 0 0 0 1.4.2l.4-.3V14a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V7.7l.4.3a1 1 0 0 0 .6.2 1 1 0 0 0 .6-1.8zM12 13H9V9H7v4H4V6.22l4-3 4 3z"></path>
                            </svg>
                        </a>
                    </li>
                    <li><a href="#0">Tier two title</a></li>
                    <li><a href="#0">Tier three title</a></li>
                </ol>
            </nav>

            <!-- **************************************************************
                Page title
            *************************************************************** -->

            <h1 class="rvt-m-top-xs">Page title</h1>
        </div>
    </div>
    <div class="rvt-layout__wrapper rvt-layout__wrapper--details rvt-container-lg">
        
        <!-- ******************************************************************
            Sidebar
        ******************************************************************* -->
        
        <div class="rvt-layout__sidebar [ rvt-p-top-xxl rvt-flow rvt-prose ]" id="section-nav">
            <div class="rvt-empty-state [ rvt-m-right-lg ]">
                <div class="rvt-empty-state__content">
                    <p>Enter your sidebar content here.</p>
                </div>
            </div>
        </div>

        <!-- ******************************************************************
            Content sections
        ******************************************************************* -->

        <div class="rvt-layout__content [ rvt-p-top-xxl ]">
            <div class="rvt-prose rvt-flow">

                <!-- **********************************************************
                    Page content
                *********************************************************** -->

                <div class="rvt-empty-state">
                    <div class="rvt-empty-state__content">
                        <p>Enter your page content here.<br>This layout supports all built-in Rivet components and utility classes.</p>
                    </div>
                    <div class="rvt-empty-state__actions">
                        <a href="https://rivet.iu.edu/components/" class="rvt-button">See Rivet components</a>
                    </div>
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
                    <a class="rvt-footer-base__link" href="#0">Copyright</a> © 2023 The Trustees of <a class="rvt-footer-base__link" href="https://www.iu.edu">Indiana University</a>
                </li>
            </ul>
        </div>
    </div>
</footer>