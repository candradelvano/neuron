<?php
    /* setcookie("last_login",date("Y-m-d H:i:s"),time()-3600);
    echo $_COOKIE['last_login'];
    setcookie("last_login",'',time()+3600,'/');
    echo "<br>";
    echo $_COOKIE['last_login']; */
?>

<?php
    $dsn = 'mysql:host=localhost;dbname=test';
    $pdo = new PDO($dsn, 'root', '');
    $stm = $pdo->prepare("INSERT INTO test (name, created_at) VALUES (?,?)");
    $stm->execute(['candra delvano',date("Y-m-d H:i:s")]);
?>