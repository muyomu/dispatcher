<?php

/* --------------------------------------------------------------------
 * Here is the global config file.All config filed required by other
 * libraries should be written on this file.We hope that all library developer
 * and project makers should obey this rule.
 * --------------------------------------------------------------------
 */

use muyomu\auth\config\DefaultSecurityConfig;
use muyomu\config\ConfigApi;
use muyomu\executor\config\DefaultExecutorConfig;
use muyomu\framework\config\DefaultApplicationConfig;
use muyomu\http\config\DefaultHttpConfig;

ConfigApi::configure(DefaultApplicationConfig::class,array(
    "application"=>"muix"
));

ConfigApi::configure(DefaultExecutorConfig::class,array(
    "autoInject"=>true
));

ConfigApi::configure(DefaultSecurityConfig::class,array(
    "security"=>false,
    "obverse"=>[
        "/muix"=>[
            "roles"=>[],
            "privileges"=>[]
        ]
    ]
));

ConfigApi::configure(DefaultHttpConfig::class,array(
    "headers"=>[
        "Access-Control-Allow-Origin"=>"*",
    ]
));