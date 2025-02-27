<?php

// Function to return a list of languages (variadic arguments)
function language_list(...$languages) {
   // Return the array of languages
   return $languages;
}

// Function to add a new language to the list
function add_to_language_list($languages, $new_language) {
   // Add the new language to the array and return it
   $languages[] = $new_language;
   return $languages;
}

// Function to remove the first language from the list
function prune_language_list($languages) {
   // Remove the first element from the list
   array_shift($languages);
   return $languages;
}

// Function to return the first language in the list
function current_language($languages) {
   // Return the first language in the list
   return $languages[0];
}

// Function to return the length of the language list
function language_list_length($languages) {
   // Return the number of languages in the list
   return count($languages);
}

// Example usage
$language_list = language_list(); // => []
print_r($language_list);

$language_list = language_list("Clojure", "PHP"); // => ["Clojure", "PHP"]
print_r($language_list);

$language_list = add_to_language_list($language_list, "Haskell"); // => ["Clojure", "PHP", "Haskell"]
print_r($language_list);

$language_list = prune_language_list($language_list); // => ["PHP", "Haskell"]
print_r($language_list);

$first_language = current_language($language_list); // => "PHP"
echo "First language: " . $first_language . "\n";

$length = language_list_length($language_list); // => 2
echo "Number of languages: " . $length . "\n";

?>