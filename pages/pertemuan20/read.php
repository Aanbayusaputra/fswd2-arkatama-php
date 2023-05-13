<?php
// koneksi ke database
require_once 'database.php';

// query untuk join tabel products dan categories
$query = "SELECT p.id, c.name AS category_name, p.name, p.description, p.price, p.status, p.created_at, p.updated_at, p.created_by, p.verified_at, p.verified_by 
          FROM products p 
          INNER JOIN categories c ON p.category_id = c.id";

$result = mysqli_query($conn, $query);

?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>database</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
  </head>
  <body >
  <div class="container">
    <h1>Products dan Categories</h1>
    <table class="bg-warning table">
      <thead>
        <tr class="bg-danger">
          <th>ID</th>
          <th>Category Name</th>
          <th>Name</th>
          <th>Description</th>
          <th>Price</th>
          <th>Status</th>
          <th>Created At</th>
          <th>Updated At</th>
          <th>Created By</th>
          <th>Verified At</th>
          <th>Verified By</th>
        </tr>
      </thead>
      <tbody>
        
        <?php while ($row = mysqli_fetch_assoc($result)) : ?>
          <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['category_name']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['description']; ?></td>
            <td><?php echo $row['price']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td><?php echo $row['created_at']; ?></td>
            <td><?php echo $row['updated_at']; ?></td>
            <td><?php echo $row['created_by']; ?></td>
            <td><?php echo $row['verified_at']; ?></td>
            <td><?php echo $row['verified_by']; ?></td>
          </tr>
        <?php endwhile; ?>
      </tbody>
    </table>
  </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  </body>
</html>