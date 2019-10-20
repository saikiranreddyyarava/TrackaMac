<?php

   class MyDB extends SQLite3 {

      function __construct() {

         $this->open('groupy.db');
       }
}
$db = new MyDB();

$sq1 =<<<EOF

   CREATE TABLE IF NOT EXISTS List(id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,Device varchar(50),VLANS varchar(10),port varchar(10),MACS  varchar(100));
EOF;
$ret = $db->exec($sq1);
if(!$ret){
  echo $db->lastErrorMsg();
}
$sql =<<<EOF

     CREATE TABLE IF NOT EXISTS switches (id INTEGER NOT NULL PRIMARY KEY AUTOINCREMENT,ip varchar(30),port varchar(10),community varchar(10),version varchar(5),first_probetime TEXT,latest_probetime TEXT,failed_attempts varchar(50));

EOF;



   $ret1 = $db->exec($sql);

   if(!$ret1){

      echo $db->lastErrorMsg();

   }



?>
