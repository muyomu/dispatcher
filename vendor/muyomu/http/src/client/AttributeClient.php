<?php

namespace muyomu\http\client;

interface AttributeClient
{
    public function setAttribute(string $key,mixed $value,array $database):bool;

    public function getAttribute(string $key,array $database):mixed;
}