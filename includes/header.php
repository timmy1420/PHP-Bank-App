<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Bank Web Applicatie</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/app.min.css" />
</head>

<?php
    // Globale functies voor de web applicatie
    class Tasks {
        static function calculate($cent5, $cent10, $cent25, $cent100, $cent250, $srd5, $srd10, $srd20, $srd50, $srd100) {
            $cent5 *= 0.05;
            $cent10 *= 0.1;
            $cent25 *= 0.25;
            $cent100 *= 1;
            $cent250 *= 2.5;
            $srd5 *= 5;
            $srd10 *= 10;
            $srd20 *= 20;
            $srd50 *= 50;
            $srd100 *= 100;
            $total = $cent5 + $cent10 + $cent25 + $cent100 + $cent250 + $srd5 + $srd10 + $srd20 + $srd50 + $srd100;
            return $total;
        }
    }
?>