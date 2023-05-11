<?php
insertDataProduk(31, 3, 'Produk 31', 'Lorem', 20000, 'accepted', 1, '2023-05-06 06:30:17', '2023-05-06 06:30:17');
function insertDataProduk($id, $category_id, $name, $description, $price, $status, $created_by, $created_at, $updated_at){
  
    include 'database.php';
    $sql = "insert into products (id, category_id, name, description, price, status, created_by, created_at, updated_at) 
    values ('$id', '$category_id', '$name', '$description', '$price', '$status', '$created_by', '$created_at', '$updated_at')";
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}


?>