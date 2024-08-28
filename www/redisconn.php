<?php
try{
    $redis = new Redis();
    //Connecting to Redis
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    if ($redis->ping()) {
        echo "connected";
    }
}
catch (Exception $e){
    echo $e->getMessage();
}
?>
