<?php
    date_default_timezone_set("America/Manaus");
    include("/pfgeoinc/connect.php");
    $con = AppConnect('pfgeo');
    include("classes.php");

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/site/";
