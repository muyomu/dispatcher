<?php

/*
 * --------------------------------------------------
 * Here is the position to write your route rules.
 * --------------------------------------------------
 */

use muyomu\router\attribute\RuleMethod;
use muyomu\router\RouteApi;

RouteApi::rule(RuleMethod::RULE_GET->value, "/muix", "Index", "index");