<!DOCTYPE html>
<html lang="en">

<head>
  <title>View Animal</title>
  <?php include('head.php'); ?>
</head>

<body>
  <header>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>
  </header>
  <main>
    <?php
    require_once "connect.php";
    $id = $_GET['id'];
    $sql = "SELECT * FROM users where id=$id";
    $sql2="SELECT id,A_name FROM animals where creator_id=$id";
    $result = $db->query($sql);
    $result2=$db->query($sql2);

  




    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    ?>
    <div class="container-fluid">
      <div class="row">

        <div class="col-sm-4 text-fluid ">
          <p>Fname: <br>
            <?php echo $row["Fname"]; ?></p><br>
          <p>Lname: <br>
            <?php echo $row["Lname"]; ?></p><br>
          <p>Username: <br>
            <?php echo $row["username"]; ?></p><br>
          <p>Email: <br>
            <?php echo $row["email"]; ?></p><br>
          <p>Role: <br>
            <?php echo $row["role"]; ?></p><br>
          <p>Animal listings: <br>
          <?php
          if ($result2->num_rows > 0) {
            while ($row2 = $result2->fetch_assoc()) { ?>
              <tr>
                <?php echo "<td><a href='ViewAnima.php?id=" . $row2['id'] . "'>" . $row2['A_name'] . "</a></td><br>"; ?>
                
                

              </tr>
          <?php
            }
          } else {
             echo "No animal listings!";
          }

          ?>

        </div>
        <div class="col-sm-4 ">

        </div>
        <div class="col-sm-4 ">

          <?php echo "<a href='usermodif.php?id=" . $row["id"] . "'>Delete</a>"; ?><br>



        </div>




      </div>
    </div>
  </main>
  <?php include('footer.php'); ?>


</body>

</html>