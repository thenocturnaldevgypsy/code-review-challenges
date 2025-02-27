<?php

class Form {
   // Add parameter type and return type for blanks method.
   public function blanks(int $length): string {
      return str_repeat(" ", $length);
   }

   // Add parameter type and return type for letters method.
   public function letters(string $word): array {
      return mb_str_split($word);
   }

   // Add parameter types and return type for checkLength method.
   public function checkLength(string $word, int $max_length): bool {
      $difference = mb_strlen($word) - $max_length;
      return $difference <= 0;
   }

   // Add parameter type and return type for formatAddress method.
   public function formatAddress(Address $address): string {
      $formatted_street = mb_strtoupper($address->street);
      $formatted_postal_code = mb_strtoupper($address->postal_code);
      $formatted_city = mb_strtoupper($address->city);

      return <<<FORMATTED_ADDRESS
      $formatted_street
      $formatted_postal_code $formatted_city
      FORMATTED_ADDRESS;
   }

}

?>