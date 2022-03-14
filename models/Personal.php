<?php
class Personal {
    private $db;
    private $id;
    private $documento;
    private $nombres;
    private $apellidos;
    private $id_tipo_cargo;
    private $estado; 
            
    function __construct() {
       //$this->db = DatabaseExterna::connect(); 
       $this->db = DatabaseExterna::Con2();
    }

    public function getId() {
        return $this->id;
    }
     
    public function setId($id) {
        $this->id = $id;
    }
    public function getDocumento() {
        return $this->documento;
    }
     
    public function setDocumento($documento) {
        $this->documento = $documento;
    }
    public function getNombres() {
        return $this->nombres;
    }
     
    public function setNombres($nombres) {
        $this->nombres = $nombres;
    }
    public function getApellidos() {
        return $this->apellidos;
    }
     
    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }
    public function getId_tipo_cargo() {
        return $this->id_tipo_cargo;
    }
     
    public function setId_tipo_cargo($id_tipo_cargo) {
        $this->id_tipo_cargo = $id_tipo_cargo;
    }
    public function getEstado() {
        return $this->estado;
    }
     
    public function setEstado($estado) {
        $this->estado = $estado;
    }

    public function getOne(){
        //$sql="SELECT id, documento, nombres, apellidos, id_tipo_cargo, estado FROM personal WHERE id = {$this->getId()};";
        $sql="SELECT id, documento, nombres, apellidos, estado FROM personal WHERE id = {$this->getId()};";
        $consulta = $this->db->query($sql);
        $fila = $consulta->fetch_object();
        if($fila){
            $this->setId($fila->id);
            $this->setDocumento($fila->documento);
            $this->setNombres($fila->nombres);
            $this->setApellidos($fila->apellidos);
            //$this->setId_tipo_cargo($fila->id_tipo_cargo);            
            $this->setEstado($fila->estado);                        
            return $fila; 
        } else {
            return false;
        }                 
    }

    public function getOnePDO(){
       /*
        $sql="SELECT id, documento, nombres, apellidos, estado FROM personal WHERE id = {$this->getId()};";
        $consulta = $this->db->query($sql);
        $fila = $consulta->fetch_object();
        if($fila){
            $this->setId($fila->id);
            $this->setDocumento($fila->documento);
            $this->setNombres($fila->nombres);
            $this->setApellidos($fila->apellidos);
            //$this->setId_tipo_cargo($fila->id_tipo_cargo);            
            $this->setEstado($fila->estado);                        
            return $fila; 
        } else {
            return false;
        }       
*/
        //$sql = "SELECT id, documento, nombres, apellidos, estado FROM personal WHERE id = ?";
        $sql = "SELECT id, documento, nombres, apellidos, estado FROM personal";

        $sql = $this->db->prepare($sql);
        //$sql->bindValue(1,$this->getId());
        $sql->execute();
        //return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);    
        return $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);    
        

    }


    public function getAllActives(){
        $sql="SELECT id, documento, nombres, apellidos, id_tipo_cargo, estado FROM personal WHERE estado = 'A' AND id_tipo_cargo = 2 ORDER BY nombres ASC";
        $consulta = $this->db->query($sql);
        //echo $sql . "<hr>" . $this->db->error; die();
        return $consulta;
    }

    public function getOneByDocumento(){
        $sql="SELECT id, documento, nombres, apellidos, id_tipo_cargo, estado FROM personal WHERE documento = '{$this->getDocumento()}' AND estado = 'A' AND id_tipo_cargo = 2";
        $consulta = $this->db->query($sql);
        //echo $sql . "<hr>" . $this->db->error; die();
        $fila = $consulta->fetch_object();
        return $fila;
    }    



}
?>