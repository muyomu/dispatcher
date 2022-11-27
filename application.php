<?php

/* --------------------------------------------------------------------
 * Here is the global config file.All config filed required by other
 * libraries should be written on this file.We hope that all library developer
 * and project makers should obey this rule.
 * --------------------------------------------------------------------
 */

$config_application =[
    "application"=>"muix"
];

$config_log4p=[
    "log_location"=>"../log/"
];

$config_http = [
    "response_headers"=>[
        "Access-Control-Allow-Origin"=>"*",
    ]
];