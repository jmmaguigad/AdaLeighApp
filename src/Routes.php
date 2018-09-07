<?php declare(strict_types = 1);

return [
    ['GET', '/', ['AdaLeigh\Controllers\Homepage', 'show']],
    ['GET', '/{slug}', ['AdaLeigh\Controllers\Page', 'show']],
    // ['GET', '/another-route', function () {
    //     echo 'This works too';
    // }],
];