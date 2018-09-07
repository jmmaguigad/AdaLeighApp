<?php declare(strict_types = 1);

namespace AdaLeigh\Page;

interface PageReader {
    public function readBySlug(string $slug) : string;
}