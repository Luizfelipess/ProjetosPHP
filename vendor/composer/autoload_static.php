<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitef599ac8743625ea82ed85be86f92389
{
    public static $classMap = array (
        'ProjetoPHP\\Estoque\\Estoque' => __DIR__ . '/../..' . '/Estoque/Estoque.php',
        'ProjetoPHP\\Estoque\\Produto' => __DIR__ . '/../..' . '/Estoque/Produto.php',
        'ProjetoPHP\\Vendas\\Compra' => __DIR__ . '/../..' . '/Vendas/Compra.php',
        'ProjetoPHP\\Vendas\\Produtos' => __DIR__ . '/../..' . '/Vendas/Produtos.php',
        'ProjetoPHP\\Vendas\\Usuario' => __DIR__ . '/../..' . '/Vendas/Usuario.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitef599ac8743625ea82ed85be86f92389::$classMap;

        }, null, ClassLoader::class);
    }
}