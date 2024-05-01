<?php
  class ClubView{
    public function render($data){
      $no = 1;
      $dataClub = null;
      foreach($data as $val){
        list($id, $nama, $league) = $val;
            $dataClub .= "<tr>
                    <td>" . $no++ . "</td>
                    <td>" . $nama . "</td>
                    <td>" . $league . "</td>
                    <td>
                    <a href='Club.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                    </td>
                    </tr>";
      }

      $tpl = new Template("templates/club.html");
      $tpl->replace("DATA_TABEL", $dataClub);
      $tpl->write();
    }
  }