<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Products</title>
  </head>
  <body>
    <h1>Hey!!</h1>
    <a  href="category.php" class="ml-5 mt-4 btn btn-primary">
        Add Category
</a>
    
    <div class="mt-5 container">
    <form method="post" action="action.php">
    <div class="form-group">
    <?php include('connection.php');
     $sql1 = "SELECT * FROM `category`";
     $result1 = mysqli_query($conn,$sql1);
     $nums = mysqli_num_rows($result1);
    ?>   
  <label for="exampleInputEmail1">Category</label>
  <select name="cat_id" class="form-control" id="category" aria-describedby="emailHelp" required>
  <?php
if ($nums>0) {
while ($fetch1 = mysqli_fetch_array($result1)) {
?>
  <option value="<?php echo $fetch1['id'] ?>"><?php echo $fetch1['category'] ?></option>
  <?php
    }
}
?>
  </select>
</div>

  <div class="form-group">
    <label for="exampleInputEmail1">Product</label>
    <input type="text" name="product" class="form-control" id="category" aria-describedby="emailHelp" required>
  </div>
  
  <div class="form-group">
    <label for="exampleInputEmail1">Description</label>
    <input type="text" class="form-control" name="description" id="category" aria-describedby="emailHelp" required>
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
    </div>
    <?php include('connection.php');
     $sql = "SELECT products.id, products.product, products.description, category.category 
     FROM products 
     LEFT JOIN category ON products.cat_id = category.id";
     $result = mysqli_query($conn,$sql);
     $num = mysqli_num_rows($result);
    ?>
    <div class="container pt-3">
        <div class="container">
    <table class="table table-dark">
  <thead>
    <tr>
      <th scope="col">SRNO.</th>
      <th scope="col">Category</th>
      <th scope="col">Product</th>
      <th scope="col">Description</th>
    </tr>
  </thead>
<?php
if ($num>0) {
while ($fetch = mysqli_fetch_array($result)) {
?>
  <tbody>
    <tr>
      <th scope="row"><?php echo $fetch['id'] ?></th>
      <td><?php echo $fetch['category'] ?></td>
      <td><?php echo $fetch['product'] ?></td>
      <td><?php echo $fetch['description'] ?></td>
    </tr>
<?php
    }
}
?>
  </tbody>
</table>
    </div>
    </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>