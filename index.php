<?php
 
namespace Main;

require_once __DIR__ . '/vendor/autoload.php';

// // use the factory to create a Faker\Generator instance
// $faker = Faker\Factory::create('fr_US');
  
// // generate data by accessing properties
// echo $faker->name;
  
// // generate fake address
// echo $faker->address;
  
// // generate fake name
// echo $faker->text;
// //phpinfo();

//use \Utils\Echoval;
$echoval = new \Utils\Echoval();
echo $echoval->echoit(' xxxx');

use Utils\Echoval1;
$echoval = new Echoval1();
echo $echoval->echoit(' yyyy');

echo \Utils\echoit(" zzzz");

use Utils2\More\Echoval3;
$echoval = new Echoval3();
echo $echoval->echoit(' yyyyy3');

// use Monolog\Logger;
// use Monolog\Handler\StreamHandler;
// //use Monolog\Handler\FirePHPHandler;

// // Create the logger
// $logger = new Logger('my_logger');
// // Now add some handlers
// $logger->pushHandler(new StreamHandler(__DIR__.'/test.log'));
// //$logger->pushHandler(new FirePHPHandler());

// // You can now use your logger
// $logger->info('My logger is now ready');
// $logger->info('Adding a new user', array('username' => 'Seldaek'));

