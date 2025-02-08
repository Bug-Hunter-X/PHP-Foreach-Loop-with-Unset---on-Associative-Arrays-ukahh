# PHP Foreach Loop with Unset() on Associative Arrays

This repository demonstrates an uncommon bug in PHP related to using the `unset()` function within a `foreach` loop when iterating over associative arrays.  The issue stems from how PHP handles key re-indexing after removing elements.

The `bug.php` file showcases the unexpected behavior.  The `bugSolution.php` provides a corrected approach using alternative iteration methods.

## Bug Description
When `unset()` is called within a `foreach` loop on an associative array, the key index that was just removed may not be reindexed immediately, affecting subsequent loop iterations and potentially leading to skipped elements.  This is especially true when the array's keys are not sequential integers.

## Solution
The recommended solution is to avoid modifying an array during iteration using a `foreach` loop. Instead, use alternative techniques like `array_filter()` to create a new array containing only the elements you want to keep.