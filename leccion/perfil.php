<?php

class perfil
{
    private $nombre;
    private $tipo;
	private $fechanacimiento;
	private $id;
    
     function __construct($nombre,$tipo,$fechanacimiento,$id) {
       
       $this->nombre = $nombre;
	$this->tipo = $tipo;
	$this->fechanacimiento = $fechanacimiento;
	$this->id = $id;
	

     }


    
     function settipo($tipo){
       $this->tipo = $tipo;
     } 
     function gettipo(){
       return $this->tipo;
     } 


     function setNombre($nombre){
       $this->nombre = $nombre;
     } 
     function getNombre(){
       return $this->nombre;
     } 
	

	function setfechanacimiento($fechanacimiento){
       $this->fechanacimiento = $fechanacimiento;
     } 
     function getfechanacimiento(){
       return $this->fechanacimiento;
     } 

	function setid($id){
       $this->id = $id;
     } 
     function getid(){
       return $this->id;
     } 


}

?> 
