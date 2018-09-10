<?php declare(strict_types = 1);

$injector = new \Auryn\Injector;

$injector->alias('Http\Request', 'Http\HttpRequest');
$injector->share('Http\HttpRequest');
$injector->define('Http\HttpRequest',[
    ':get' => $_GET,
    ':post' => $_POST,
    ':cookies' => $_COOKIE,
    ':files'=> $_FILES,
    ':server' => $_SERVER,
]);

$injector->alias('Http\Response', 'Http\HttpResponse');
$injector->share('Http\HttpResponse');

$injector->alias('AdaLeigh\Template\Renderer', 'AdaLeigh\Template\TwigRenderer');//MustacheRenderer
$injector->alias('AdaLeigh\Template\FrontendRenderer', 'AdaLeigh\Template\FrontendTwigRenderer');
$injector->define('Mustache_Engine', [
    ':options' => [
        'loader' => new Mustache_Loader_FilesystemLoader(dirname(__DIR__) . '/templates', [
            'extension' => '.html',
        ]),
    ],
]);

$injector->delegate('Twig_Environment', function () use ($injector) {
    $loader = new Twig_Loader_Filesystem(dirname(__DIR__) . '/templates');
    $twig = new Twig_Environment($loader);
    return $twig;
});

$injector->define('AdaLeigh\Page\FilePageReader', [
    ':pageFolder' => __DIR__ . '/../pages',
]);

$injector->alias('AdaLeigh\Page\PageReader', 'AdaLeigh\Page\FilePageReader');
$injector->share('AdaLeigh\Page\FilePageReader');

$injector->alias('AdaLeigh\Menu\MenuReader', 'AdaLeigh\Menu\ArrayMenuReader');
$injector->share('AdaLeigh\Menu\ArrayMenuReader');

return $injector;