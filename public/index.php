<?php

/**
 * Phplite framework
 * 
 * @author Altayeb Rabeh altayebrabh@gmail.com Teach by Ayman Elmalah
 */

/**
 |------------------------------------------
 | Register the autoloader
 |------------------------------------------
 |
 | Load the autoloader that will generated classes that will be used
 */
require __DIR__ . '/../vendor/autoload.php';

/**
 |------------------------------------------
 | Bootstrap the application
 |------------------------------------------
 |
 | Bootstrap the application and do action from framework
 */
require __DIR__ . '/../bootstrap/app.php';

/**
 |------------------------------------------
 | Run application
 |------------------------------------------
 |
 | Handle the request and send response
 */

Application::run();