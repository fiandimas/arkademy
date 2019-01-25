<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Arkademy</title>
  </head>
  <style>
    table,h4{
      text-align:center
    }
  </style>
  <body>
    <div class="col-md-2"></div>
    <div class="col-md-8">
      <h4>Data Barang</h4>
      <table class="table table-bordered table-striped">
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

      <h4>Data Category Product</h4>
      <table class="table table-bordered table-striped">  
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
      <h4>Data Product</h4>
        <table class="table table-bordered table-striped">
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
      </div>
  </body>
</html>