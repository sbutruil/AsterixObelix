<?php

session_start();

if(isset($_GET['coordinates']))
{
    $coordinates = $_GET['coordinates'];
    if (str_contains($coordinates, "48.78")  && str_contains($coordinates, "-3.52")) {
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

