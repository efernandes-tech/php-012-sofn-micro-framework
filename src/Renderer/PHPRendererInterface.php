<?php

namespace EdersonLRF\Renderer;

interface PHPRendererInterface
{
    public function setData($data);

    public function run();
}
