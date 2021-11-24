<?php


if (isset($_GET['op'], $_GET['lho'], $_GET['rho']))
{
    try
    {
        require 'Calculator.php';
        echo (new Calculator($_GET['op'], $_GET['lho'], $_GET['rho']))->xmlOutput(); // PHP 5.4 syntax, access on instantiation
    }
    catch (Exception $oE)
    {
        file_put_contents('exception.log', $oE->getMessage() . PHP_EOL . PHP_EOL, FILE_APPEND); // Create a log file
        return false;
    }
}