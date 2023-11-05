<?php

use muyomu\config\ConfigApi;
use muyomu\framework\config\DefaultInitializeConfig;

/**
 * Here is the config document which is the global config.
 * It's so much important that you just can config it according to
 * the document given but can not delete it.
 */
$super_config=[
    "logDir"=>"../log/",
    "resDir"=>"../resource/"
];

/**
 * Here is the config document which is the range config.
 * It's so much important that you just can config it according to
 * the document given but can not delete it.
 */
ConfigApi::configure(DefaultInitializeConfig::class,array(
    "ini"=>[
        "date.timezone"=>"Asia/Shanghai"
    ],
    "ext"=>[
        "PDO"
    ],
    "callable"=>[
        function(){
            session_start();
        }
    ]
));
