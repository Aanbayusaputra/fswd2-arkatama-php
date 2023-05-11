<?php
insertDatakategori('15', 'Kategori 15', '2023-05-06 21:47:57', '2023-05-06 21:47:57');
function insertDatakategori($id, $name, $created_at, $updated_at){
    $conn = mysqli_connect("localhost", "root", "localhost", "sinauo");

    $sql = mysqli_query($conn, "insert into categories (id, name,  created_at, updated_at) 
    values ('$id',  '$name', '$created_at', '$updated_at')");
    
    if ($sql){
        echo "Data berhasil ditambahkan";
    } else {
        "Gagal menambahkan data";
    }
}


?>