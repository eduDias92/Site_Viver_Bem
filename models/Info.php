<?php
class Info extends Model{
    public function getInfos(){
        $sql = "SELECT * from information";
        $sql = $this->db->query($sql);
        $array = array();
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $i){
                $array[$i['nome']] = $i['valor'];
            }
        }

        return $array;
    }
}
?>