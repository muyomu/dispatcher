<?php

use muyomu\config\ConfigApi;
use muyomu\framework\config\DefaultInitializeConfig;

ConfigApi::configure(DefaultInitializeConfig::class,array(
    "ini"=>[
        "date.timezone"=>"Asia/Shanghai"
    ],
    "ext"=>[
        "mysqli"
    ],
    "callable"=>[
        function(){
            session_start();
        }
    ]
));
