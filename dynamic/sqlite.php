<?php

$host = 'localhost';
$port = 11211;

#echo sqlite_libversion();
$serverkey = sys_get_temp_dir() . "/memcache-$host-$port.sqlite";
$db = sqlite_open($serverkey);

$result = sqlite_exec($db, "insert into mc values ('" . mt_rand() . "', 'value', 1234)");
if (sqlite_last_error($db)) {
    sqlite_exec($db, "create table mc (key_md5 char primary key, value text, expiry numeric)");
} else {
    $result = sqlite_query($db, "SELECT * from mc");
    print_r(sqlite_fetch_all($result));
    sqlite_exec($db, "drop table mc");
}
