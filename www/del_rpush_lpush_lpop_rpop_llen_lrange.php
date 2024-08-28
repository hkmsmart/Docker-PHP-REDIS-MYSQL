<?php
try{
    $redis = new Redis();
    $redis->connect('redis');
    $redis->auth('mypassword');
    $redis->incr("counter");
    echo "counter :".$redis->get("counter")."<br>";
    #if(fmod($redis->get("counter"),5) == 0){// eğer counter 5 tam bölünür ise languages sıfırla "sil"
         $redis->del("languages");
    #    $redis->set("counter",0);
    #}
    
    $redis->rpush("languages","c#"); //[c#]     listenin sağına "sonuna" olarak değer ekler
    $redis->rpush("languages","PHP"); //[c#, PHP]
    
    $redis->lpush("languages","Python"); //[Python, c#, PHP]     listenin soluna "başına" olarak değer ekler
    $redis->lpush("languages","Java"); //[Java, Python, c#, PHP]
    
    echo $redis->lpop("languages"); // [Python, c#, PHP]     listenin soluna "başında" olan değeri siler ve silinen değeri döner.
    echo "<br>";

    echo $redis->rpop("languages"); // [Python, c#]     listenin sağına "sonuna" olan değeri siler ve silinen değeri döner.
    echo "<br>";
    
    echo $redis->llen("languages"); //2     listemizin içindeki değerlerin toplamını verir
    echo "<br>";
    
    print_r($redis->lrange("languages",0,-1));//    tüm değerleri gösterir.
    echo "<br>";
    
    print_r($redis->lrange("languages",0,0));//    ilk değeri gösterir
    echo "<br>";
}
catch (Exception $e){
    echo $e->getMessage();
}

?>
<pre>
    KOD:
    echo "counter :".$redis->get("counter");
    #if(fmod($redis->get("counter"),5) == 0){// eğer counter 5 tam bölünür ise languages sıfırla "sil"
         $redis->del("languages");
    #    $redis->set("counter",0);
    #}
    
    $redis->rpush("languages","c#"); //[c#]     listenin sağına "sonuna" olarak değer ekler
    $redis->rpush("languages","PHP"); //[c#, PHP]
    
    $redis->lpush("languages","Python"); //[Python, c#, PHP]     listenin soluna "başına" olarak değer ekler
    $redis->lpush("languages","Java"); //[Java, Python, c#, PHP]
    
    echo $redis->lpop("languages"); // [Python, c#, PHP]     listenin soluna "başında" olan değeri siler ve silinen değeri döner.

    echo $redis->rpop("languages"); // [Python, c#]     listenin sağına "sonuna" olan değeri siler ve silinen değeri döner.
    
    echo $redis->llen("languages"); //2     listemizin içindeki değerlerin toplamını verir
    
    print_r($redis->lrange("languages",0,-1));//    tüm değerleri gösterir.
    
    print_r($redis->lrange("languages",0,0));//    ilk değeri gösterir
</pre>
