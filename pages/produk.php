<?php
function insertDataProduk($id, $category_id, $name, $description, $price, $status, $created_by, $created_at, $updated_at){
    $conn= mysqli_connect("localhost", "root", "localhost", "sinauo");

    $sql = mysqli_query($conn, "insert into products (id, category_id, name, description, price, status, created_by, created_at, updated_at) values ('$id', '$category_id', '$name', '$description', '$price', '$status', '$created_by', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}

insertDataProduk(33, 9, 'Produk 33', 'Lorem', 70000, 'waiting', 1, '2023-05-06 06:30:17', '2023-05-06 06:30:17');
?>