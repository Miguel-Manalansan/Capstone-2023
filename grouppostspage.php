<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Group Post Page</title>
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

<main id="main-content" class="rvt-layout__wrapper rvt-layout__wrapper--details">

<div class="rvt-layout__sidebar [ rvt-p-top-xxl-md-up rvt-p-left-md rvt-bg-black-000 ]" id="section-nav">
    <nav class="rvt-sidenav" aria-labelledby="sidenav-label" data-rvt-sidenav>
      <span class="rvt-sidenav__label" id="sidenav-label">Section pages</span>
      <ul class="rvt-sidenav__list">
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/group.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link">About</a>
        </li>
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/grouppostspage.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link" aria-current="page">Posts</a>
        </li>
        <li class="rvt-sidenav__item">
          <a href="https://cgi.luddy.indiana.edu/~team09/groupmembers.php?id=<?php echo $_GET['id']; ?>" class="rvt-sidenav__link">Members</a>
        </li>
      </ul>
    </nav>
</div>
<div class="rvt-layout__content [ rvt-p-top-xxl rvt-p-lr-md rvt-p-lr-xxl-md-up ]">
        <div class="rvt-prose rvt-grow-1">
            <h1 class="rvt-m-top-xs">Posts</h1>
        </div>
        <div class="rvt-m-top-md">

            <!-- **************************************************************
                Post created alert box
            *************************************************************** -->

            <!-- <div class="rvt-alert rvt-alert--warning [ rvt-m-bottom-md ]" role="alert" aria-labelledby="success-alert-title" data-rvt-alert="success">
                <div class="rvt-alert__title" id="success-alert-title">Alert box</div>
                <p class="rvt-alert__message">Use this space for error handling, confirmation messages, and warnings.</p>
                <button class="rvt-alert__dismiss" data-rvt-alert-close>
                    <span class="rvt-sr-only">Dismiss this alert</span>
                    <svg aria-hidden="true" width="16" height="16" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M9.41,8l5.29-5.29a1,1,0,0,0-1.41-1.41L8,6.59,2.71,1.29A1,1,0,0,0,1.29,2.71L6.59,8,1.29,13.29a1,1,0,1,0,1.41,1.41L8,9.41l5.29,5.29a1,1,0,0,0,1.41-1.41Z" />
                    </svg>
                </button>
            </div> -->

            <!-- **************************************************************
                Filters and actions
            *************************************************************** -->

            <div class="rvt-flex-lg-up">
                <div class="rvt-grow-1 rvt-m-bottom-md">
                    <label class="rvt-label" for="search">Type to filter</label>
                    <input class="rvt-input" type="text" id="search">
                </div>
                <div class="rvt-grow-1 rvt-m-bottom-md rvt-m-left-lg-lg-up">
                    <label class="rvt-label" for="choice-filter">Sort by</label>
                    <select name="" id="choice-filter" class="rvt-select">
                        <option value="choice-one">date (oldest to newest)</option>
                        <option value="choice-two">date (newest to oldest)</option>
                        <option value="choice-three">User</option>
                    </select>
                </div>

                <!-- **************************************************************
                    "Add new record" button
                *************************************************************** -->
                <a href="https://cgi.luddy.indiana.edu/~team09/demo.php">
                <button class="rvt-button rvt-m-left-lg-lg-up rvt-m-top-md-lg-up" type="button" data-rvt-dialog-trigger="post">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                        <path fill="currentColor" d="M14,7H9V2A1,1,0,0,0,7,2V7H2A1,1,0,0,0,2,9H7v5a1,1,0,0,0,2,0V9h5a1,1,0,0,0,0-2Z" />
                    </svg>
                    <span class="rvt-m-left-xs">New Post</span>
                </button>
                </a>
                <div class="rvt-dialog" id="new-post" role="dialog" tabindex="-1" aria-labelledby="dialog-title" aria-describedby="dialog-description" data-rvt-dialog="post" hidden>
  <header class="rvt-dialog__header">
    <h1 class="rvt-dialog__title" id="dialog-title">New Post</h1>
  </header>
  <div class="rvt-dialog__body">
    <label for="text-input-default" class="rvt-label">Post title</label>
<input type="text" id="text-input-default" class="rvt-text-input">
    </br>
    <label for="textarea-default" class="rvt-label">Post Content</label>
<textarea id="textarea-default" class="rvt-textarea"></textarea>
  </div>
  <div class="rvt-dialog__controls">
    <button type="button" class="rvt-button" role="button">
    <span>Post</span>
    </button>
    <button type="button" class="rvt-button rvt-button--secondary" data-rvt-dialog-close="dialog-example" role="button">
    <span>Cancel</span>
    </button>
  </div>
  <button class="rvt-button rvt-button--plain rvt-dialog__close" data-rvt-dialog-close="dialog-example" role="button">
    <span class="rvt-sr-only">Close</span>
    <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
      <path fill="currentColor" d="M9.41,8l5.29-5.29a1,1,0,0,0-1.41-1.41L8,6.59,2.71,1.29A1,1,0,0,0,1.29,2.71L6.59,8,1.29,13.29a1,1,0,1,0,1.41,1.41L8,9.41l5.29,5.29a1,1,0,0,0,1.41-1.41Z" />
    </svg>
  </button>
