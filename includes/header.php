<?php require_once("includes/config.php") ?>
<!DOCTYPE html>
<html>
<head> 
    <link rel="stylesheet" type="text/css" href="assets/css/index.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" ></script> -->
    <script src="assets/js/commonActions.js"> </script>
    <title> Welcome to the Videolia App </title>
</head> 
<body>
    <div id="pageContainer"> 
        <div id="nestedToMainContainer"> 
            <button class="navShowHide"> 
                <img src="https://img.icons8.com/android/24/000000/menu.png"/>
            </button>
            <a class="title"> 
                <h4> Videolia </h4>
            </a> 
            <!-- Search Bar below -->
            <div class="searchBarContainer"> 
                <form action="search.php" methoed="GET">
                    <input 
                        type="text" 
                        class="searchBar"
                        name="term"
                        placeholder="Search"
                    />
                    <button class="searchButton"> 
                        <img src="https://img.icons8.com/android/24/000000/search.png"/>
                    </button>
                </form>
            </div>
            <!-- Profile link section -->
            <div class="rightIcons"> 
            <a href="profile.php" class="profile"> 
            <img src="https://img.icons8.com/color/48/000000/circled-user-male-skin-type-5--v1.png" />
            </a>
            <!-- Upload link section -->
            <a href="upload.php"> 
                <img src="https://img.icons8.com/android/24/000000/upload.png" class="upload" />
            </a> 
            </div>
        </div>
        

        <div id="sideNavContainer" style="display: none">

        </div> 

        <div id="mainSectionContainer"> 
            <div id="mainContectContainer"> 