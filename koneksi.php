<?php

    $conn = mysqli_connect("localhost","root","","praktikum_2");
    
    if (mysqli_connect_errno()) {
        echo "Error Database!";
    }