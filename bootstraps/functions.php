<?php
use \Illuminate\Container\Container;

function container($abstract = null, array $parameters = [])
{
    if (is_null($abstract)) {
        return Container::getInstance();
    }

    return Container::getInstance()->make($abstract, $parameters);
}