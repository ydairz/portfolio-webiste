<?php
echo "<nav class='navbar'>
    <ul>
        <li><a href='#top'>Yasir M Dahir</a></li>
        <li class='dropdown-icon' onclick='displayList()'><i id='dropdown-button' class='fas fa-bars fa-2x'></i></li>
        <li id='about-me-item' class='secondary-li-inactive'><a href='#about-me'>About Me</a></li>
        <li id='skills-item' class='secondary-li-inactive'><a href='#skills'>Skills</a></li>
        <li id='education-item' class='secondary-li-inactive'><a href='#education'>Education</a></li>
        <li id='projects-item' class='secondary-li-inactive'><a href='#projects'>Projects</a></li>
        <li id='experiences-item' class='secondary-li-inactive'><a href='#experiences'>Experiences</a></li>
        <li id='blog-item' class='secondary-li-inactive'><a href='#blog'>Blog</a></li>";
        if (isset($_SESSION["logged-in"])) {
            echo "<li id='sign-in-item' class='secondary-li-inactive'><a href='./logout.php'>Sign Out</a></li>";
        }
        else {
            echo "<li id='sign-in-item' class='secondary-li-inactive'><a href='./login.php'>Sign In</a></li>";
        }
    echo "</ul>";
    if (isset($_SESSION["logged-in"])) {
        echo "<button type='button' onclick='logoutFunction()'>Sign Out</button>";
    }
    else {
        echo "<button type='button' onclick='loginFunction()'>Sign In</button>";
    }
    echo "</nav>";
?>