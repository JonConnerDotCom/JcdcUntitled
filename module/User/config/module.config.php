<?php


return array(
		'doctrine' => array(
				'driver' => array(
						'my_annotation_driver' => array(
								'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
								'cache' => 'array',
								'paths' => array('modules/User/src/User/Entity'),
						),
				),
		),
);


