<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$autoload['packages'] = array();


$autoload['libraries'] =  array('database', 'session', 'form_validation', 'table', 'email', 'typography', 'pagination', 'user_agent', 'encryption', 'globals');

$autoload['drivers'] = array();


$autoload['helper'] = array('url', 'file', 'form','date', 'html', 'typography', 'text','security','typography','array', 'email', 'xml');

$autoload['config'] = array();


$autoload['language'] = array();


$autoload['model'] = array('pages_model');
