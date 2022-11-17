<?php

function http_header_template():void{
    header("text/json;charset=UTF-8");
}

function http_status_setter(int $code):void{
    header($GLOBALS['http_code'][$code]);
}