<?php
#A Powerful Data Structure for Efficiently Storing and Retrieving Key-Value Pairs
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $key = "Ali Veli";
    
    $redis->hSet($key,'age',35);//hash key'ine,  key value ata
    $redis->hSet($key,'country','Turkey');
    $redis->hSet($key,'occupation','Software Engineer');
    $redis->hSet($key,'deleted',0);
    
    echo $redis->hget($key,'age'); //35
    echo "<br>";
    
    echo $redis->hget($key,'country'); //Turkey
    echo "<br>";
    
    $redis->del($key,'deleted'); //deleted olan key siler.
    
    $redis->hincrBy($key,'age',10); //45 //integer değeri 10 arttır
    
    //toplu atama
    $redis->hmset($key,[
        'age'        => 35,
        'country'    => 'Turkey',
        'occupation' => 'Software Engineer',
    ]);
    
    $data = $redis->hGetAll($key);
    print_r($data);
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
    
    $key = "Ali Veli";
    
    $redis->hSet($key,'age',35);//hash key'ine,  key value ata
    $redis->hSet($key,'country','Turkey');
    $redis->hSet($key,'occupation','Software Engineer');
    $redis->hSet($key,'deleted',0);
    
    echo $redis->hget($key,'age'); //35
    
    echo $redis->hget($key,'country'); //Turkey
    
    $redis->del($key,'deleted'); //deleted olan key siler.
    
    $redis->hincrBy($key,'age',10); //45 //integer değeri 10 arttır
    
    //toplu atama
    $redis->hmset($key,[
        'age'        => 35,
        'country'    => 'Turkey',
        'occupation' => 'Software Engineer',
    ]);
    
    $data = $redis->hGetAll($key);
    print_r($data);
</pre>
