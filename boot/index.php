<?php

/*-------------------------------------------------------------------------------
 * Here is the entrance of this project.
 * ------------------------------------------------------------------------------
 */
use muyomu\framework\Framework;

/**
 * 引入自动加载文件
 */
require "../vendor/autoload.php";
require "../system/config_autoload.php";
Framework::main();