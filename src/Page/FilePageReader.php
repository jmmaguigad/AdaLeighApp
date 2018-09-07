<?php declare(strict_types = 1);

namespace AdaLeigh\Page;

use InvalidArgumentException;

class FilePageReader implements PageReader {
    private $pageFolder;

    public function __construct(string $pageFolder) {
        $this->pageFolder = $pageFolder;
    }

    public function readBySlug(string $slug) : string {
        return 'I am a placeholder';
    }
}