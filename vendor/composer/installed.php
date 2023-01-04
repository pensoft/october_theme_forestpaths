<?php return array(
    'root' => array(
        'pretty_version' => 'dev-main',
        'version' => 'dev-main',
        'type' => 'october-theme',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'reference' => '08bfa11bb731f4095983d4f717e6d5122238affc',
        'name' => 'october/pensoft-tier2-theme',
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.12.0',
            'version' => '1.12.0.0',
            'type' => 'composer-plugin',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'reference' => 'd20a64ed3c94748397ff5973488761b22f6d3f19',
            'dev_requirement' => false,
        ),
        'october/pensoft-tier2-theme' => array(
            'pretty_version' => 'dev-main',
            'version' => 'dev-main',
            'type' => 'october-theme',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'reference' => '08bfa11bb731f4095983d4f717e6d5122238affc',
            'dev_requirement' => false,
        ),
        'roundcube/plugin-installer' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