</div>
      </div>

            <!-- **************************************************************
                Data list
            *************************************************************** -->

            <ul class="rvt-list-reset rvt-border-top">

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Update scheduling software</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Mafalda_Lesch47</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Integrate command line tools</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Janessa79</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Synchronize email workflows</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Laura_Schamberger43</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Contact vendor about licenses</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Lucius15</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Fork code repository</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Jasen_Cartwright62</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Deploy containerized application</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Kody_Larson18</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->

                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Monitor usage analytics</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Lexi35</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>

                <!-- **********************************************************
                    List item
                *********************************************************** -->
                
                <li class="rvt-border-bottom rvt-p-tb-xs rvt-p-right-xs">
                    <a href="#0" class="rvt-link-plain rvt-flex rvt-items-center">
                        <span class="rvt-grow-1">Extract code into subclasses</span>
                        <span class="rvt-bg-blue-000 rvt-flex rvt-items-center rvt-justify-center rvt-p-all-xs rvt-border-radius-circle">
                            <svg class="rvt-shrink-0" width="16" height="16" viewBox="0 0 16 16">
                                <path fill="currentColor" d="M15.92,8.38a1,1,0,0,0-.22-1.09l-4-4a1,1,0,0,0-1.41,1.41L12.59,7H1A1,1,0,0,0,1,9H12.59l-2.29,2.29a1,1,0,1,0,1.41,1.41l4-4A1,1,0,0,0,15.92,8.38Z" />
                            </svg>
                        </span>
                    </a>
                    <div class="rvt-flex-md-up rvt-items-center-md-up rvt-ts-14 rvt-m-top-xxs">
                        <div class="rvt-flex rvt-items-center">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <g fill="currentColor">
                                        <path d="M8,8a4,4,0,1,1,4-4A4,4,0,0,1,8,8ZM8,2a2,2,0,1,0,2,2A2,2,0,0,0,8,2Z" />
                                        <path d="M12.75,16H3.25A1.25,1.25,0,0,1,2,14.75V13A4,4,0,0,1,6,9h4a4,4,0,0,1,4,4v1.75A1.25,1.25,0,0,1,12.75,16ZM4,14h8V13a2,2,0,0,0-2-2H6a2,2,0,0,0-2,2Z" />
                                    </g>
                                </svg>
                            </span>
                            <span>Owned by <span class="rvt-text-bold">Alfonso3</span></span>
                        </div>
                        <span class="rvt-flex rvt-items-center rvt-m-left-sm-md-up">
                            <span class="rvt-color-black-300 rvt-flex">
                                <svg width="16" height="16" viewBox="0 0 16 16" aria-hidden="true">
                                    <path fill="currentColor" d="M12.29,2H12V1a1,1,0,0,0-2,0V2H6V1A1,1,0,0,0,4,1V2H3.71A2.78,2.78,0,0,0,1,4.83v7.33A2.78,2.78,0,0,0,3.71,15h8.57A2.78,2.78,0,0,0,15,12.17V4.83A2.78,2.78,0,0,0,12.29,2ZM3.71,4H4V5H6V4h4V5h2V4h.29a.78.78,0,0,1,.71.83V7H3V4.83A.78.78,0,0,1,3.71,4Zm8.57,9H3.71A.78.78,0,0,1,3,12.17V9H13v3.17A.78.78,0,0,1,12.29,13Z" />
                                </svg>
                            </span>
                            <span class="rvt-m-left-xs">Updated on <time>April 1, 2021</time></span>
                        </span>
                    </div>
                </li>
            </ul>
            
            <!-- **************************************************************
                Pagination
            *************************************************************** -->

            <div class="rvt-m-top-xl rvt-flex rvt-justify-center">
                <nav role="navigation" aria-label="Default results pages">
                    <ul class="rvt-pagination">
                        <li class="rvt-pagination__item is-disabled">
                            <a href="#0" aria-label="Previous set of pages" tabindex="-1">
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
    Footer

    -> rivet.iu.edu/components/footer/
**************************************************************************** -->

<footer class="rvt-footer-base rvt-footer-base--light">
    <div class="rvt-footer-base__inner [ rvt-p-lr-md ]">
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
</footer>

<script src="https://unpkg.com/rivet-core@2.3.1/js/rivet.min.js"></script>
<script>Rivet.init()</script>
</body>
</html>