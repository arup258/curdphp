<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello</title>
  </head>
  <body>
   
<div class="container mt-5">
    <h1>User Data</h1><br>
    <a href="Add_user.php" class="btn btn-success">Add User</a>
    <table class="table mt-2">
  <thead>
    <tr>
      <th scope="col"> Id</th>
      <th scope="col"> Name</th>
      <th scope="col"> Email</th>
      <th scope="col"> Phone</th>
      <th scope="col"> City</th>
      <th colspan="2"> Action</th>
    </tr>
  </thead>
  <tbody>

    <?php 
    include('./dbcon.php');
    $query="select * from users";
    $sql=mysqli_query($conn,$query)
    ?>
    <?php while($row=mysqli_fetch_assoc($sql)) { ?>  
    <tr>
      <th scope="row"><?php echo $row['id']?></th>
      <td class="table-primary"><?php echo $row['name']?></td>
      <td class="table-secondary"><?php echo $row['email']?></td>
      <td class="table-success"><?php echo $row['phone']?></td>
      <td class="table-danger"><?php echo $row['city']?></td>
      <td class="table-warning"><a href="update.php?id=<?= $row['id'];?>" class="btn btn-success">Update</a></td>
      <td class="table-info"><a href="delete.php?delete=<?= $row['id'];?>" class="btn btn-danger">Delete</a></td>
      
    </tr>
    <?php } ?>
  </tbody>
</table>
   
</div>

 
    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
  </body>
</html>