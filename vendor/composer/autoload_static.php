<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit37988c02081217057e522113967b11ce
{
    public static $prefixLengthsPsr4 = array (
        'P' => 
        array (
            'PHPMailer\\PHPMailer\\' => 20,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'PHPMailer\\PHPMailer\\' => 
        array (
            0 => __DIR__ . '/..' . '/phpmailer/phpmailer/src',
        ),
    );

    public static $prefixesPsr0 = array (
        'J' => 
        array (
            'JasonGrimes' => 
            array (
                0 => __DIR__ . '/..' . '/jasongrimes/paginator/src',
            ),
        ),
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit37988c02081217057e522113967b11ce::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit37988c02081217057e522113967b11ce::$prefixDirsPsr4;
            $loader->prefixesPsr0 = ComposerStaticInit37988c02081217057e522113967b11ce::$prefixesPsr0;

        }, null, ClassLoader::class);
    }
}