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

// $tabelBarang = $DB->select('nama_barang, harga_barang')->orderBy('id_barang', 'ASC')->get('barang');


// $tabelBarang = $DB->select('harga_barang, nama_barang')
//                   ->orderBy('harga_barang', 'DESC')
//                   ->get('barang', 'WHERE harga_barang > ?', [7000000]);

// $tabelBarang = $DB->select('nama_barang, jumlah_barang')
//                   ->getWhere('barang',['id_barang','=',5]);

// $tabelBarang = $DB->getWhereOnce('barang',['harga_barang','>',5000000]);

// $tabelBarang = $DB->select('nama_barang','id_barang')
//                   ->getLike('barang', 'nama_barang','%kulkas%');

if ($DB->check('barang', 'id_barang', '4')) {
    echo "ID barang 4 tersedia";
}

echo "<pre>";
print_r($tabelBarang);
echo "</pre>";