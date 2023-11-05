<?php

/*
 * --------------------------------------------------
 * Here is the position to write your route rules.
 * --------------------------------------------------
 */

use muyomu\router\attribute\RuleMethod;
use muyomu\router\RouteApi;

RouteApi::rule(RuleMethod::RULE_GET->value, "/", "Index", "index");

RouteApi::rule(RuleMethod::RULE_GET->value, "/show", "Index", "show");

RouteApi::rule(RuleMethod::RULE_GET->value,"/view","Index","view");

RouteApi::rule(RuleMethod::RULE_GET->value,"/music","Music","displayMusic");

RouteApi::rule(RuleMethod::RULE_GET->value,"/video","Music","displayVideo");