<?php

function muix_log_error($errno, $errstr, $errfile, $errline):void{
    $date = date("Y-m-d H:i:s",time());
    $log = fopen("../resource/log/".date("Ymd").".log","a+");
    fputs($log,"\r\n"."[$date] [ERROR]:    ".$errno." : ".$errstr." : ".$errfile." : ".$errline);
}

function muix_log_warning(string $exceptionName,string $message):void{
    $date = date("Y-m-d H:i:s",time());
    $log = fopen("../resource/log/".date("Ymd").".log","a+");
    fputs($log,"\r\n"."[$date] [WARNING]:    ".$exceptionName.":    ".$message);
}

function muix_log_info(string $extension,string $key, string $message):void{
    $date = date("Y-m-d H:i:s",time());
    $log = fopen("../resource/log/".date("Ymd").".log","a+");
    fputs($log,"\r\n"."[$date] [INFO]:    ".$extension." : ".$key." : ".$message);
}