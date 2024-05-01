<?php

  class MembersView {
    public function render($data){
      $no = 1;
      $dataMembers = null;
      $dataAuthor = null;
      foreach($data['members'] as $val){
        list($id, $name, $email, $phone, $join_date, $id_club) = $val;
        $dataMembers .= "<tr>
                <td>" . $no++ . "</td>
                <td>" . $name . "</td>
                <td>" . $email . "</td>
                <td>" . $phone . "</td>
                <td>" . $join_date . "</td>
                <td>" . $id_club . "</td>
                <td>
                    <a href='Index.php?id_hapus=" . $id . "' class='btn btn-danger''>Hapus</a>
                </td>";
        $dataMembers .= "</tr>";
      }

      $tpl = new Template("templates/index.html");
      $tpl->replace("DATA_TABEL", $dataMembers);
      $tpl->write(); 
    }
  }
?>