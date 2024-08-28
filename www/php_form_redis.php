<?php
try{
    $redis = new Redis();
    $redis->connect('redis', 6379);
    $redis->auth('mypassword');

    if(isset($_POST['name'])){
        $redis->set('name', $_POST['name']);
    }
}
catch (Exception $e){
    echo $e->getMessage();
}
?>
<html>
    <head></head>
    <body>
        <strong>Basit Form</strong>
        <br>
        <form action="php_form_redis.php" method="post">
            <input type="text" name="name">
            <input type="submit" value="Kaydet">
        </form>
        <br>
        <?php
            echo 'redis database okunan değer:'. $redis->get('name');
        ?>
    </body>
</html>