<?php
use Pecee\SimpleRouter\SimpleRouter as Router;

Router::setDefaultNamespace('\App\Controllers');

Router::get('/', 'SiteController@index');

Router::start();