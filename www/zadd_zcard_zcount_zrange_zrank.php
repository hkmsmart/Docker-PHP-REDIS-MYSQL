<?php
#Redis Data Operations: Efficient Storage, Retrieval, and Data Validation
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $key = "Languages12";
    // zadd :sıralanmış bir kümeye bir veya birden fazla puan ekleyerek günceller.
    $redis->zadd("sorted_set:{$key}",1,"PHP");
    $redis->zadd("sorted_set:{$key}",2,"C#");
    $redis->zadd("sorted_set:{$key}",3,"JAVA");

    print_r($redis->zcard("sorted_set:{$key}")); //3 toplam kümede kaç eleman  sayısını verir
    echo "<br>";
    
    print_r($redis->zcount("sorted_set:{$key}",1,2)); //2 toplam kaç küme index i var  0,1,2
    echo "<br>";
    
    $redis->zrem("sorted_set:Languages","JAVA");// belirtilen küme elmanıı kümeden kaldırır.
    echo "<br>";
    
    print_r($redis->zrange("sorted_set:{$key}",0,-1,"withscores"));//küme içindeki index ve değerleri gösterir.
    echo "<br>";
    
    print_r($redis->zrank("sorted_set:{$key}","C#")); //1 değerin kaçıncı indexe geldiğini söyler.
    echo "<br>";
    print_r($redis->zrange("sorted_set:{$key}",0,-1,"withscores")); // Puana göre artan şekilde sıralar.
   
    print_r($redis->zrevrank("sorted_set:{$key}","C#")); //0 [0 based index]  Bir oyuncunun puanı büyükten küçükten doğru sıralanınca rank değerini döndürür.
    echo "<br>";
    
    print_r($redis->zscore("sorted_set:{$key}","C#")); //2  Belirli bir oyuncunun puanını döndürür
    echo "<br>";
   
    print_r($redis->zrangebyscore("sorted_set:{$key}",1,2, array("withscores"=>true)));
}
catch (Exception $e){
    echo $e->getMessage();
}
?>

<pre>
    KOD:
    $key = "Languages12";
    // zadd :sıralanmış bir kümeye bir veya birden fazla puan ekleyerek günceller.
    $redis->zadd("sorted_set:{$key}",1,"PHP");
    $redis->zadd("sorted_set:{$key}",2,"C#");
    $redis->zadd("sorted_set:{$key}",3,"JAVA");

    print_r($redis->zcard("sorted_set:{$key}")); //3 toplam kümede kaç eleman  sayısını verir
    echo "<br>";
    
    print_r($redis->zcount("sorted_set:{$key}",1,2)); //2 toplam kaç küme index i var  0,1,2
    echo "<br>";
    
    $redis->zrem("sorted_set:Languages","JAVA");// belirtilen küme elmanıı kümeden kaldırır.
    echo "<br>";
    
    print_r($redis->zrange("sorted_set:{$key}",0,-1,"withscores"));//küme içindeki index ve değerleri gösterir.
    echo "<br>";
    
    print_r($redis->zrank("sorted_set:{$key}","C#")); //1 değerin kaçıncı indexe geldiğini söyler.
    echo "<br>";
    print_r($redis->zrange("sorted_set:{$key}",0,-1,"withscores")); // Puana göre artan şekilde sıralar.
   
    print_r($redis->zrevrank("sorted_set:{$key}","C#")); //0 [0 based index]  Bir oyuncunun puanı büyükten küçükten doğru sıralanınca rank değerini döndürür.
    echo "<br>";
    
    print_r($redis->zscore("sorted_set:{$key}","C#")); //2  Belirli bir oyuncunun puanını döndürür
    echo "<br>";
   
    print_r($redis->zrangebyscore("sorted_set:{$key}",1,2, array("withscores"=>true)));
</pre>
