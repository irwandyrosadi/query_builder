<?php
require 'DB.php';
$DB = DB::getInstance();

// $result = $DB->runQuery('SELECT * FROM barang WHERE id_barang = ?', [4]);
// $tabelBarang = $result->fetchAll(PDO::FETCH_OBJ);

// $query = "INSERT INTO barang (nama_barang, jumlah_barang, harga_barang) VALUES (?,?,?)";
// $data  = ['Cosmos CRJ-8229 - Rice Cooker', 5, 299000];

// $DB->runQuery($query, $data);

// $result = $DB->runQuery("SELECT * FROM barang");
// $tabelBarang = $result->fetchAll(PDO::FETCH_OBJ);

// $tabelBarang = $DB->getQuery("SELECT * FROM barang WHERE id_barang = ?", [3]);

$tabelBarang = $DB->select('nama_barang')->get('barang');
$tabelBarang = $DB->select('nama_barang, harga_barang')->get('barang');

echo "<pre>";
print_r($tabelBarang);
echo "</pre>";