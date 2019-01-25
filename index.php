<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>Arkademy</title>
  </head>
  <body>
    <div class="col-md-2">
      <ul style="margin-top:200px">
        <li><a href="http://localhost/arkademy/index.php?page=1">Soal 1</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=2">Soal 2</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=3">Soal 3</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=4">Soal 4</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=5">Soal 5</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=6">Soal 6</a></li>
        <li><a href="http://localhost/arkademy/index.php?page=7">Soal 7</a></li>
      </ul>
    </div>
    <div class="col-md-8" style="margin-top:50px">
    <?php
      if(isset($_GET['page'])){
        $preview = $_GET['page'];
        if($preview == 6){
    ?>
      Relations : <img src="preview/relation.png"><br><br><br>
      Table product_categories : <img src="preview/product_categories.png"><br><br><br>
      Table product : <img src="preview/product.png"><br><br><br>
      Hasil Query : <img src="preview/query_result.png"><br><br><br>
      Query : <i><b>SELECT product_categories.id,product_categories.name, COUNT(product_categories.id) AS Jumlah_product FROM product_categories INNER JOIN products ON product_categories.id=products.category_id GROUP BY product_categories.id</b></i>><br><br><br>
    <?php 
      }else if($preview < 8){
        echo "<img src='preview/$preview.png'><br><br>";
        echo "<h4 style='text-align:center'><a href='http://localhost/arkademy/soal$preview.php' target='_blank'>Go To Application</a></h4>";
      }
    }
    ?>
    </div>
  </body>
</html>