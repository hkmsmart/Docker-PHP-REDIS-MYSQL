<?php
#Redis Data Operations: Efficient Storage, Retrieval, and Data Validation
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $redis->set("user_name", "ali_veli"); //atama işlemi
    
    if($redis->exists('user_name')){ //böyle bir değer varmı
        echo "get key user_name to value    :" .$redis->get("user_name"); //getir
    }
}
catch (Exception $e){
    echo $e->getMessage();
}

?>
<pre>
    KOD:
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $redis->set("user_name", "ali_veli");
    
    if($redis->exists('user_name')){
    echo "get key user_name to value    :" .$redis->get("user_name");
    }
</pre>
