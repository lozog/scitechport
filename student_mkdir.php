<?php

function make_student_folder($dir)
{
    mkdir("users/" . $dir);
    mkdir("users/" . $dir . "/9");
    mkdir("users/" . $dir . "/10");
    mkdir("users/" . $dir . "/11");
    mkdir("users/" . $dir . "/12");
    
    $file[0] = array(
        "9a1.html",
        "9a2.html",
        "9a3.html",
        "9b1.html",
        "9b2.html",
        "9b3.html",
        "9b4.html",
        "9c1.html",
        "9d1.html"
    );
    $file[1] = array(
        "10a1.html",
        "10a2.html",
        "10a3.html",
        "10a4.html",
        "10a5.html",
        "10b1.html",
        "10b2.html",
        "10b3.html",
        "10c1.html",
        "10d1.html"
    );
    $file[2] = array(
        "11a1.html",
        "11a2.html",
        "11b1.html",
        "11b2.html",
        "11b3.html",
        "11b4.html",
        "11c1.html",
        "11d1.html"
    );
    $file[3] = array(
        "12a1.html",
        "12a2.html",
        "12b1.html",
        "12b2.html",
        "12b3.html",
        "12b4.html",
        "12c1.html",
        "12d1.html"
    );
    
    $j = 9;
    for ($i = 0; $i < 5; $i++)
    {
        $length = count($file[$i]);
        
        for ($k = 0; $k < $length; $k++)
        {
            $create_file = fopen("users/" . $dir . "/" . $j . "/" . $file[$i][$k], 'w');
        }
        $j++;
        
    }
    
}
?>