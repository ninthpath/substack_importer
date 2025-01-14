<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit987bc348806a6c2dc0f4bc70ce6433ac
{
    public static $classMap = array (
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Oxymel' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-oxymel.php',
        'OxymelException' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-oxymel.php',
        'SubstackImporter\\Converter' => __DIR__ . '/../..' . '/includes/class-converter.php',
        'SubstackImporter\\Importer_Admin' => __DIR__ . '/../..' . '/includes/class-importer-admin.php',
        'WXR_Generator\\Buffer_Writer' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-buffer-writer.php',
        'WXR_Generator\\File_Writer' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-file-writer.php',
        'WXR_Generator\\Generator' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-generator.php',
        'WXR_Generator\\Writer_Interface' => __DIR__ . '/..' . '/automattic/wxr-generator/lib/class-writer-interface.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInit987bc348806a6c2dc0f4bc70ce6433ac::$classMap;

        }, null, ClassLoader::class);
    }
}
