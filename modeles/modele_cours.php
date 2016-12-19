<?php
function requete_list_cours() {
    global $dbh;
    $sql = "SELECT nom_cours FROM cours";
    $sth = $dbh->query($sql);

    if ($sth === FALSE) {
        return FALSE;
    } else {
        $les_cours = $sth->fetchAll(PDO::FETCH_ASSOC);
        return $les_cours;
    }
}

?>