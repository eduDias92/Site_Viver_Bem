<?php
class Menu extends Model{
    public function getMenus(){
        $array = array();

        $sql = "SELECT * FROM menu";
        $sql = $this->db->query($sql);
        if($sql->rowCount() > 0){
            $array = $sql->fetchAll();
        }
        return $array;
    }
}
?>