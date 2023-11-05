<?php

/* --------------------------------------------------------------------
 * Here is the global config file.All config filed required by other
 * libraries should be written on this file.We hope that all library developer
 * and project makers should obey this rule.
 * --------------------------------------------------------------------
 */

use muyomu\config\ConfigApi;
use muyomu\data\config\DataSourceConfig;
use muyomu\executor\config\DefaultExecutorConfig;
use muyomu\framework\config\DefaultApplicationConfig;
use muyomu\http\config\DefaultHttpConfig;

ConfigApi::configure(DefaultApplicationConfig::class,array(
    "application"=>"muix"
));

ConfigApi::configure(DefaultExecutorConfig::class,array(
    "autoInject"=>true
));

ConfigApi::configure(DefaultHttpConfig::class,array(
    "headers"=>[
        "Access-Control-Allow-Origin"=>"*",
    ]
));

ConfigApi::configure(DataSourceConfig::class,array(
    "pool"=>[
        "muyomu"=>[
            "hostname"=>"192.168.10.128",
            "port"=>3306,
            "database"=>"muyomu",
            "user"=>[
                "username"=>"root",
                "password"=>"123456"
            ],
            "parameters"=>[

            ]
        ]
    ],
));