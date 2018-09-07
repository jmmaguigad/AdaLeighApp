<?php declare(strict_types = 1);

namespace AdaLeigh\Template;

interface Renderer {
    public function render($template, $data = []) : string;
}