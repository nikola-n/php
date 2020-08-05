<?php
require 'RespondsToUserRegistration.php';
require 'RegisterUser.php';
require 'AuthController.php';

use Acme\AuthController;
use Acme\RegisterUser;

$registration = new RegisterUser();
$authController = new AuthController($registration);

echo $authController->register();