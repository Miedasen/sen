<?php

require_once dirname(__FILE__) . '/../app/Sen_Controller.php';

/**
 * If you want to enable the UrlHandler, comment in following line,
 * and then you have to modify $action_map on app/Sen_UrlHandler.php .
 *
 */
// $_SERVER['URL_HANDLER'] = 'index';

/**
 * Run application.
 */
Sen_Controller::main('Sen_Controller', 'index');

