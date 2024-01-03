<?php
session_start();
?>
<!-- **************************************************************************
    PEOPLE LIST - TWO-COLUMN LAYOUT
    
    -> rivet.iu.edu/layouts/people-list-page/
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
                <div class="rvt-header-global__logo-slot">
                    <a class="rvt-lockup" href="#0">
                        
                        <!-- **************************************************
                            Trident logo
                        *************************************************** -->

                        <div class="rvt-lockup__tab">
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-lockup__trident" viewBox="0 0 28 34">
                                <path fill="currentColor" d="M-3.34344e-05 4.70897H8.83308V7.174H7.1897V21.1426H10.6134V2.72321H8.83308V0.121224H18.214V2.65476H16.2283V21.1426H19.7889V7.174H18.214V4.64047H27.0471V7.174H25.0614V23.6761L21.7746 26.8944H16.2967V30.455H18.214V33.8787H8.76463V30.592H10.6819V26.8259H5.20403L1.91726 23.6077V7.174H-3.34344e-05V4.70897Z"></path>
                            </svg>
                        </div>

                        <!-- **************************************************
                            Website or application title 
                        *************************************************** -->

                        <div class="rvt-lockup__body">
                            <span class="rvt-lockup__title">Class Buddy</span>
                            <span class="rvt-lockup__subtitle">Indiana University</span>
                        </div>
                    </a>
                </div>
                <div class="rvt-header-global__controls">
                    <div data-rvt-disclosure="menu" data-rvt-close-click-outside>
                        <button aria-expanded="false" class="rvt-global-toggle rvt-global-toggle--menu rvt-hide-lg-up" data-rvt-disclosure-toggle="menu">
                            <span class="rvt-sr-only">Menu</span>
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-global-toggle__open" viewBox="0 0 16 16">
                                <g fill="currentColor">
                                    <path d="M15,3H1A1,1,0,0,1,1,1H15a1,1,0,0,1,0,2Z"></path>
                                    <path d="M15,9H1A1,1,0,0,1,1,7H15a1,1,0,0,1,0,2Z"></path>
                                    <path d="M15,15H1a1,1,0,0,1,0-2H15a1,1,0,0,1,0,2Z"></path>
                                </g>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" class="rvt-global-toggle__close" fill="currentColor" viewBox="0 0 16 16">
                                <path d="M8.46954 7.00409L13.7595 1.71409C13.9234 1.52279 14.009 1.27671 13.9993 1.02504C13.9895 0.773362 13.8852 0.534623 13.7071 0.356528C13.529 0.178434 13.2903 0.0741014 13.0386 0.0643803C12.7869 0.0546591 12.5408 0.140265 12.3495 0.304092L7.05954 5.59409L1.76954 0.294092C1.58124 0.105788 1.32585 -3.72428e-09 1.05954 -1.74018e-09C0.793242 2.43924e-10 0.537847 0.105788 0.349544 0.294092C0.16124 0.482395 0.055452 0.73779 0.055452 1.00409C0.055452 1.27039 0.16124 1.52579 0.349544 1.71409L5.64954 7.00409L0.349544 12.2941C0.244862 12.3837 0.159841 12.4941 0.0998179 12.6181C0.0397946 12.7422 0.00606467 12.8773 0.000745174 13.015C-0.00457432 13.1528 0.0186315 13.2901 0.0689061 13.4184C0.119181 13.5467 0.195439 13.6633 0.292893 13.7607C0.390348 13.8582 0.506896 13.9345 0.635221 13.9847C0.763546 14.035 0.900878 14.0582 1.0386 14.0529C1.17632 14.0476 1.31145 14.0138 1.43551 13.9538C1.55958 13.8938 1.6699 13.8088 1.75954 13.7041L7.05954 8.41409L12.3495 13.7041C12.5408 13.8679 12.7869 13.9535 13.0386 13.9438C13.2903 13.9341 13.529 13.8297 13.7071 13.6517C13.8852 13.4736 13.9895 13.2348 13.9993 12.9831C14.009 12.7315 13.9234 12.4854 13.7595 12.2941L8.46954 7.00409Z" fill="currentColor"></path>
                            </svg>
                        </button>

                        <!-- ******************************************************
                            Primary navigation
                        ******************************************************* -->

                       
                        <?php include "includes/nav.php"?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- **************************************************************************
    Main content area
