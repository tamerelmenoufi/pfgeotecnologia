<?php
    session_start();

    // include("connect_local.php");

    include("/credcarbonoinc/connect.php");
    $con = AppConnect('pfgeo');

    // include("/appinc/connect.php");
    include("fn.php");

    $md5 = md5(date("YmdHis"));

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/painel/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://".$_SERVER["HTTP_HOST"]."/site/";

    $localPainel = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/";
    $localSite = $_SERVER["REQUEST_SCHEME"]."://pfgeotecnologia.com.br/";