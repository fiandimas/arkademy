<html>
  <head>
    <title>Arkademy</title>
  </head>
  <body>
    <center>
    <table border="2px" style="text-align:center;">
    <h1>Data Barang</h1>
      <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Jumlah Produk</th>
      </tr>
      <?php
        $conn = mysqli_connect('localhost','root','','arkademy');
        $query = mysqli_query($conn,'SELECT product_categories.id,product_categories.name, COUNT(product_categories.id) AS Jumlah_product FROM `product_categories` INNER JOIN products ON product_categories.id=products.category_id GROUP BY product_categories.id');
        while($data = mysqli_fetch_array($query)){
      ?>
      <tr>
          <td><?php echo $data['id'] ?></td>
          <td><?php echo $data['name'] ?></td>
          <td><?php echo $data['Jumlah_product'] ?></td>
      </tr>
      <?php
        }
      ?>
    </table>

    <table border="2px" style="text-align:center;">
    <h1>Data Category Product</h1>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Tanggal Dibuat</th>
      </tr>
      <?php
        $conn = mysqli_connect('localhost','root','','arkademy');
        $query = mysqli_query($conn,'SELECT * FROM `product_categories`');
        while($data = mysqli_fetch_array($query)){
      ?>
      <tr>
          <td><?php echo $data['id'] ?></td>
          <td><?php echo $data['name'] ?></td>
          <td><?php echo $data['created_date'] ?></td>
      </tr>
      <?php
        }
      ?>
    </table>

    <table border="2px" style="text-align:center;">
    <h1>Data Category Product</h1>
      <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>ID Kategori</th>
        <th>Tanggal Dibuat</th>
      </tr>
      <?php
        $conn = mysqli_connect('localhost','root','','arkademy');
        $query = mysqli_query($conn,'SELECT * FROM `products`');
        while($data = mysqli_fetch_array($query)){
      ?>
      <tr>
          <td><?php echo $data['id'] ?></td>
          <td><?php echo $data['name'] ?></td>
          <td><?php echo $data['category_id'] ?></td>
          <td><?php echo $data['created_date'] ?></td>
      </tr>
      <?php
        }
      ?>
    </table>
  </body>
</html>