<?php

class AnnalynsInfiltration {

   // Task 1: Implementing canFastAttack
   public function canFastAttack($is_knight_awake) {
      return !$is_knight_awake; // Fast Attack is possible only if the knight is not awake
   }

   // Task 2: Implementing canSpy
   public function canSpy($is_knight_awake, $is_archer_awake, $is_prisoner_awake) {
      return $is_knight_awake || $is_archer_awake || $is_prisoner_awake; // Spy if at least one is awake
   }

   // Task 3: Implementing canSignal
   public function canSignal($is_archer_awake, $is_prisoner_awake) {
      return !$is_archer_awake && $is_prisoner_awake; // Signal if the archer is asleep and prisoner is awake
   }

   // Task 4: Implementing canLiberate
   public function canLiberate($is_knight_awake, $is_archer_awake, $is_prisoner_awake, $is_dog_present) {
      // If the archer is awake, liberation is not possible
      if ($is_archer_awake) {
         return false;
      }

      // If the prisoner is awake, liberation is only possible if the dog is present or the knight is asleep
      if ($is_prisoner_awake) {
         return !$is_knight_awake || $is_dog_present;
      }

      // If the knight is awake and the dog is present, liberation is possible
      if ($is_knight_awake && $is_dog_present) {
         return true;
      }

      // If both knight and archer are asleep, liberation can occur if the dog is present
      return !$is_knight_awake && !$is_archer_awake && $is_dog_present;
   }
   
}

// Example Test Cases 
$infiltration = new AnnalynsInfiltration();

// Expected false (Both knight and archer awake)
var_dump($infiltration->canLiberate(true, true, false, true)); // => false

// Expected false (Prisoner awake but archer awake)
var_dump($infiltration->canLiberate(false, true, true, true)); // => false

// Expected false (All awake)
var_dump($infiltration->canLiberate(true, true, true, true)); // => false

// Expected false (Knight awake)
var_dump($infiltration->canLiberate(true, false, false, false)); // => false

// Expected false (Archer awake)
var_dump($infiltration->canLiberate(false, true, false, false)); // => false

// Expected true (Prisoner awake and dog present)
var_dump($infiltration->canLiberate(false, false, true, true)); // => true

// Expected true (Prisoner awake but no dog)
var_dump($infiltration->canLiberate(false, false, true, false)); // => true

// Expected true (Knight awake, dog present)
var_dump($infiltration->canLiberate(true, false, false, true)); // => true

// Expected false (Archer awake, dog present)
var_dump($infiltration->canLiberate(false, true, false, true)); // => false

// Expected false (Knight awake, archer awake, no dog)
var_dump($infiltration->canLiberate(true, true, false, false)); // => false

// Expected true (All asleep but dog present)
var_dump($infiltration->canLiberate(false, false, false, true)); // => true

?>