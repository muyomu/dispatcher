<?php

/*
 * --------------------------------------------------
 * Here is the position to write your route rules.
 * --------------------------------------------------
 */

use muyomu\router\routerClient;

RouterClient::rule("GET", "/", "Index", "index");