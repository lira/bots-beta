<?php
$access_token = "EAAERPIZCsMMwBAA2LzsCsZCDY5sNFB48kX23Q3uKd8U0Yc2l5U3eaEzAbSlZCLQRxwhNyrOy1AqJ0jSqO475Sk1gPHn32aZB5emzV5bOG0NjptAiUmk4Np4EoN9PeTIZAuBgSY6n7wp7OYihiHyIfUURJd0ZBaAZBgorjSI67Se5gZDZD";
$verify_token = "curso_intellibots";
$hub_verify_token = null;

if(isset($_REQUEST['hub_challenge'])) {
    $challenge = $_REQUEST['hub_challenge'];
    $hub_verify_token = $_REQUEST['hub_verify_token'];
}


if ($hub_verify_token === $verify_token) {
    echo $challenge;
}

