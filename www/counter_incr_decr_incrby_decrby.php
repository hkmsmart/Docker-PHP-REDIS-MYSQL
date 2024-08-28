<?php
try{
    $redis = new Redis();
    $redis->connect('redis');
    $redis->auth('mypassword');
    
    $redis->set("counter",0);
    
    $redis->incr("counter");//1     incr  artırma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
    
    $redis->incr("counter");//2     incr  artırma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
    
    $redis->decr("counter");//1     decr  azaltma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
    
    $redis->incrby("counter",15);//16   incrby  artırmak istedğimiz  değer kadar artırır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
    
    $redis->incrby("counter",5);//21   incrby  artırmak istedğimiz  değer kadar artırır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
    
    $redis->decrby("counter",10);//11   decrby  azaltmak istedğimiz  değeri kadar azaltır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter."<br>";
}
catch (Exception $e){
    echo $e->getMessage();
}

?>
<pre>
    KOD:
    $redis->set("counter",0);
    
    $redis->incr("counter");//1     incr  artırma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
    
    $redis->incr("counter");//2     incr  artırma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
    
    $redis->decr("counter");//1     decr  azaltma komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
    
    $redis->incrby("counter",15);//16   incrby  artırmak istedğimiz  değer kadar artırır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
    
    $redis->incrby("counter",5);//21   incrby  artırmak istedğimiz  değer kadar artırır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
    
    $redis->decrby("counter",10);//11   decrby  azaltmak istedğimiz  değeri kadar azaltır komutu
    $counter = $redis->get("counter");
    echo "counter value: ".$counter;
</pre>
