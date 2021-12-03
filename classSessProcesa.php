<?php
class usuario implements Jsonserializable{
    public $nombre;
    public $edad;
    public $direc;
    public function __construct($n,$e,$d){
        $this->nombre=$n;
        $this->edad=$e;
        $this->direc=$d;
    }
    public function jsonSerialize(){
        return get_object_vars($this);
    }
}
$nombre=$_GET['nom'];
$edad=$_GET['edad'];
$direccion=$_GET['direc'];
//declaro mi objeto
$user=new usuario($nombre,$edad,$direccion);
session_start();
$_SESSION['usuario']=json_encode($user);//objeto codificado
$usuario=json_decode($_SESSION['usuario'],true);
echo $usuario['nombre'];
 ?>
 <a href="classSessProcesa2.php"> deseas ir a ver tus datos completos en la ultima pagina</a>