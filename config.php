<?php
$config["db_host"]="localhost";
$config["db_user"]="root";
$config["db_pass"]="password";
$config["db_name"]="likuyani";

foreach($config as $k =>$v){
  define(strtoupper($k), $v);
}
