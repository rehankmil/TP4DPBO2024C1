<?php
    // include "connection.php";
    // if(isset($_POST['submit'])){
    //     $name = $_POST['club_name'];
    //     $league = $_POST['league'];
    //     $q = " INSERT INTO `club`(`club_name`, `league`) VALUES ( '$name', '$league' )";

    //     $query = mysqli_query($conn,$q);
    //     header("Location: club.php");
    // }
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Club.controller.php");

$club = new ClubController();

if (isset($_POST['add'])) {
  //memanggil add
  $club->add($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Add Club</title>

  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="bootstrap.min.css">
  <script src="jquery.min.js"></script>
  <script src="popper.min.js"></script>
  <script src="bootstrap.min.js"></script>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand" href="index.php">TUGAS PRAKTIKUM 4</a>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
          <li class="nav-item">
                <a class="nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="club.php">Clubs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Club </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="nameclub" class="form-control"> <br>

 <label> LEAGUE: </label>
 <select id="league" name="league">
    <option value="Premier League">Premier League</option>
    <option value="La Liga">La Liga</option>
    <option value="Serie A">Serie A</option>
    <option value="Bundesliga">Bundesliga</option>
  </select> <br>

 <button class="btn btn-success" type="submit" name="add"> Submit </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="club.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>