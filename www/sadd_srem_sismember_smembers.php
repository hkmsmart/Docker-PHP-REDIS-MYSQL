<?php
#Working with Sets in Redis: Efficient Data Manipulation and Set Operations
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');
    
    $key = "Languages12";
    
    $redis->sadd($key,'PHP');//atama işlemi
    $redis->sAddArray($key,['C#','Ruby','Java']);
    $redis->sadd($key,'PHP');// aynı değerden var ise bunu tekrar eklemicektir.
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Array [3] => C#2 [4] => C# [5] => Ruby )
    echo "<br>";

    $redis->srem($key,'C#');// bir değeri kaldırmak için kullanılır
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Ruby )
    echo "<br>";

    var_dump($redis->sismember($key,'C#')); // false
    echo "<br>";
    
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Ruby )
    echo "<br>";
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
    
    $key = "Languages12";
    
    $redis->sadd($key,'PHP');//atama işlemi
    $redis->sAddArray($key,['C#','Ruby','Java']);
    $redis->sadd($key,'PHP');// aynı değerden var ise bunu tekrar eklemicektir.
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Array [3] => C#2 [4] => C# [5] => Ruby )

    $redis->srem($key,'C#');// bir değeri kaldırmak için kullanılır
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Ruby )

    var_dump($redis->sismember($key,'C#')); // false
    
    print_r($redis->smembers($key)); // Array ( [0] => Java [1] => PHP [2] => Ruby )
</pre>
