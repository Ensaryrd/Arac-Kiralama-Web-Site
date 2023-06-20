<!DOCTYPE html>
<html>
    <head>
        <title>İletişim</title>
        <meta charset="UTF-8">
    </head>
<?php
    require_once "config.php";
    session_start();
    if(!isset($_SESSION['userEmail']))
        require_once "navbar.html";
    else
        require_once "navbarLogged.html";

?>  
    <div class="container text-center col-sm-4 mt-2">
        <p class="display-4 text-center">Bana Ulaşın</p>
        <div class="row mt-5">
            <img src="imgs/linkedin.png" class="rounded" with="50" height="50">
            <a href="https://www.linkedin.com/in/ensaryrd/" class="px-3" style="font-size: 30px;">LinkedIn</a>
        </div>
        <div class="row mt-4">
            <img src="imgs/github.webp" class="rounded" with="50" height="50">
            <a href="https://github.com/ensaryrd" class="px-3" style="font-size: 30px;">Github</a>
        </div>
    </div>