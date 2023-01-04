<?php

/* --------------------------------------------------------------------
 * Here is the global config file.All config filed required by other
 * libraries should be written on this file.We hope that all library developer
 * and project makers should obey this rule.
 * --------------------------------------------------------------------
 */

use muyomu\auth\config\DefaultSecurityConfig;
use muyomu\config\ConfigApi;
use muyomu\dashboard\identifier\ApplicationConfig;
use muyomu\executor\config\DefaultExecutorConfig;
use muyomu\server\config\DefaultServerConfig;

ConfigApi::configure(ApplicationConfig::class,array(
    "application"=>"muix"
));

ConfigApi::configure(DefaultServerConfig::class,array(
    "port"=>80
));

ConfigApi::configure(DefaultExecutorConfig::class,array(
    "autoInject"=>true
));

ConfigApi::configure(DefaultSecurityConfig::class,array(
    "security"=>true,
    "obverse"=>[
        "/muix"=>[
            "roles"=>[],
            "privileges"=>[]
        ]
    ]
));

$config_http = [
    "response_headers"=>[
        "Access-Control-Allow-Origin"=>"*",
    ]
];