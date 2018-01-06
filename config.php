<?php

// a Google Analytics account -- if specified, we will log activity
//define('GA_ACCOUNT', 'UA-XXXXXXX-X');

// should we allow users to connect on any port? If false, only allow port 70. If true,
// we allow port 70, AND any port greater than 1024, since anything below that is reserved.
define('ALLOW_ALL_PORTS', true);

// an optional regex to restrict hosts too -- if a host doesn't match this, we won't process the request
define('RESTRICT_TO_MATCH', "/sdf.org/");

// lifetime of requests in the cache
define('CACHE_LIFETIME', 3600);
define('CACHE_PATH', "/tmp");

define('APP_NAME', 'Gophper');

// default request to serve up on the index page
//define('START_REQUEST', 'gopherpedia.com/');
//define('START_INPUT', '');

// maximum filesize allowed when browsing/downloading files, etc
define('MAX_FILESIZE', 10000000);

// should we log stats to the db?
//define('LOG_STATS', true);

// if LOG_STATS is true, this specifies the connection to the database
//DB::$user = '';
//DB::$password = '';
//DB::$dbName = 'gopher';

?>
