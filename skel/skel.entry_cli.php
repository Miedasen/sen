<?php
/**
 *  {$action_name}.php
 *
 *  @author     {$author}
 *  @package    Sen
 */
chdir(dirname(__FILE__));
require_once '{$dir_app}/Sen_Controller.php';

ini_set('max_execution_time', 0);

Sen_Controller::main_CLI('Sen_Controller', '{$action_name}');
