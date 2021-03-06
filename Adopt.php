<!DOCTYPE html>
<html lang="en">

<head>
  <title>Adopt</title>
  <?php include('head.php'); ?>
  <script src="scripts/Adopt.js"></script>
</head>

<body>

  <header>
    <?php include('header.php'); ?>
    <?php include('navbar.php'); ?>
  </header>

  <main>
    <?php
    require_once "connect.php";
    $sql = "SELECT A_name,species,id,age FROM animals";
    $result = $db->query($sql);
    ?>
    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-4 ">
        </div>
        <div class="col-sm ">
          <p class="text-center"> Pet adoption is a critical part of our mission. Each year, 6.5 million pets enter animal shelters in the United States. Tragically, only half of them are adopted.

            At Seattle Paws, homeless pets stay with us until they are adopted — no matter how long it takes. We believe every animal deserves a chance for a good home.

            There are many reasons pets come to our shelter.  Some animals are transferred from other shelters, and some pets are surrendered for medical or behavioral concerns,
            or due to financial hardship. No matter the situation, we prepare adopters for success by
            helping you choose a pet that is right for your home environment and providing education and care that will get your relationship off to a good start. <br><br>
            
            <?php
            require_once "connect.php";
            if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] == false){
              echo'<p class="text-center"><a class="btn btn-primary"  role="button" onclick="clicked()">Create adoption listing</a></p>';
              

            } else{
              echo '<p class="text-center"><a class="btn btn-primary" href="Adoptform.php" role="button">Create adoption listing</a></p>';
              
            }
           ?>
           

          </p>

        </div>
        <div class="col-sm-4 ">
        </div>
      </div>
    </div>
    <div class="container">
    <div class="row">
    
    <div class="col-md">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">Animal name</th>
            <th scope="col">Species</th>
            <th scope="col">Age</th>

          </tr>
        </thead>
        <tbody>
          <?php
          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) { ?>
              <tr>
                <?php echo "<td><a href='ViewAnima.php?id=" . $row['id'] . "'>" . $row['A_name'] . "</a></td>"; ?>
                <td><?php echo $row["species"] ?></td>
                <td><?php echo $row["age"] ?></td>

              </tr>
          <?php
            }
          } else {
            echo "0 results";
          }

          ?>
    </div>
    </div>
    

    </div>
    </div>
  </main>
  <?php include('footer.php'); ?>


</body>

</html>