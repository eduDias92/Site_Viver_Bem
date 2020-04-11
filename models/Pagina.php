<?php
class Pagina extends Model{
    public function getPagina($url = ""){
        $sql = "SELECT * FROM Pagina WHERE url = '$url'";
        //die($sql);
        $sql = $this->db->query($sql);
        $array = array();
        if($sql->rowCount() > 0){
            $array = $sql->fetch();
        }

        return $array;
        
    }
}
?>