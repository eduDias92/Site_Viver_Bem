<?php 
class Config extends Model{
    public function getConfig(){
        $sql = "SELECT * from Config";
        $sql = $this->db->query($sql);

        $array = array();
        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $config){
                $array[$config['nome']] = $config['valor'];
            }
        }

        return $array;
    }
}
?>