*************************************************************************** -->

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details rvt-container-lg">
    
    <!-- **********************************************************************
        Sidebar
    *********************************************************************** -->

    <div class="rvt-layout__sidebar" id="section-nav">
        
        <!-- ******************************************************************
            Section navigation
        ******************************************************************* -->
                          
                          
                          
                </li>
            </ul>
        </nav>
    </div>

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
                    <a href="#0">
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
            Page title and summary
        ******************************************************************* -->

        <div class="rvt-m-top-xxl rvt-m-top-md-md-up rvt-flow rvt-prose">
            <h1>Friends</h1>
            <p class="rvt-ts-20 rvt-color-black-500">List of friends, requested friends and suggestions.</p>
        </div>
        <div class="rvt-border-top rvt-p-top-xl rvt-m-top-xl">
            
            <!-- **************************************************************
                Filters
            *************************************************************** -->
            
            <form>
                <div class="rvt-row rvt-row--loose">
                    <div class="rvt-cols-6-md rvt-m-top-lg rvt-m-top-none-md-up">
                        <label class="rvt-label" for="people-filter">Filter by search</label>
                        <input type="text" class="rvt-input" id="people-filter" placeholder="Type to filter list">
                    </div>
                    <div class="rvt-cols-6-md rvt-m-top-lg rvt-m-top-none-md-up">
                        <label class="rvt-label" for="alpha-filter">Filter last name</label>
                        <select name="" id="alpha-filter" class="rvt-select">
                            <option value="All">All</option>
                            <option value="A">A</option>
                            <option value="B">B</option>
                            <option value="C">C</option>
                            <option value="D">D</option>
                            <option value="E">E</option>
                            <option value="F">F</option>
                            <option value="G">G</option>
                            <option value="H">H</option>
                            <option value="I">I</option>
                            <option value="J">J</option>
                            <option value="K">K</option>
                            <option value="L">L</option>
                            <option value="M">M</option>
                            <option value="N">N</option>
                            <option value="O">O</option>
                            <option value="P">P</option>
                            <option value="Q">Q</option>
                            <option value="R">R</option>
                            <option value="S">S</option>
                            <option value="T">T</option>
                            <option value="U">U</option>
                            <option value="V">V</option>
                            <option value="W">W</option>
                            <option value="X">X</option>
                            <option value="Y">Y</option>
                            <option value="Z">Z</option>
                        </select>
                    </div>
                </div>
            </form>

            <!-- **************************************************************
                People list
            *************************************************************** -->
            
            <ul class="rvt-row rvt-row--loose rvt-m-top-xl">
                
                <!-- **********************************************************
                    Person
                *********************************************************** -->
                
                <li class="rvt-cols-6-md [ rvt-flex rvt-m-bottom-xxl ]">
                    <div class="rvt-card">
                        <div class="rvt-avatar rvt-avatar--lg">
                            <img class="rvt-avatar__image" src="https://rivet.iu.edu/img/placeholder/avatar-1.jpg" alt="">
                        </div>
                        <div class="rvt-card__body">
                            <div class="rvt-card__eyebrow"></div>
                            <h2 class="rvt-card__title">
                                <a href="#0">Norval Ashton</a>
                            </h2>
                            <div class="rvt-card__content [ rvt-flow ]">
                                <p>Legacy Integration Technician</p>
                            </div>
                            <div class="rvt-card__meta">
                                <div class="rvt-flex rvt-items-center">
                                    
                                  
                                </div>
                                <div class="rvt-flex rvt-items-center rvt-m-top-xs">
                                    <svg class="rvt-color-black-400 rvt-m-right-xs" aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                                        <path fill="currentColor" d="M13.5,3H2.5A1.5,1.5,0,0,0,1,4.5v8A1.5,1.5,0,0,0,2.5,14h11A1.5,1.5,0,0,0,15,12.5v-8A1.5,1.5,0,0,0,13.5,3ZM11.41,5,8,7.77,4.59,5ZM3,12V6.29L7.11,9.62l.12.08a1.5,1.5,0,0,0,1.54,0L13,6.29V12Z" />
                                    </svg>
                                    <a href="#0">Braeden.McLaughlin@hotmail.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>


            <!-- **************************************************************
                Pagination
            *************************************************************** -->
            
            <div class="rvt-flex rvt-justify-center">
                <nav role="navigation" aria-label="Default results pages">
                    <ul class="rvt-pagination">
                        <li class="rvt-pagination__item is-disabled">
                            <a href="#0" aria-label="Previous set of pages">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <path fill="currentColor" d="M10.5,15a1,1,0,0,1-.77-.36L4.87,8.8a1.25,1.25,0,0,1,0-1.61L9.73,1.36a1,1,0,0,1,1.54,1.28L6.8,8l4.47,5.36A1,1,0,0,1,10.5,15ZM6.41,8.47h0Zm0-1h0Z" />
                                </svg>
                                <span class="rvt-sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="rvt-pagination__item">
                            <a href="#0" aria-label="Page 1">1</a>
                        </li>
                        <li class="rvt-pagination__item">
                            <a href="#0" aria-current="page">2</a>
                        </li>
                        <li class="rvt-pagination__item">
                            <a href="#0" aria-label="Page 3">3</a>
                        </li>
                        <li class="rvt-pagination__item">
                            <a href="#0" aria-label="Page 4">4</a>
                        </li>
                        <li class="rvt-pagination__item">
                            <a href="#0">
                                <svg width="16" height="16" viewBox="0 0 16 16">
                                    <path fill="currentColor" d="M5.5,15a1,1,0,0,1-.77-1.64L9.2,8,4.73,2.64A1,1,0,0,1,6.27,1.36L11.13,7.2a1.25,1.25,0,0,1,0,1.61L6.27,14.64A1,1,0,0,1,5.5,15ZM9.6,8.48h0Zm0-1h0Z" />
                                </svg>
                                <span class="rvt-sr-only">Next set of pages</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</main>


<!-- **************************************************************************
    Footer: Resource links

    -> rivet.iu.edu/components/footer/
*************************************************************************** -->


<!-- **************************************************************************
    Footer: Copyright

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