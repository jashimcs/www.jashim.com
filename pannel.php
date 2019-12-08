<?php
    include("config.php");

    $sql = "SELECT * FROM user ORDER BY id asc";
    $result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
?>

<!doctype html>
<html lang="en">
  <head>
    <title>c-pannel</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>

      <!-- Grey with black text -->
      <nav class="navbar nav" id="nav">
   <h2></span> <span class="text-primary">Jashim Uddin</span> </h2>
      <ul>
          <li><a href="#" >Home</a> </li>
          <li> <a href="index.php?#education">Education</a></li>
          <li> <a href="index.php?#skill" >Skills</a></li>
          <li><a href="index.php?#experience">Experience</a></li>
          <li> <a href="index.php?#contact">Contact</a></li>
          
      </ul>
 </nav>

<div class="container">
        <div class="row">
            <div class="col-md-12 pt-5">
                <div class="text-right mb-4">
                <a href="create.php" class="btn btn-primary" type="button">Add New Student</a>
                </div>
            <table class="table table-dark table-hover" id="u_table">
    <thead>
      <tr>
        <th>Serial</th>
        <th>Name</th>
        <th>Email</th>
        <th>password</th>
      </tr>
    </thead>
    <tbody>
        <?php
        $i=1;
 while($row = mysqli_fetch_assoc($result)) {
        ?>
      <tr>
          <td><?php echo $i++; ?></td>    
        <td><?php echo $row['username']; ?></td>
        <td><?php echo $row['email']; ?></td>
        <td><?php echo $row['password']; ?></td>
        
        <td>
          <a href="edit.php?id=<?php echo $row['id'];?>"  class="btn btn-info" name="u_id">EDIT</a>
          <a class="btn btn-danger" href="server.php?delete=<?php echo $row['id'];?>" onclick="return confirm('are you sure want to delete this?')" name="delete">Delete</a>
        </td>
      </tr>

      <?php
      }
    } else {
    echo "<h1>0 result Found</h1>";
    }
      ?>
    </tbody>
  </table>
            </div>
        </div>
    </div>
      


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script>
    $(document).ready( function () {
    $('#u_table').DataTable();
    } );
    </script>
  </body>
</html>