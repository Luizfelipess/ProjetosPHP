<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef599ac8743625ea82ed85be86f92389
{
    public static $classMap = array (
        'Compra' => __DIR__ . '/../..' . '/Vendas/Compra.php',
        'Produto' => __DIR__ . '/../..' . '/Vendas/Produto.php',
        'Usuario' => __DIR__ . '/../..' . '/Vendas/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitef599ac8743625ea82ed85be86f92389::$classMap;

        }, null, ClassLoader::class);
    }
}
