<?php
#Redis Data Operations: Efficient Storage, Retrieval, and Data Validation
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $key = "expire in 1 hour";
    $redis->set($key, "test value");
    
    $redis->expire($key, 3600); //silinme zamanı 1 saat olarak ayarlanır.
    
    $redis->expireat($key, 1723043722); //silinme zamanı Unix Timestamp olarak ayarlanır.

    print_r($redis->ttl($key)); //saniye cinsinden expire olmak için kalan süresini gösterir.

    $redis->persist($key);  //expire date üstündeki zamanı  kaldırır ve kalıcı olarak key silinmeden durur.
}
catch (Exception $e){
    echo $e->getMessage();
}
?>
<pre>
    KOD:
    $key = "expire in 1 hour";
    $redis->set($key, "test value");
    
    $redis->expire($key, 3600); //silinme zamanı 1 saat olarak ayarlanır.
    
    $redis->expireat($key, 1723043722); //silinme zamanı Unix Timestamp olarak ayarlanır.

    print_r($redis->ttl($key)); //saniye cinsinden expire olmak için kalan süresini gösterir.

    $redis->persist($key);  //expire date üstündeki zamanı  kaldırır ve kalıcı olarak key silinmeden durur.
</pre>
