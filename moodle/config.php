<?php
unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'pgsql';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'mdl-db';
$CFG->dbname    = 'moodle_db';
$CFG->dbuser    = 'moodle_admin';
$CFG->dbpass    = 'moodle_psql';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array(
    'dbpersist' => 0,
    'dbport' => '',
    'dbsocket' => '',
    'dbcollation' => 'utf8mb4_general_ci',
);

$CFG->wwwroot   = 'http://localhost:8002';
$CFG->dataroot  = '/var/www/moodledata';
$CFG->dirroot   = '/var/www/html';
$CFG->directorypermissions = 0777;

$CFG->admin     = 'admin';

$CFG->reverseproxy = true;

require_once(__DIR__ . '/lib/setup.php');
