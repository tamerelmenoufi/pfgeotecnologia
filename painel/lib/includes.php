<?php
    session_start();

    // include("connect_local.php");

    include("/pfgeoinc/connect.php");
    $con = AppConnect('pfgeo');

    // include("/appinc/connect.php");
    include("fn.php");

    $md5 = md5(date("YmdHis"));

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/site/";
