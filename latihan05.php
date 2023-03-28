<?php
    //model 1
    //$age = array ("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    //model 2
    $age["AGUS"] = "19";
    $age["DODE"] = "20";
    $age["KADE"] = "25";
    $age["MELLI"] = "30";
    $age["PRAY"] = "35";

    header("Contect-Type: application/json");
    echo json_encode($age);
