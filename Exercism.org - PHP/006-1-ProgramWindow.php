<?php

class ProgramWindow {

   public $x;
   public $y;
   public $width;
   public $height;

   // Constructor to set initial default values
   public function __construct() {
      $this->x = 0;
      $this->y = 0;
      $this->width = 800;
      $this->height = 600;
   }

   // Resize function to set new width and height using the Size class
   public function resize(Size $size) {
      $this->width = $size->width;
      $this->height = $size->height;
   }

   // Move function to set new x and y positions using the Position class
   public function move(Position $position) {
      $this->x = $position->x;
      $this->y = $position->y;
   }

}

?>