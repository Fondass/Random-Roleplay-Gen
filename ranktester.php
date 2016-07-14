<?php

/* 
 * 
 * 
 * 
 */


require_once("class.debug.php");


    $zero = 0;
    $one = 1;
    $two = 0;
    $three = 0;
    $four = 0;
    $five = 3;
    $six = 0;

    for ($i = 0; $i <= 100; $i++)
    {
        $r = mt_rand(0, 6);
        switch ($r)
        {
            case 0:
                $zero = $zero + 1;
                break;
            case 1:
                $one = $one + 1;
                break;
            case 2:
                $two = $two + 1;
                break;
            case 3:
                $three = $three + 1;
                break;
            case 4:
                $four = $four + 1;
                break;
            case 5:
                $five = $five + 1;
                break;
            case 6:
                $six = $six + 1;
                break;
        }
    }
    

    
    Debug::writeToLogFile("zero = ".$zero);
    Debug::writeToLogFile("one = ".$one);
    Debug::writeToLogFile("two = ".$two);
    Debug::writeToLogFile("three = ".$three);
    Debug::writeToLogFile("four = ".$four);
    Debug::writeToLogFile("five = ".$five);
    Debug::writeToLogFile("six = ".$six);  
