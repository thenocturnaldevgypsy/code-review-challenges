<?php

$sweetheart = new HighSchoolSweetheart();

echo $sweetheart->firstLetter("John"); // Output: "J"
echo $sweetheart->initial("John"); // Output: "J."
echo $sweetheart->initials("John Doe"); // Output: "J. D."
echo $sweetheart->pair("John Doe", "Mary Smith"); // Output: "J. D. + M. S."

class HighSchoolSweetheart {

   // Method to return the first letter of the name in uppercase
   public function firstLetter(string $name): string {
      // Return the first character without changing the case and trim the name to remove whitespace
      return trim($name)[0];
   }

   // Method to return the initial (first letter followed by a dot)
   public function initial(string $name): string {
      // Get the first letter, convert to uppercase, and append a dot
      return strtoupper($this->firstLetter($name)) . '.';
   }

   // Method to return the initials from a full name
   public function initials(string $name): string {
      // Split the name by space to get the first and last names
      $nameParts = explode(' ', $name);
      // Get initials for each part of the name
      return $this->initial($nameParts[0]) . ' ' . $this->initial($nameParts[1]);
   }

   // Method to return the formatted initials pair of two names
   public function pair(string $sweetheart_a, string $sweetheart_b): string {
      // Get initials for both sweethearts
      $initialsA = $this->initials($sweetheart_a);
      $initialsB = $this->initials($sweetheart_b);
    
      // Format the heart shape with the initials in the middle
      $heart = "     ******       ******\n";
      $heart .= "   **      **   **      **\n";
      $heart .= " **         ** **         **\n";
      $heart .= "**            *            **\n";
      $heart .= "**                         **\n";
      $heart .= "**     $initialsA  +  $initialsB     **\n";
      $heart .= " **                       **\n";
      $heart .= "   **                   **\n";
      $heart .= "     **               **\n";
      $heart .= "       **           **\n";
      $heart .= "         **       **\n";
      $heart .= "           **   **\n";
      $heart .= "             ***\n";
      $heart .= "              *";

      return $heart;
   }
   
}

?>