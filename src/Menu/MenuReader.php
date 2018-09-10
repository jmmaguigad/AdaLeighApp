<?php declare(strict_types = 1);

namespace AdaLeigh\Menu;

interface MenuReader {
    public function readMenu() : array;
}