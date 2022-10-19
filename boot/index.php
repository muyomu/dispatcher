<?php

/*-------------------------------------------------------------------------------
 * Here is the entrance of this project.
 * ------------------------------------------------------------------------------
 */

use muyomu\framework\CreateApp;
use muyomu\router\exception\RuleNotMatch;

/**
 * 引入自动加载文件
 */
require "../vendor/autoload.php";
require "../system/config_autoload.php";

$app = new CreateApp();

$app->run();