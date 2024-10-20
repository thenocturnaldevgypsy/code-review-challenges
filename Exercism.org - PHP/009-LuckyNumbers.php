<?php

class LuckyNumbers {
   // Property to hold the input value as a string
   public string $input = "";

   /**
   * Sums two numbers represented as arrays of their digits. 
   * @param array $digitsOfNumber1 An array representing the first number's digits.
   * @param array $digitsOfNumber2 An array representing the second number's digits.
   * @return int The sum of the two numbers.
   */
   public function sumUp(array $digitsOfNumber1, array $digitsOfNumber2): int {
      // Convert each array of digits into a string, then to an integer, and sum them
      return (int) implode("", $digitsOfNumber1) + (int) implode("", $digitsOfNumber2);
   }

   /**
   * Checks if a given number is a palindrome.
   * A palindrome is a number that reads the same forwards and backwards (e.g., 121). 
   * @param int $number The number to check for palindrome properties.
   * @return bool True if the number is a palindrome, false otherwise.
   */
   public function isPalindrome(int $number): bool {
      // Convert the number to a string
      $strNr = (string) $number;
        
      // Split the string into an array of characters (digits)
      $nrArr = str_split($strNr);
        
      // Initialize an empty array to hold the digits in reverse order
      $backwardsArr = [];
        
      // Get the count of the number's digits
      $arrCount = count($nrArr);
        
      // Loop through the array of digits to create a reversed array
      for ($i = 0; $i <= $arrCount - 1; $i++) {
         // Add the digits to the backwards array
         $backwardsArr[] = $nrArr[$arrCount - 1 - $i];
      }
        
      // Compare the original array of digits with the reversed array
      return $nrArr === $backwardsArr; // Returns true if they are the same, false otherwise
   }

   /**
   * Validates the input string to ensure it is a whole number larger than 0.
   * @param string $input The input string to validate.
   * @return string An error message if validation fails, or an empty string if valid.
   */
   public function validate(string $input): string {
      // Check if the input is an empty string
      if ($input === "") {
         return "Required field"; // Return an error message for empty input
      } 
        
      // Check if the input is a whole number and greater than 0
      if ((int) $input <= 0) {
         return "Must be a whole number larger than 0"; // Return an error message for invalid input
      }
        
      // If all checks pass, return an empty string indicating valid input
      return "";
   }
   
}

?>
