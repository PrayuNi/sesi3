<?php
    $mhs = array(
        array("Agus", "2201010322", "Denpasar"),
        array("Amanda Manopo", "2201010323", "Badung"),
        array("Dode Channel", "2201010324", "Depok"),
        array("Rahayu Sukadani", "2201010325", "Surabaya"),
    );
    header("Contect-Type: application/json");
    echo json_encode($mhs);
