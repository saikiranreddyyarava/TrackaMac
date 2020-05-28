<?php
   class MyDB extends SQLite3 {
      function __construct() {
         $this->open('groupy.db');

       }
}
$db = new MyDB();

$sq1 =<<<EOF

   CREATE TABLE IF NOT EXISTS List(Device varchar not null,VLANS varchar not null,port varchar,MACS  varchar);
EOF;
$ret = $db->exec($sq1);
if(!$ret){
  echo $db->lastErrorMsg();
}
$sql =<<<EOF

     CREATE TABLE IF NOT EXISTS switches (ip varchar not null,port varchar not null,community string not null,version varchar not null,first_probetime varchar null,latest_probetime varchar null,failed_attempts int default 0 not null);

EOF;




   $ret1 = $db->exec($sql);

   if(!$ret1){

      echo $db->lastErrorMsg();

   }

?>
