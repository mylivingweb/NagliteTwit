<?php

/**
 *
 * Configuration
 * Changes in this file will overwrite default values
 *
 **/

// Set file path to your nagios status log
$statusFile = '/usr/local/nagios/var/status.dat';

// Refresh time in seconds
$refresh = 10; 

// Show warning state if status file was last updated <num> seconds ago
// Set this to a higher value then status_update_interval in your
// nagios.cfg
// $statusFileTimeout = 60; 

// Enable fortune output
// $enableFortune = false;
// $fortunePath = "/usr/games/fortune";
