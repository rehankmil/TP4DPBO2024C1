<?php
include_once("models/Template.class.php");
include_once("models/DB.class.php");
include_once("controllers/Members.controller.php");

$members = new MembersController();

if (isset($_POST['add'])) {
  //memanggil add
  $members->add($_POST);
}
?>
<!DOCTYPE html>
<html>
<head>
 <title>Add Members</title>

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
              <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="club.php">Clubs</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
 <div class="col-lg-6 m-auto">
 
 <form method="post">
 
 <br><br><div class="card">
 
 <div class="card-header bg-primary">
 <h1 class="text-white text-center">  Create New Members </h1>
 </div><br>

 <label> NAME: </label>
 <input type="text" name="name" class="form-control"> <br>

 <label> EMAIL: </label>
 <input type="text" name="email" class="form-control"> <br>
 
 <label> PHONE: </label>
 <input type="text" name="phone" class="form-control"> <br>
 
 <label for="join_date">JOIN DATE:</label>
 <input type="date" id="join_date" name="join_date"> <br>
 
 <label> CLUB: </label>
 <input type="text" id="id_club" name="id_club"> <br>
 

 <!-- <select class="custom-select form-control" name="id_club">
    <option selected>Open this select menu</option>
    <?php
    $dataClub = null;
    // Pastikan $data['club'] telah diinisialisasi dan berisi data klub
    if(isset($data['club']) && is_array($data['club'])) {
        // Deklarasikan variabel $dataClub sebelum loop
        foreach($data['club'] as $val){
            list($id_club, $nama, $league) = $val;
            // Perbarui variabel $dataClub dengan opsi yang sesuai
            $dataClub .= "<option value='".$id."'>".$nama."</option>";
        }
        // Setelah loop, echo atau cetak variabel $dataClub
        echo $dataClub;
    } else {
        // Tampilkan pesan alternatif jika $data['club'] kosong atau tidak ada
        echo "<option>No clubs available</option>";
    }
    ?>
</select> <br> -->

 <button class="btn btn-success" type="submit" name="add"> Add Members </button><br>
 <a class="btn btn-info" type="submit" name="cancel" href="index.php"> Cancel </a><br>

 </div>
 </form>
 </div>
</body>
</html>