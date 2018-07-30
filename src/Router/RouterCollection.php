<?php

namespace EdersonLRF\Router;

// use Illuminate\Support\Collection;

class RouterCollection
{
    protected $collection = [];

    public function add(string $method, string $path, $callback)
    {
        if (!isset($this->collection[$method])) {

        }
    }
}
