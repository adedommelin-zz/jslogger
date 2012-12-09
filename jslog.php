<?php
/*
 *------------------------------------------------------------------------------
 * jslog.php 
 *
 * Author: adedommelin
 * Last modified: Sun Dec 09, 2012 08:47PM
 *
 * This program is free software. It comes without any warranty, to
 * the extent permitted by applicable law. You can redistribute it
 * and/or modify it under the terms of the Do What The Fuck You Want
 * To Public License, Version 2, as published by Sam Hocevar. See
 * http://sam.zoy.org/wtfpl/COPYING for more details.
 *
 *------------------------------------------------------------------------------
*/
define('STATSD_CLASS','/path/to/StatsD/class.php');
define('STATSD_COUNTER','jslogger.errors');
define('MYSQL_HOST','hostname');
define('MYSQL_USER','user');
define('MYSQL_PASS','password');
define('MYSQL_NAME','jslogger');



require_once( STATSD_CLASS );
StatsD::increment( STATSD_COUNTER );

$cnx = mysql_connect( MYSQL_HOST, MYSQL_USER, MYSQL_PASS ) or die("Connection failed");
mysql_select_db( MYSQL_NAME, $cnx ) or die('Unable to select DB');

$sql  = "INSERT INTO logs (url, msg, ua, ts) VALUES (";
$sql .= "'".mysql_real_escape_string( $_GET['u'].'('.$_GET['l'].')' )."',";
$sql .= "'".mysql_real_escape_string( $_GET['d'] )."',";
$sql .= "'".mysql_real_escape_string( $_GET['ua'] )."',";
$sql .= "NOW());";

$q = mysql_query( $sql );
mysql_close( $cnx ) ;
?>
