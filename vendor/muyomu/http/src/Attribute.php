<?php

namespace muyomu\http;

use muyomu\http\client\AttributeClient;

class Attribute implements AttributeClient
{

    public function setAttribute(string $key, mixed $value,array $database): bool
    {
        $database[$key] = $value;
        return true;
    }

    public function getAttribute(string $key,array $database): mixed
    {
        if (array_key_exists($key,$database)){
            return $database[$key];
        }else{
            return null;
        }
    }
}