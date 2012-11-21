<?php
return array(
		
    'modules' => array(
        'Application',
        'ApplicationManager',
    	'User',
<<<<<<< HEAD
		'DoctrineModule',
		'DoctrineORMModule',
=======
>>>>>>> 32cc6c485f972b78d9eacb4c39e3aad3af7251d4
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'config/autoload/{,*.}{global,local}.php',
        ),
        'module_paths' => array(
            './module',
            './vendor',
        ),
    ),
);
