s<?php


return array(
		'console' => array(
			'router' => array(
				'routes' => array(
					'application-manager' => array(
						'options' => array(
							'route'    => 'manager',
							'defaults' => array(
									'controller' => 'ApplicationManager\Index',
									'action'     => 'index',
							),
						),
					),
				),
			),
		),

);
