<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=ilkoom", "root", "");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $query = "DROP TABLE IF EXISTS user";
    $count = $pdo->query($query); 
    
    if ($count !== FALSE) {
        echo "Query Ok <br>";
    }

    $query = "CREATE TABLE user (
                username VARCHAR(50) PRIMARY KEY,
                password VARCHAR(255),
                email VARCHAR(100)
            )";
    $count = $pdo->query($query);
    
    if ($count !== FALSE) {
        echo "Query Ok, Tabel user berhasil dibuat <br>";
    }

} catch (\PDOException $e) {
    echo "Koneksi / Query bermasalah ".$e->getMessage(). " (".$e->getCode().")";
}
finally {
    $pdo = NULL;
}
