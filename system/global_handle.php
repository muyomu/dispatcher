<?php

use muyomu\http\message\Message;

set_exception_handler(function ($exception){
    $message = new Message();
    $message->setDataCode(500);
    $message->setDataStatus("ServerError");
    $message->setDataType("Describe Message");
    $message->setData($exception->getMessage());

    $return = array();
    $return['code'] = $message->getDataCode();
    $return['status'] = $message->getDataStatus();
    $return['dateType'] = $message->getDataType();
    $return['data'] = $message->getData();

    echo json_encode($return, JSON_UNESCAPED_UNICODE);
});

set_error_handler(function ($error){

});