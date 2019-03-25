<?php
namespace Helpers;

class Helpers
{
    public static function initTwig()
    {

        $loader = new \Twig\Loader\FilesystemLoader(realpath(dirname(__FILE__)) . '/views');

        $twig = new \Twig\Environment($loader, [
            'cache' => realpath(dirname(__FILE__)) . '/views/twig',
            'debug' => true,
        ]);
        $twig->addGlobal('session', $_SESSION);

        return $twig;
    }
}
