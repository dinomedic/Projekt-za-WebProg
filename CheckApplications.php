<!DOCTYPE html>
<html lang="en">

<head>
  <title>Applications</title>
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
    $sql = "SELECT id,Fname,Lname,email,dob,work FROM volunteerapplication";
    $result = $db->query($sql);
    ?>
    <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">First</th>
          <th scope="col">Last</th>
          <th scope="col">Email</th>
          <th scope="col">Date of birth</th>
          <th scope="col">Work</th>
          <th scope="col"></th>
        </tr>
      </thead>
      <tbody>
        <?php
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) { ?>
            <tr>
              <td><?php echo $row["Fname"] ?></td>
              <td><?php echo $row["Lname"] ?></td>
              <td><?php echo $row["email"] ?></td>
              <td><?php echo $row["dob"] ?></td>
              <td><?php echo $row["work"] ?></td>
              <?php echo "<td><a href='delete.php?id=" . $row['id'] . "'>Delete</a></td>"; ?>
            </tr>
        <?php
          }
        } else {
          echo "0 rezultata";
        }
        ?>
</div>
  </main>

  <?php include('footer.php'); ?>


</body>

</html>