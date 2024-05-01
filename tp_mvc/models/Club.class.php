<?php

class Club extends DB
{
    function getClub()
    {
        $query = "SELECT * FROM club";
        return $this->execute($query);
    }

    function add($data)
    {
        $nameclub = $data['nameclub'];
        $league = $data['league'];

        $query = "insert into club values ('', '$nameclub', '$league')";

        // Mengeksekusi query
        return $this->execute($query);
    }

    function delete($id)
    {

        $query = "delete FROM club WHERE id_club = '$id'";

        // Mengeksekusi query
        return $this->execute($query);
    }
}
