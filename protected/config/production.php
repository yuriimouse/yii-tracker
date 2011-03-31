<?php

// Load main config file
$main = include_once( 'main.php' );

//require_once( '' );

// Production configurations
$production = array(
	'components' => array(
		'db' =>  array(
                        'class' => 'CDbConnection',
                        'connectionString' => 'mysql:host=localhost;dbname=tracker',
                        'username' => 'root',
                        'password' => '89538953',
                        'charset' => 'UTF8',
                        'tablePrefix' => '',
                        'emulatePrepare' => true,
                        'enableProfiling' => true,
                        'schemaCacheID' => 'cache',
                        'schemaCachingDuration' => 3600
                ),
		'messages' => array(
			                'cachingDuration' => 3600,
	         ),		
		'log' => array(
                        'class' => 'CLogRouter',
            			'routes' => array(
            				// Configures Yii to email all errors and warnings to an email address
            				array(
            					'class' => 'LogEmailMessages',
            					'levels' => 'error, warning',
            					'emails' => 'vadimg88@gmail.com',
            					'sentFrom' => 'vadimg88@gmail.com',
            					'subject' => 'Application Error',
            					'enabled' => false,
            				),
		),


            ),
        ),
);
//merge both configurations and return them
return CMap::mergeArray($main, $production);