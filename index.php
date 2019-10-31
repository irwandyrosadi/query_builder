<?php
require 'DB.php';
$DB = DB::getInstance();

// $result = $DB->insert('user', [
//             'username'  => 'rina',
//             'password'  => '123456',
//             'email'     => 'rinapunya@yahoo.com'
//         ]);

// if ($result) {
//     echo "Terdapat ".$DB->count(). " data yang diinput";
// }

// $tabelUser = $DB->get('user');

// $tabelUser = $DB->select('username, email')->get('user');

// echo "<pre>";
// print_r($tabelUser);
// echo "</pre>";

// $result = $DB->update('user',
//                      ['email' => 'alex999@gmail.com'],
//                      ['username','=','alex']
//                     );

// if ($result) {
//     echo "Terdapat ".$DB->count(). " data yang diinput";
// }

// $tabelUser = $DB->getWhereOnce('user', ['username','=','alex']);

// echo $tabelUser->username ." | ". $tabelUser->email;

// $tabelUser = $DB->delete('user', ['username', '=', 'alex']);

// if ($tabelUser) {
//     echo "Terdapat ".$DB->count(). " data yang dihapus";
// }



















































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

// if ($DB->check('barang', 'id_barang', '4')) {
//     echo "ID barang 4 tersedia";
// }

// $result = $DB->update('barang',
//             ['nama_barang'   => 'Laptop ASUS ROG GL503GE',
//              'harga_barang'  => 17999000],
//             ['id_barang','=',3]);

// $result = $DB->delete('barang',['id_barang', '<', 5]);

// if ($result) {
//     echo "Terdapat ".$DB->count()." data yang dihapus";
// }

// echo "<pre>";
// print_r($tabelBarang);
// echo "</pre>";