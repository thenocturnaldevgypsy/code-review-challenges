<?php

$lasagna = new Lasagna();

echo $lasagna->expectedCookTime(); // Output: 40
echo $lasagna->remainingCookTime(30); // Output: 10
echo $lasagna->totalPreparationTime(3); // Output: 6 (3 layers * 2 minutes per layer)
echo $lasagna->totalElapsedTime(3, 20); // Output: 26 (6 minutes prep + 20 minutes baking)
echo $lasagna->alarm(); // Output: Ding!

class Lasagna {
    
   // Constant for the expected total cooking time
   const EXPECTED_COOK_TIME = 40;  // 40 minutes is the expected cook time
    
   // Method to return the expected cook time (in minutes)
   public function expectedCookTime() {
      return self::EXPECTED_COOK_TIME;
   }

   // Method to calculate the remaining cook time based on elapsed minutes in the oven
   public function remainingCookTime($elapsed_minutes) {
      return self::EXPECTED_COOK_TIME - $elapsed_minutes;
   }

   // Method to calculate the total preparation time, assuming 2 minutes per layer
   public function totalPreparationTime($layers_to_prep) {
      return $layers_to_prep * 2;
   }

   // Method to calculate the total elapsed time (preparation + oven time)
   public function totalElapsedTime($layers_to_prep, $elapsed_minutes) {
      return $this->totalPreparationTime($layers_to_prep) + $elapsed_minutes;
   }

   // Method to return a string "Ding!" for when the lasagna is done
   public function alarm() {
      return "Ding!";
   }
   
}

?>