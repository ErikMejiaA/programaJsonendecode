<?php
  class Productos {
    private string $nombre;
    private int $precio;
    private bool $disponible;
    private int $cantidad;

    public function __construct($nombre, $precio, $disponible, $cantidad)
    {
      $this -> nombre = $nombre;
      $this -> precio = $precio;
      $this -> disponible = $disponible;
      $this -> cantidad = $cantidad;
    }

    public function getNombre() {
      return $this -> nombre;
    }

    public function setNombre($nombre) {
      $this -> nombre = $nombre;
    }

    public function getPrecio() {
      return $this -> precio;
    }

    public function setPrecio($precio) {
      $this -> precio = $precio;
    }

    public function getDisponible() {
      return $this -> disponible;
    }

    public function setDisponible($disponible) {
      $this -> disponible = $disponible;
    }

    public function getCantidad(){
      return $this -> cantidad;
    }

    public function setCantidad($cantidad) {
      $this -> cantidad = $cantidad;
    }

  }
?>