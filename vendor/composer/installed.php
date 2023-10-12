<?php return array(
    'root' => array(
        'name' => 'fullworks/quick-event-manager',
        'pretty_version' => 'dev-master',
        'version' => 'dev-master',
        'reference' => '07500d2f36c78bb96ca12a16d0d381e3a569eedf',
        'type' => 'wordpress-plugin',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        'composer/installers' => array(
            'pretty_version' => 'v1.0.12',
            'version' => '1.0.12.0',
            'reference' => '4127333b03e8b4c08d081958548aae5419d1a2fa',
            'type' => 'composer-installer',
            'install_path' => __DIR__ . '/./installers',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'freemius/wordpress-sdk' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '47aaeb6611c8f4c7a0a88793c0d79eafdebfbf4f',
            'type' => 'library',
            'install_path' => __DIR__ . '/../freemius/wordpress-sdk',
            'aliases' => array(
                0 => '9999999-dev',
            ),
            'dev_requirement' => false,
        ),
        'fullworks/quick-event-manager' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '07500d2f36c78bb96ca12a16d0d381e3a569eedf',
            'type' => 'wordpress-plugin',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'gamajo/template-loader' => array(
            'pretty_version' => 'dev-master',
            'version' => 'dev-master',
            'reference' => '05057216f60baebfc4939e1a2b9aae6e89d25c91',
            'type' => 'library',
            'install_path' => __DIR__ . '/../gamajo/template-loader',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'shama/baton' => array(
            'dev_requirement' => false,
            'replaced' => array(
                0 => '*',
            ),
        ),
    ),
);
