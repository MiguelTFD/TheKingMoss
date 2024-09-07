<?php

class Producto{
   public $id;
   public $precio;
   public $nombre;
   public $tipo;
   public $descripcion;
   public $medidas;
   public $peso;
   public $stock;
   public $URL_IMG;



   public function __construct($id,$precio,$nombre,$tipo,$descripcion,
   $medidas,$peso,$stock,$URL_IMG)
   {
      $this->id=$id;
      $this->precio=$precio;
      $this->nombre=$nombre;
      $this->tipo=$tipo;
      $this->descripcion=$descripcion;
      $this->medidas=$medidas;
      $this->peso=$peso;
      $this->stock=$stock;
      $this->URL_IMG=$URL_IMG;
   }

   public function descuento($desc){
      return ($this->precio*$desc)/100; 
   }

}


?>
