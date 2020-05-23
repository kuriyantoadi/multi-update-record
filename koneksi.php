<?php
 $host = 'localhost';
 $user = 'root';
 $pass = '';
 $db = 'multi-record';

 $conn = mysql_connect($host, $user, $pass);
 mysql_select_db($db, $conn);
