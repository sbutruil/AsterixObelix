<?php

session_start();

if(isset($_GET['coordinates']))
{
    $coordinates = $_GET['coordinates'];
    if (strpos($coordinates, "48.78") !== false && strpos($coordinates, "-3.52") !== false) {
        readfile("romansForest87456982.html");
        exit();
    } else {
        readfile("forest.html");
        exit();
    }
} else {
    readfile("forest.html");
    exit();
}
